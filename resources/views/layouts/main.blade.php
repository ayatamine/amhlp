<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="CACHE-CONTROL" content="public">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- css files -->
        <title>help-center</title>     
        <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/MainStyle.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/AdminStyle.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/AdminStyle2.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/getTicketStyle.css')}}">
        <link rel="shortcut icon" href="{{asset('img')}}/{{$siteSettings->favicon_icon}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        
          <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
          <script>
          tinymce.init({
               selector:'textarea',
               plugins:'preview,wordcount,advcode',
               wordcount_countregex:/[\w\u2019\x27\-\u1FFFF]+/g
           });
          </script> 
  
   

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
            <script src="{{asset('js/bootstrap-tooltip.js')}}"></script>
            <script src="{{asset('js/jquery-ui.min.js')}}"></script>
            <script src="{{asset('js/r.js')}}" type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ace.js" type="text/javascript" charset="utf-8"></script>
            <script >
               
                $(document).tooltip();
                var editor = ace.edit("editor");
                var phpmode = ace.require("ace/mode/html").Mode;
                editor.session.setMode(new phpmode());
                
            </script> <!-- https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js -->
             <script src="{{asset('js/ManageHelp.js')}}"></script>
            <script src="{{asset('js/Adminjs.js')}}" type="text/javascript"></script>
            <script src="{{asset('js/helpCenter.js')}}"></script>
            
            <!-- 
            <script src="{{asset('js/swiper.jquery.min.js')}}"></script>
            <script src="{{asset('js/ScrollMagic.min.js')}}"></script>
            -->
            <!-- ...end JS Script -->
    </body>
</html>
