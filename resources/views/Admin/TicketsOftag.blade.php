@extends('layouts.main')

@section('content')




@include('Admin.layouts.header')

<div>
    
       @include('Admin.layouts.leftSide')
   
    <section class="cp-right-column">
       
      <conversation><!---->
            <div class="conversation-container">
                <conversation-toolbar><div class="left toolbar-actions">
            <!----><!---->
                <!----><button class="no-style action back-button" tooltip="Back (b)">
                        <img src="{{asset('svg/return-back.svg')}}" class="icon-return-custom" alt="" >
                         <input type="hidden" id="back_button_href"  value="{{$back_button_href}}">
                </button>
        
                <assign-ticket-dropdown class="action" tooltip="Assign (a)">
                    <dropdown>
            
                    <button class="no-style"><img src="{{asset('img/user-icon.png')}}" class="icon-user-custom" alt="" style="height:20px;width:20px"></button>
                
                    </dropdown>
                    <div class="dropdown-menu transformed ps-container ps-theme-default" customscrollbar="">
                        <div class="dropdown-item anyone-item active" trans="">Anyone</div>
                        <div class="dropdown-item me-item" trans="">Me</div>
                        <!---->
                    </div>
                </assign-ticket-dropdown>
        
                <button class="action no-style add-note-button" tooltip="Note (n)">
                        <img src="{{asset('img/Sticky-note-outlined-01.png')}}" class="icon-add-note" alt="" >
                </button>
        
                <add-tag-dropdown class="action" dropdown="" tooltip="Tag (t)"><dropdown class="">
            
                    <button class="no-style add-tag-button"><img src="{{asset('svg/add-tag.svg')}}" class="icon-add-tag-custom" alt="" style="height:22px;width:25px"></button>
                
        
            
        </dropdown>
           <div class="dropdown-menu transformed ps-container ps-theme-default" >
                <form class="input-container ng-untouched ng-pristine ng-valid" novalidate="" style="    width: 94%;margin: auto;border: 1px solid #1E88E5;">
                    <input class="tag-search-input ng-valid ng-dirty ng-touched" type="text">
                </form>
        
                <div class="tags">
                    <!----><div class="dropdown-item tag"></div>
                </div>
           </div>
        </add-tag-dropdown>
           
        
                <dropdown class="ticket-status-dropdown-container action change-status-dropdown" tooltip="Status (s)">
                    <button class="no-style change-ticket-status-button">
                        <img src="{{asset('img/flag.png')}}" class="icon-flag-custom" alt="" style="height:22px;width:21px">
                    </button>
                  
                </dropdown>
                    <div class="dropdown-menu transformed change-status-dropmenu " style="    top: 43px;left: 243px;">
                        <!----><div class="dropdown-item open">open</div><div class="dropdown-item closed">closed</div><div class="dropdown-item pending">pending</div><div class="dropdown-item spam">spam</div>
                    </div>
                
                    
                
            
        </div>
        <div class="right ticket-info">
            <div class="ticket-number" id="{{$ticket->id}}">#{{$ticket->id}}</div>
            <div class="ticket-status {{$ticket->status}}">{{$ticket->status}}</div>
        </div></conversation-toolbar>
        
                <div class="ticket-container scroll-container" infinite-scroll="">
                    <conversation-header><div class="title-container">
            <h4 class="ticket-subject">{{$ticket->title}}?</h4>
            <div class="tags">
                <!---->
                @foreach($all_tags as $tag)
                
                
                                            
                    <div class="tag-label">
                        <span class="tag-name">{{$tag}}</span>
                        <!----><button class="no-style remove-tag-button" title="Remove Tag" type="button">
                               <i class="fa fa-close"></i>
                        </button>
                    </div>
                @endforeach
                    <!---->
                
            </div>
        </div>
        
        <div class="title-meta">
            <div class="ticket-created-at-date">{{$ticket->created_at->diffForhumans()}} ({{date('F d',strtotime($ticket->created_at)) }})</div>
            
            <div class="actions " @if($ticket->status !='Open') style="display:none"  @endif>
                <button class="button reply-button" tooltip="Reply (r)" title="reply"><i class="fa fa-reply" aria-hidden="true"></i></button>
            </div>
            
        </div></conversation-header>
    <conversation-text-editor>
        <div class="editor-header">
          <ul class="list-unstyled">
              <li><i class="fa fa-check-circle" id="save-draft" aria-hidden="true" title="save draft"></i></li>
              <li><img src="{{asset('img/trash.png')}}" id="discrad-reply" title="discrad"  alt=""></li>
          </ul>
        </div>
        <form action="{{route('admin.create_reply')}}" method="post" enctype="multipart/form-data" style="    width: 94%;margin: auto;">
            {{csrf_field()}}
            <input type="hidden" id="redirect-after-reply" name="redirect_after_reply" value="stay-on-page">
            <input type="hidden" id="ticket-status" name="ticket_status" value="{{$ticket->status}}">
            <input type="hidden" name="tag_id" value="{{$back_button_href}}">
            <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
            <input type="hidden" name="reply_type" id="reply-type" value="original">
            <input type="hidden" name="draft_id" id="draft-id" value="">
            <textarea name="reply_content" id="reply-content" cols="30" rows="10" style="width:100%"></textarea>
        </form>
        <div class="editor-footer" footer="">
                <div class="right">
                    <!----><dropdown class="status-dropdown status-dropdown">
                        <button class="status-name no-style">open <i class="fa fa-chevron-down change-ticket-statuts" style="    margin-left: 2px;"></i></button>
                        
                    </dropdown>
                    <div class="dropdown-menu transformed editor-change-ticket-status-dropdown">
                            <!----><div class="dropdown-item open" id="Open">
                                open
                            </div><div class="dropdown-item closed" id="Closed">
                                closed
                            </div><div class="dropdown-item pending" id="Pending">
                                pending
                            </div><div class="dropdown-item spam" id="Spam">
                                spam
                            </div>
                    </div>
                    <button class="button no-style submit-button" type="button">
                        <!----><span trans="">Send Reply</span>
                        <!---->
                    </button>
                    <!----><dropdown class="button-addon button no-style dropdown-left submit-button-addon">
                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        
                    </dropdown>
                        <div class="dropdown-menu default-redirect-dropdown transformed operation-after-send-reply">
                            <div class="dropdown-item stay-on-page" id="stay-on-page" trans="">Send and stay on page</div>
                            <div class="dropdown-item next-active-ticket selected" id="next-active-ticket" trans="">Send and next ticket</div>
                            <div class="dropdown-item back_to_folder" id="back_to_folder" trans="">Send and back to folder</div>
                        </div>
                </div>
            </div>
    </conversation-text-editor>
                    <conversation-replies><div class="thread">
            <!---->
                <!---->
            
                
            
                
            
                
            
                
            
                
            
                
                @if($replies->count()>0)
                
                   @foreach($replies as $reply)
                    
                <!----><div class="reply animated replies  @if($reply->type =='note') notes @endif" rep="rep{{$reply->id}}">
                    <!----><img class="user-avatar" src="{{asset('img')}}/{{$reply->user->avatar}}" alt="sadie86@stanton.com">
                    <div class="reply-body">
                        <div class="message-header">
                            <div class="customer">
                                @if($reply->type !='note')
                                @if($reply->type =='draft'  && Auth::id()==$reply->id)

                                <span class="customer-name">
                                        <!---->
                                        <!----><span>You</span>
                                    </span>
            
                                    <!----><span class="text-gray action-text" style=" color: #689f38;">create a draft</span>
                                    
                                    <!---->
                                    <span class="draft-actions ng-star-inserted">
                                            <button class="no-style edit-draft-button" id="{{$reply->id}}" trans="" type="button">Edit</button>
                                            <button class="no-style delete-draft-button"  trans="" type="button">Discard</button>
                                    </span>
                                @else

                                <span class="customer-name">
                                    <!---->
                                    <!----><span>{{$reply->user->firstname}} {{$reply->user->lastname}}</span>
                                </span>
        
                                <!----><span class="text-gray action-text" trans="">replied</span>
                                <!---->
                                @endif
                                @else
                                <span class="customer-name">
                                    <!---->
                                    <!----><span>You</span>
                                </span>
        
                                <!----><span class="text-gray action-text" trans="">left a note</span>
                                <!---->
                                @endif
                            </div>
                            <div class="meta">
                                <span class="date">{{date('M d, h:m',strtotime($reply->created_at))}}</span>
                                <!----><dropdown class="reply-actions">
                                        <i class="fa fa-ellipsis-v fa-lg " aria-hidden="true"></i>
                                    
                                </dropdown>
                                <input type="hidden" id="reply-id" class="reply-class" value="{{$reply->id}}">
                                    <div class="dropdown-menu left transformed reply-actions-dropdown">
                                        <div class="dropdown-item update-reply-button" trans="">Edit</div>
                                        <div class="dropdown-item delete-reply-button" trans="">Delete</div>
                                        <div class="dropdown-item show-original-reply-button" trans="">Show Original</div>
                                    </div>
                            </div>
                        </div>
                        <div class="message-body">{!! $reply->reply_content !!}</div>
                        <!---->
                    </div>
                </div>
                   @endforeach
                @else

                    <div class="reply animated replies"> 
                         <div class="reply-body">
                            
                            <div class="message-body text-center alert alert-info" style="    margin: auto;">There is no reply currently.<br> </div>
                            <!---->
                        </div>
                    </div>



                @endif
                              
            
        </div></conversation-replies>
                </div>
            </div>
        
            <!----><conversation-sidebar><!----><div class="user-info">
            <a class="avatar" href="/mailbox/users/30">
                <img alt="Avatar" src="{{asset('img')}}/{{$ticket->user->avatar}}">
            </a>
        
            <div class="user-details">
                <a class="name" href="/mailbox/users/30">{{$ticket->user->firstname}}   {{$ticket->user->lastname}}</a>
                <div class="email">
                       <i class="fa fa-envelope-o" aria-hidden="true"></i> {{$ticket->user->email}}
                </div>
            </div>
        </div>
        
        <div class="tickets-list-container">
            <div class="title">
                <span class="text" trans="">Other Conversations</span>
                <button class="no-style toggle-button"><i class="fa fa-chevron-down"></i></button>
            </div>
        
            <!----><div class="tickets-list toggle-container">
                <!----><div class="ticket">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <span>Enabling google login</span>
                </div>
            </div>
        </div></conversation-sidebar>
        
        
        
      </conversation> 
               
    </section>
</div>
<div class="modal modal-visible modal-delete-reply " style="z-index: 11;"><div class="backdrop"></div>

 <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" style=" width: 700px;">
    {{csrf_field()}}
    <input type="hidden" name="reply_to_delete" id="reply-to-delete" value="">
    <input type="hidden" name="rep" id="rep" value="">
    <div class="modal-heading">
        <h2 class="modal-title" style="    font-size: 1.7rem;">
            <!----><span trans="" >Delete Reply</span>
            <!---->
        </h2>
        <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
            <i class="fa fa-close fa-lg"></i>
        </button>
    </div>

    <div class="confirm-content">
            <p style="font-size: 1.2rem;">Are you sure you want to delete this reply?</p>
    </div>

    <div class="buttons right">
            <button class="button cancel" trans="" type="button">CLOSE</button>
        <button class="button primary submit-button submit-delete-reply" type="submit">
            <!----><span trans="">DELETE</span>
            <!---->
        </button>
    </div>
 </form>
</div>
<div class="modal modal-visible modal-add-note " style="z-index: 11;"><div class="backdrop"></div>

 <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" action="{{route('admin.create_note')}}" method="post" style=" width: 700px;">
    {{csrf_field()}}
    <input type="hidden" name="ticket_id" value="{{$ticket->id}}">
    <input type="hidden" name="reply_type" value="note">
    
    <div class="modal-heading">
        <h2 class="modal-title" style="    font-size: 1.7rem;">
            <!----><span trans="" >Add Note</span>
            <!---->
        </h2>
        <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
            <i class="fa fa-close fa-lg"></i>
        </button>
    </div>

    <div class="confirm-content">
            <textarea name="reply_content" id="reply-content" cols="30" rows="10" style="width:100%"></textarea>
    </div>

    <div class="buttons right">
        <button class="button cancel" trans="" type="button">Cancel</button>
        <button class="button primary submit-button" trans="" type="submit">Add Note</button>
    </div>
 </form>
</div>
<div class="modal modal-visible modal-edit-reply " style="z-index: 11;"><div class="backdrop"></div>

 <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" action="{{route('admin.update_reply')}}" method="post" enctype="multipart/form-data" style=" width: 700px;">
    {{csrf_field()}}
    <input type="hidden" name="reply_to_update" id="reply-to-update" value="">
    <input type="hidden" id="redirect-after-reply" name="redirect_after_reply" value="stay-on-page">

    <div class="modal-heading">
        <h2 class="modal-title" style="    font-size: 1.7rem;">
            <!----><span trans="" >Update Reply</span>
            <!---->
        </h2>
        <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
            <i class="fa fa-close fa-lg"></i>
        </button>
    </div>

    <div class="confirm-content">
                <textarea name="update_reply" id="update-reply" cols="30" rows="10" style="width:100%"></textarea>
    </div>

    <div class="buttons right">
        <button class="button cancel" trans="" type="button">CANCEL</button>
        <button class="button primary submit-button" trans="" type="submit">UPDATE</button>
    </div>
 </form>
</div>
@endSection