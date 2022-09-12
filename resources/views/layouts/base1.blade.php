<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href={{asset("assets/images/favicon.png")}}type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href={{asset("assets/css/animate.css")}}>

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href={{asset("assets/css/magnific-popup.css")}}>

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href={{asset("assets/css/slick.css")}}>

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href={{asset("assets/css/LineIcons.2.0.css")}}>


    <!--====== Style CSS ======-->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href={{asset("assets/css/tailwind.css")}}>



    @yield("head")
    </head>
    <!-- END: Head -->

    @yield("body")
</html>
