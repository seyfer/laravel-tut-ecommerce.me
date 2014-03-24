<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>eCommerce</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--{{ HTML::style('css/normalize.css') }}-->
        {{ HTML::style('css/vendor/bootstrap.min.css') }}
        {{ HTML::style('css/vendor/bootstrap-theme.min.css') }}
        <!--{{ HTML::style('google-code-prettify/prettify.css') }}-->
        {{ HTML::style('google-code-prettify/sons-of-obsidian.css') }}
        {{ HTML::style('css/snippet.css') }}

        {{ HTML::script('js/vendor/jquery-1.9.1.min.js') }}
        {{ HTML::script('js/vendor/modernizr-2.6.2.min.js') }}
        {{ HTML::script('js/vendor/jquery.textarea.min.js') }}
        {{ HTML::script('js/vendor/bootstrap.min.js') }}
        {{ HTML::script('google-code-prettify/prettify.js') }}
    </head>
    <body>

        <div class="snippet-container">
            @yield('container')
        </div>

        @yield('scripts')
    </body>
</html>