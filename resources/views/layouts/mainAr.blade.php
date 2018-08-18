<!doctype html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- css files -->
        <title>help-center</title>     
        <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-rtl.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/MainStyleAr.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">



 <style>
                .padded-50{
                    padding: 40px;
                }
                .text-center{
                    text-align: center;
                }
            </style>
    </head>
    <body class=" ">
            @yield('content')
      
         



            <!-- JS Script -->
            
            <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
            <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
            <script>
            $().ready(function(){
                
                $(".left-side-scroll").niceScroll({
                    cursorcolor:"#e0e0e0",
                });
                $(".left-side-scroll-xs").niceScroll({
                    cursorcolor:"#e0e0e0",
                });
            })
            </script>
            <script src="{{asset('js/main.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
            <script >
                $('.contentsqd').summernote({
                    placeholder: 'Veuillez entrer les informations ',
                    tabsize: 2,
                    height: 100
                });
            </script>
            <script src="{{asset('js/helpCenter.js')}}"></script>
            <!-- 
            <script src="{{asset('js/swiper.jquery.min.js')}}"></script>
            <script src="{{asset('js/ScrollMagic.min.js')}}"></script>
            -->
            <!-- ...end JS Script -->
    </body>
</html>
