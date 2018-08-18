@extends('layouts.mainAr')
@section('content')


<section class="app-content">

    <div class="intro">
        <div class="navbar intro-navbar">
           <div class="container">
                <nav class="nav-content">
                        <a href="" class="logo-link col-xs-6 float-left">
                            <img src="img/hc-logo.png" alt="logo" class="logo">
                        </a>
                </nav>
                @if(Auth::check())
                <div class="mytickets">
                        <a  href="{{route('MainControllerAr.myTickets')}}">مقالاتي</a> <span class="settings "><i class="fa fa-cog"></i></span>

                            <span class="logged-in-widget"> <img src="{{asset('img/loggedin.png')}}" style="height:35px;width:35px;margin-left: 10px;" alt="logged-in-avatar">@if(Auth::check()){{Auth::user()->email}} @endif  <i class="fa fa-caret-down" aria-hidden="true"></i></span>
                        <div class="dropdown-auth hide-dropdown">
                            <ul class="list-unstyled">
                                <li>
                                <img src="{{asset('img/inbox.png')}}" alt="inbox" style="height:24px;width:20px;opacity: 0.8;">
                                <a href="{{route('MainControllerAr.myTickets')}}">مقالاتي</a>
                                </li>
                                <li>
                                    <i class="fa fa-cog"></i><a href=""> إعدادات الحساب</a>
                                </li>
                                <li>
                                    <i class="fa fa-sign-out"></i><a href="/logout"> تسجيل الخروج</a>
                                </li>
                            </ul>
                        </div>
                        <div class=" xs-dropdown-auth hide-dropdown ">
                                <ul class="list-unstyled">
                                    <li>
                                            <img src="{{asset('img/inbox.png')}}" alt="inbox" style="height:24px;width:20px;opacity: 0.8;">
                                            <a href="{{route('MainControllerAr.myTickets')}}">مقالاتي</a>                            </li>
                                    <li>
                                        <i class="fa fa-cog"></i><a href=""> إعدادات الحساب</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-sign-out"></i><a href="/logout"> تسجيل الخروج</a>
                                    </li>
                                </ul>
                        </div>
                   
                </div>
                @else
                    <div class="mytickets login-t">
                        <a href="/login">تسجيل الدخول</a>
                    </div>
                @endif
           </div>
           
        </div>
        <div class="articles-search-header">
        <div class=" container ">
         <div class="search-bar">
             <h1> كيف يمكننا مساعدتك</h1>
             <h5>اطرح أسئلة. تصفح المقالات. اعثر على الإجابات؟</h5>
             <form action="" method="" id="search-articles" class="search-form">
                    {{csrf_field()}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" class="search-article" name="search-title" id="search-title" placeholder="أدخل سؤالك أو الكلمات المفتاحية هنا">
                    <img src="{{asset('img/search.png')}}" alt="search-icon" id="search-icon">

             </form>
             <div class="search-result">
                <a class="article-in-category" href="">
                    <img src="{{asset('img/document.png')}}" alt="document">
                    <div class="description" style="text-align:right;padding-right: 55px;">
                        <div class="title"></div>
                        <div class="body"></div>
                        <div class="article-tags"><span id="at1"></span> <span id="at2"></span></div>
                        <hr>
                        <div id="see-all-result" class="salr"></div>
                    </div>
                </a>
                <hr style="width:98%;margin-left:0">
             </div>
           
         </div>
        </div>
        </div>
    </div>

</section>
<div class="category-content container" style="text-align: right;">
       @if($categories)
       @foreach($categories as $category)

        <section class="category">
                    <div class="categort-info">
                        <h2 class="category-name"><a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}">{{$category->category_name}}</a></h2>
                        
                    </div>
                    <div class="row">
                            <div class="col-xs-12 col-md-4"> 
                   

                                <div class="title">
                                    <!---->
                                    <h3 class="child-category-name"><a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}"> مقدمة </a></h3>
                                    <hr style="margin-top:0;margin-bottom:2rem">

                                </div>

                                <div class="articles-list">
                                    <ul class="list-unstyled">
                                    @if($introduction_articles)
                                    @foreach($introduction_articles as $article)
                                    <li>
                                        <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                                            <img src="{{asset('img/document.png')}}" alt="document">
                                            <span class="text">{{$article->title}}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                    @endif
                                    
                                   
                                    </ul>
                                    
                                        
                                    
                                
                                </div>
                    
                            </div> 
                            <div class="col-xs-12 col-md-4">
                   

                                    <div class="title">
                                        <!---->
                                        <h3 class="child-category-name"><a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}">تثبيت</a></h3>
                                        <hr style="margin-top:0;margin-bottom:2rem">
    
                                    </div>
    
                                    <div class="articles-list">
                                        <ul class="list-unstyled">
                                                @if($installation_articles)
                                                @foreach($installation_articles as $article)
                                                <li>
                                                    <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                                                        <img src="{{asset('img/document.png')}}" alt="document">
                                                        <span class="text">{{$article->title}}</span>
                                                    </a>
                                                </li>
                                                @endforeach
                                                @endif
                                        </ul>
                                        
                                            
                                        
                                    
                                    </div>
                        
                            </div>
                            <div class="col-xs-12 col-md-4">
                   

                                    <div class="title">
                                        <!---->
                                        <h3 class="child-category-name"><a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}">فواتير</a></h3>
                                        <hr style="margin-top:0;margin-bottom:2rem">
    
                                    </div>
    
                                    <div class="articles-list">
                                        <ul class="list-unstyled">
                                                @if($billing_articles)
                                                @foreach($billing_articles as $article)
                                                <li>
                                                    <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                                                        <img src="{{asset('img/document.png')}}" alt="document">
                                                        <span class="text">{{$article->title}}</span>
                                                    </a>
                                                </li>
                                                @endforeach
                                                @endif
                                        </ul>
                                        
                                            
                                        
                                    
                                    </div>
                        
                            </div>
                            
                    </div>
                    <div class="row">
                            <div class="col-xs-12 col-md-4"> 
                   

                                <div class="title">
                                    <!---->
                                    <h3 class="child-category-name"><a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}"> الشحن</a></h3>
                                    <hr style="margin-top:0;margin-bottom:2rem">

                                </div>

                                <div class="articles-list">
                                    <ul class="list-unstyled">
                                            @if($shipping_articles)
                                            @foreach($shipping_articles as $article)
                                            <li>
                                                <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                                                    <img src="{{asset('img/document.png')}}" alt="document">
                                                    <span class="text">{{$article->title}}</span>
                                                </a>
                                            </li>
                                            @endforeach
                                            @endif
                                    </ul>
                                    
                                        
                                    
                                
                                </div>
                    
                            </div> 
                            <div class="col-xs-12 col-md-4">
                   

                                    <div class="title">
                                        <!---->
                                        <h3 class="child-category-name"><a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}">استيراد وتصدير </a></h3>
                                        <hr style="margin-top:0;margin-bottom:2rem">
    
                                    </div>
    
                                    <div class="articles-list">
                                        <ul class="list-unstyled">
                                                @if($import_export_articles)
                                                @foreach($import_export_articles as $article)
                                                <li>
                                                    <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                                                        <img src="{{asset('img/document.png')}}" alt="document">
                                                        <span class="text">{{$article->title}}</span>
                                                    </a>
                                                </li>
                                                @endforeach
                                                @endif
                                        </ul>
                                        
                                            
                                        
                                    
                                    </div>
                        
                            </div>
                            <div class="col-xs-12 col-md-4">
                   

                                    <div class="title">
                                        <!---->
                                        <h3 class="child-category-name"><a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}">ضبط وإعدادات </a></h3>
                                        <hr style="margin-top:0;margin-bottom:2rem">
    
                                    </div>
    
                                    <div class="articles-list">
                                        <ul class="list-unstyled">
                                                @if($setting_articles)
                                                @foreach($setting_articles as $article)
                                                <li>
                                                    <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                                                        <img src="{{asset('img/document.png')}}" alt="document">
                                                        <span class="text">{{$article->title}}</span>
                                                    </a>
                                                </li>
                                                @endforeach
                                                @endif
                                        </ul>
                                        
                                            
                                        
                                    
                                    </div>
                        
                            </div>
                            
                    </div>
                    
            
        </section>
        @endforeach
        @else
          no categories found;
        @endif
        
</div>
@include('layouts.footerAr')



@endsection