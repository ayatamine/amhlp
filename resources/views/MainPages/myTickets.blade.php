@extends('Layouts.main')

@section('content')


<section class="app-content">

    <div class="intro">
        <div class="navbar intro-navbar-single-article">
           <div class="container">
                <nav class="nav-content">
                        <a href="{{route('MainController.helpCenter')}}" class="logo-link col-xs-6 float-left">
                            <img src="{{asset('img/hc-logo.png')}}" alt="logo" class="logo">
                        </a>
                </nav>
                @if(Auth::check())
                <div class="mytickets">
                        <a  href="{{route('MainController.myTickets')}}">My Tickets</a> <span class="settings "><i class="fa fa-cog"></i></span>
                        <span class="logged-in-widget"><img src="{{asset('img/loggedin.png')}}" style="height:35px;width:35px;margin-right: 10px;" alt="logged-in-avatar">@if(Auth::check()){{Auth::user()->email}} @endif <i class="fa fa-caret-down" aria-hidden="true"></i> </span>
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