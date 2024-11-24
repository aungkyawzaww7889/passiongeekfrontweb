<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }}</title>

        <!-- fav icon  -->
        <link href="{{asset('assets/img/fav/favicon.png')}}" rel="icon" type="image/png" sizes="16*16"  />

        <!-- bootstrap css1 js1  -->
        <link href="./assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

        <!-- fontawesome cdnjs 1 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

         <!-- jquery ui css1 js1 -->
         <link href="./assets/libs/jquery-ui-1.13.2/jquery-ui.min.css" rel="stylesheet" type="text/css" />

         <!-- lightbox2 css1 js1 -->
         <link href="./assets/libs/lightbox2-2.11.4/dist/css/lightbox.min.css" rel="stylesheet" type="text/css" />

        <!-- custom css -->
        <link href="{{asset('assets/dist/css/style.css')}}" rel="stylesheet" type="text/css" />
        
        {{-- extra css  --}}
        @yield('css')
        



    </head>
    <body>