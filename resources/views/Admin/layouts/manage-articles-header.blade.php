<style>
        #update-article-span{display: none}
        .create-new-article i.fa-cog{    opacity: 0.6;display: none;
    position: relative;
    right: 15px;
    top: 4px;}
</style>
<div class="manage-header">
    
    
    
    
    <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th colspan="2">
                        <ul class="list-unstyled">
                                <li><a href="">Home</a></li>
                                <li><a href="{{route('admin.manage_categories')}}">Categories</a></li>
                                <li><a href="{{route('admin.manage_articles')}}">Articles</a></li>
                        </ul>
                  </th>
                  <th>
                        <div class="admin-search admin-search-articles" pag="">
                                <form action="" method="GET">
                                    {{csrf_field()}}
                                    <input class="form-control" type="text" name="admin-search" id="admin-search" placeholder="Search">
                                    <img src="{{asset('img/search.png')}}" alt="search-icon">
                                </form>
                        </div>
                  </th>
                  <th>
                        <div class="filter-articles-table">
                                <i class="fa fa-th-list fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-th fa-lg" aria-hidden="true"></i>
                    
                        </div>
                  </th>
                  <th>
                        <form action="" method="GET">
                                {{csrf_field()}}
                                <select name="filter" id="manage-filter-categories" class="form-control">
                                        <option value="mv">Most viewed first</option>
                                        <option value="mh">Most helpful first</option>
                                        <option value="new">Newest first</option>
                                        <option value="az">A to Z</option>
                                </select>
                        </form>
                       
                  </th>
                  <th>
                      <div class="create-new-article">
                                <i class="fa fa-cog fa-lg"></i>
                                <span id="update-article-span"><a>Update Article</a></span>
                      <span id="new-article-span"><a href="{{route('admin.manage_new_article')}}"><i class="fa fa-plus" style="margin-right: 5px;"></i>Create New Article</a></span>
                      </div>
                  </th>
                </tr>
              </thead>
              
            </table>
          </div>
    
</div>