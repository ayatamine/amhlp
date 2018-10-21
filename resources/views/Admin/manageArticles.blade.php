@extends('layouts.main')

@section('content')



@include('Admin.layouts.header')
@include('Admin.layouts.manage-articles-header')
<div class="manage-articls-container">
<aside class="tags-categories">
    <div class="panel panel-default">
        <div class="panel-heading">
            Categories
        </div>
        <div class="panel-body">
                <div class="input-container">
                    <input style="    padding-left: 25px;" id="categories-manager-search" placeholder="Search..." trans-placeholder="" type="text" class="ng-untouched ng-pristine ng-valid">
                    <img src="{{asset('img/search.png')}}" alt="search-img" style="height: 17px;width: auto;position: relative;top: -31px;left: 5px;opacity: 0.4;">
                </div>
        
                <section class="categories ps-container ps-theme-lite ps-active-y" >
                    <!----><!---->
                 
                       @foreach($categories as $parent_cat)
                        <div class="category parent-category">
                                <input type="checkbox" name="select_ticket" par="0" value="{{$parent_cat->id}}" id="select-ticket" class="customer-op" >
                                <label for="select-ticket" class="select-label">
                                        <i class="fa fa-check fa-lg check-ticket"></i>
                                </label>
                                
                                {{$parent_cat->category_name}}
                        </div>
                                @foreach($child_categories as $child_cat)
                                <div class="category child-category">
                                        <input type="checkbox" name="select_ticket" par="{{$parent_cat->id}}" value="{{$child_cat->id}}" id="select-ticket" class="customer-op" >
                                        <label for="select-ticket" class="select-label">
                                                <i class="fa fa-check fa-lg check-ticket"></i>
                                        </label>
                                        {{$child_cat->child_category_name}}
                                </div>



                                @endforeach
                        
                        
                        @endforeach
                  
                     
        
                </section>
            </div>
    </div>
    <div class="panel tags-filter">
            <div class="panel-heading" trans="">Tags</div>
          <div class="panel-body">
                <div class="input-container input-group">
                        <input class="tags-string-model ng-untouched ng-pristine ng-valid" type="text">
                        <button class="button primary add-tags-button" trans="">Add</button>
                </div>
    
                 <!----><p class="main-info" trans="">Separate tags with comma.</p>
            
                <div class="selected-tags">
                   
                        
                    <!---->
                </div>
    
                <div class="existing-tags">
                    <p trans="">Choose from existing tags:</p>
                    <div class="tags-list ps-container ps-theme-lite ps-active-y" customscrollbar="lite" customscrollbarminlength="0" data-ps-id="bfbbfa18-f484-d5a7-f224-a610e20f1ac4">
                            @foreach($categories as $parent_cat)
                               <div class="tag-name" tagId="{{$parent_cat->id}}">{{$parent_cat->category_name }}</div>
                            @endforeach
                    </div>
                </div>
          </div>
    </div>
    <div class="panel article-type-filter">
            <div class="panel-heading" trans="">Article Status</div>
            <div class="panel-body">
                <button class="button flat filter-button all-filter-button active" trans="">All</button>
                <button class="button flat filter-button not-draft-filter-button" trans="">Published</button>
                <button class="button flat filter-button draft-filter-button" trans="">Draft</button>
            </div>
    </div>
</aside>
<aside class="articles-of-each-category">
    @if($tickets->count() > 0)
    <div class="row">
        @foreach($tickets as $ticket)
       
        <div class="col-xs-12  col-md-4 col-lg-3 articls-list-item">
                <input type="hidden" id="tickett-id" name="ticket_id" toRemove="{{$ticket->id}}" value="{{route('admin.delete_articles',['article_id'=>$ticket->id])}}">
                <img src="{{asset('img/trash.png')}}" alt="trash" class="trash-article" title="Delete Article">
                <div class="article-categories">
                        <!----><span class="parent-category">{{$ticket->category->category_name}} &gt; </span>
                        <span class="category">{{$ticket->sub_category_name}}</span>
                </div>
                <div class="article-title">{{$ticket->title}}</div>
                <div class="article-body">{!! $ticket->details !!}
                </div>
                
        </div> 
        @endforeach
       
     </div>
     <div class="real-paginate" style="display:none">
         {{$tickets->links()}}
     </div>
        
     @else
     <no-results-message class="no-results-message ng-star-inserted"><div class="text">
            <div class="main">
                <span primary-text="" trans="">Sorry, could not find any articles.</span>
            </div>
            <div class="secondary">
                <span secondary-text="" trans="">Perhaps your filters were too specific, try to remove some?</span>
            </div>
        </div>
        <div class="icon">
            <img src="{{asset('svg/no-results.svg')}}">
         </div>
     </no-results-message>
     @endif
     <no-results-message class="search-ajax tab-not-displayed no-results-message ng-star-inserted"><div class="text">
            <div class="main">
                <span primary-text="" trans="">Sorry, could not find any articles.</span>
            </div>
            <div class="secondary">
                <span secondary-text="" trans="">Perhaps your filters were too specific, try to remove some?</span>
            </div>
        </div>
        <div class="icon">
            <img src="{{asset('svg/no-results.svg')}}">
         </div>
     </no-results-message>
</aside>
<div class="paginator">
    <div class="pag-par-size">
        <span class="title">Items per page:</span>
        <div class="item-paginate-selected"><span>15</span> <i class="fa fa-caret-down fa-lg" style="float: right;margin-top: 4px;color: rgba(0,0,0,.54);"></i></div>
        <div class="paginate-dropmenu">
             <div>
                <div pag="5" class="selected" >5</div>
                <div pag="10">10</div>
                <div pag="15">15</div>
                <div pag="20">20</div>
             </div>
        </div>
       
    </div>
    <div class="number-of-elements"><span id="pag-start">{{$tickets->firstItem()}}</span> - <span id="pag-end">{{$tickets->lastItem()}}</span> of <span id="total-row">{{$tickets->count()}}</span></div>
    <div class="prev-next-pag">
        <i class="fa fa-chevron-left" route="{{$tickets->previousPageUrl()}}"></i>
        <i class="fa fa-chevron-right" route="{{$tickets->nextPageUrl()}}"></i>
    </div>
</div>
</div>
<div class="modal modal-visible modal-delete-tickets " style="z-index: 11;"><div class="backdrop"></div>

 <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" toRemove="" id="ticket-id" action="" method="get" style=" width: 700px;">
    {{csrf_field()}}
    
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
        <button class="button primary submit-button" type="submit">
            <!----><span trans="">Delete</span>
            <!---->
        </button>
    </div>
 </form>
</div>

@endSection