@extends('layouts.main')
<style>
    .admin-search{display: none !important}
    .admin-hide-show-menu{display: inline-block !important}
</style>
@section('content')




@include('Admin.layouts.header')
<input class="router" type="hidden" value="{{ "users"}}">
<div class="ad-ar-content">
    @include('Admin.layouts.adminAreaLeftSide')
    <div class="content-inner users-inner">
            <section class="flex-table-panel spacing">
               <div class="flex-table-panel-header">
                   <!----><div class="header-inner default">
                       <div class="left">
                           <!----><button class="button primary add-user" trans="">Add</button>
                       </div>
                       <div class="right">
                           <div class="input-container">
                               <input class="search ng-valid ng-dirty ng-touched" placeholder="Search users" trans-placeholder="" type="text">
                               <img src="{{asset('img/search.png')}}" alt="search-icon">
                           </div>
                       </div>
                   </div>
                   <!---->
                   <div class="header-inner selected">
                        <div class="left">1 <span trans="">Users Selected</span></div>
                        <div class="right">
                            <!----><button class="no-style" tooltip="Delete" style="    padding: 5px 8px;border: 1px solid #cacaca;">
                                    <img src="{{asset('img/trash.png')}}" alt="delte-user" class="create-child-category" style="height:25px;width:23px;"> 
                            </button>
                        </div>
                    </div>
               </div>
               <div class="flex-table flex-table-bordered flex-table-compact flex-table-center-vertical">
                   <div class="flex-table-row flex-table-header">
                       <div class="flex-table-item width-1">
                           <input class="pretty-checkbox" id="toggle-all-users-checkbox" type="checkbox">
                           <i class="fa fa-check"></i>
                           <label for="toggle-all-users-checkbox" id="@foreach($users as $user){{$user->id}}.@endforeach"><span></span></label>
                       </div>
                       <div class="flex-table-item width-2 image" trans="">Avatar</div>
                       <div class="flex-table-item width-3" trans="">Email</div>
                       <div class="flex-table-item" trans="">Roles</div>
                       <div class="flex-table-item" trans="">Permissions</div>
                       <div class="flex-table-item" trans="">First Name</div>
                       <div class="flex-table-item" trans="">Last Name</div>
                       <div class="flex-table-item width-1"></div>
                   </div>
                   <!---->
                   @foreach($users as $user)
                   <div class="flex-table-row" thisId={{$user->id}}>
                       <div class="flex-table-item width-1">
                           <input class="pretty-checkbox" type="checkbox" id="user-checkbox-{{$user->id}}" value="0">
                           <i class="fa fa-check"></i>
                           <label for="user-checkbox-{{$user->id}}" id="{{$user->id}}"><span></span></label>
                       </div>
                       <div class="flex-table-item width-2 image user-avatar"><img src="{{asset('img')}}/{{$user->avatar}}"></div>
                       <div class="flex-table-item width-3 no-wrap user-email">{{$user->email}}</div>
                       <div class="flex-table-item capitalize no-wrap clickable user-roles">
                            <input type="hidden" id="all-roles" value="@foreach($user->user_groups($user->id) as $role){{$role->id}}.@endforeach" >                            
                          <span id="grp-id">@foreach($user->user_groups($user->id) as $group){{$group->group_name}}@if(count($user->user_groups($user->id)) > 1),@endif @endforeach</span></div>
                       <div class="flex-table-item no-wrap capitalize clickable user-permissions">
                        <input type="hidden" id="all-permissions" value="@foreach($user->permissions($user->id) as $permission){{$permission->id}}.@endforeach" >
                        <span id="usePer">@foreach($user->permissions($user->id) as $permission){{$permission->getPermissions($permission->permission_id)->permission_name}}@if($user->permissions($user->id)->count() > 1),@endif @endforeach</span></div>
                       <div class="flex-table-item firstname">{{$user->firstname}}</div>
                       <div class="flex-table-item lastname">{{$user->lastname}}</div>
                       <div class="flex-table-item width-1 center edit-icon edit-user" tooltip="Edit User">
                           <!----><i class="fa fa-pencil " aria-hidden="true"></i>
                       </div>
                   </div>
                  @endforeach
           
                   <!---->
              </div>
           
               <div class="flex-table-panel-footer">
                       
                   <div class="pagination-controls-inner">
                       <div class="meta">
                           <strong class="pagination-from">1</strong>
                           <span trans="">to</span>
                           <strong class="pagination-to">15</strong>
                           <span trans="">of</span>
                           <strong class="pagination-total">34</strong>
                           <span class="items-name">Users</span>
           
                           <span class="separator">|</span>
           
                           <label for="per-page" trans="">Per Page: </label>
                           <select id="per-page" name="per-page" class="ng-untouched ng-pristine ng-valid">
                               <option value="5">5</option>
                               <option value="10">10</option>
                               <option value="13">13</option>
                               <option value="15">15</option>
                               <option value="20">20</option>
                               <option value="25">25</option>
                               <option value="30">30</option>
                               <option value="40">40</option>
                               <option value="50">50</option>
                               <option value="100">100</option>
                           </select>
                       </div>
                       <div class="controls">
                           <button class="no-style first-page-button disabled" title="First Page" trans-title="">
                                <i class="fa fa-angle-double-left fa-lg" aria-hidden="true"></i>
                           </button>
                           <button class="no-style previous-page-button disabled" title="Previous Page" trans-title="">
                                <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                           </button>
                           <button class="no-style next-page-button" title="Next Page" trans-title="">
                                <i class="fa fa-angle-right fa-lg" aria-hidden="true"></i>
                           </button>
                           <button class="no-style last-page-button" title="Last Page" trans-title="">
                                <i class="fa fa-angle-double-right fa-lg" aria-hidden="true"></i>
                           </button>
                       </div>
                   </div>
               </div>
             </section>
             <!-- modals -->
             <div class="modal modal-visible modal-update-user-details" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Update User Details</span>
                         <!---->
                     </h2>
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
                 <input type="hidden" id="user-id">
                 
                 <div class="many-inputs">
                     <div class="input-container">
                         <label for="avatar" trans="">Avatar</label>
                         <input id="avatar" name="avatar" type="text" class="form-control">
                         <!---->
                     </div>
             
                     <div class="input-container">
                            <label for="avatar" trans="">First Name</label>
                            <input id="first-name" name="first_name" type="text" class="form-control">
                            <!---->
                     </div>
                     <div class="input-container">
                         <label for="avatar" trans="">Last Name</label>
                         <input id="last-name" name="last_name" type="text" class="form-control">
                         <!---->
                     </div>
             
                    
                     <div class="input-container">
                            <label for="confirmed" trans="">Email Confirmed</label>
                            <select id="confirmed" name="confirmed" type="text" class="ng-pristine ng-valid ng-touched">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            <!---->
                    </div>
                    <space-input label="Available Space" name="available_space" class="input-container ng-untouched ng-pristine ng-valid"><!----><label trans="" for="space-input-PP7SWzNPuDPfgQiVucZtuz9qwXPTHg3Q6Jfq" class="ng-star-inserted" style="">Available Space</label>
                        <div class="wrapper">
                            <input min="0" placeholder="Unlimited..." trans-placeholder="" type="number" id="space-input-PP7SWzNPuDPfgQiVucZtuz9qwXPTHg3Q6Jfq" class="ng-pristine ng-valid ng-touched">
                            <select class="ng-pristine ng-valid ng-touched">
                                <!----><option value="0: bytes" class="ng-star-inserted" style="">bytes</option><option value="1: KB" class="ng-star-inserted" style="">KB</option><option value="2: MB" class="ng-star-inserted" style="">MB</option><option value="3: GB" class="ng-star-inserted" style="">GB</option><option value="4: TB" class="ng-star-inserted" style="">TB</option><option value="5: PB" class="ng-star-inserted" style="">PB</option>
                            </select>
                        </div>
                        <p class="description p-disk-space" trans="">Disk space available to user. Leave empty for unlimited.</p>
                        <!----></space-input>
                        <div class="panel-outter">
                                <div class="header">
                                    <div class="title" trans="">Roles</div>
                                    <!----><div class="add-button ng-star-inserted" style="">
                                        <button class="select-roles-modal-button mat-flat-button mat-accent " id="mat-raised-button" color="accent" mat-flat-button="" trans="" type="button"><span class="mat-button-wrapper">Add</span><div class="mat-button-ripple mat-ripple" matripple=""></div><div class="mat-button-focus-overlay"></div></button></div>
                                </div>
                                <div class="panel-body roles">
                                    <!----><div class="no-permissions ng-star-inserted" trans="" style="">No roles yet.</div>
                            
                                    <mat-chip-list class="mat-chip-list" tabindex="-1" aria-required="false" aria-disabled="false" aria-invalid="false" aria-multiselectable="false" aria-orientation="horizontal" id="mat-chip-list-0"><div class="mat-chip-list-wrapper">
                                        <!---->
                                    </div></mat-chip-list>
                                </div>
                        </div>
                     <div class="panel-outter">
                            <div class="header">
                                <div class="title" trans="">User Permissions</div>
                                <!----><div class="add-button">
                                    <button class="button flat select-permissions-modal-button" id="mat-permission-button" trans="" type="button">Add</button>
                                </div>
                            </div>
                            <div class="panel-body permissions-panel manage-permissions">
                                <!---->
                                <!----><div class="no-permissions" trans="">No permissions yet.</div>
                            </div>
                     </div>
                 </div>
             
                 <div class="buttons right">
                     <button class="button cancel" trans="" type="button">CANCEL</button>
                     <button class="button primary submit-button" type="submit">
                         <!----><span trans="">Update User</span>
                         <!---->
                     </button>
                 </div>
              </form>
             </div>
             <div class="modal modal-visible modal-add-user" style="z-index: 11;"><div class="backdrop"></div>
              <form action="" id="upload-avatar-form" style="display:none" enctype="multipart/form-data">
                {{csrf_field()}}
              </form>
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" enctype="multipart/form-data" >
                {{csrf_field()}}
                <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Create a New User</span>
                         <!---->
                     </h2>
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
                 <div class="input-container">
                        <label for="avatar" trans="">Email</label>
                        <input id="email" name="email" type="email" class="form-control">
                        <label for="" id="wrong-email" class="alert alert-danger" trans="" style="display:none">wrong email format please correct it</label>
                        <label for="" id="exist-email" class="alert alert-danger" trans="" style="display:none">Email exist please try another</label>
                        <!---->
                 </div>
                 <div class="input-container">
                     <label for="avatar" trans="">Password </label>
                     <input id="password" name="password" type="password" class="form-control">
                     <!---->
                 </div>
                 <div class="many-inputs">
                     <div class="input-container">
                         <label for="avatar" trans="" form="upload-avatar-form">Avatar (optional)</label>
                         <input id="avatar" name="avatar" type="file" class="form-control">
                         <input type="text" name="avatar_string" id="avatar_string" class="form-control" style="display:none">
                         <!---->
                     </div>
             
                     <div class="input-container">
                            <label for="avatar" trans="">First Name</label>
                            <input id="first-name" name="first_name" type="text" class="form-control">
                            <!---->
                     </div>
                     <div class="input-container">
                         <label for="avatar" trans="">Last Name</label>
                         <input id="last-name" name="last_name" type="text" class="form-control">
                         <!---->
                     </div>
             
                     <div class="panel-outter">
                            <div class="header">
                                <div class="title" trans="">User Groups</div>
                                <!----><div class="add-button">
                                    <button class="button flat select-groups-modal-button" id="mat-raised-button" trans="" type="button">Add</button></div>
                            </div>
                            <div class="panel-body groups">
                                
                            </div>
                     </div>
                     <div class="panel-outter">
                            <div class="header">
                                <div class="title" trans="">User Permissions</div>
                                <!----><div class="add-button">
                                    <button class="button flat select-permissions-modal-button" id="mat-permission-button" trans="" type="button">Add</button>
                                </div>
                            </div>
                            <div class="panel-body permissions-panel manage-permissions">
                                <!---->
                                <!----><div class="no-permissions" trans="">No permissions yet.</div>
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
             <div class="modal modal-visible modal-delete-user" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Delete Users</span>
                         <!---->
                     </h2>
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
             
                 <div class="confirm-content">
                         <p style="font-size: 1.2rem;">Are you sure you want to delete selected users?</p>
                 </div>
             
                 <div class="buttons right">
                     <button class="button primary submit-button" type="submit">
                         <!----><span trans="">Delete</span>
                         <!---->
                     </button>
                 </div>
              </form>
             </div>
             <div class="modal modal-visible modal-add-role" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Select Roles</span>
                         <!---->
                     </h2>
                     <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                         <i class="fa fa-close fa-lg"></i>
                     </button>
                 </div>
             
                 <div class="mat-dialog-content mat-dialog-content" mat-dialog-content="">
                        <mat-selection-list class="mat-selection-list" role="listbox" tabindex="0" aria-disabled="false">
                            <!----><!---->
                            @foreach($roles as $role)
                                <!----><mat-list-option roleId="{{$role->id}}" class="mat-list-item mat-list-option ng-star-inserted" role="option" tabindex="-1" aria-selected="false" aria-disabled="false"><div class="mat-list-item-content mat-list-item-content-reverse"><div class="mat-list-item-ripple mat-ripple" mat-ripple=""></div><mat-pseudo-checkbox class="mat-pseudo-checkbox"><i class="fa fa-check fa-lg" clickType="check-role"></i><input type="hidden" value="{{$role->id}}"></mat-pseudo-checkbox><div class="mat-list-text">{{$role->group_name}}</div></div></mat-list-option>
                            <!---->
                            @endforeach
                                <!-- <mat-list-option class="mat-list-item mat-list-option mat-list-item-disabled ng-star-inserted" role="option" tabindex="-1" aria-selected="false" aria-disabled="true"><div class="mat-list-item-content mat-list-item-content-reverse"><div class="mat-list-item-ripple mat-ripple" mat-ripple=""></div><mat-pseudo-checkbox class="mat-pseudo-checkbox mat-pseudo-checkbox-disabled"><i class="fa fa-check fa-lg check-role"></i></mat-pseudo-checkbox><div class="mat-list-text">agents</div></div></mat-list-option>
                            -->
                                <!---->
                            
                        </mat-selection-list>
                </div>
             
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
             <div class="modal modal-visible modal-add-permissions" style="z-index: 11;"><div class="backdrop"></div>
             
              <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
                 <div class="modal-heading">
                     <h2 class="modal-title" style="    font-size: 1.7rem;">
                         <!----><span trans="" >Select Permissions</span>
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
    </div>
</div>

@endSection