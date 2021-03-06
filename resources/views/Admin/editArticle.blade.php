@extends('layouts.main')
<style>
    .tags-categories{float: right !important }
    .admin-search.admin-search-articles{display: none}
    body > div.manage-header > div > table > thead > tr > th:nth-child(4) form{display: none}
    .filter-articles-table{display: none}
    body > div.manage-header > div > table > thead > tr > th:nth-child(5){    text-align: right;
    padding-right: 20px;}
    #update-article-span{display: inline-block !important }
   #new-article-span{display: none}
    .create-new-article i.fa-cog{display: inline-block !important }
    .modal .input-container>p {
    margin-top: 8px;
    line-height: 1.5;
    font-size: 1.1rem;
    color: rgba(0,0,0,.54);
}
conversation-text-editor{display: block !important }
.mce-tinymce{    min-height: 450px;}
</style>
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
                    <img src="{{asset('img/search.png')}}" alt="search-img" style="height: 17px;width: auto;position: relative;top: -24px;left: 5px;opacity: 0.4;">
                </div>
        
                <section class="categories ps-container ps-theme-lite ps-active-y" >
                    <!----><!---->
                    @foreach($categories as $parent_cat)
                    <div class="category parent-category">
                             @if(($ticket->category_id == $parent_cat->id) || ($ticket->catExist($ticket->id,$parent_cat->id))) 
                                <input type="checkbox" name="select_ticket" value="{{$parent_cat->id}}" id="select-ticket" class="customer-op" >
                                <label for="select-ticket" class="select-label get-ticket-checked">
                                        <i class="fa fa-check fa-lg check-ticket2"></i>
                                </label>
                            @else
                            <input type="checkbox" name="select_ticket" value="{{$parent_cat->id}}" id="select-ticket" class="customer-op" >
                            <label for="select-ticket" class="select-label">
                                    <i class="fa fa-check fa-lg check-ticket"></i>
                            </label>
                            @endif
                            {{$parent_cat->category_name}}
                    </div>
                            @foreach($child_categories as $child_cat)
                            <div class="category child-category">
                                 
                                 @if(($ticket->child_category_name == $child_cat->child_category_name) || ($ticket->tagExist($ticket->id,$parent_cat->id.$child_cat->id))) 
                                    <input type="checkbox" name="select_ticket" value="{{$parent_cat->id}}{{$child_cat->id}}" id="select-ticket" class="customer-op" >
                                    <label for="select-ticket" class="select-label get-ticket-checked">
                                            <i class="fa fa-check fa-lg check-ticket2"></i>
                                    </label>
                                 @else
                                        <input type="checkbox" name="select_ticket" value="{{$parent_cat->id}}{{$child_cat->id}}" id="select-ticket" class="customer-op" >
                                        <label for="select-ticket" class="select-label">
                                                <i class="fa fa-check fa-lg check-ticket"></i>
                                        </label>
                                 @endif
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
                            <div class="tag-name">{{$parent_cat->category_name }}</div>
                            @endforeach       
                    </div>
                </div>
          </div>
    </div>
    
    <button id="preview-article-button" tooltip="Preview Article" >
            <i class="fa fa-eye fa-lg" aria-hidden="true"></i>
    </button>
  
</aside>
<aside class="articles-of-each-category">
        <conversation-text-editor>
                        <div class="input-container title">
                                        <input form="new-article-form" id="articl-title" name="article_title" value="{{$ticket->title}}" class="article-title-input ng-pristine ng-valid ng-touched" placeholder="Title" trans-placeholder="" type="text">
                                        <select form="new-article-form" name="article_state" class="article-status-input ng-pristine ng-valid ng-touched">
                                            <option  @if($ticket->publish_state =='published') selected @endif value="published">Published</option>
                                            <option   @if($ticket->publish_state =='draft') selected @endif value="draft">Draft</option>
                                        </select>
                                </div>
                                <div class="editor-header">
                                        <div class="actions editor-toggle-buttons">
                                                <button class="no-style editor-button visual-mode-button active" trans="visual-mode-button" type="button">Visual</button>
                                                <button class="no-style editor-button source-mode-button " trans="source-mode-button" type="button">Source</button>
                                        </div>
                                </div>
                                <form id="new-article-form" action="{{route('admin.update_article',['slug'=>$ticket->slug])}}" method="POST" enctype="multipart/form-data" style="    width: 94%;margin: auto;">
                                    {{csrf_field()}}
                                    <input type="text" id="cat-id" name="category_id" value="{{$ticket->category_id}}" style="display: none;">
                                    <input type="text" id="sub-cat-id" name="sub_category_id" value="{{$ticket->subCatName($ticket->sub_category_name)}}" style="display: none;">
                                    <input type="text" id="parent-sub-cat-id" name="parent_sub_category_id" value="" style="display: none;">
                                    <input type="checkbox" id="added-cat-id" name="added_cat_id" value="[]" style="display: none;">
                                    <input type="checkbox" id="added-tags-id" name="added_tags_id" value="[]" style="display: none;">
                                    <textarea name="article_content" id="article-content" cols="30" rows="10" class="" style="width:100%">
                                            {!! $ticket->details  !!}
                                    </textarea>
                                    <input name="article_source_code" id="article-source_code" class="tab-not-displayed" cols="30" rows="10" style="width:100%">
                                </form>
                

        </conversation-text-editor>
</aside>
</div>
<div class="modal modal-visible modal-preview-article " style="z-index: 11;"><div class="backdrop"></div>
<div class="backdrop light"></div>
 <div class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" style="width:90%;margin:auto;padding:40px;    height: 100%;">
    
     
        <div class="modal-heading">
                <button class="close-button no-style" type="button" style="background:none;cursor:pointer;top:0">
                    <i class="fa fa-close fa-lg"></i>
                </button>
        </div>

        <div class="article-content">
              
           
        </div>
         <!-- submit a ticket -->
         <hr style="width:98%;margin-left:0">
          <span>Have more question? <a href="">  Submit a Request </a></span>
        <hr style="width:98%;margin-left:0">
        <div id="feedback" style="padding: 1% 0;">
                        <span class="note-about-article" style="margin-left: 2%;padding: 3px 7px;border: 1px solid #34AD00;border-radius: 23px;color: #34AD00;cursor: pointer;">
                                        <i class="fa fa-check" style="margin: 0 5px;"></i>YES
                                </span>
                                <span class="note-about-article2" style="margin-left: 2%;padding: 3px 7px;border: 1px solid red;border-radius: 23px;color: red;cursor: pointer;">
                                        <i class="fa fa-close" style="margin: 0 5px;"></i>NO
                                </span>           
                                 <form action="">
            <input type="hidden" name="slug-article" value="">
            </form>
        </div>
        <hr style="width:98%;margin-left:0">

   
</div>
</div>
<div class="modal modal-visible modal-update-ticket modal-article-settings" style="z-index: 11;"><div class="backdrop"></div>

 <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" id="ticket-id" action="" method="get" style=" width: 700px;">
    {{csrf_field()}}
    
    <div class="modal-heading">
        <h2 class="modal-title" style="    font-size: 1.7rem;">
            <!----><span trans="" >Article Settings</span>
            <!---->
        </h2>
        <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
            <i class="fa fa-close fa-lg"></i>
        </button>
    </div>

    <div class="confirm-content">
            <div class="many-inputs">
                    <div class="input-container">
                        <label for="article-slug" trans="">Slug</label>
                        <input id="article-slug" form="new-article-form" name="article_slug" value="{{$ticket->slug}}" type="text" class="ng-untouched ng-pristine ng-valid">
                    </div>
            
                    <div class="input-container">
                        <label for="article-description" trans="">Description</label>
                        <textarea id="article-description" name="article-description" rows="7" class="ng-untouched ng-pristine ng-valid"></textarea>
                        <p trans="">This will appear when searching the help center. Excerpt from article will be used otherwise.</p>
                    </div>
            
                    <div class="input-container">
                        <label for="article-position" trans="">Position</label>
                        <input id="article-position" min="0" name="article-position" type="number" class="ng-untouched ng-pristine ng-valid">
                        <p trans="">Order for article on help center homepage. Lower position will be first.</p>
                    </div>
                </div>
    </div>

    <div class="buttons right">
            <button class="button cancel" trans="" type="button">Cancel</button>
            <button class="button primary ar-settings submit-button" trans="" type="submit">Update</button>
    </div>
 </form>
</div>

@endSection