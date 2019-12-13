<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WattsUp - Smart Energy Meter</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>

<div id="landing">
    <div class="mobile">

    </div>
    <div class="web">
        <div class="flex flex-wrap">
            <div class="left w-full md:w-1/2">
                <div class="mobile-image">
                    <img src="/static/wattsup.png" alt="">
                </div>
                <div class="image energy-meter">
                    <img  src="/static/wattsup.png" alt="">
                </div>
                <div class="image logo">
                    <img  src="/static/wattsup_logo.png" alt="">
                </div>


                <h1 class="hidden">WattsUp Smart Energy Meter</h1>
                <h2>
                    <div class="max-w-2xl">
                        A Smart Energy Meter that enables real-time <strong>visualization</strong>, <strong>monitoring</strong> and <strong>budgeting</strong> of energy consumption for your offices / homes / business with 99% accuracy.
                    </div>

                </h2>



                <h3>
                    Website Under Construction
                </h3>

                <div id="info-btn">
                    <span class="text">
                        More Information
                    </span>
                    <div class="mb-8"></div>
                </div>

            </div>
            <img src="/static/mobile_bg.jpg" alt="" class="mobile-bg w-full">
            <div class="right w-full md:w-1/2">
                {{--<img src="/static/smarthome.jpg" alt="">--}}
            </div>
        </div>
    </div>
</div>
<div class="layer">

</div>
<div id="inquiry-form" class="hidden">
    <div class="form-wrapper">
        <div id="close-btn">
            <img src="/static/close_icon.png" alt="">
        </div>
        <form method="POST" action="/inquiry" >
            @csrf
            <div class="image logo">
                <img  src="/static/wattsup_logo.png" alt="">
            </div>
            <h3>Please provide your details below:</h3>
            <div class="item">
                <label for="">Name</label> <div class="mb-2"></div>
                <input type="text" name="name">
            </div>
            <div class="item">
                <label for="">Email</label> <div class="mb-2"></div>
                <input type="email" name="email">
            </div>
            <div class="item">
                <label for="">Mobile Phone Number</label> <div class="mb-2"></div>
                <input type="number" name="phone">
            </div>
            <div class="item">
                <label for="">Message</label> <div class="mb-2"></div>
                <textarea type="text" name="message">
                </textarea>
            </div>
            <button type="submit" class="h2 font-black green mr-4"><span class="text">Submit</span></button>

            <div class=" close-btn inline-block h2 font-black xd-green"><span class="text">Close</span></div>
        </form>
    </div>

</div>

<footer class="mobile-only">
    <div class="copyright">
        Copyright 2019, All Rights Reserved
    </div>

</footer>

<script src="/js/jquery.min.js"></script>
<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>