<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>mySite</title>
    <!--styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--scripts-->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

</head>
<body> 
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="mr-auto">

                </ul>
                <ul class="navbar-nav align-right">
                    <li class="nav-item">
                        <a class="nav-link normal" href="#">Portfolios</a>
                    </li>    
                    <li class="nav-item">
                        <a class="nav-link btn btn-rounded hello" href="#">Say Hello</a>
                    </li>    
                </ul>
            </div>  
        </div>
    </nav>
    <section class="section-1">
        <div class="banner">
            <div class="container">
                <center>
                    <h1 class="bold banner-title">Hey, I'm a web developer.</h1>
                    <h2 class="thin banner-subtitle">I code beautifully simple things, and I love what I do.</h2>
                    <img src="{{ asset('images/avataaars-ian.svg') }}" alt="">
                </center>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="container">
            <div class="content">
                <div class="about-me">
                    <div class="about-content">
                        <center><h2>Hi, I'm Ian Nice to meet you</h2></center>
                        <p>I graduated from Cebu Technological University taking of Bachelor of Science in Information and Communication Technology
                            i have 1 year experience on web development as a web developer i would like to explore more things of what can technologies can do
                            and go what is trending and this is my language/skills  
                        </p>
                    </div>
                    <div class="skills-image">
                        <div class="row">
                            @foreach($datas as $data)
                            <div class="col-md-3">
                                <div class="round">
                                    <img class="rounded-image" src="{{ asset($data->file_location) }}" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="read-more">
                        <a href="#" class="btn btn-custom-red">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>