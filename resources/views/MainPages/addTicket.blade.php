@extends('layouts.main')


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
    <div class="articles-search-header articles-search-header-single-article" >
        <div class=" container " style="padding-right:0">
         <div class="row">
         <div class="title-article-link  col-sm-5" style="padding:0;"><a href="{{route('MainController.helpCenter')}}" style="color:#4c535a;text-decoration:none">Help-center</a>  ><span style="color: #34AD00;text-decoration:none">Tickets </span></div>
         </div>
        </div>
    </div>
    <div class="add-ticket">
        <div class="container">

                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    {{Session::get('success')}}
                </div>
                @endif
        <div class="note-about-add-ticket">{{$newTicketPage->Sidebar_Title}}</div>
        @if($newTicketPage->Sidebar_Tips1 !='')
        <h6 id="st1">{{$newTicketPage->Sidebar_Tips1}}</h6>
        {{$newTicketPage->Sidebar_Tips1_details}}
        @endif
        <br>
        @if($newTicketPage->Sidebar_Tips2 !='')
        <h6 id="st2">{{$newTicketPage->Sidebar_Tips2}}</h6>
        {{$newTicketPage->Sidebar_Tips2_details}}
        @endif
        @if($newTicketPage->Sidebar_Tips3 !='')
        <h6 id="st3">{{$newTicketPage->Sidebar_Tips3}}</h6>
        {{$newTicketPage->Sidebar_Tips3_details}}
        @endif
        <br><br>
        <div class="submit-ticket" id="sb">{{$newTicketPage->title}}</div>
        <form action="{{route('MainController.store_ticket')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <label for="category" class="mar-top-lab" id="category-label">{{$newTicketPage->Category_label}}</label>
            <select name="category" id="category" class="form-control">
              <option value="1">Getting Started</option>
              <option value="2">Shipping Methods</option>
              <option value="3">Tips and Tricks</option>
              <option value="4">Troubleshooting</option>
              <option value="5">Admin Panel</option>
              <option value="6">Customization</option>
            </select>
            <label for="sub-category" class="mar-top-lab" id="sub-category-label">{{$newTicketPage->Sub_Category_label}}</label>
            <select name="sub_category" id="sub-category" class="form-control">
              <option value="Introduction">Introduction</option>
              <option value="Installation">Installation</option>
              <option value="Billing">Billing</option>
              <option value="Shipping">Shipping</option>
              <option value="Import & Export ">Import & Export </option>
              <option value="Settings & Configuration ">Settings & Configuration </option>
            </select>
            <label for="title" class="mar-top-lab" id="subject-label">{{$newTicketPage->Subject_Label}}</label>
            <input type="text" name="title" class="form-control">
            <label for="content" class="mar-top-lab" id="description-label">{{$newTicketPage->Description_Label}}</label>
            <textarea name="content" id="content" cols="30" rows="10" class="contentsqd form-control">

            </textarea>
            <br>
            <input type="submit" name="submitTicket" id="submit" value="{{$newTicketPage->Submit_button}}" >
        </form>
        </div>
    </div>
    <section class="myfooter-single-article">
        @include('layouts.footer')   
    </section>


@endSection