<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
    @include('includes.header')
    <body class="antialiased">
    @include('layouts.homePage')
    </body>
</html>
