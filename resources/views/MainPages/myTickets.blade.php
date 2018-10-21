@extends('Layouts.main')

@section('content')


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
     <div class="title-article-link hidden-xs  col-sm-5"><a href="{{route('MainController.helpCenter')}}" style="color: #5e6977;">Help-center </a> ><a href="{{route('MainController.myTickets')}}" style="color: #34AD00;text-decoration:none">Tickets </a></div>
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
<section class="content-single-article" style="    padding: 20px;">
 <div class="newTicket"><a href="{{route('MainController.addTicket')}}">NEW TICKETS</a></div>
<div>
   @if($tickets->count()>0)
   @foreach($tickets as $ticket)
    <div class="tickets-list">
        <a href="{{route('MainController.singleArticle',['slug'=>$ticket->slug])}}" style="text-decoration: none;color: inherit;">
        <div class="ticket-title">{{$ticket->title}}</div>
        <div class="ticket-content">
            {!! str_limit($ticket->details,250) !!}
        </div>
        <div class="tiket-created-at">{{$ticket->created_at->diffForhumans()}} | 1 reply</div>
        <div class="ticket-category"><Span>{{$ticket->category->category_name}}</Span></div>
        </a>
    </div>
    <hr>
    @endforeach
    @endif
    
</div>

<div>
    
    <div class="tickets-list">
        <div class="ticket-title">Installing MySQL SERVER</div>
        <div class="ticket-content">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Obcaecati, repellat modi quidem sint corporis assumenda delectus 
            l optio consequatur possimus inventore magni eveniet. Modi, quibusdam quam.
        </div>
        <div class="tiket-created-at">1 Second ago | 1 reply</div>
        <div class="ticket-category"><Span> Getting Started</Span></div>
    </div>
    <hr>
</div>
</section>
<section class="myfooter-single-article">
 @include('layouts.footer')   
</section>




@endsection