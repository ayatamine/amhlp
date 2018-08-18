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
     <div class="title-article-link hidden-xs  col-sm-5"><a href="{{route('MainControllerAr.helpCenter')}}" style="color: #5e6977;">مركز المساعدة </a> > <a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}" style="color: #5e6977;">{{$category->category_name}}</a></div>
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
                <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}" style="color : inherit" >مقدمة</a></h5>
                <ul class="list-unstyled">
                      @if($introduction_articles)
                      @foreach($introduction_articles as $article)
                     
                      <li>
                              <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                                 
                                  <span class="text">{{$article->title}}</span>
                              </a>
                      </li>
              
                      
                      @endforeach
                      @endif 
                </ul>
                  <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}" style="color : inherit" >تثبيت </a></h5>
                  <ul class="list-unstyled">
                          @if($installation_articles)
                          @foreach($installation_articles as $article)
                          
                          <li>
                                  <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                                     
                                      <span class="text">{{$article->title}}</span>
                                  </a>
                          </li>
              
                          @endforeach
                          @endif
                  </ul>
                  <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}" style="color : inherit" >فواتير </a></h5>
                  <ul class="list-unstyled">
                          @if($billing_articles)
                          @foreach($billing_articles as $article)
                          
                          <li>
                                  <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                                     
                                      <span class="text">{{$article->title}}</span>
                                  </a>
                          </li>
              
                          @endforeach
                          @endif
                  </ul>
                  <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}" style="color : inherit" >الشحن</a></h5>
                  <ul class="list-unstyled">
                          @if($shipping_articles)
                          @foreach($shipping_articles as $article)
                          
                          <li>
                                  <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                                     
                                      <span class="text">{{$article->title}}</span>
                                  </a>
                          </li>
              
                          @endforeach
                          @endif
                  </ul>
                  <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}" style="color : inherit" >استيراد وتصدير </a></h5>
                  <ul class="list-unstyled">
                          @if($setting_articles)
                          @foreach($setting_articles as $article)
                          
                          <li>
                                  <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                                     
                                      <span class="text">{{$article->title}}</span>
                                  </a>
                          </li>
              
                         
                          @endforeach
                          @endif
                  </ul>
                  <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}" style="color : inherit" >ضبط وإعدادات </a></h5>
                  <ul class="list-unstyled">
                          @if($import_export_articles)
                          @foreach($import_export_articles as $article)
                          
                          <li>
                                  <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                                     
                                      <span class="text">{{$article->title}}</span>
                                  </a>
                          </li>
              
                         
                          @endforeach
                          @endif
                  </ul>
        </div>
<div class="right-side right-side-categories" >
        <div id="article-title">@if($category->category_name) {{$category->category_name}} @endif
                <span >
                        <form action="{{route('MainControllerAr.filter_articles')}}" method="post" id="category-id-form">
                     {{csrf_field()}}
                     <input type="hidden" value="{{$category->id}}" name="category">
                     <select name="filter" id="filter-categories" class="form-control">
                            <option value="mv">الأكثر زيارة أولا</option>
                            <option value="mh">الأكثر افادة أولا</option>
                            <option value="new">الجديدة أولا</option>
                            <option value="az">أبجدي أ-ي</option>
                     </select>
                        </form>
                     
                 </span>
        </div>
        
                <span class="hidden-filter">
                        <form action="{{route('MainController.filter_articles')}}" method="post" id="category-id-form">
                     {{csrf_field()}}
                     <input type="hidden" value="{{$category->id}}" name="category">
                     <select name="filter" id="filter-categories" class="form-control">
                         <option value="mv">الأكثر زيارة أولا</option>
                         <option value="mh">الأكثر افادة أولا</option>
                         <option value="new">الجديدة أولا</option>
                         <option value="az">أبجدي أ-ي</option>
                     </select>
                        </form>
                     
              
        </span>
        <hr style="width:98%;margin-left:0">
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
      
        
</div>
</section>
<div class="xs-article-menu"></div>
    <div class="left-side-scroll-xs visible-xs hidden-sm hidden-md hidden-lg ">
        <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}" style="color : inherit" >مقدمة</a></h5>
        <ul class="list-unstyled">
                @if($introduction_articles)
                @foreach($introduction_articles as $article)
               
                <li>
                        <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
              
                @endforeach
                @endif
                
        </ul>
          <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}" style="color : inherit" >تثبيت</a></h5>
          <ul class="list-unstyled">
                @if($installation_articles)
                @foreach($installation_articles as $article)
             
                <li>
                        <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                @endforeach
                @endif
          </ul>
          <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}" style="color : inherit" >فواتير</a></h5>
          <ul class="list-unstyled">
                @if($billing_articles)
                @foreach($billing_articles as $article)
                
                <li>
                        <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                
                @endforeach
                @endif
          </ul>
          <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}" style="color : inherit" >الشحن</a></h5>
          <ul class="list-unstyled">
                @if($shipping_articles)
                @foreach($shipping_articles as $article)
              
                <li>
                        <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                @endforeach
                @endif
          </ul>
          <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}" style="color : inherit" >استيراد وتصدير </a></h5>
          <ul class="list-unstyled">
                @if($import_export_articles)
                @foreach($import_export_articles as $article)
               
                <li>
                        <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                @endforeach
                @endif
          </ul>
          <h5 id="category-title"> <a href="{{route('MainControllerAr.getCategories',['id'=>$category->id])}}" style="color : inherit" >ضبط وإعدادات</a></h5>
          <ul class="list-unstyled">
                @if($setting_articles)
                @foreach($setting_articles as $article)
               
                <li>
                        <a class="article" href="{{route('MainControllerAr.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                @endforeach
                @endif
          </ul>
          
      </div>
      
</div>

<section class="myfooter-single-article">
 @include('layouts.footerAr')   
</section>




@endsection