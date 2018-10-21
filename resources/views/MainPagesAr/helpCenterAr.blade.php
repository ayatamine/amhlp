@extends('layouts.mainAr')
@section('content')


<section class="app-content">

    <div class="intro">
        <div class="navbar intro-navbar">
                    @if(Auth::check())
                    <nav class="nav-content inner-nav-content">
                            {{$siteSettings->site_name}}  
                    </nav>
                    @else
                    <nav class="nav-content ">
                            {{$siteSettings->site_name}}  
                    </nav>
                    @endif
                    @if(Auth::check())
                    <div class="mytickets">
                        <span class="settings "><i class="fa fa-cog"></i></span>
                        <span class="logged-in-widget"><img src="{{asset('img/loggedin.png')}}" style="height:35px;width:35px;margin-left: 10px;" alt="logged-in-avatar">@if(Auth::check()){{Auth::user()->email}} @endif<i class="fa fa-caret-down" aria-hidden="true"></i> </span>
                        <div class="dropdown-auth hide-dropdown">
                            <ul class="list-unstyled">
                                <li>
                                <a href="{{route('MainController.myTickets')}}">مقالاتي</a>
                                </li>

                                <li>
                                        <a href="/#">سياسة الخصوصية</a>
                                </li>
                                <li>
                                        <a href="/#">شروط الخدمة</a>
                                </li>
                                <li>
                                        <a href="/#">وظائف</a>
                                </li>
                                <li>
                                    <i class="fa fa-sign-out"></i><a href="/logout">تسجيل الخروج</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class=" xs-dropdown-auth hide-dropdown ">
                                <ul class="list-unstyled">
                                    <li>
                                            <a href="{{route('MainController.myTickets')}}">مقالاتي</a>                   
                                    </li>
                                    <li>
                                            <a href="/#">سياسة الخصوصية</a>
                                    </li>
                                    <li>
                                            <a href="/#">شروط الخدمة</a>
                                    </li>
                                    <li>
                                            <a href="/#">وظائف</a>
                                    </li>       
                                    <li>
                                        <i class="fa fa-sign-out"></i><a href="/logout">تسجيل الخروج</a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    @else
                        <div class="mytickets login-t">
                            <a href="/#">سياسة الخصوصية</a>
                            <a href="/#">شروط الخدمة</a>
                            <a href="/#">وظائف</a>
                            <a href="/login" id="login-link">تسجيل الدخول</a>
                        </div>
                        <div class="mytickets xs-login-t">
                                <a href="/login" id="login-link">تسجيل الدخول</a>
                        </div>
                    @endif
               
        </div>
            <div class="nav-scroller ">
                    <nav class="nav nav-underline">
                      <a class="nav-link active" href="#">لوحة التحكم</a>
                      <a class="nav-link" href="#">
                        الاصدقاء
                        <span class="badge badge-pill bg-light align-text-bottom">27</span>
                      </a>
                      <a class="nav-link" href="#">تصفح</a>
                      <a class="nav-link" href="#">اقتراحات</a>
                      <a class="nav-link" href="#">رابط</a>
                      <a class="nav-link" href="#">رابط</a>
                      <a class="nav-link" href="#">رابط</a>
                      <a class="nav-link" href="#">رابط</a>
                      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                            <span class="navbar-toggler-icon"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></span>
                      </button>  
                    </nav>
                   
            </div>
            <div class="nav-full ">
                    <nav class="nav nav-underline">
                      <a class="nav-link active" href="#">لوحة التحكم</a>
                      <a class="nav-link" href="#">
                        الاصدقاء
                        <span class="badge badge-pill bg-light align-text-bottom">27</span>
                      </a>
                      <a class="nav-link" href="#">تصفح</a>
                      <a class="nav-link" href="#">اقتراحات</a>
                      <a class="nav-link" href="#">رابط</a>
                      <a class="nav-link" href="#">رابط</a>
                      <a class="nav-link" href="#">رابط</a>
                      <a class="nav-link" href="#">رابط</a>
                      
                    </nav>
                   
            </div>
     <div class="articles-search-header">
        <div class=" container ">
                <div class="search-bar">
                        <a href="" class="logo-link">
                                <img src="img/hc-logob.png" alt="logo" class="logo search-center-logo">
                        </a> 
                        
                     <h1>كيف يمكننا مساعدتك ؟</h1>
                   <!--  <h5>Ask Question. Browse Articles.Find Answers.</h5> -->
                     <form action="" method="" id="search-articles" class="search-form">
                            {{csrf_field()}}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" class="search-article" name="search-title" id="search-title" placeholder="أدخل سؤالك أو الكلمات المفتاحية هنا">
                            <img src="{{asset('img/search.png')}}" alt="search-icon" id="search-icon">
                            <img src="{{asset('img/close.png')}}" alt="delete-icon" id="delete-icon" >
                     </form>
                     <div class="search-result">
                            <a class="article-in-category" href="">
                                <div class="description" style="text-align:right; padding: 6px;">
                                    <img src="{{asset('img/documents.png')}}" alt="document">
                                    <div class="title"></div>
                                    <hr style="margin-top: 0.5rem;margin-bottom: 0.5rem;">
                                    
                                </div>
                                <div id="see-all-result"></div>
                            </a>
                            <hr style="width:98%;margin-left:0;margin-top: 0.5rem;margin-bottom: 0.5rem;">
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