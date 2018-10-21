@extends('layouts.main')
<style>
    .admin-search.admin-search-articles{float:right;width: calc(100% - 40%) !important;}
    .create-new-article{margin-right: 20px}
    #admin-search{height: 42px;position: relative; top: -7px;}
    .manage-header #admin-search{    height: 43px !important;top: -8px !important;}
    .manage-header .admin-search form img {top: -38px !important;}
    @media(max-width:768px){
       .admin-search.admin-search-articles{display: none !important}
       .create-new-article {margin-right: 0 !important;}
       .create-new-article span{    padding: 4px 6px !important;font-size: 0.8rem}
    }
</style>

@section('content')



@include('Admin.layouts.header')
<!-- header changes -->
<div class="manage-header">
        
        
        
        
        <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <th colspan="2">
                            <ul class="list-unstyled">
                                    <li><a href="{{route('MainController.helpCenter')}}">Home</a></li>
                                    <li><a href="{{route('admin.manage_categories')}}">Categories</a></li>
                                    <li><a href="{{route('admin.manage_articles')}}">Articles</a></li>
                            </ul>
                      </th>
                      <th>
                            <div class="admin-search admin-search-articles">
                                    <form action="" method="GET">
                                        {{csrf_field()}}
                                        <input class="form-control" type="text" name="admin-search" id="admin-search" placeholder="Search">
                                        <img src="{{asset('img/search.png')}}" alt="search-icon">
                                    </form>
                            </div>
                      </th>
                   
                      <th style="text-align:right">
                          <div class="create-new-article create-new-category">
                              <span><a><i class="fa fa-plus" style="margin-right: 5px;"></i>New Category</a></span>
                          </div>
                      </th>
                    </tr>
                  </thead>
                  
                </table>
              </div>
        
    </div>
<div class="manage-categories">
    
<section class="categories-list" reorder="category-list-item" id="category-sortable">
@if($categories->count() > 0)        <!----><!---->
@foreach($categories as $category)
<div class="category-list-item parent-category has-children" uuid="1"  draggable="false">
    <div class="category-name-container">
        <img src="{{asset('img/bars2.png')}}" class="bars2" alt="">
        <span class="category-name">{{$category->category_name}}</span>
    </div>

    <div class="info">
        <div class="articles-count">
            <!----><span class="no-articles" trans="">@if($category->article_count($category->id) > 0) {{$category->article_count($category->id)}} Articles @else   No Article  @endif</span>
            <!---->
        </div>
    </div>
    <i class="fa fa-ellipsis-v fa-lg xs-manage-categories-list" style="opacity:0.5" aria-hidden="true"></i>            
    
    <div class="actions " thisId="{{$category->id}}" catname="{{$category->category_name}}" ParChild="{{$category->id}}0">
        <div class="hidden-description" style="display:none">
            {{$category->description}}
        </div>
        <button class="no-style update-category-button" title="Update Category">
           <i class="fa fa-cog fa-lg"></i>
        </button>

        <button class="no-style new-child-category-button" title="Create Child Category" catid={{$category->id}}>
          <img src="{{asset('img/create-child-category.png')}}" alt="add-child-category" class="create-child-category"> 
        </button>

        <!---->

        <button class="no-style delete-category-button" title="Delete Category">
                <img src="{{asset('img/delete-forever.png')}}" alt="delete-forever" class="delete-forever" > 
        </button>
    </div>
</div>
  @if($child_categories->count() > 0)
   @foreach($child_categories as $child)
     @if($category->getChilds($category->id,$child->id) =='true')
   <div class="category-list-item child-category" uuid="7" draggable="true">
    <div class="category-name-container">
   
        <img src="{{asset('img/bars2.png')}}" class="bars2" alt="">
  
    <span class="category-name">{{$child->child_category_name}}</span>
    </div>

    <div class="info">
        <div class="articles-count">
            <!---->
            <!----><span class="has-articles">
                <!----><span class="plural">@if($child->child_article_count($child->child_category_name,$category->id) >0) {{$child->child_article_count($child->child_category_name,$category->id)}} Articles  @else No Article  @endif </span>
                <!---->
            </span>
        </div>
    </div>
    <i class="fa fa-ellipsis-v fa-lg xs-manage-categories-list" style="opacity:0.5" aria-hidden="true"></i>
<div class="actions child-cat" thisId="{{$child->id}}" parid="{{$category->id}}" catname="{{$child->child_category_name}}" ParChild="{{$category->id}}{{$child->id}}">
        <div class="hidden-description" style="display:none">
            {{$category->getDescription($child->id,$category->id)}}
        </div>
        <button class="no-style update-category-button"  title="Update Category">
           <i class="fa fa-cog fa-lg"></i>
        </button>

        <!---->

        <!----><button class="no-style detach-category-button" title="Detach Category">
           <img src="{{asset('img/trash.png')}}" alt="trash" class="trash-articls">
        </button>

        <button class="no-style delete-category-button" title="Delete Category">
                <img src="{{asset('img/delete-forever.png')}}" alt="delete-forever" class="delete-forever"> 
        </button>
    </div>
    </div>
      @endif
   @endforeach
   @endif
@endforeach
@endif




            
</section>
</div>
<div class="modal modal-visible modal-update-cat" style="z-index: 11;"><div class="backdrop"></div>
    
     <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" method="post" action="{{route('category.update')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="modal-heading">
            <h2 class="modal-title" style="    font-size: 1.7rem;">
                <!----><span trans="" >Update Category</span>
                <!---->
            </h2>
            <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
                <i class="fa fa-close fa-lg"></i>
            </button>
        </div>
    
        <div class="many-inputs">
            <div class="input-container">
                <label for="name-category" trans="">Name</label>
                <input id="name-category" name="name_category" type="text" class="form-control" required>
                <input type="hidden" name="id_cateory" id="id-category">
                <input type="hidden" name="id_parent_before" id="id-parent-before">
                <!---->
            </div>
    
            <div class="input-container">
                <label for="parent-id" trans="">Parent Category</label>
                <select id="parent-id" name="parent_id" type="text" class="form-control">
                    <option trans="" class="single-cat" value="0">No Parent Category</option>
                    <!---->
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" class="all-cat" style="">{{$category->category_name}}</option>
                    @endforeach
                </select>
                
            </div>
    
            <div class="input-container">
                <label for="description" trans="">Description</label>
                <textarea id="description" name="description" rows="5" type="text" class="form-control"></textarea>
                <!---->
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
<div class="modal modal-visible modal-create-child-cat" style="z-index: 11;"><div class="backdrop"></div>

 <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" action="{{route('admin.create_child_category')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="modal-heading">
        <h2 class="modal-title" style="    font-size: 1.7rem;">
            <!----><span trans="" >New Category</span>
            <!---->
        </h2>
        <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
            <i class="fa fa-close fa-lg"></i>
        </button>
    </div>

    <div class="many-inputs">
        <div class="input-container">
            <label for="name-category" trans="">Name</label>
            <input id="name-category" name="name_category" type="text" class="form-control" required>
            <!---->
        </div>

        <div class="input-container">
            <label for="parent-id" trans="">Parent Category</label>
            <select id="parent_id" name="parent_id" type="text" class="form-control">
                    <option trans="" class="single-cat" value="0">No Parent Category</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" class="all-cat" style="">{{$category->category_name}}</option>
                    @endforeach
            </select>
            <!---->
        </div>

        <div class="input-container">
            <label for="description" trans="">Description</label>
            <textarea id="description" name="description" rows="5" type="text" class="form-control"></textarea>
            <!---->
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

<div class="modal modal-visible modal-delete-cat" style="z-index: 11;"><div class="backdrop"></div>


 <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
        <input type="hidden" id="parent_of_to_delete" name="">
        <input type="hidden" id="this_id_to_delete">
        <input type="hidden" id="parchild">
    <div class="modal-heading">
        <h2 class="modal-title" style="    font-size: 1.7rem;">
            <!----><span trans="" >Delete Category</span>
            <!---->
        </h2>
        <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
            <i class="fa fa-close fa-lg"></i>
        </button>
    </div>

    <div class="confirm-content">
            <p style="font-size: 1.2rem;">Are you sure you want to delete this category? <span id="from-all" style="display:none">(from all parent)</span></p>
            <!----><p style="font-size: 1.2rem;font-weight:500" class="bold">Children of this category will not be deleted.</p>
    </div>
    <div class="input-container cat-to-include-in">
            <label for="cat-to-include-in" trans="">In this case choose the parent category which you want to include children of this category </label>
            <select id="cat-to-include-in" name="cat_to_include_in" type="text" class="form-control">
               
                @foreach($categories as $category)
                <option value="{{$category->id}}" class="all-cat" style="">{{$category->category_name}}</option>
                @endforeach
            </select>
            
    </div>
    <div class="buttons right">
            <button class="button cancel" trans="" type="button">Cancel</button>
        </button>
        <button class="button primary submit-button submit-delete-category" type="submit">
            <!----><span trans="">Delete</span>
            <!---->
        </button>
    </div>
 </form>
</div>
<div class="modal modal-visible modal-detach-child-cat" style="z-index: 11;"><div class="backdrop"></div>

 <form class="modal-content ng-untouched ng-pristine ng-valid ps-container ps-theme-lite ps-active-y" >
     <input type="hidden" id="parent_of_to_detach" name="">
     <input type="hidden" id="this_id">
     <input type="hidden" id="parchild">
    <div class="modal-heading">
        <h2 class="modal-title" style="    font-size: 1.7rem;">
            <!----><span trans="" >Detach Category</span>
            <!---->
        </h2>
        <button class="close-button no-style" type="button" style="background:none;cursor:pointer">
            <i class="fa fa-close fa-lg"></i>
        </button>
    </div>

    <div class="confirm-content">
            <p style="font-size: 1.2rem;">Are you sure you want to detach this category from its parent?</p>
    </div>

    <div class="buttons right">
         <button class="button cancel" trans="" type="button">Cancel</button>
        <button class="button primary submit-button submit-detach" type="submit">

            <!----><span trans="">DETACH</span>
            <!---->
        </button>
    </div>
 </form>
</div>
@endSection
