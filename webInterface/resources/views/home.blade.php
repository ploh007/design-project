@extends('common.basic') @section('content')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

<body>
    <div class="jumbotron red-jumbotron" id="home-jumbotron" data-wow-duration="2s">
        <div class="container">
            <h1>Gesture Control System</h1>
            <p>
                Seamlessly intergrating gesture controls with your everyday devices. The Gesture Control Device makes interacting with your devices easier than ever.
            </p>
        </div>
        <!-- /container -->
        <!--         <svg version="1.1" id="gesture_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 59.066 59.066" style="enable-background:new 0 0 59.066 59.066;" xml:space="preserve" width="128px" height="128px">
                <path id="case" d="M52.844,27.116C52.412,26.396,51.689,26,50.805,26c-0.004,0-0.008,0-0.012,0c-1.667,0.006-3.673,0.667-5.235,1.724
                    c-1.441,0.975-3.53,2.782-5.293,5.863c-0.331,0.578-0.874,0.97-1.455,1.063c-0.002-0.134-0.001-0.287-0.001-0.432
                    c0-0.309,0.001-0.677-0.012-1.083V11c0-2.206-1.794-4-4-4s-4,1.794-4,4v15.5c0,0.275-0.225,0.5-0.5,0.5s-0.5-0.225-0.5-0.5V4
                    c0-2.206-1.794-4-4-4s-4,1.794-4,4v22.5c0,0.275-0.225,0.5-0.5,0.5s-0.5-0.225-0.5-0.5v-18c0-1.93-1.57-3.5-3.5-3.5
                    s-3.5,1.57-3.5,3.5v20c0,0.275-0.225,0.5-0.5,0.5s-0.5-0.225-0.5-0.5V16c0-1.93-1.57-3.5-3.51-3.5c-1.93,0-3.5,1.57-3.5,3.5
                    l0.002,27.197c0.968,13.983,9.545,15.869,17.808,15.869c6.846,0,12.995-3.396,16.027-8.824c0.39-0.63,1.445-2.289,2.696-4.254
                    c3.128-4.914,5.748-9.041,6.135-9.775c0.863-1.634,1.826-2.911,2.784-3.693c0.867-0.708,1.397-1.611,1.828-2.404
                    C53.29,29.703,53.484,28.186,52.844,27.116z M51.256,29.259c-0.4,0.729-0.777,1.3-1.282,1.712c-1.18,0.964-2.285,2.413-3.287,4.309
                    c-0.381,0.723-3.794,6.086-6.053,9.635c-1.258,1.976-2.318,3.642-2.733,4.314c-2.701,4.834-8.182,7.838-14.304,7.838
                    c-10.542,0-15.123-4.059-15.81-13.938V16c0-0.827,0.673-1.5,1.51-1.5c0.827,0,1.5,0.673,1.5,1.5v12.5c0,1.379,1.121,2.5,2.5,2.5
                    s2.5-1.121,2.5-2.5v-20c0-0.827,0.673-1.5,1.5-1.5s1.5,0.673,1.5,1.5v18c0,1.379,1.121,2.5,2.5,2.5s2.5-1.121,2.5-2.5V4
                    c0-1.103,0.897-2,2-2s2,0.897,2,2v22.5c0,1.379,1.121,2.5,2.5,2.5s2.5-1.121,2.5-2.5V11c0-1.103,0.897-2,2-2s2,0.897,2,2v22.166
                    c0.013,0.411,0.012,0.758,0.012,1.05c-0.002,0.895-0.003,1.541,0.49,2.024c0.413,0.403,0.948,0.428,1.326,0.432
                    c1.361-0.031,2.655-0.833,3.376-2.092c1.571-2.748,3.41-4.344,4.677-5.199c1.232-0.834,2.851-1.376,4.123-1.381
                    c0.001,0,0.003,0,0.004,0c0.214,0,0.263,0.063,0.292,0.1C51.294,28.35,51.303,28.979,51.256,29.259z" fill="#c0392b" />
            </svg> -->
        <!-- /gesture_icon -->
    </div>
    <!-- /jumbotron red-jumbotron -->
    <div class="jumbotron white-jumbotron-center" id="component-jumbotron" data-wow-duration="2s">
        <div class="row sectional-heading-line">
            <div class="sectional-heading text-left">
                <h3>Core Components</h3>
            </div>
        </div>
        <div class="container ">
            <div class="row featurette">
                <!-- <hr></hr> -->
                <div class="col-md-4">
                    <div class="thumbnail img-responsive">
                        <img src="{{ asset('img/arduino-3d.png') }}" width="180px">
                    </div>
                    <!-- /thumbnail -->
                    <a href="https://www.arduino.cc/en/Main/ArduinoBoardUno" class="btn btn-lg custom-btn btn-block"><h4>Arduino Uno</h4></a>
                    <p>The Arduino Uno offers a plethora of prototyping methods at an affordable cost. </p>
                </div>
                <!-- /col-md-6 -->
                <div class="col-md-4">
                    <div class="thumbnail img-responsive">
                        <img src="{{ asset('img/adxl345-3d.png') }}" width="180px">
                    </div>
                    <!-- /thumbnail -->
                    <a href="https://www.sparkfun.com/products/9836" class="btn btn-lg custom-btn btn-block"><h4>SparkFun ADXL 345</h4></a>
                    <p>The ADXL 345 allows measuring of acceleration data in 3 different axes (X,Y,Z). </p>
                </div>
                <!-- /col-md-6 -->
                <div class="col-md-4">
                    <div class="thumbnail img-responsive">
                        <img src="{{ asset('img/esp-8266.png') }}" width="180px">
                    </div>
                    <!-- /thumbnail -->
                    <a href="https://www.sparkfun.com/products/9836" class="btn btn-lg custom-btn btn-block"><h4>ESP8266</h4></a>
                    <p>The ESP8266 WiFi Module is a self contained SOC with integrated TCP/IP protocol stack that can give any microcontroller access to your WiFi network. </p>
                </div>
                <!-- /col-md-6 -->
            </div>
            <!-- /row featurette -->
        </div>
        <!-- /container -->
    </div>
    <!-- /white-jumbotron-center -->
    <div class="jumbotron white-jumbotron" id="works-jumbotron" data-wow-duration="2s">
        <div class="row sectional-heading-line">
            <div class="sectional-heading text-left">
                <h3>How It Works</h3>
            </div>
        </div>
        <div class="container">
            <div class="row featurette">
                <div class="row featurette">
                    <!-- <hr></hr> -->
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="{{ asset('img/svg/user.png') }}" width="80px">
                        </div>
                        <!-- /thumbnail -->
                        <h4>Arduino User</h4>
                    </div>
                    <!-- /col-md-6 -->
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="{{ asset('img/svg/server.png') }}" width="80px">
                        </div>
                        <!-- /thumbnail -->
                        <h4>Socket Server</h4>
                    </div>
                    <!-- /col-md-6 -->
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="{{ asset('img/svg/database.png') }}" width="80px">
                        </div>
                        <!-- /thumbnail -->
                        <h4>Database</h4>
                    </div>
                    <!-- /col-md-6 -->
                </div>
                <p>A Socket Server facilitates the synchronization and transmission of the data sent from the Arduino device, issuing commands when necessary to provide the system with the appropriate data. The backend logic is able to parse the data sent and intepret it according to the gestures which has been calibrated by the user. It also gives the user complete access to their own calibration data, by adding, deleting and defining gestures which they intend it to be able to intepret. </p>
            </div>
            <!-- /row featurette -->
        </div>
        <!-- /container -->
    </div>
    <!-- /white-jumbotron-center -->
    <div class="jumbotron" data-wow-duration="2s" id="contribute-jumbotron">
        <div class="container">
            <div class="col-md-6">
                <a href="https://github.com/ploh007/design-project">
                    <button class="btn btn-lg custom-btn2 btn-block">
                        <h3>Follow This Project</h3></button>
                </a>
                <p>Get weekly updates on how this project is progressing through email updates. We strive to provide details on issues,technical approaches and research that we have done to meet our weekly goals and objectives</p>
            </div>
            <!-- /row featurette -->
            <div class="col-md-6">
                <a href="https://github.com/ploh007/design-project">
                    <button class="btn btn-lg custom-btn2 btn-block">
                        <h3>Contribute To This Project</h3></button>
                </a>
                <p>Fork our project on Gitub and get your hands into the nitty gritty of the codebase. See a bug? See a way to optimize and increase the performance of the system? Let us know and we‘d love to work with you! </p>
            </div>
            <!-- /row featurette -->
        </div>
        <!-- /container -->
    </div>
    <!-- /white-jumbotron-center -->
</body>
<script src="{{ asset('js/home.js') }}"></script>
@endsection
