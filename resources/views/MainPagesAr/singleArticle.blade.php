@extends('layouts.mainAr')

@section('content')

<i class="fa fa-bars xs-article-menu-icon"></i>
<section class="app-content">

    <div class="intro">
        <div class="navbar intro-navbar-single-article">
           <div class="container">
                <nav class="nav-content">
                        <a href="{{route('MainControllerAr.helpCenter')}}" class="logo-link col-xs-6 float-left">
                            <img src="{{asset('img/hc-logo.png')}}" alt="logo" class="logo">
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
       
    </div>
    

</section>
<div class="articles-search-header articles-search-header-single-article">
    <div class=" container " style="padding-right:0">
     <div class="row">
     <div class="title-article-link hidden-xs  col-sm-5"><a href="{{route('MainControllerAr.helpCenter')}}" style="color: #5e6977;">مركز الدعم </a> > <a href="{{route('MainControllerAr.getCategories',['id'=>$ticket->category_id])}}" style="color: #5e6977;">{{$ticket->sub_category_name}}</a> > <a href="/" style="color: #34AD00;">مقال </a></div>
     <div class="search-bar search-bar-single-article col-xs-12 col-sm-7">
    
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
<section class="content-single-article" >
<div class="left-side-scroll">
  <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$ticket->category_id])}}" style="color : inherit" >مقدمة</a></h5>
  <ul class="list-unstyled">
        @if($introduction_articles)
        @foreach($introduction_articles as $article)
        @if($ticket->slug==$article->slug)
        <li>
            <a class="article active-article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
               
                <span class="text">{{$article->title}}</span>
            </a>
        </li>
        @else
        <li>
                <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                   
                    <span class="text">{{$article->title}}</span>
                </a>
        </li>

        @endif
        @endforeach
        @endif 
  </ul>
    <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$ticket->category_id])}}" style="color : inherit" >تثبيت </a></h5>
    <ul class="list-unstyled">
            @if($installation_articles)
            @foreach($installation_articles as $article)
            @if($ticket->slug==$article->slug)
            <li>
                <a class="article active-article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                   
                    <span class="text">{{$article->title}}</span>
                </a>
            </li>
            @else
            <li>
                    <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
            </li>

            @endif
            @endforeach
            @endif
    </ul>
    <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$ticket->category_id])}}" style="color : inherit" >فواتير </a></h5>
    <ul class="list-unstyled">
            @if($billing_articles)
            @foreach($billing_articles as $article)
            @if($ticket->slug==$article->slug)
            <li>
                <a class="article active-article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                   
                    <span class="text">{{$article->title}}</span>
                </a>
            </li>
            @else
            <li>
                    <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
            </li>

            @endif
            @endforeach
            @endif
    </ul>
    <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$ticket->category_id])}}" style="color : inherit" >الشحن</a></h5>
    <ul class="list-unstyled">
            @if($shipping_articles)
            @foreach($shipping_articles as $article)
            @if($ticket->slug==$article->slug)
            <li>
                <a class="article active-article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                   
                    <span class="text">{{$article->title}}</span>
                </a>
            </li>
            @else
            <li>
                    <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
            </li>

            @endif
            @endforeach
            @endif
    </ul>
    <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$ticket->category_id])}}" style="color : inherit" >استيراد وتصدير </a></h5>
    <ul class="list-unstyled">
            @if($import_export_articles)
            @foreach($import_export_articles as $article)
            @if($ticket->slug==$article->slug)
            <li>
                <a class="article active-article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                   
                    <span class="text">{{$article->title}}</span>
                </a>
            </li>
            @else
            <li>
                    <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
            </li>

            @endif
            @endforeach
            @endif
    </ul>
    <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$ticket->category_id])}}" style="color : inherit" >ضبط وإعدادات</a></h5>
    <ul class="list-unstyled">
            @if($setting_articles)
            @foreach($setting_articles as $article)
            @if($ticket->slug==$article->slug)
            <li>
                <a class="article active-article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                   
                    <span class="text">{{$article->title}}</span>
                </a>
            </li>
            @else
            <li>
                    <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
            </li>

            @endif
            @endforeach
            @endif
    </ul>
</div>
<div class="right-side">
        <div id="article-title">@if($ticket->title) {{$ticket->title}} @endif</div>
        <hr style="width:98%;margin-left:0">
       {!! $ticket->details !!}
       @if(Auth::check())
        <!-- submit a ticket -->
        <hr style="width:98%;margin-left:0">
           عندك أسئلة أخرى ؟ <a href="{{route('MainControllerAr.addTicket')}}">  انشأ طلبا </a>
        <hr style="width:98%;margin-left:0">
        
        @if(!Auth::user()->feedback($ticket->id))
        <div id="feedback" style="padding: 1% 0;">
                هل كانت المقالة مفيدة؟<span class="note-about-article"><i class="fa fa-check"></i>نعم</span><span class="note-about-article2"><i class="fa fa-close"></i>لا</span>
            <form action="">
            <input type="hidden" name="slug-article" value="{{$ticket->slug}}">
            </form>
        </div>
        <hr style="width:98%;margin-left:0">
        @else
        <div id="feedback" class="ar-feedback" style="padding: 1% 0;">
                شكرا لك رأيك سيساعدنا في تحسين الأداء ونشر كل ماهو مفيد .

        </div>
        @endif
        @endif
        
</div>
</section>
<div class="xs-article-menu"></div>
    <div class="left-side-scroll-xs visible-xs hidden-sm hidden-md hidden-lg ">
        <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$ticket->category_id])}}" style="color : inherit" >مقدمة</a></h5>
        <ul class="list-unstyled">
                @if($introduction_articles)
                @foreach($introduction_articles as $article)
                @if($ticket->slug==$article->slug)
                <li>
                    <a class="article active-article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
                </li>
                @else
                <li>
                        <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                @endif
                @endforeach
                @endif
                
        </ul>
          <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$ticket->category_id])}}" style="color : inherit" >تثبيت</a></h5>
          <ul class="list-unstyled">
                @if($installation_articles)
                @foreach($installation_articles as $article)
                @if($ticket->slug==$article->slug)
                <li>
                    <a class="article active-article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
                </li>
                @else
                <li>
                        <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                @endif
                @endforeach
                @endif
          </ul>
          <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$ticket->category_id])}}" style="color : inherit" >فواتير</a></h5>
          <ul class="list-unstyled">
                @if($billing_articles)
                @foreach($billing_articles as $article)
                @if($ticket->slug==$article->slug)
                <li>
                    <a class="article active-article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
                </li>
                @else
                <li>
                        <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                @endif
                @endforeach
                @endif
          </ul>
          <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$ticket->category_id])}}" style="color : inherit" >الشحن</a></h5>
          <ul class="list-unstyled">
                @if($shipping_articles)
                @foreach($shipping_articles as $article)
                @if($ticket->slug==$article->slug)
                <li>
                    <a class="article active-article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
                </li>
                @else
                <li>
                        <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                @endif
                @endforeach
                @endif
          </ul>
          <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$ticket->category_id])}}" style="color : inherit" >استيراد وتصدير </a></h5>
          <ul class="list-unstyled">
                @if($import_export_articles)
                @foreach($import_export_articles as $article)
                @if($ticket->slug==$article->slug)
                <li>
                    <a class="article active-article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
                </li>
                @else
                <li>
                        <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                @endif
                @endforeach
                @endif
          </ul>
          <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$ticket->category_id])}}" style="color : inherit" >ضبط وإعدادات</a></h5>
    <ul class="list-unstyled">
            @if($setting_articles)
            @foreach($setting_articles as $article)
            @if($ticket->slug==$article->slug)
            <li>
                <a class="article active-article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                   
                    <span class="text">{{$article->title}}</span>
                </a>
            </li>
            @else
            <li>
                    <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
            </li>

            @endif
            @endforeach
            @endif
    </ul>
          
      </div>
      
</div>

<section class="myfooter-single-article">
 @include('layouts.footerAr')   
</section>




@endsection