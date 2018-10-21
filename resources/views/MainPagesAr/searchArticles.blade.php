@extends('layouts.mainAr')

@section('content')

<i class="fa fa-bars xs-article-menu-icon"></i>
<section class="app-content">

    <div class="intro">
            <div class="navbar intro-navbar">
                    @if(Auth::check())
                    <nav class="nav-content inner-nav-content">
                         Poostel 
                    </nav>
                    @else
                    <nav class="nav-content ">
                        Poostel 
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
       
    </div>
    

</section>
<div class="articles-search-header articles-search-header-single-article">
    <div class=" container " style="padding-right:0">
     <div class="row">
     <div class="title-article-link hidden-xs  col-sm-5"><a href="{{route('MainControllerAr.helpCenter')}}" style="color: #27b715;margin-right:10px"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Help-center </a> showing {{$articles->count()}} results for @if($word !='') <span style="font-weight:bold">"{{$word}}"</span> @endif</div>

     <div class="search-bar search-bar-single-article search-bar-search-article col-xs-12 col-sm-7">
    
        <form action="" method="" id="search-articles" class="search-form">
            {{csrf_field()}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" class="search-article" name="search-title" id="inner-search-title" placeholder="أدخل سؤالك أو الكلمات المفتاحية هنا">
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
<section class="content-single-article" style="padding:2%">
        @if($articles)
        @foreach($articles as $article)
        <a class="article-in-category" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
           <img src="{{asset('img/document.png')}}" alt="document">
           <div class="description">
               <div class="title">{{$article->title}}</div>
               <div class="body">{!! $article->details !!}</div>
           </div>
       </a>
       <hr style="width:98%;margin-left:0">
        @endforeach

       @endif

</section>

<section class="myfooter-single-article">
 @include('layouts.footerAr')   
</section>




@endsection