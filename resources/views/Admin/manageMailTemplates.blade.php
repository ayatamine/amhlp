@extends('layouts.main')
<style>
    .admin-search{display: none !important}
    .admin-hide-show-menu{display: inline-block !important}
</style>
@section('content')




@include('Admin.layouts.header')
<input class="router" type="hidden" value="{{ "groups"}}">
<div class="ad-ar-content">
    @include('Admin.layouts.adminAreaLeftSide')
    <div class="content-inner mail-templates">
            
                <div class="header">
                    <div class="title">Generic</div>
                    <div class="actions">
                        <div class="action change-layout-action">
                            <div class="filter-articles-table">
                                
                                <i class="fa fa-th fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-th-list fa-lg" aria-hidden="true"></i>
                    
                            </div>
                        </div>
                    </div>
                        <!----><button class="button primary" trans="">Update</button>
                </div>
                <div class="many-inputs">
                    <div class="input-container">
                        <label for="selected-template" trans="">Selected Template</label>
                        <select id="selected-template" name="selected-template" class="ng-valid ng-dirty ng-touched">
                            <!----><option value="0">Generic</option><option value="1">Ticket Created Notification</option><option value="2">Ticket Rejected Notification</option><option value="3">Ticket Reply</option>
                        </select>
                    </div>
                    <div class="input-container">
                        <label for="subject" trans="">Subject</label>
                        <input id="subject" name="subject" type="text" class="ng-untouched ng-pristine ng-valid" value="EMAIL_SUBJECT">
                        <!---->
                    </div>
                </div>
                <div class="label">
                    <div class="types">
                        <button class="type no-style selected">HTML</button>
                        <!----><button class="type no-style" trans="">Plaintext</button>
                    </div>
                    <div class="actions">
                        <!----><button class="button flat" trans="">Restore Default</button>
                    </div>
                </div>
            <div class="template row">
                    <!---->
                  <div id="editor" class="col-xs-6">
                        @section('mailcontent')
                        <p>{{$body}}</p>
                        @endsection
                  </div>  
                  <mail-template-preview class="col-xs-6 mail-template-content">
                    @include('Admin.layouts.emailsHeader')
                    
                   <!-- <iframe src="about:blank" __idm_frm__="168" style="height: 150px;width: 100%;"></iframe>-->
                
                </mail-template-preview>
            </div>

             <!-- modals -->
            
             <div class="modal modal-visible modal-assign-user-togrp" style="z-index: 11;"><div class="backdrop"></div>
                <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                    <div class="modal-heading">
                        <h2 class="modal-title" style="    font-size: 1.7rem;">
                            <!----><span trans="" >Assign User to Group name</span>
                            <!---->
                        </h2>
                        <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                            <i class="fa fa-close fa-lg"></i>
                        </button>
                    </div>
                    
                   
                    <div class="many-inputs">
                            <div class="assign-users">
                                <div class="label" trans="">Users</div>
                                <button class="no-style more" trans="" type="button">Assign More</button>
                            </div>
                            <!----><div class="input-container with-addon">
                                <input placeholder="Email Address" type="text" id="0" class="ng-valid ng-touched ng-dirty">
                                <i class="fa fa-close fa-lg"></i>
                                <!---->
                            </div><div class="input-container with-addon">
                                <input placeholder="Email Address" type="text" id="1" class="ng-untouched ng-pristine ng-valid">
                                <i class="fa fa-close fa-lg"></i>
                                <!---->
                            </div>
                    </div>
                
                    <div class="buttons right">
                        <button class="button cancel" trans="" type="button">CANCEL</button>
                        <button class="button primary submit-button" type="submit">
                            <!----><span trans="">ASSIGN</span>
                            <!---->
                        </button>
                    </div>
                </form>
               
             </div>
             
             <div class="modal modal-visible modal-add-group" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Create a New Group</span>
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
                     
             
                    
                     <div class="panel-outter">
                            <div class="header">
                                <div class="title" trans="">Group Permissions</div>
                                <!----><div class="add-button">
                                    <button class="button flat select-permissions-modal-button" trans="" type="button">Add</button>
                                </div>
                            </div>
                            <div class="panel-body permissions-panel">
                                <!---->
                                <!----><div class="no-permissions" trans="">No permissions yet.</div>
                            </div>
                            <div class="setting-checkbox">
                                    <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="default" name="default" type="checkbox">
                                    <label for="default" trans="">Default</label>
                                    <p trans="">Assign this group to new users automatically.</p>
                                    <!---->
                            </div>
                            <div class="setting-checkbox">
                                    <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="guest" name="guest" type="checkbox">
                                    <label for="guest" trans="">Guests</label>
                                    <p trans="">Assign this group to guests (not logged in users).</p>
                                    <!---->
                            </div>
                      </div>
                 </div>
             
                 <div class="buttons right">
                     <button class="button cancel" trans="" type="button">Cancel</button>
                     <button class="button primary submit-button" type="submit">
                         <!----><span trans="">Create</span>
                         <!---->
                     </button>
                 </div>
              </form>
             </div>
             <div class="modal modal-visible modal-update-group" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Update Group</span>
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
                     
             
                    
                     <div class="panel-outter">
                            <div class="header">
                                <div class="title" trans="">Group Permissions</div>
                                <!----><div class="add-button">
                                    <button class="button flat select-permissions-modal-button" trans="" type="button">Add</button>
                                </div>
                            </div>
                            <div class="panel-body permissions-panel">
                                <!---->
                                <!----><div class="no-permissions" trans="">No permissions yet.</div>
                                <div class="manage-permissions">
                                        <!---->
                         
                                        <!----><div class="permission">
                                            <span>categories.view</span>
                                            <button class="remove-icon round-close-button" title="Remove"><i class="fa fa-close"></i></button>
                                        </div><div class="permission">
                                            <span>articles.view</span>
                                            <button class="remove-icon round-close-button" title="Remove"><i class="fa fa-close"></i></button>
                                        </div><div class="permission">
                                            <span>tags.view</span>
                                            <button class="remove-icon round-close-button" title="Remove"><i class="fa fa-close"></i></button>
                                        </div>
                                </div>
                            </div>
                            <div class="setting-checkbox">
                                    <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="default" name="default" type="checkbox">
                                    <label for="default" trans="">Default</label>
                                    <p trans="">Assign this group to new users automatically.</p>
                                    <!---->
                            </div>
                            <div class="setting-checkbox">
                                    <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="guest" name="guest" type="checkbox">
                                    <label for="guest" trans="">Guests</label>
                                    <p trans="">Assign this group to guests (not logged in users).</p>
                                    <!---->
                            </div>
                      </div>
                 </div>
             
                 <div class="buttons right">
                     <button class="button cancel" trans="" type="button">Cancel</button>
                     <button class="button primary submit-button" type="submit">
                         <!----><span trans="">Create</span>
                         <!---->
                     </button>
                 </div>
              </form>
             </div>
             <div class="modal modal-visible modal-delete-groupe" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Delete Group</span>
                         <!---->
                     </h2>
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
             
                 <div class="confirm-content">
                         <p style="font-size: 1.2rem;">Are you sure you want to delete this group?</p>
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