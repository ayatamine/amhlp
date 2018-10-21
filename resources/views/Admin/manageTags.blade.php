@extends('layouts.main')
<style>
    .admin-search{display: none !important}
    .admin-hide-show-menu{display: inline-block !important}
</style>
@section('content')




@include('Admin.layouts.header')
<input class="router" type="hidden" value="{{ "tags"}}">
<div class="ad-ar-content">
    @include('Admin.layouts.adminAreaLeftSide')
    <div class="content-inner tags-inner">
            <section class="flex-table-panel spacing">
                    <div class="flex-table-panel-header">
                        <!---->
                        <div class="header-inner default">
                            <div class="left">
                                <!----><button class="button primary" trans="">Add</button>
                            </div>
                            <div class="right">
                                <div class="input-container">
                                    <input class="search ng-untouched ng-pristine ng-valid" id="search-all-tags" placeholder="Search tags" trans-placeholder="" type="text">
                                    <img src="{{asset('img/search.png')}}" alt="search-icon">
                                </div>
                            </div>
                        </div>
                        <div class="header-inner selected">
                                <div class="left">11 <span trans="">Tags Selected</span></div>
                                <div class="right">
                                    <!----><button class="no-style delete-tags" tooltip="Delete" style="    padding: 5px 8px;border: 1px solid #cacaca;">
                                           <img src="{{asset('img/trash.png')}}" alt="delte-tag" class="" style="height:25px;width:23px;"> 
                                           </button>
                                </div>
                        </div>
                        <!---->
                    </div>
                    <div class="flex-table flex-table-bordered flex-table-compact flex-table-center-vertical flex-table-hover">
                        <div class="flex-table-row flex-table-header">
                            <div class="flex-table-item width-1">
                                <input class="pretty-checkbox" id="toggle-all-tags-checkbox" type="checkbox" value="">
                                <i class="fa fa-check"></i>
                                <label for="toggle-all-tags-checkbox" id="@foreach($tags as $tag){{$tag->id}}.@endforeach"><span></span></label>
                            </div>
                            <div class="flex-table-item" trans="">Name</div>
                            <div class="flex-table-item" trans="">Type</div>
                            <div class="flex-table-item width-3" trans="">Display Name</div>
                            <div class="flex-table-item" trans="">Number of Tickets</div>
                            <div class="flex-table-item width-1"></div>
                        </div>
                        <!---->
                        @foreach($tags as $tag)
                        <div class="flex-table-row" thisId="{{$tag->id}}">
                            <div class="flex-table-item width-1">
                                <input class="pretty-checkbox" type="checkbox" id="tag-checkbox-{{$tag->id}}" value="0">
                                <i class="fa fa-check"></i>
                            <label for="tag-checkbox-{{$tag->id}}" id="{{$tag->id}}"><span></span></label>
                            </div>
                            <div class="flex-table-item cat_name">{{$tag->category_name}}</div>
                            <div class="flex-table-item capitalize cat_type">{{$tag->type}}</div>
                            <div class="flex-table-item width-3 cat_display_name">{{$tag->display_name}}</div>
                            <div class="flex-table-item">{{$tag->article_number($tag->id,$tag->type,$tag->category_name)}}</div>
                            <div class="flex-table-item width-1 center edit-icon" tooltip="Edit Tag">
                                    <i class="fa fa-pencil " aria-hidden="true"></i>                         
                            </div>
                        </div>
                        @endforeach
                        
                      
                       
                        
                
                        <!---->
                    </div>
                
            </section>
             <!-- modals -->
             <div class="modal modal-visible modal-create-tags" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Create Tag</span>
                         <!---->
                     </h2>
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
             
                 <div class="many-inputs">
                     <div class="input-container">
                         <label for="name" trans="">Name</label>
                         <input id="name" name="name" type="text" class="form-control">
                         <!---->
                     </div>
             
                     <div class="input-container">
                            <label for="display_name" trans="">Display Name</label>
                            <input id="display-name" name="display_name" type="text" class="form-control">
                            <!---->
                     </div>
                     <div class="input-container">
                         <label for="type" trans="">Type</label>
                         <select name="type" id="type" class="form-control">
                             <option value="status">Status</option>
                             <option value="category">Category</option>
                             <option value="custom">Custom</option>
                         </select>
                         <!---->
                     </div>
             
                     
                    
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
             <div class="modal modal-visible modal-update-tags-details" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Update Tag</span>
                         <!---->
                     </h2>
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
             
                 <div class="many-inputs">
                     <div class="input-container">
                         <input type="hidden" id="cat-id">
                         <label for="name" trans="">Name</label>
                         <input id="name" name="name" type="text" class="form-control" disabled>
                         <!---->
                     </div>
             
                     <div class="input-container">
                            <label for="display_name" trans="">Display Name</label>
                            <input id="display-name" name="display_name" type="text" class="form-control">
                            <!---->
                     </div>
                     <div class="input-container">
                         <label for="type" trans="">Type</label>
                         <select name="type" id="type" class="form-control">
                             <option value="status">Status</option>
                             <option value="category">Category</option>
                             <option value="custom">Custom</option>
                         </select>
                         <!---->
                     </div>
             
                     
                    
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
             <div class="modal modal-visible modal-delete-tag" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Delete Tags</span>
                         <!---->
                     </h2>
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
             
                 <div class="confirm-content">
                         <p style="font-size: 1.2rem;">Are you sure you want to delete selected tags?</p>
                 </div>
             
                 <div class="buttons right">
                     <button class="button cancel" trans="" type="button">Cancel</button>
                     <button class="button primary submit-button" type="submit">
                         <!----><span trans="">Delete</span>
                         <!---->
                     </button>
                 </div>
              </form>
             </div>
    </div>
</div>

@endSection