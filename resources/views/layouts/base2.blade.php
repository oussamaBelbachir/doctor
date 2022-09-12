<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href= {{ asset('dist/images/logo.svg') }} rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        @vite('resources/css/app.css')

        <link rel="stylesheet" href= {{ asset('dist/css/app.css') }} />

        @yield("head")
    </head>
    <!-- END: Head -->

    @yield("body")

</html>
