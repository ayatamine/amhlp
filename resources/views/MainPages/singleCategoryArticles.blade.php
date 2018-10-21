@extends('Layouts.main')

@section('content')

<i class="fa fa-bars xs-article-menu-icon"></i>
<section class="app-content">

    <div class="intro">
            <div class="navbar intro-navbar">
                    <nav class="nav-content inner-nav-content">
                         Poostel 
                    </nav>
                    @if(Auth::check())
                    <div class="mytickets">
                            <span class="settings "><i class="fa fa-cog"></i></span>
                        <span class="logged-in-widget"><img src="{{asset('img/loggedin.png')}}" style="height:35px;width:35px;margin-right: 10px;" alt="logged-in-avatar">@if(Auth::check()){{Auth::user()->email}} @endif<i class="fa fa-caret-down" aria-hidden="true"></i> </span>
                        <div class="dropdown-auth hide-dropdown">
                            <ul class="list-unstyled">
                                <li>
                                <a href="{{route('MainController.myTickets')}}">My Tickets</a>
                                </li>

                                <li>
                                        <a href="/#">Privacy Policy</a>
                                </li>
                                <li>
                                        <a href="/#">Terms of Service</a>
                                </li>
                                <li>
                                        <a href="/#">Careers</a>
                                </li>
                                <li>
                                    <i class="fa fa-sign-out"></i><a href="/logout"> Log Out</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class=" xs-dropdown-auth hide-dropdown ">
                                <ul class="list-unstyled">
                                    <li>
                                            <a href="{{route('MainController.myTickets')}}">My Tickets</a>                     
                                    </li>
                                    <li>
                                            <a href="/#">Privacy Policy</a>
                                    </li>
                                    <li>
                                            <a href="/#">Terms of Service</a>
                                    </li>
                                    <li>
                                            <a href="/#">Careers</a>
                                    </li>       
                                    <li>
                                        <i class="fa fa-sign-out"></i><a href="/logout"> Log Out</a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    @else
                        <div class="mytickets login-t">
                            <a href="/#">Privacy Policy</a>
                            <a href="/#">Terms of Service</a>
                            <a href="/#">Careers</a>
                            <a href="/login" id="login-link">Login</a>
                        </div>
                        <div class="mytickets xs-login-t">
                                <a href="/login" id="login-link">Login</a>
                        </div>
                    @endif
               
            </div>
            <div class="nav-scroller ">
                    <nav class="nav nav-underline">
                      <a class="nav-link active" href="#">Dashboard</a>
                      <a class="nav-link" href="#">
                        Friends
                        <span class="badge badge-pill bg-light align-text-bottom">27</span>
                      </a>
                      <a class="nav-link" href="#">Explore</a>
                      <a class="nav-link" href="#">Suggestions</a>
                      <a class="nav-link" href="#">Link</a>
                      <a class="nav-link" href="#">Link</a>
                      <a class="nav-link" href="#">Link</a>
                      <a class="nav-link" href="#">Link</a>
                      
                    </nav>
            </div>
       
    </div>
    

</section>
<div class="articles-search-header articles-search-header-single-article">
    <div class=" container " style="padding-right:0">
     <div class="row">
     <div class="title-article-link hidden-xs  col-sm-5"><a href="{{route('MainController.helpCenter')}}" style="color: #5e6977;">Help-center </a> > <a href="{{route('MainController.getCategories',['id'=>$category->id])}}" style="color: #5e6977;">{{$category->category_name}}</a></div>
     <div class="search-bar search-bar-single-article col-xs-12 col-sm-7">
    
        <form action="" method="" id="search-articles" class="search-form">
            {{csrf_field()}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" class="search-article" name="search-title" id="inner-search-title" placeholder="Enter your question or keyword here">
            <img src="{{asset('img/search.png')}}" alt="search-icon" id="search-icon">
            <img src="{{asset('img/close.png')}}" alt="delete-icon" id="delete-icon" >

     </form>
     <div class="search-result">
        <a class="article-in-category" href="">
                        <div class="description" style="text-align:left; padding: 6px;">
                                        <img src="{{asset('img/documents.png')}}" alt="document">
                                        <div class="title"></div>
                                        <hr style="margin-top: 0.5rem;margin-bottom: 0.5rem;">
                                        
                        </div>
                        <div id="see-all-result"></div>
        </a>
        <hr style="width:98%;margin-left:0">
     </div>
       
     </div>
     </div>
    </div>
</div>
<section class="content-single-article" >
<div class="left-side-scroll">
  <h5 id="category-title"> <a href="{{route('MainController.getCategories',['id'=>$category->id])}}" style="color : inherit" >INTRODUCTION</a></h5>
  <ul class="list-unstyled">
        @if($introduction_articles)
        @foreach($introduction_articles as $article)
       
        <li>
                <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
                   
                    <span class="text">{{$article->title}}</span>
                </a>
        </li>

        
        @endforeach
        @endif 
  </ul>
    <h5 id="category-title"> <a href="{{route('MainController.getCategories',['id'=>$category->id])}}" style="color : inherit" >INSTALLATION </a></h5>
    <ul class="list-unstyled">
            @if($installation_articles)
            @foreach($installation_articles as $article)
            
            <li>
                    <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
            </li>

            @endforeach
            @endif
    </ul>
    <h5 id="category-title"> <a href="{{route('MainController.getCategories',['id'=>$category->id])}}" style="color : inherit" >BILLING </a></h5>
    <ul class="list-unstyled">
            @if($billing_articles)
            @foreach($billing_articles as $article)
            
            <li>
                    <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
            </li>

            @endforeach
            @endif
    </ul>
    <h5 id="category-title"> <a href="{{route('MainController.getCategories',['id'=>$category->id])}}" style="color : inherit" >SHIPPING</a></h5>
    <ul class="list-unstyled">
            @if($shipping_articles)
            @foreach($shipping_articles as $article)
            
            <li>
                    <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
                       
                        <span class="text">{{$article->title}}</span>
                    </a>
            </li>

            @endforeach
            @endif
    </ul>
    <h5 id="category-title"> <a href="{{route('MainController.getCategories',['id'=>$category->id])}}" style="color : inherit" >IMPORT & EXPORT</a></h5>
    <ul class="list-unstyled">
            @if($import_export_articles)
            @foreach($import_export_articles as $article)
            
            <li>
                    <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
                       
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
                    <form action="{{route('MainController.filter_articles')}}" method="post" id="category-id-form">
                 {{csrf_field()}}
                 <input type="hidden" value="{{$category->id}}" name="category">
                 <select name="filter" id="filter-categories" class="form-control">
                     <option value="mv">Most viewed first</option>
                     <option value="mh">Most helpful first</option>
                     <option value="new">Newest first</option>
                     <option value="az">A to Z</option>
                 </select>
                    </form>
                 
             </span>
             
        </div>
        <span class="hidden-filter">
                <form action="{{route('MainController.filter_articles')}}" method="post" id="category-id-form">
             {{csrf_field()}}
             <input type="hidden" value="{{$category->id}}" name="category">
             <select name="filter" id="filter-categories" class="form-control">
                 <option value="mv">Most viewed first</option>
                 <option value="mh">Most helpful first</option>
                 <option value="new">Newest first</option>
                 <option value="az">A to Z</option>
             </select>
                </form>
             
         </span>
        <hr style="width:98%;margin-left:0">
        @if($articles)
         @foreach($articles as $article)
         <a class="article-in-category" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
            <img src="{{asset('img/document.png')}}" alt="document">
            <div class="description">
                <div class="title">{{$article->title}}</div>
                
        <hr style="width:98%;margin-left:0">
            <div class="body"> {!! $article->details !!} </div>
            </div>
        </a>
         @endforeach

        @endif
      
        
</div>
</section>
<div class="xs-article-menu"></div>
    <div class="left-side-scroll-xs visible-xs hidden-sm hidden-md hidden-lg ">
        <h5 id="category-title"> <a href="{{route('MainController.getCategories',['id'=>$category->id])}}" style="color : inherit" >INTRODUCTION</a></h5>
        <ul class="list-unstyled">
                @if($introduction_articles)
                @foreach($introduction_articles as $article)
               
                <li>
                        <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
              
                @endforeach
                @endif
                
        </ul>
          <h5 id="category-title"> <a href="{{route('MainController.getCategories',['id'=>$category->id])}}" style="color : inherit" >INSTALLATION</a></h5>
          <ul class="list-unstyled">
                @if($installation_articles)
                @foreach($installation_articles as $article)
             
                <li>
                        <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                @endforeach
                @endif
          </ul>
          <h5 id="category-title"> <a href="{{route('MainController.getCategories',['id'=>$category->id])}}" style="color : inherit" >BILLING</a></h5>
          <ul class="list-unstyled">
                @if($billing_articles)
                @foreach($billing_articles as $article)
                
                <li>
                        <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                
                @endforeach
                @endif
          </ul>
          <h5 id="category-title"> <a href="{{route('MainController.getCategories',['id'=>$category->id])}}" style="color : inherit" >SHIPPING</a></h5>
          <ul class="list-unstyled">
                @if($shipping_articles)
                @foreach($shipping_articles as $article)
              
                <li>
                        <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                @endforeach
                @endif
          </ul>
          <h5 id="category-title"> <a href="{{route('MainController.getCategories',['id'=>$category->id])}}" style="color : inherit" >IMPORT & EXPORT</a></h5>
          <ul class="list-unstyled">
                @if($import_export_articles)
                @foreach($import_export_articles as $article)
               
                <li>
                        <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
                           
                            <span class="text">{{$article->title}}</span>
                        </a>
                </li>
    
                @endforeach
                @endif
          </ul>
          
      </div>
      
</div>

<section class="myfooter-single-article">
 @include('layouts.footer')   
</section>




@endsection