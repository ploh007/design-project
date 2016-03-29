import java.io.BufferedReader;
import java.io.InputStreamReader;
import gnu.io.CommPortIdentifier; 
import gnu.io.SerialPort;
import gnu.io.SerialPortEvent; 
import gnu.io.SerialPortEventListener; 
import java.util.Enumeration;


public class SerialTest implements SerialPortEventListener, Runnable {
	
	private SerialPort serialPort;
	
	private static final String PORT_NAMES[] = { 
			"COM7", // Windows
			"/dev/ttyUSB0",  // Linux
	};

	private BufferedReader input;
	
	private static final int TIME_OUT = 2000;
	private static final int DATA_RATE = 115200;
	private static final int CALIBRATION = 0;
	private static final int NOT_CALIBRATION = 1;
	private int mode = 0;
	
	private Comparator comparator;
	private SampleDao sampleDao;
	
	public SerialTest(Comparator comparator, SampleDao sampleDao) {
		this.comparator = comparator;
		this.sampleDao = sampleDao;
	}


	private void initialize() {

		CommPortIdentifier portId = null;
		Enumeration<CommPortIdentifier> portEnum = CommPortIdentifier.getPortIdentifiers();
		
		while (portEnum.hasMoreElements()) {
			CommPortIdentifier currPortId = (CommPortIdentifier) portEnum.nextElement();
			for (String portName : PORT_NAMES) {
				if (currPortId.getName().equals(portName)) {
					portId = currPortId;
					break;
				}
			}
		}
		
		if (portId == null) {
			System.out.println("Could not find COM port.");
			return;
		}

		try {
			serialPort = (SerialPort) portId.open(this.getClass().getName(), TIME_OUT);

			// set port parameters
			serialPort.setSerialPortParams(DATA_RATE, SerialPort.DATABITS_8, SerialPort.STOPBITS_1, SerialPort.PARITY_NONE);

			input = new BufferedReader(new InputStreamReader(serialPort.getInputStream()));

			serialPort.addEventListener(this);
			serialPort.notifyOnDataAvailable(true);
		} catch (Exception e) {
			System.err.println(e.toString());
		}
	}
	

	public synchronized void close() {
		if (serialPort != null) {
			serialPort.removeEventListener();
			serialPort.close();
		}
	}
	

	public synchronized void serialEvent(SerialPortEvent oEvent) {
		if (oEvent.getEventType() == SerialPortEvent.DATA_AVAILABLE) {
			try {
				String inputLine = input.readLine();
				System.out.println(inputLine);
				
				String [] dataElements = inputLine.split(":"); //split into... dataX | dataY | dataZ | jerkVector
				
				double [] dataX = Utils.stringArrayToDoubleArray(dataElements[0].split(","));
				double [] dataY = Utils.stringArrayToDoubleArray(dataElements[1].split(","));
				double [] dataZ = Utils.stringArrayToDoubleArray(dataElements[2].split(","));
				double [] jerkVector = Utils.stringArrayToDoubleArray(dataElements[3].split(","));
				
				if(mode == CALIBRATION) {
					sampleDao.writeSamples(Fft.fft(dataX), Fft.fft(dataY), Fft.fft(dataZ), jerkVector);
				}else{
					
					double [] fft = Utils.comparison(Fft.fft(dataX), Fft.fft(dataY), Fft.fft(dataZ));
					
					System.out.println(comparator.getGesture(fft, jerkVector));
				}
			} catch (Exception e) {
				System.err.println(e.toString());
			}
		}
	}
	
	
	public void run() {
		initialize();
		System.out.println("Initialized serial port reader!");
		try {
			Thread.sleep(1000000);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
}