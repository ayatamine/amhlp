@extends('Layouts.main')
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
                    <a  href="{{route('MainController.myTickets')}}">My Tickets</a> <span class="settings "><i class="fa fa-cog"></i></span>
                    <span class="logged-in-widget"><img src="{{asset('img/loggedin.png')}}" style="height:35px;width:35px;margin-right: 10px;" alt="logged-in-avatar">@if(Auth::check()){{Auth::user()->email}} @endif<i class="fa fa-caret-down" aria-hidden="true"></i> </span>
                    <div class="dropdown-auth hide-dropdown">
                        <ul class="list-unstyled">
                            <li>
                            <img src="{{asset('img/inbox.png')}}" alt="inbox" style="height:24px;width:20px;opacity: 0.8;">
                            <a href="{{route('MainController.myTickets')}}">My Tickets</a>
                            </li>
                            <li>
                                <i class="fa fa-cog"></i><a href=""> Acount Settings</a>
                            </li>
                            <li>
                                <i class="fa fa-sign-out"></i><a href="/logout"> Log Out</a>
                            </li>
                        </ul>
                    </div>
                    <div class=" xs-dropdown-auth hide-dropdown ">
                            <ul class="list-unstyled">
                                <li>
                                        <img src="{{asset('img/inbox.png')}}" alt="inbox" style="height:24px;width:20px;opacity: 0.8;">
                                        <a href="{{route('MainController.myTickets')}}">My Tickets</a>                            </li>
                                <li>
                                    <i class="fa fa-cog"></i><a href=""> Acount Settings</a>
                                </li>
                                <li>
                                    <i class="fa fa-sign-out"></i><a href="/logout"> Log Out</a>
                                </li>
                            </ul>
                    </div>
                </div>
                @else
                    <div class="mytickets login-t">
                        <a href="/login">Login</a>
                    </div>
                @endif
           </div>
           
        </div>
        <div class="articles-search-header">
        <div class=" container ">
         <div class="search-bar">
             <h1> How can we help you?</h1>
             <h5>Ask Question. Browse Articles.Find Answers.</h5>
             <form action="" method="" id="search-articles" class="search-form">
                    {{csrf_field()}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" class="search-article" name="search-title" id="search-title" placeholder="Enter your question or keyword here">
                    <img src="{{asset('img/search.png')}}" alt="search-icon" id="search-icon">
             </form>
             <div class="search-result">
                <a class="article-in-category" href="">
                    <img src="{{asset('img/document.png')}}" alt="document">
                    <div class="description" style="text-align:left;padding-left: 55px;">
                        <div class="title"></div>
                        <div class="body"></div>
                        <div class="article-tags"><span id="at1"></span> <span id="at2"></span></div>
                        <hr>
                        <div id="see-all-result"></div>
                    </div>
                </a>
                <hr style="width:98%;margin-left:0">
             </div>
           
         </div>
        </div>
        </div>
    </div>

</section>
<div class="category-content container">
       @if($categories)
       @foreach($categories as $category)

        <section class="category">
                    <div class="categort-info">
                        <h2 class="category-name"><a href="{{route('MainController.getCategories',['id'=>$category->id])}}">{{$category->category_name}}</a></h2>
                        
                    </div>
                    <div class="row">
                            <div class="col-xs-12 col-md-4"> 
                   

                                <div class="title">
                                    <!---->
                                    <h3 class="child-category-name"><a href="{{route('MainController.getCategories',['id'=>$category->id])}}">Introduction (5)</a></h3>
                                    <hr style="margin-top:0;margin-bottom:2rem">

                                </div>

                                <div class="articles-list">
                                    <ul class="list-unstyled">
                                    @if($introduction_articles)
                                    @foreach($introduction_articles as $article)
                                    <li>
                                        <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
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
                                        <h3 class="child-category-name"><a href="{{route('MainController.getCategories',['id'=>$category->id])}}">Installation (5)</a></h3>
                                        <hr style="margin-top:0;margin-bottom:2rem">
    
                                    </div>
    
                                    <div class="articles-list">
                                        <ul class="list-unstyled">
                                                @if($installation_articles)
                                                @foreach($installation_articles as $article)
                                                <li>
                                                    <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
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
                                        <h3 class="child-category-name"><a href="{{route('MainController.getCategories',['id'=>$category->id])}}">Billing (5)</a></h3>
                                        <hr style="margin-top:0;margin-bottom:2rem">
    
                                    </div>
    
                                    <div class="articles-list">
                                        <ul class="list-unstyled">
                                                @if($billing_articles)
                                                @foreach($billing_articles as $article)
                                                <li>
                                                    <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
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
                                    <h3 class="child-category-name"><a href="{{route('MainController.getCategories',['id'=>$category->id])}}">Shipping (5)</a></h3>
                                    <hr style="margin-top:0;margin-bottom:2rem">

                                </div>

                                <div class="articles-list">
                                    <ul class="list-unstyled">
                                            @if($shipping_articles)
                                            @foreach($shipping_articles as $article)
                                            <li>
                                                <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
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
                                        <h3 class="child-category-name"><a href="{{route('MainController.getCategories',['id'=>$category->id])}}">Import & Export (5)</a></h3>
                                        <hr style="margin-top:0;margin-bottom:2rem">
    
                                    </div>
    
                                    <div class="articles-list">
                                        <ul class="list-unstyled">
                                                @if($import_export_articles)
                                                @foreach($import_export_articles as $article)
                                                <li>
                                                    <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
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
                                        <h3 class="child-category-name"><a href="{{route('MainController.getCategories',['id'=>$category->id])}}">Setting & Configuration (5)</a></h3>
                                        <hr style="margin-top:0;margin-bottom:2rem">
    
                                    </div>
    
                                    <div class="articles-list">
                                        <ul class="list-unstyled">
                                                @if($setting_articles)
                                                @foreach($setting_articles as $article)
                                                <li>
                                                    <a class="article" href="{{route('MainController.singleArticle',['slug'=>$article->slug])}}">
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
@include('layouts.footer')



@endsection