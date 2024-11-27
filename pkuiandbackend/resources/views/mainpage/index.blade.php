<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passion Geek UI</title>
    
    {{-- icon  --}}
    {{-- <link href="{{asset('assets/img/PassionGeek.png')}}" rel="icon" type="image/png" sizes="16*16"  /> --}}
    
    {{-- tailwind cdn --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- fontawesome cdnjs 1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    {{-- <h3>I am main page</h3> --}}

    @include('firstpage.firstpageindex')
    @include('secondpage.secondpageindex')
    @include('thirdpage.thirdpageindex')
    @include('fourthpage.fourthpageindex')
    @include('fivepage.fivepageindex')  
    @include('sixpage.sixpageindex')  

    <script src="{{asset('assets/dist/js/app.js')}}" type="text/javascript"></script>

</body>
</html>