@extends('layouts.main')
<style>
    .admin-search{display: none !important}
    .admin-hide-show-menu{display: inline-block !important}
</style>
@section('content')




@include('Admin.layouts.header')
<input class="router" type="hidden" value="{{ "triggers"}}">
<div class="ad-ar-content">
    @include('Admin.layouts.adminAreaLeftSide')
    <div class="content-inner triggers-inner">
            <section class="flex-table-panel spacing outer-trigger">
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
                                <div class="left">11 <span trans="">triggers Selected</span></div>
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
                            <div class="flex-table-item" trans="">Name</div>
                            <div class="flex-table-item" trans="">Description</div>
                            <div class="flex-table-item width-3" trans="">Last Updated</div>
                            <div class="flex-table-item" trans="">Times Used</div>
                            <div class="flex-table-item width-1"></div>
                        </div>
                        <!---->
                        <div class="flex-table-row">
                            <div class="flex-table-item width-1">
                                <input class="pretty-checkbox" type="checkbox" id="tag-checkbox-0" value="0">
                                <i class="fa fa-check"></i>
                                <label for="tag-checkbox-0"><span></span></label>
                            </div>
                            <div class="flex-table-item">trigger 1</div>
                            <div class="flex-table-item capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex architecto voluptate numquam. </div>
                            <div class="flex-table-item width-3">25-05-2018</div>
                            <div class="flex-table-item">20 s</div>
                            <div class="flex-table-item width-1 center edit-icon" tooltip="Edit Tag">
                                    <i class="fa fa-pencil " aria-hidden="true"></i>                         
                            </div>
                        </div>
                      
                        
                       
                        
                
                        <!---->
                    </div>
                
            </section>
            <section class="flex-table-panel spacing add-trigger">
               
                <div class="header">
                <button class="back-button" tooltip="Back" type="button">
                    <i class="fa fa-chevron-left  icon-close"></i>
                </button>
                <!----><div class="title" trans="">Create new trigger</div>
                <!---->
                </div>
            
            <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                <div class="section">
                    <div class="many-inputs">
                        <div class="input-container">
                            <label for="name" trans="">Name</label>
                            <input id="name" name="name" required="" type="text" class="form-control ng-untouched ng-pristine ng-invalid">
                            <!---->
                        </div>
            
                        <div class="input-container">
                            <label for="description" trans="">Description</label>
                            <textarea id="description" name="description" cols="5" rows="7" class="form-control ng-untouched ng-pristine ng-valid"></textarea>
                            <!---->
                        </div>
                    </div>
                </div>
            
                <div class="triggers-panel">
                    <div class="panel-header">
                        <div class="title" trans="">Meet <span class="boxed-text">all</span> of the following conditions:</div>
                        <button class="no-style action-button add-button" tooltip="Add condition" type="button">
                            <i class="fa fa-plus icon-add"></i>
                        </button>
                    </div>
                    <div class="panel-body conditions">
                        <conditions><!----><div class="condition">
                <!----><div>
                    <div class="condition-inner">
                        <div class="inputs">
                            <div class="input-container">
                                <select id="condition-0" class="ng-untouched ng-pristine ng-valid form-control">
                                    <option disabled="" selected="" value="0">-- Select a condition. --</option>
                                    <!----><option value="1: 1">Ticket: Subject</option><option value="2: 2">Ticket: Body</option><option value="3: 3">Ticket: Status</option><option value="4: 4">Ticket: Is</option><option value="5: 5">Ticket: Category</option><option value="6: 6">Ticket: Number of Attachments</option><option value="7: 7">Ticket: Assignee</option><option value="8: 8">Customer: Name</option><option value="9: 9">Customer: Email</option>
                                </select>
                            </div>
                            <button class="no-style remove-button action-button" tooltip="Remove condition" type="button">
                                <i class="fa fa-minus icon-remove"></i>
                            </button>
                        </div>
                        
                    </div>
                    <!---->
                </div>
            </div><div class="condition">
                <!---->
            </div></conditions>
                        <!---->
                    </div>
                </div>
            
                <div class="triggers-panel">
                    <div class="panel-header">
                        <div class="title" trans="">Meet <span class="boxed-text">any</span> of the following conditions:</div>
                        <button class="no-style action-button add-button" tooltip="Add condition" type="button">
                            <i class="fa fa-plus icon-add"></i>
                        </button>
                    </div>
                    <div class="panel-body">
                        <conditions><!----><div class="condition">
                 <!---->
                 </div>
                <div class="condition">
                <!----><div>
                        <div class="condition-inner">
                            <div class="inputs">
                                <div class="input-container">
                                    <select id="condition-1" class="ng-untouched ng-pristine ng-valid form-control">
                                        <option disabled="" selected="" value="0">-- Select a condition. --</option>
                                        <!----><option value="1: 1">Ticket: Subject</option><option value="2: 2">Ticket: Body</option><option value="3: 3">Ticket: Status</option><option value="4: 4">Ticket: Is</option><option value="5: 5">Ticket: Category</option><option value="6: 6">Ticket: Number of Attachments</option><option value="7: 7">Ticket: Assignee</option><option value="8: 8">Customer: Name</option><option value="9: 9">Customer: Email</option>
                                    </select>
                                </div>
                                <button class="no-style remove-button action-button" tooltip="Remove condition" type="button">
                                    <i class="fa fa-minus icon-remove"></i>
                                </button>
                                
                            </div>
                            
                        </div>
                        <!---->
                    </div>
                </div></conditions>
                            <!---->
                    </div>
                </div>
            
                    <div class="triggers-panel actions">
                        <div class="panel-header">
                            <div class="title" trans="">Perform these actions:</div>
                            <button class="no-style action-button add-button" tooltip="Add action" type="button">
                                <i class="fa fa-plus icon-add"></i>
                            </button>
                        </div>
                        <div class="panel-body">
                            <!----><div class="action">
                                <div class="action-inner">
                                    <div class="inputs">
                                        <div class="input-container">
                                            <select id="action-0" class="ng-untouched ng-pristine ng-valid form-control">
                                                <option disabled="" selected="" trans="" value="0">-- Select an action. --</option>
                                                <!----><option value="1: 3">Ticket: Add a note</option><option value="2: 6">Ticket: Add tag(s)</option><option value="3: 5">Ticket: Assign to Agent</option><option value="4: 4">Ticket: Change status</option><option value="5: 8">Ticket: Delete</option><option value="6: 1">Ticket: Move to Category</option><option value="7: 7">Ticket: Remove tag(s)</option><option value="8: 2">Notify: via Email</option>
                                            </select>
                                        </div>
                                        <button class="no-style remove-button action-button" tooltip="Remove action" type="button">
                                            <i class="fa fa-minus icon-remove"></i>
                                        </button>
                                        <!---->
                                    </div>
                                    
                                </div>
                                <!---->
                            </div>
                            <!---->
                        </div>
                    </div>
                
                    <div class="submit-buttons">
                        <button class="button primary" type="submit">
                            <!---->
                            <!----><span trans="">Create</span>
                        </button>
                    </div>
                </form>
               
            
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