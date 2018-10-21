@extends('layouts.main')
<style>
    .admin-search{display: none !important}
    .admin-hide-show-menu{display: inline-block !important}
</style>
@section('content')




@include('Admin.layouts.header')
<input class="router" type="hidden" value="{{ "pages"}}">
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
                                    <input class="search ng-untouched ng-pristine ng-valid" placeholder="Search Pags" trans-placeholder="" type="text">
                                    <img src="{{asset('img/search.png')}}" alt="search-icon">
                                </div>
                            </div>
                        </div>
                        <div class="header-inner selected">
                                <div class="left">11 <span trans="">Pags Selected</span></div>
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
                                <input class="pretty-checkbox" id="toggle-all-tags-checkbox" type="checkbox" value="">
                                <i class="fa fa-check"></i>
                                <label for="toggle-all-tags-checkbox"><span></span></label>
                            </div>
                            <div class="flex-table-item" trans="">Slug</div>
                            <div class="flex-table-item" trans="">Body</div>
                            <div class="flex-table-item width-3" trans="">Created At</div>
                            <div class="flex-table-item" trans="">Last Update</div>
                            <div class="flex-table-item width-1"></div>
                        </div>
                        <!---->
                        <div class="flex-table-row">
                            <div class="flex-table-item width-1">
                                <input class="pretty-checkbox" type="checkbox" id="tag-checkbox-0" value="0">
                                <i class="fa fa-check"></i>
                                <label for="tag-checkbox-0"><span></span></label>
                            </div>
                            <div class="flex-table-item">How to create database</div>
                            <div class="flex-table-item capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex architecto voluptate numquam. </div>
                            <div class="flex-table-item width-3">25-05-2018</div>
                            <div class="flex-table-item">3-06-2018</div>
                            <div class="flex-table-item width-1 center edit-icon" tooltip="Edit Tag">
                                    <i class="fa fa-pencil " aria-hidden="true"></i>                         
                            </div>
                        </div>
                      
                        
                       
                        
                
                        <!---->
                    </div>
                
            </section>
             <!-- modals -->
            
             <div class="modal modal-visible modal-delete-pages" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Delete Pags</span>
                         <!---->
                     </h2>
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
             
                 <div class="confirm-content">
                         <p style="font-size: 1.2rem;">Are you sure you want to delete selected pages?</p>
                 </div>
             
                 <div class="buttons right">
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