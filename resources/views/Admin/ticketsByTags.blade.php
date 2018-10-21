@extends('layouts.main')

@section('content')




@include('Admin.layouts.header')

<div>
    
       @include('Admin.layouts.leftSide')
   
    <section class="cp-right-column ticketBytags">
            
                    <div class="table-responsive">
                            <table class="table table-striped table-sm">
                              <thead>
                                    <tr>
                                            <th colspan="2">
                                                <input type="checkbox" name="select_all_tickets" id="select-all-tickets" class="customer-op" value="@foreach($tickets as $ti){{$ti->id}},@endforeach">
                                                <label for="select-ticket" class="select-label select-all-tickets">
                                                    <i class="fa fa-check fa-lg check-all-tickets"></i>
                                                </label>
                                                <span style="padding-left: 10px;">Customer</span>
                                            </th>
                                            
                                            
                                            <th>Ticket-summary</th>
                                            <th></th>
                                            <th>Number</th>
                                            <th>Last Updated</th>
                                            
                                    </tr>
                              </thead>
                              <tbody>
                                @if(count($tickets) !=0)
                                @foreach($tickets as $ticket)
                                <tr>
                                  <td> 
                                        <input type="checkbox" name="select_ticket" id="select-ticket" class="customer-op" windowhref="/mailbox/tickets/tag/@if(($router_active =="Open") || ($router_active=="Closed") || ($router_active=="Spam") || ($router_active=="Pending")){{$ticket->getStatusId($ticket->status)}}@else{{$ticket->category->id}}@endif/ticket/{{$ticket->id}}" value="{{$ticket->id}}">
                                        <label for="select-ticket" class="select-label">
                                                <i class="fa fa-check fa-lg check-ticket"></i>
                                        </label>
                                        <span style="padding-left: 10px;" class="customer-name">{{$ticket->user->firstname}} {{$ticket->user->lastname}}</span>
                                  </td>
                                  <td>
                                      <div class="customer-avatar">
                                         <img src="{{asset('img')}}/{{$ticket->user->avatar}}" alt="avatar">
                                      </div>
                                  </td>
                                  <td>
                                        <div class="ticket-summary flex-table-item flex-direction-column flex-table-main-column">
                                                <div class="title">
                                                    <div class="tags">
                                                        <!---->
                                                            <!---->
                                                        
                                                            <!----><div class="tag-label">{{$ticket->category->category_name}}</div>
                                                        
                                                    </div>
                                                    <div class="title-text ticket-subject">{{$ticket->title}}</div>
                                                </div>
                                                <div class="ellipses ticket-body">{!! str_limit($ticket->details,120) !!}</div>
                                        </div>
                                  </td>
                                  <td class="reply-number"><span>{{$ticket->reply_count($ticket->id)}}</span></td>
                                  <td>{{$ticket->id}}</td>
                                  <td>{{$ticket->created_at->diffForhumans()}}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6">
                                      <div class="alert-info alert">There is no ticket for this tag !</div>  
                                    </td>
                                </tr>
                                 
                                @endif

                                
                              </tbody>
                            </table>
                    </div>
                    <ticket-floating-toolbar class="ticket-floating-toolbar"><!----><!---->
                            <assign-ticket-dropdown class="toolbar-item" id="assign-ticket-dropdown" tooltip="Assign"><dropdown>
                            
                                    <img src="{{asset('img/user-icon.png')}}" class="icon-flag-custom" alt="" style="height:20px;width:20px">
                        
                            
                        </dropdown>
                        <div class="dropdown-menu transformed ps-container ps-theme-default" customscrollbar="" style="    top: 37px;left: 13px;">
                            <div class="dropdown-item anyone-item" trans="">Anyone</div>
                            <div class="dropdown-item me-item" trans="">Me</div>
                            <!---->
                        </div>
                    </assign-ticket-dropdown>
                        
                            <dropdown class="toolbar-item change-status-dropdown" id="change-status-dropdown" tooltip="Change Status" >
                                <img src="{{asset('img/flag.png')}}" class="icon-flag-custom" alt="" style="height:22px;width:21px">
                                
                            </dropdown>
                                <div class="dropdown-menu transformed add-tag-drop change-status-drop" style="    top: 37px;left: 51px;">
                                    <!----><div class="dropdown-item status-tag open">Open</div><div class="dropdown-item status-tag closed">Closed</div><div class="dropdown-item status-tag pending">Pending</div><div class="dropdown-item status-tag spam">Spam</div>
                                </div>
                            <add-tag-dropdown class="toolbar-item" id="add-tag-dropdown" tooltip="Add Tag"><dropdown>
                            
                                <img src="{{asset('svg/add-tag.svg')}}" class="icon-add-tag-custom" alt="" style="height:22px;width:25px">
                                
                                
                        </dropdown>
                        <div class="dropdown-menu  transformed ps-container ps-theme-default" customscrollbar="" style="    top: 37px;left: 0;">
                            <form class="input-container ng-untouched ng-pristine ng-valid" novalidate="" style="width: 94%;margin: auto;border: 1px solid #1E88E5;">
                                <input class="tag-search-input ng-untouched ng-pristine ng-valid" type="text">
                            </form>
                           
                            <div class="tags">
                                <div class="dropdown-item tag"></div>
                            </div>
                        </div>
                        </add-tag-dropdown>
                        
                            <div class="toolbar-item delete-tickets-button last" id="delete-tickets-button" tooltip="Delete">
                                    <img src="{{asset('img/Trashcan-01.png')}}" class="icon-delete-custom" alt="" >
                            </div>
                    </ticket-floating-toolbar>
    </section>
</div>
<div class="modal modal-visible modal-delete-multiple-tickets ticketbytag" style="z-index: 11;"><div class="backdrop"></div>

 <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" action="{{route('admin.delete_menu')}}" method="post" style=" width: 700px;">
    {{csrf_field()}}
    <input type="hidden" name="menu_id" id="menu-id" value="">
    <div class="modal-heading">
        <h2 class="modal-title" style="    font-size: 1.7rem;">
            <!----><span trans="" >Delete Tickets</span>
            <!---->
        </h2>
        <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
            <i class="fa fa-close fa-lg"></i>
        </button>
    </div>

    <div class="confirm-content">
            <p style="font-size: 1.2rem;">Are you sure you want to permanently delete selected tickets?</p>
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

@endSection