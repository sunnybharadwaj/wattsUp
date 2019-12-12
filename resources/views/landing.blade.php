<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <title>WattsUp Energy Meter</title>
</head>
<body>
{{--@include ('partials/header')--}}
<section id="welcome">
    <div class="container">
        <div class="image">
            <img src="/static/wattsupmeter.png" alt="">
        </div>

        <h5>INTRODUCING</h5>
        <h1><span class="green">Watts</span><span class="d-green">Up</span>!</h1>
        <h2 class="h3">AI enabled Smart Energy Meter to help you:</h2>
        <div class="feature-list">
            <div class="item">
                <div class="icon">
                    <img src="/static/icons/monitor.png" alt="">
                </div>
                <div class="text">
                    <p class="h5">Accurately monitor your power consumption</p>
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="/static/icons/visualize.png" alt="">
                </div>
                <div class="text">
                    <p class="h5">Visualise energy usage and areas of wastage</p>
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="/static/icons/save.png" alt="">
                </div>
                <div class="text">
                    <p class="h5">Save money!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="technology">
    <div class="wrapper">
        <div class="container">
            <h2 class="h3">A system that automatically detects individual devices</h2>
            <p>Using sensors that clamp to your existing energy meter, WattsUp non-intrusively detects the energy usage of
                each of your appliances by monitoring their unique energy signatures.</p>
            {{--<div class="button-group">--}}
            {{--<a href="/" class="std-button">Talk to us</a>--}}
            {{--<a href="/" class="std-button">Technical Specifications</a>--}}
            {{--</div>--}}
        </div>
    </div>
</section>

<section id="how-it-works">
    <div class="container">
        <h2 class="text-center mb-12 font-black d-green">Get Notified!</h2>
        <div class="flex flex-wrap">
            <div class="image w-full lg:w-8/12">
                <img src="/static/phonenotifications.png" alt="">
            </div>
            <div class="text-content  w-full lg:w-4/12">
                <div class="flex flex-wrap">
                    <div class="point lg:w-full">
                        <h3 class="">Track your data from anywhere, anytime.</h3>
                        <p>Setup the app to notify when you’re nearing limits, budgets that you can easily set through
                            the app. Avoid surcharge by knowing before you exceed your power consumption limits.</p>
                    </div>

                    <div class="point lg:w-full">
                        <h3 class="">Stay informed, Set custom alerts, Optimize energy usage.</h3>
                        <p>Track energy use through the app with real time dataTrack energy use through the app with
                            real time dataTrack energy use through the app with real time data</p>
                    </div>

                    <div class="point lg:w-full">
                        <h3 class="">Understand trends of energy wastage</h3>
                        <p>See in real time, where and how energy is being wasted or overused. Be aware of your usage,
                            make smart decisions, justify that electricity bill.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="simple-setup">
    <div class="wrapper">
        <div class="container">
            <h2 class="h3">It’s never been easier to get set up!</h2>
            <p>After the quick 30 minutes installation of the device, download the iOS or Android application and <strong>get
                    monitoring</strong>.</p>
            <div class="button-group hidden">
                <a href="/" class="std-button">Talk to us</a>
                <a href="/" class="std-button">Technical Specifications</a>
            </div>
        </div>
    </div>

</section>

<section id="users">
    <h2 class="font-black d-green mb-12">Who is it for?</h2>
    <div class="user-list">
        <div class="user">
            <div class="icon">
                <img src="/static/icons/homes.png" alt="">
            </div>
            <div class="text">
                Homes
            </div>
        </div>
        <div class="user">
            <div class="icon">
                <img src="/static/icons/schools.png" alt="">
            </div>
            <div class="text">
                Schools
            </div>
        </div>
        <div class="user">
            <div class="icon">
                <img src="/static/icons/offices.png" alt="">
            </div>
            <div class="text">
                Offices
            </div>
        </div>
        <div class="user">
            <div class="icon">
                <img src="/static/icons/retail.png" alt="">
            </div>
            <div class="text">
                Retail
            </div>
        </div>
        <div class="user">
            <div class="icon">
                <img src="/static/icons/hospitality.png" alt="">
            </div>
            <div class="text">
                Hospitality
            </div>
        </div>
        <div class="user">
            <div class="icon">
                <img src="/static/icons/manufacturing.png" alt="">
            </div>
            <div class="text">
                Manufacturing
            </div>
        </div>
        <div class="user">
            <div class="icon">
                <img src="/static/icons/bank.jpg" alt="">
            </div>
            <div class="text">
                Banking
            </div>
        </div>
    </div>
</section>

<section id="features">
    <h2 class="hidden">Features</h2>
    <div class="container">
        <div class="feature">
            <div class="image">
                <img src="/static/energysigns.png" alt="">
            </div>
            <div class="text-content">
                <h3>
                    Know what your electricity bill is really made of.
                </h3>
                <p>
                    With 99% accuracy in readings, WattsUp lets you see exactly ‘where’ and ‘how’ you’re consuming. Know
                    your patterns, and watch your savings grow.
                </p>
            </div>
        </div>
        <div class="feature">
            <div class="image">
                <img src="/static/logo.png" alt="">
            </div>
            <div class="text-content">
                <h3>
                    Control better with the rest of our ecosystem.
                </h3>
                <p>
                    Experience better control over energy usage by integrating your WattsUp energy meter with the Blaze
                    ecosystem,. Set up smart actions that recognize usage patterns through WattsUp, to conveniently
                    handle appliances across your home or commercial establishment.
                </p>
            </div>
        </div>

    </div>

</section>

<section id="questions" >

    <div class="container">
        <h2 class="h1 d-green">Questions</h2>
        <div class="question">
            <h3 class="h5">Is there a subscription fee that I have to pay every month?</h3>
            <p>It's art! A statement on modern society, 'Oh Ain't Modern Society Awful?'! You've swallowed a planet!
                Sorry, checking all the water in this area.</p>
            <p>It’s art! A statement on modern society, ‘Oh Ain’t Modern Society Awful?’! You’ve swallowed a planet!
                Sorry, checking all the water in this area; there’s an escaped fish. I’m the Doctor, I’m worse than
                everyone’s aunt. *catches himself* And that is not how I’m introducing myself.</p>
        </div>
        <div class="small-h-bar"></div>
        <div class="question">
            <h3 class="h5">Is there a subscription fee that I have to pay every month?</h3>
        </div>
        <div class="small-h-bar"></div>
        <div class="question">
            <h3 class="h5">Do I need anything else with the meter to get set up?</h3>
        </div>
        <div class="small-h-bar"></div>
        <div class="question">
            <h3 class="h5">How accurate are the data readings?</h3>
        </div>
        <div class="small-h-bar"></div>
        <div class="question">
            <h3 class="h5">How can I install it? Do you offer any services?</h3>
        </div>
        <div class="small-h-bar"></div>
        <div class="question">
            <h3 class="h5">Is this legal? What certifications does WattsUp have?</h3>
        </div>
        <div class="small-h-bar"></div>
        <div class="question">
            <h3 class="h5">I have an alternate power source. Does it work with my setup?</h3>
        </div>
        <div class="small-h-bar"></div>
        <div class="question">
            <h3 class="h5">Is there any risk involved with installing WattsUp? Is it safe?</h3>
        </div>
        <div class="small-h-bar"></div>
        <div class="question">
            <h3 class="h5">Is my data safe? Can it be hacked?</h3>
        </div>
        <div class="small-h-bar"></div>
        <div class="question">
            <h3 class="h5">Does WattsUp detect all my devices?</h3>
        </div>
        <div class="small-h-bar"></div>
        <div class="question">
            <h3 class="h5">Is WattsUp compatible with my home?</h3>
        </div>
        <div class="small-h-bar"></div>
        <div class="question">
            <h3 class="h5">How do I Integrate WattsUp with my setup?</h3>
        </div>
        <div class="small-h-bar"></div>
        <div class="question">
            <h3 class="h5">How can I save money using WattsUp meter?</h3>
        </div>
    </div>
</section>

<section id="cta" class="py-24">
    <div class="container">
        <img src="/static/icons/energy.png" alt="" class="mx-auto">
        <h2 class="text-center h3 mb-12 py-8">We can help you optimize your energy expenditure. Talk to us today!</h2>
        <div class="flex flex-wrap text-center">
            <div class="w-full lg:w-1/3">
                <h3 class="green py-4">Speak with an expert</h3>

            </div>
            <div class="w-full lg:w-1/3">
                <h3 class="green py-4">Request a demo</h3>

            </div>
            <div class="w-full lg:w-1/3">
                <h3 class="green py-4">Schedule a briefing</h3>

            </div>
        </div>
    </div>




</section>
{{--@include ('partials/footer')--}}
</body>
</html>