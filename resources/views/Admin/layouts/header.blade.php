<div class="navbar intro-navbar ad-navbar">
        @if(Auth::check())
        <nav class="nav-content ad-nav-content">
             Poostel 
        </nav>
        <i class="fa fa-bars fa-lg admin-hide-show-menu"></i>
        <div class="admin-search">
            <form action="" method="GET">
                {{csrf_field()}}
                <input class="form-control" type="text" name="admin-search" id="admin-search" placeholder="search">
                <img src="{{asset('img/search.png')}}" alt="search-icon">
            </form>
        </div>
        @else
        <nav class="nav-content ">
               {{$siteSettings->site_name}}
        </nav>
        
        @endif
        @if(Auth::check())
        <div class="mytickets ad-mytickets">
           
            <span class="logged-in-widget ad-logged-in-widget"><img src="{{asset('img/loggedin.png')}}" style="height:35px;width:35px;margin-right: 10px;" alt="logged-in-avatar">@if(Auth::check()){{Auth::user()->email}} @endif<i class="fa fa-caret-down" aria-hidden="true"></i> </span>
            <div class="dropdown-auth hide-dropdown ">
                <ul class="list-unstyled">
                    <li>
                            <i class="fa fa-th-large" aria-hidden="true" style="font-size: 17px;"></i>
                            <a href="{{route('MainController.myTickets')}}">Admin Area</a>
                    </li>

                    <li>
                            <img src="{{asset('img/inbox.png')}}"  alt="inbox" id="inbox-img">
                            <a href="/#">Agent Mailbox</a>
                    </li>
            
                    <li>
                          <i class="fa fa-file-text" aria-hidden="true" style="font-size:17px"></i><a href="/#">Help Center</a>
                    </li>
                    <li>
                           <i class="fa fa-cog fa-lg"></i> <a href="/#">Account Settings</a>
                    </li>
                    <li>
                        <i class="fa fa-sign-out"></i><a href="/logout"> Log Out</a>
                    </li>
                    
                </ul>
            </div>
            <div class=" xs-dropdown-auth hide-dropdown ad-xs-dropdown-auth  ">
                    <ul class="list-unstyled">
                    <li>
                            <i class="fa fa-th-large" aria-hidden="true" style="font-size: 17px;"></i><a href="{{route('MainController.myTickets')}}">Admin Area</a>
                    </li>

                    <li>
                            <img src="{{asset('img/inbox.png')}}"  alt="inbox"  id="inbox-img">
                            <a href="/#">Agent Mailbox</a>
                    </li>
            
                    <li>
                          <i class="fa fa-file-text" aria-hidden="true" style="font-size:17px"></i><a href="/#">Help Center</a>
                    </li>
                    <li>
                           <i class="fa fa-cog fa-lg"></i> <a href="/#">Account Settings</a>
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