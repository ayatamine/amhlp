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
    <div class="content-inner groups-inner">
            <div class="spacing-container">

                    <section class="admin-pill-nav solid with-actions">
                        <div class="new-group">
                            <!----><button class="button flat" trans="">New Group</button>
                        </div>
                        <?php $i=0; ?>
                        @foreach($groups as $group)
                        <div class="nav-item <?php if($i==0){echo "selected";} ?>">
                                <div class="name">{{$group->group_name}}</div>
                                <dropdown class="actions">
                                    <button class="no-style"><i class="fa fa-cog fa-lg" style="margin-top: 6px;"></i></button>
                                    
                                </dropdown>
                                <div class="dropdown-menu transformed grp-dropdown" thisId="{{$group->id}}">
                                    <!----><div class="dropdown-item" trans="">Edit</div>
                                    <!----><div class="dropdown-item" trans="">Delete</div>
                                </div>
                        </div>
                        <?php $i++; ?>
                        @endforeach
                       
                        <!---->
                    </section>
                
                    <!----><section class="flex-table-panel">
                        <div class="flex-table-panel-head">
                            <div class="header-inner default">
                                <!----><div class="left">
                                    <button class="button  flat assign-button" id="assign-button" trans="">Assign Users</button>
                                    <button class="button  flat unassign-button" id="unassign-button" trans="" disabled="">Unassign Users</button>
                                </div>
                                <div class="right">
                                    <div class="input-container">
                                        <input class="search ng-untouched ng-pristine ng-valid" id="search_groups" placeholder="Search Users" trans-placeholder="" type="text">
                                        <img src="{{asset('img/search.png')}}" alt="search-icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-table flex-table-bordered flex-table-compact flex-table-center-vertical flex-table-hover">
                            <div class="flex-table-row flex-table-header">
                                <div class="flex-table-item width-1">
                                    <input class="pretty-checkbox" id="toggle-all-users-checkbox" type="checkbox">
                                    <i class="fa fa-check"></i>
                                    <label for="toggle-all-users-checkbox" id="@foreach($first_group as $grp){{$grp->user->id}}.@endforeach"><span></span></label>
                                </div>
                                <div class="flex-table-item width-2 image" trans="">Avatar</div>
                                <div class="flex-table-item width-3" trans="">Email</div>
                                <div class="flex-table-item" trans="">First Name</div>
                                <div class="flex-table-item" trans="">Last Name</div>
                                <div class="flex-table-item width-1"></div>
                            </div>
                            
                            <!----><div class="table-body all-users-of-group">
                                @if($first_group->count() > 0)
                                  @foreach($first_group as $user)
                                   <div class="flex-table-row">
                                        <div class="flex-table-item width-1">
                                                <input class="pretty-checkbox" id="user-checkbox-{{$user->user->id}}" type="checkbox">
                                                <i class="fa fa-check " ></i>
                                                <label for="user-checkbox-{{$user->user->id}}" id="{{$user->user->id}}"><span></span></label>
                                            </div>
                                            <div class="flex-table-item width-2 image" trans=""><img class="user-group-avatar" src="{{asset('img')}}/{{$user->user->avatar}}" alt=""></div>
                                            <div class="flex-table-item width-3" trans="">{{$user->user->email}}</div>
                                            <div class="flex-table-item" trans="">{{$user->user->firstname}}</div>
                                            <div class="flex-table-item" trans="">{{$user->user->lastname}}</div>
                                            <div class="flex-table-item width-1"></div>
                                         
                                      
                                    </div>
                                   @endforeach
                                @endif
                            </div>
                        </div>
                
                        <div class="flex-table-panel-footer hidden">
                        </div>
                    </section>
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
                            </div>
                            <div class="emails-result"></div>
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
                                        <button class="primary select-permissions-modal-button mat-flat-button mat-accent " id="mat-raised-button" color="accent" mat-flat-button="" trans="" type="button"><span class="mat-button-wrapper">Add</span><div class="mat-button-ripple mat-ripple" matripple=""></div><div class="mat-button-focus-overlay"></div></button>
                                </div>
                            </div>
                            <div class="panel-body permissions-panel manage-permissions">
                                <!---->
                                <!----><div class="no-permissions" trans="">No permissions yet.</div>
                            </div>
                                <div class="setting-checkbox">
                                <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="default" value="Default" name="default" type="checkbox">
                                <i class="fa fa-check fa-check-grp" ></i>
                                <label for="default" trans="" >Default</label>
                                <p trans="">Assign this group to new users automatically.</p>
                                <!---->
                                </div>
                                <div class="setting-checkbox">
                                <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="guest" value="Guests" name="guest" type="checkbox">
                                <i class="fa fa-check fa-check-grp"></i>
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
                            <input type="hidden" id="id">
                            <label for="name" trans="">Name</label>
                            <input id="name" name="name" type="text" class="form-control">
                            <!---->
                     </div>
                     
             
                    
                     <div class="panel-outter">
                            <div class="header">
                                <div class="title" trans="">Group Permissions</div>
                                <!----><div class="add-button">
                                        <button class="select-permissions-modal-button mat-flat-button mat-accent primary" id="mat-raised-button" color="accent" mat-flat-button="" trans="" type="button"><span class="mat-button-wrapper">Add</span><div class="mat-button-ripple mat-ripple" matripple=""></div><div class="mat-button-focus-overlay"></div></button>
                                </div>
                            </div>
                            <div class="panel-body permissions-panel">
                                <!---->
                                <!----><div class="no-permissions" trans="">No permissions yet.</div>
                                <div class="manage-permissions">
                                        <!---->
                         
                                       
                                </div>
                            </div>
                           
                      </div>
                 </div>
             
                 <div class="buttons right">
                     <button class="button cancel" trans="" type="button">Cancel</button>
                     <button class="button primary submit-button" type="submit">
                         <!----><span trans="">Update</span>
                         <!---->
                     </button>
                 </div>
              </form>
             </div>
             <div class="modal modal-visible modal-add-permissions" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y">
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="">Select Permissions</span>
                         <!---->
                     </h2>
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
             
                 <mat-dialog-content class="mat-dialog-content scroll-container" customscrollbar="">
                        <mat-accordion class="mat-accordion">
                            @foreach($all_permissions as $permission)
                             @if($permission->parent_id =="0")
                            <!----><mat-expansion-panel class="mat-elevation-z2 mat-expansion-panel ng-tns-c32-93 ng-star-inserted" style=""><mat-expansion-panel-header class="mat-expansion-panel-header ng-tns-c33-94 ng-trigger ng-trigger-expansionHeight ng-star-inserted" role="button" id="mat-expansion-panel-header-38" tabindex="0" aria-controls="cdk-accordion-child-38" aria-expanded="false" aria-disabled="false" style="height: 48px;outline:0px;"><span class="mat-content"><mat-panel-title class="mat-expansion-panel-header-title">{{$permission->permission_name}}</mat-panel-title>
                                    
                                </span><!----><span class="mat-expansion-indicator ng-tns-c33-94 ng-trigger ng-trigger-indicatorRotate ng-star-inserted" style="transform: rotate(0deg);"><i class="fa fa-chevron-down"></i></span></mat-expansion-panel-header><div class="mat-expansion-panel-content ng-trigger ng-trigger-bodyExpansion" role="region" aria-labelledby="mat-expansion-panel-header-38" id="cdk-accordion-child-38" style="height: 0px; visibility: hidden;"><div class="mat-expansion-panel-body">
                                
                                @foreach($permission->getChildren($permission->id) as $child_per)
                                <mat-selection-list class="mat-selection-list" role="listbox" tabindex="0" aria-disabled="false">
                                   @if($child_per->permission_description !='')
                                <mat-list-option class="mat-list-item mat-list-option mat-2-line ng-star-inserted" role="option" tabindex="-1" aria-selected="false" aria-disabled="false" style=""><div class="mat-list-item-content mat-list-item-content-reverse"><div class="mat-list-item-ripple mat-ripple" mat-ripple=""></div><mat-pseudo-checkbox class="mat-pseudo-checkbox mat-pseudo-checkbox-per"><i class="fa fa-check fa-lg" clicktype="check-permission"></i><input type="hidden" value="{{$child_per->id}}"></mat-pseudo-checkbox><div class="mat-list-text">
                                        <p class="permission-name mat-line" matline="">{{$child_per->permission_name}}</p>
                                        <!----><p class="mat-line ng-star-inserted" matline="">{{$child_per->permission_description}}</p>
                                    </div></div></mat-list-option>

                                   @else
                                    <!----><mat-list-option class="mat-list-item mat-list-option ng-star-inserted" role="option" tabindex="-1" aria-selected="false" aria-disabled="false" style=""><div class="mat-list-item-content mat-list-item-content-reverse"><div class="mat-list-item-ripple mat-ripple" mat-ripple=""></div><mat-pseudo-checkbox class="mat-pseudo-checkbox mat-pseudo-checkbox-per"><i class="fa fa-check fa-lg " clicktype="check-permission"></i><input type="hidden" value="{{$child_per->id}}"></mat-pseudo-checkbox><div class="mat-list-text">
                                        <p class="permission-name mat-line" matline="">{{$child_per->permission_name}}</p>
                                        <!---->
                                        
                                    </div></div></mat-list-option>
                                    @endif
                                </mat-selection-list>
                                @endforeach
                            <!----></div></div></mat-expansion-panel>
                               @endif
                            @endforeach
                            
                        </mat-accordion>
                    </mat-dialog-content>
             
                 <div class="buttons right">
                     <button class="button close-role-per-modal" type="submit">
                         <!----><span trans="">Cancel</span>
                         <!---->
                     </button>
                     <button class="button primary submit-button" type="submit">
                         <!----><span trans="">Select</span>
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
             <div class="modal modal-visible modal-unassign-user-from-grp" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Remove user from Group</span>
                         <!---->
                     </h2>
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
             
                 <div class="confirm-content">
                         <p style="font-size: 1.2rem;">Are you sure you want to remove selected users from this group?</p>
                 </div>
             
                 <div class="buttons right">
                     <button class="button cancel" trans="" type="button">Cancel</button>
                     <button class="button primary submit-button" type="submit">
                         <!----><span trans="">Remove</span>
                         <!---->
                     </button>
                 </div>
              </form>
             </div>
             
    </div>
</div>

@endSection