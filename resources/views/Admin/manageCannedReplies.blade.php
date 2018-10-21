@extends('layouts.main')
<style>
    .admin-search{display: none !important}
    .admin-hide-show-menu{display: inline-block !important}
</style>
@section('content')




@include('Admin.layouts.header')
<input class="router" type="hidden" value="{{ "CannedReplies"}}">
<div class="ad-ar-content">
    @include('Admin.layouts.adminAreaLeftSide')
    <div class="content-inner canned-replies-inner">
            <section class="flex-table-panel spacing">
                    <div class="flex-table-panel-header">
                        <!---->
                        <div class="header-inner default">
                            <div class="left">
                                <!----><button class="button primary add-new-canned" trans="">Add</button>
                            </div>
                            <div class="right">
                                <div class="input-container">
                                    <input class="search ng-untouched ng-pristine ng-valid" id="search-all-canned-replies"  placeholder="Search Canned Replies" trans-placeholder="" type="text">
                                    <img src="{{asset('img/search.png')}}" alt="search-icon">
                                </div>
                            </div>
                        </div>
                        <div class="header-inner selected">
                                <div class="left">11 <span trans="">Canned Replies Selected</span></div>
                                <div class="right">
                                    <!----><button class="no-style" tooltip="Delete" style="    padding: 5px 8px;border: 1px solid #cacaca;">
                                           <img src="{{asset('img/trash.png')}}" alt="delte-user" class="create-child-category" style="height:25px;width:23px;"> 
                                           </button>
                                </div>
                        </div>
                        <!---->
                    </div>
                    <div class="flex-table flex-table-bordered flex-table-compact flex-table-center-vertical flex-table-hover">
                        <div class="flex-table-row flex-table-header">
                            <div class="flex-table-item width-1">
                                <input class="pretty-checkbox" id="toggle-all-canned-replies-checkbox" type="checkbox" value="">
                                <i class="fa fa-check"></i>
                                <label for="toggle-all-canned-replies-checkbox" id="@foreach($canned_replies as $reply){{$reply->id}}.@endforeach"><span></span></label>
                            </div>
                            <div class="flex-table-item" trans="">Name</div>
                            <div class="flex-table-item" trans="">Body</div>
                            <div class="flex-table-item width-3" trans="">Belongs To</div>
                            <div class="flex-table-item" trans="">Created At</div>
                            <div class="flex-table-item width-1"></div>
                        </div>
                        <!---->
                        @if($canned_replies->count() > 0)
                        @foreach($canned_replies as $reply)
                        <div class="flex-table-row" thisId="{{$reply->id}}">
                            <div class="flex-table-item width-1">
                                <input class="pretty-checkbox" type="checkbox" id="tag-checkbox-{{$reply->id}}" value="">
                                <i class="fa fa-check"></i>
                                <label for="tag-checkbox-{{$reply->id}}" id="{{$reply->id}}"><span></span></label>
                            </div>
                            <div class="flex-table-item canned-name">{{$reply->name}}</div>
                            <div class="flex-table-item capitalize canned-content">{!! str_limit($reply->reply_content,250) !!}</div>
                            <div class="flex-table-item width-3 user-email">{{$reply->user->email}}</div>
                            <div class="flex-table-item canned-created-at">{{date("d-m-o",strtotime($reply->created_at))}}</div>
                            <div class="flex-table-item width-1 center edit-icon edit-canned-reply" tooltip="Edit Tag">
                                    <i class="fa fa-pencil " aria-hidden="true"></i>                         
                            </div>
                        </div>
                       @endforeach
                       @endif
                        
                       
                        
                
                        <!---->
                    </div>
                
            </section>
             <!-- modals -->
            
             <div class="modal modal-visible modal-delete-canned-reply" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <input type="hidden" id="canned-to-delete">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Delete Canned Replies</span>
                         <!---->
                     </h2>
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
             
                 <div class="confirm-content">
                         <p style="font-size: 1.2rem;">Are you sure you want to delete selected replies?</p>
                 </div>
             
                 <div class="buttons right">
                     <button class="button primary submit-button" type="submit">
                         <!----><span trans="">Delete</span>
                         <!---->
                     </button>
                 </div>
              </form>
             </div>
             <div class="modal modal-visible modal-add-canned-reply" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >New Canned Reply</span>
                         <!---->
                     </h2>
                     
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
             
                 <div class="input-container">
                    <label for="canned-reply-name" trans="">Name</label>
                    <input id="canned-reply-name" type="text" class="ng-untouched ng-pristine ng-valid">
                    <!---->
                </div>
                <div class="input-container">
                    <label for="canned-reply-name" trans="">Canned Reply Body</label>
                    <textarea name="cannedreplybody" id="canned-reply" cols="30" rows="10" ></textarea>
                    <!---->
                </div>
             
                <div class="buttons right">
                    <button class="button cancel" trans="" type="button">CANCEL</button>
                    <button class="button primary submit-button" type="submit">
                        <!----><span trans="">CREATE</span>
                        <!---->
                    </button>
                </div>
              </form>
            </div>
            <div class="modal modal-visible modal-update-canned-reply" style="z-index: 11;"><div class="backdrop"></div>
            
             <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                <div class="modal-heading">
                    <h2 class="modal-title" style="    font-size: 1.7rem;">
                        <!----><span trans="" >Update Canned Reply</span>
                        <!---->
                    </h2>
                    
                    <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                        <i class="fa fa-close fa-lg"></i>
                    </button>
                </div>
            
                <div class="input-container">

                    <input type="hidden" id="canned-reply-id" name="">
                   <label for="canned-reply-name" trans="">Name</label>
                   <input id="canned-reply-name" type="text" class="ng-untouched ng-pristine ng-valid">
                   <!---->
               </div>
               <div class="input-container">
                   <label for="canned-reply-name" trans="">Canned Reply Body</label>
                   <textarea name="cannedreplybody" id="canned-reply-update" cols="30" rows="10" ></textarea>
                   <!---->
               </div>
            
               <div class="buttons right">
                   <button class="button cancel" trans="" type="button">CANCEL</button>
                   <button class="button primary submit-button" type="submit">
                       <!----><span trans="">UPDATE</span>
                       <!---->
                   </button>
               </div>
             </form>
           </div>
    </div>
</div>

@endSection