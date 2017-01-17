<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <script src="  {{asset('js/script.js')}}"></script>
    <title>Portfolio Dinh Nguyen: @yield('title')</title>
</head>
<body id="@yield('page')">
    <div class="container-fluid">
      <div class="row top">
        <section id="banner-top">
            <ul id="socialLinks">
                <li><a href="https://fr.linkedin.com/in/le-hoang-dinh-nguyen-08295556" target="_blank" title="LinkedIn" class="LinkedIn"><i class="fa fa-linkedin-square" aria-hidden="true"></i> LinkedIn</a></li>
                <li><a href="https://github.com/DinhoRyoh" target="_blank" title="Github" class="Github"><i class="fa fa-github-square" aria-hidden="true"></i> Github</a></li>
                <li><a href="http://www.viadeo.com/p/0021s3emq4e6iyzm" target="_blank" title="Viadeo" class="viadeo" target="_blank"><i class="fa fa-viadeo-square" aria-hidden="true"></i> Viadeo</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100008295253255" target="_blank" title="Facebook" class="facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
            </ul>
        </section>
        <section id="icon-top">
            <ul id="socialLinks">
                <li><a href="https://fr.linkedin.com/in/le-hoang-dinh-nguyen-08295556" target="_blank" title="LinkedIn" class="LinkedIn"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="https://github.com/DinhoRyoh" target="_blank" title="Github" class="Github"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="http://www.viadeo.com/p/0021s3emq4e6iyzm" target="_blank" title="Viadeo" class="viadeo" target="_blank"><i class="fa fa-viadeo-square fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100008295253255" target="_blank" title="Facebook" class="facebook" target="_blank"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
            </ul>
        </section>
      </div>
      <div class="row">
        <h1>@yield('message')</h1>
      </div>
      <div class="row">

        @yield('content')

      </div>
    </div>
</body>
</html>
