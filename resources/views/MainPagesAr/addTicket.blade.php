@extends('layouts.mainAr')


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
                            <span class="logged-in-widget"><img src="{{asset('img/loggedin.png')}}" style="height:35px;width:35px;margin-left: 10px;" alt="logged-in-avatar">@if(Auth::check()){{Auth::user()->email}} @endif<i class="fa fa-caret-down" aria-hidden="true"></i> </span>
                            <div class="dropdown-auth hide-dropdown">
                                <ul class="list-unstyled">
                                    <li>
                                    <a href="{{route('MainController.myTickets')}}">مقالاتي</a>
                                    </li>
    
                                    <li>
                                            <a href="/#">سياسة الخصوصية</a>
                                    </li>
                                    <li>
                                            <a href="/#">شروط الخدمة</a>
                                    </li>
                                    <li>
                                            <a href="/#">وظائف</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-sign-out"></i><a href="/logout">تسجيل الخروج</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class=" xs-dropdown-auth hide-dropdown ">
                                    <ul class="list-unstyled">
                                        <li>
                                                <a href="{{route('MainController.myTickets')}}">مقالاتي</a>                   
                                        </li>
                                        <li>
                                                <a href="/#">سياسة الخصوصية</a>
                                        </li>
                                        <li>
                                                <a href="/#">شروط الخدمة</a>
                                        </li>
                                        <li>
                                                <a href="/#">وظائف</a>
                                        </li>       
                                        <li>
                                            <i class="fa fa-sign-out"></i><a href="/logout">تسجيل الخروج</a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        @else
                            <div class="mytickets login-t">
                                <a href="/#">سياسة الخصوصية</a>
                                <a href="/#">شروط الخدمة</a>
                                <a href="/#">وظائف</a>
                                <a href="/login" id="login-link">تسجيل الدخول</a>
                            </div>
                            <div class="mytickets xs-login-t">
                                    <a href="/login" id="login-link">تسجيل الدخول</a>
                            </div>
                        @endif
                   
                </div>
                <div class="nav-scroller ">
                        <nav class="nav nav-underline">
                          <a class="nav-link active" href="#">لوحة التحكم</a>
                          <a class="nav-link" href="#">
                            الاصدقاء
                            <span class="badge badge-pill bg-light align-text-bottom">27</span>
                          </a>
                          <a class="nav-link" href="#">تصفح</a>
                          <a class="nav-link" href="#">اقتراحات</a>
                          <a class="nav-link" href="#">رابط</a>
                          <a class="nav-link" href="#">رابط</a>
                          <a class="nav-link" href="#">رابط</a>
                          <a class="nav-link" href="#">رابط</a>
                          <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                                <span class="navbar-toggler-icon"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></span>
                          </button>  
                        </nav>
                       
                </div>
                <div class="nav-full ">
                        <nav class="nav nav-underline">
                          <a class="nav-link active" href="#">لوحة التحكم</a>
                          <a class="nav-link" href="#">
                            الاصدقاء
                            <span class="badge badge-pill bg-light align-text-bottom">27</span>
                          </a>
                          <a class="nav-link" href="#">تصفح</a>
                          <a class="nav-link" href="#">اقتراحات</a>
                          <a class="nav-link" href="#">رابط</a>
                          <a class="nav-link" href="#">رابط</a>
                          <a class="nav-link" href="#">رابط</a>
                          <a class="nav-link" href="#">رابط</a>
                          
                        </nav>
                       
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