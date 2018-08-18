@extends('layouts.mainAr')


@section('content')
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
    <div class="articles-search-header articles-search-header-single-article" >
        <div class=" container " style="padding-right:0">
         <div class="row" style="    margin-right: 41px;         ">
         <div class="title-article-link  col-sm-5" style="padding:0;"><a href="{{route('MainControllerAr.helpCenter')}}" style="color:#4c535a;text-decoration:none">مركز الدعم</a>  ><span style="color: #34AD00;text-decoration:none">اضافة مقال </span></div>
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
                @if($errors->has('title'))
                <div class="alert-danger">{{$errors->first('title')}}</div>
                @endif
        <div class="note-about-add-ticket">قبل اضافة الموضوع</div>
        <h6>أخبرنا </h6>
        اضف تفصيلا بقدر الامكان .
        <br>
        <h6>أرنا</h6>
        أضف صورا أو رابط فيديو وصفي.

        <br><br>
        <div class="submit-ticket">إضافة موضوع</div>
        <form action="{{route('MainControllerAr.store_ticket')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <label for="category" class="mar-top-lab">اختر العنصر الدي تود المساعدة فيه</label>
            <select name="category" id="category" class="form-control">
              <option value="7">ابدء</option>
              <option value="8">طرق الشحن</option>
              <option value="9">طرق ونصائح</option>
              <option value="10">استكشاف الأخطاء واصلاحها</option>
              <option value="11">لوحة الأدمن</option>
              <option value="12">تخصيص</option>
            </select>
            <label for="sub-category" class="mar-top-lab">اختر العنصر الفرعي الدي تود المساعدة فيه</label>
            <select name="sub_category" id="sub-category" class="form-control">
             
              <option value="Introduction">مقدمة</option>
              <option value="Installation">التثبيت</option>
              <option value="Billing">فواتير</option>
              <option value="Shipping">الشحن</option>
              <option value="Import & Export ">استيراد وتصدير</option>
              <option value="Settings & Configuration ">ضبط وإعدادات </option>
            </select>
            <label for="title" class="mar-top-lab"> ادخل العنوان</label>
            <input type="text" name="title" class="form-control">
            <label for="content" class="mar-top-lab">ادخل كل التفاصيل الخاصة بالموضوع</label>
            <textarea name="content" id="content" cols="30" rows="10" class="contentsqd form-control">

            </textarea>
            <br>
            <input type="submit" name="submit" id="submit" value="اضافة" >
        </form>
        </div>
    </div>
    <section class="myfooter-single-article">
        @include('layouts.footerAr')   
    </section>


@endSection