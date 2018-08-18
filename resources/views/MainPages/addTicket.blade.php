@extends('layouts.main')


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
                    @else
                    <div class="mytickets login-t">
                        <a href="/login">Login</a>
                    </div>
                    @endif
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
                    
               </div>
              
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
        <div class="note-about-add-ticket">Befor you submit</div>
        <h6>Tell us!</h6>
        Add as much possible, including site and page name
        <br>
        <h6>Show us!</h6>
        Add a screenshot or a link to a video.
        

        <br><br>
        <div class="submit-ticket">Submit a Ticket</div>
        <form action="{{route('MainController.store_ticket')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <label for="category" class="mar-top-lab">Select the item you need help with</label>
            <select name="category" id="category" class="form-control">
              <option value="1">Getting Started</option>
              <option value="2">Shipping Methods</option>
              <option value="3">Tips and Tricks</option>
              <option value="4">Troubleshooting</option>
              <option value="5">Admin Panel</option>
              <option value="6">Customization</option>
            </select>
            <label for="sub-category" class="mar-top-lab">Select the sub categoy you need help with</label>
            <select name="sub_category" id="sub-category" class="form-control">
              <option value="Introduction">Introduction</option>
              <option value="Installation">Installation</option>
              <option value="Billing">Billing</option>
              <option value="Shipping">Shipping</option>
              <option value="Import & Export ">Import & Export </option>
              <option value="Settings & Configuration ">Settings & Configuration </option>
            </select>
            <label for="title" class="mar-top-lab">In a few words, tell us what your enquiry is about</label>
            <input type="text" name="title" class="form-control">
            <label for="content" class="mar-top-lab">Tell us more...Please be as detailed as possible</label>
            <textarea name="content" id="content" cols="30" rows="10" class="contentsqd form-control">

            </textarea>
            <br>
            <input type="submit" name="submit" id="submit" value="SUBMIT" >
        </form>
        </div>
    </div>
    <section class="myfooter-single-article">
        @include('layouts.footer')   
    </section>


@endSection