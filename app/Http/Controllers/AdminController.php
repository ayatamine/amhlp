<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\siteSettings;
use App\newTicketPage;
use App\Menu;
use App\first_reply;
use App\ticket;
use App\category;
use App\assign_users_to_ticket;
use Auth;
use App\reply;
use Session;
use App\ParentChildCategories;
use App\childCategory;
use App\feedback;
use DB;
use App\groups;
use App\permissions;
use App\Assign_users_group;
use App\groups_permissions;
use App\allPermissions;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $folders=category::where('id','<',7)->get();
        
        $tags=category::where('id','>',12)->get();
         $tags=array('Open','Closed','Pending','Spam');
       

        $tickets=ticket::where('status','Open')->get();
        //count of each status
        $tickets_count_open=$tickets->count();
        $tickets_count_closed=ticket::where('status','Closed')->get()->count();
        $tickets_count_pending=ticket::where('status','Pending')->get()->count();
        $tickets_count_spam=ticket::where('status','Spam')->get()->count();
        // end count 
        $route_active='Open';
        return view('Admin.cPanel')
        ->with('tickets',$tickets)
        ->with('folders',$folders)
        ->with('tags',$tags)
        ->with('router_active',$route_active)
        ->with('tco',$tickets_count_open)
        ->with('tcc',$tickets_count_closed)
        ->with('tcp',$tickets_count_pending)
        ->with('tcs',$tickets_count_spam);
    }
    public function ticket_by_tags($tag_id){
        $folders=category::where('id','<',7)->get();
        
        $tags=array('Open','Closed','Pending','Spam');
        if($tag_id=='13' || $tag_id=='14' || $tag_id=='15' || $tag_id=='16'){
            switch ($tag_id) {
                case '13':
                  $tickets=ticket::where('status','Open')->get();
                  $router_active='Open';
                    break;
                case '14':
                  $tickets=ticket::where('status','Closed')->get();
                  $router_active='Closed';
                    break;
                case '15':
                  $tickets=ticket::where('status','Pending')->get();
                  $router_active='Pending';
                    break;
                case '16':
                  $tickets=ticket::where('status','Spam')->get();
                  $router_active='Spam';
                    break;
                default:
                    # code...
                    break;
            }
        }else{

        
        $tickets=ticket::where('category_id',$tag_id)->get();
        
        $router_active=category::find($tag_id)->category_name;

        }
         //count of each status
         $tickets_count_open=ticket::where('status','Open')->get()->count();
         $tickets_count_closed=ticket::where('status','Closed')->get()->count();
         $tickets_count_pending=ticket::where('status','Pending')->get()->count();
         $tickets_count_spam=ticket::where('status','Spam')->get()->count();
         // end count 

        return view('Admin.ticketsByTags')
        ->with('tickets',$tickets)
        ->with('folders',$folders)
        ->with('tags',$tags)
        ->with('router_active',$router_active) 
        ->with('tco',$tickets_count_open)
        ->with('tcc',$tickets_count_closed)
        ->with('tcp',$tickets_count_pending)
        ->with('tcs',$tickets_count_spam);;
    }
    public function manage_articles(){
        $tickets_simple=ticket::where('category_id',6)->paginate(2);
        $categories=category::where('id','<','7')->get();
        $child_categories=childCategory::all();
        return view ('Admin.manageArticles')
        ->with('categories',$categories)
        ->with('child_categories',$child_categories)
        ->with('tickets',$tickets_simple);
        ;
    }
    // new article
    public function manage_new_article(){
        $categories=category::where('id','<','7')->get();
        $child_categories=childCategory::all();
        //
        return view ('Admin.NewArticle')
        ->with('categories',$categories)
        ->with('child_categories',$child_categories)
        ;
    }
    // store new article
    public function store_article(Request $request){

          $this->validate($request,[
            'article_title'=>'required|string',
            'article_content'=>'required',   
           ]);
           //////// tags
           if($request->input('sub_category_id')==''){
                $sub_cat_id='Installation';
            }else{
                $id=substr($request->input('sub_category_id'),1,1);
                if($id != ""){
                
                $sub_cat_name=childCategory::find($id)->child_category_name;
                }else{
                    $sub_cat_name=childCategory::find($request->input('sub_category_id'))->child_category_name;
                }
            }
           /////////////////
           if($request->input('category_id')==''){
               $cat_id=1;
           }else{
               $cat_id=$request->input('category_id');
           }
          
           if($request->input('article_content') == ''){
             $details='';
           }else{
               $details=$request->input('article_content');
           }

           // slug
           if($request->input('article_slug') != ''){
               $slug=$request->input('article_slug');
           }else{
               $slug=str_slug($request->input('article_title'));
           }
           // added tags
           $added_tags='';
        
           if( $request->input('added_tags_id') !=null && count($request->input('added_tags_id')) > 0){
           foreach ($request->input('added_tags_id') as $tag) {
               $added_tags.=$tag.',';
           }
          }
         ticket::create([
           'title'=>$request->input('article_title'),
           'user_id'=>Auth::id(),
           'slug'=>$slug,
           'details'=>$details,
           'category_id'=>$cat_id,
           'sub_category_name'=>$sub_cat_name,
           'publish_state'=>$request->input('article_state'),
           'added_tags'=>$added_tags,
         ]);
         Session::flash('success','the operation finished with success');
         return redirect()->back();
   
    }
     // store new article
    public function update_article(Request $request,$ticket_slug){
  
          $this->validate($request,[
            'article_title'=>'required|string',
            'article_content'=>'required',   
           ]);
           $ticket=ticket::where('slug',$ticket_slug)->get()->first();
           //////// tags
           if($request->input('sub_category_id')==''){
                $sub_cat_id='Installation';
            }else{
                $id=substr($request->input('sub_category_id'),1,1);
                if($id != ""){
                
                $sub_cat_name=childCategory::find($id)->child_category_name;
                }else{
                    $sub_cat_name=childCategory::find($request->input('sub_category_id'))->child_category_name;
                }
             
            }
           /////////////////
           if($request->input('category_id')==''){
               $cat_id=1;
           }else{
               $cat_id=$request->input('category_id');
           }
          
           if($request->input('article_content') == ''){
             $details='';
           }else{
               $details=$request->input('article_content');
           }
          
           // slug
           if($request->input('article_slug') != ''){
               $slug=$request->input('article_slug');
           }else{
               $slug=str_slug($request->input('article_title'));
           }
          
           // added tags
           $added_tags='';
        
           if( $request->input('added_tags_id') !=null && count($request->input('added_tags_id')) > 0){
           foreach ($request->input('added_tags_id') as $tag) {
               $added_tags.=$tag.',';
           }
          
          }
         // dd($request->input('article_state'));
           $ticket->title=$request->input('article_title');
           $ticket->user_id=$ticket->user_id;
           $ticket->slug=$slug;
           $ticket->details=$details;
           $ticket->category_id=$cat_id;
           $ticket->sub_category_name=$sub_cat_name;
           $ticket->publish_state=$request->input('article_state');
           $ticket->added_tags=$added_tags;
          $ticket->save();
         Session::flash('success','the operation finished with success');
         return redirect()->back();
   
    }
    public function edit_article($article_id){
        $categories=category::where('id','<','7')->get();
        $child_categories=childCategory::all();
        $ticket=ticket::find($article_id);

        //
        
        return view ('Admin.editArticle')
        ->with('categories',$categories)
        ->with('child_categories',$child_categories)
        ->with('ticket',$ticket);
        ;
    }
    public function get_articles_checked($cat_id,$child_id){
      //  $categories=category::all()->count()-6;
        $output='';
        $arr_id=array();
        switch ($cat_id) {
            case 0:
                
                $articles=ticket::where('category_id',$child_id)->get();
                break;
            
            
            case $cat_id != 0:
                $pre_articles=ticket::where('category_id',$cat_id);
                $sub_cat_name=childCategory::find($child_id)->child_category_name;
                
                $articles=$pre_articles->where('sub_category_name',$sub_cat_name)->get();
                
                break;
        }
        foreach ($articles as $ar) {
          array_push($arr_id,$ar->id);
          $cat_name=category::find($ar->category_id)->category_name;
          $output.='
          <div class="col-xs-12  col-md-4 col-lg-3 articls-list-item">
          <input type="hidden" id="tickett-id" name="ticket_id" value="/delete-articles/'.$ar->id.'">
          <img src="../img/trash.png" alt="trash" class="trash-article">
          <div class="article-categories">
                  <!----><span class="parent-category">'.$cat_name.' &gt; </span>
                  <span class="category">'.$ar->sub_category_name.'</span>
          </div>
          <div class="article-title">'.$ar->title.'</div>
          <div class="article-body"> '.$ar->details.'</div> 
          </div> ';
        }
        $article_details=array(
            'ticket_fonded' => $output,
            'array_id'=>$arr_id,
            'total_row'=>$articles->count(),
        );
        return $article_details;
        //$ticket=ticket::where($article_id);
       
    }
    ////////////////////////////////////////////
    public function filter_by_publish_state($filter_type){
        //  $categories=category::all()->count()-6;
          $output='';
          $arr_id=array();
          if($filter_type=='all'){
            $articles=ticket::all();
          }else{
            $articles=ticket::where('publish_state',$filter_type)->get();
          }
          foreach ($articles as $ar) {
            array_push($arr_id,$ar->id);
            $cat_name=category::find($ar->category_id)->category_name;
            $output.='
            <div class="col-xs-12  col-md-4 col-lg-3 articls-list-item">
            <input type="hidden" id="tickett-id" name="ticket_id" value="/delete-articles/'.$ar->id.'">
            <img src="../img/trash.png" alt="trash" class="trash-article">
            <div class="article-categories">
                    <!----><span class="parent-category">'.$cat_name.' &gt; </span>
                    <span class="category">'.$ar->sub_category_name.'</span>
            </div>
            <div class="article-title">'.$ar->title.'</div>
            <div class="article-body"> '.$ar->details.'</div> 
            </div> ';
          }
          $article_details=array(
              'ticket_fonded' => $output,
              'array_id'=>$arr_id,
              'total_row'=>$articles->count(),
          );
          return $article_details;
          //$ticket=ticket::where($article_id);
         
      }
      /////////////////////////////////////////////
      /////////// manage_search_word
      public function manage_search_categories($cat_name){
        $output='';
        $categories=category::all();
        $child_categories=childCategory::where('child_category_name','like','%'.$cat_name.'%')->get()->first();
        if($child_categories != null){
            foreach ($categories as $cat) {
               $output.='
               <div class="category parent-category">
               <input type="checkbox" name="select_ticket" value="'.$cat->id.'" id="select-ticket" class="customer-op" >
               <label for="select-ticket" class="select-label">
                       <i class="fa fa-check fa-lg check-ticket"></i>
               </label>
               
               '.$cat->category_name.'
       </div>
    
       <div class="category child-category">
               <input type="checkbox" name="select_ticket" value="'.$cat->id.''.$child_categories->id.'" id="select-ticket" class="customer-op" >
               <label for="select-ticket" class="select-label">
                       <i class="fa fa-check fa-lg check-ticket"></i>
               </label>
               '.$child_categories->child_category_name.'
       </div>

    

    
       ';
            }
        }else{
            $cat=category::where('category_name','like','%'.$cat_name.'%')->get();
            dd($cat);
            $child_categories=childCategory::all();
           $output.='
           <div class="category parent-category">
           <input type="checkbox" name="select_ticket" value="'.$cat->id.'" id="select-ticket" class="customer-op" >
           <label for="select-ticket" class="select-label">
                   <i class="fa fa-check fa-lg check-ticket"></i>
           </label>
           
                    '.$cat->category_name.'
            </div>

            <div class="category child-category">
                    <input type="checkbox" name="select_ticket" value="'.$cat->id.''.$child_categories->id.'" id="select-ticket" class="customer-op" >
                    <label for="select-ticket" class="select-label">
                            <i class="fa fa-check fa-lg check-ticket"></i>
                    </label>
                    '.$child_categories->child_category_name.'
            </div>
            ';
        }
     

        
       

       
        $categories=array(
            'all_result' => $output,
           
        );
       
        return $categories;
      }

      /////////// manage_search_word
       public function manage_search_word($search_type,$search_word){
        $output='';
        $arr_id=array();
        if($search_type =='articles'){
          $articles=ticket::where('title','like','%'.$search_word.'%')->get();
        
        foreach ($articles as $ar) {
          array_push($arr_id,$ar->id);
          $cat_name=category::find($ar->category_id)->category_name;
          $output.='
          <div class="col-xs-12  col-md-4 col-lg-3 articls-list-item">
          <input type="hidden" id="tickett-id" name="ticket_id" value="/delete-articles/'.$ar->id.'">
          <img src="../img/trash.png" alt="trash" class="trash-article">
          <div class="article-categories">
                  <!----><span class="parent-category">'.$cat_name.' &gt; </span>
                  <span class="category">'.$ar->sub_category_name.'</span>
          </div>
          <div class="article-title">'.$ar->title.'</div>
          <div class="article-body"> '.$ar->details.'</div> 
          </div> ';
        }
        $article_details=array(
            'ticket_fonded' => $output,
            'array_id'=>$arr_id,
            'total_row'=>$articles->count(),
        );
       }
        return $article_details;
      }

      //  select input most helpful or viewer first
      public function manage_filter_categories($filter_name){
        //  $categories=category::all()->count()-6;
          $output='';
          $arr_id=array();
        
          switch ($filter_name) {
              case 'mh':
                   $articles=ticket::orderby('title','desc')->where('language','english')->paginate(15);
                  break;
              case 'new':
                   $articles=ticket::orderBy('created_at','desc')->where('language','english')->paginate(15);
                  break;
              case 'az':
                   $articles=ticket::orderby('title','asc')->paginate(15);
                  break;
              case 'mv':
                   $articles=ticket::orderby('created_at','asc')->paginate(15);
                  break;
              default:
                
                  break;
          }
          foreach ($articles as $ar) {
            array_push($arr_id,$ar->id);
            $cat_name=category::find($ar->category_id)->category_name;
            $output.='
            <div class="col-xs-12  col-md-4 col-lg-3 articls-list-item">
            <input type="hidden" id="tickett-id" name="ticket_id" value="/delete-articles/'.$ar->id.'">
            <img src="../img/trash.png" alt="trash" class="trash-article">
            <div class="article-categories">
                    <!----><span class="parent-category">'.$cat_name.' &gt; </span>
                    <span class="category">'.$ar->sub_category_name.'</span>
            </div>
            <div class="article-title">'.$ar->title.'</div>
            <div class="article-body"> '.$ar->details.'</div> 
            </div> ';
          }
          $article_details=array(
              'ticket_fonded' => $output,
              'array_id'=>$arr_id,
          );
          return $article_details;
          //$ticket=ticket::where($article_id);
         
      }
    public function update_ticket(){
        $ticket=ticket::find($request->input('ticket_id'));
        $ticket->details->$ticket->$request->input('article_content');

        return view ('Admin.editArticle')
        ->with('ticket',$ticket);
        ;
    }
    public function delete_articles($artilce_id){
        $ticket=ticket::find($artilce_id);
        $ticket->delete();
        return "article deleted";
    }

    public function manage_categories(){
        //
        $categories=category::where('id','<','7')->get();
        $categories2=category::where('id','>','12')->where('type','category')->get();
        foreach($categories2 as $c2){
            $categories->add($c2);
        }
        $child_categories=childCategory::all();
        //

        $par_child=$users = DB::table('parent_child_categories')
        ->groupBy('parent_id','id')
        ->having('id', '>', 0)
        ->get();
        return view ('Admin.manageCategories')
        ->with('par_child',$par_child)
        ->with('categories',$categories)
        ->with('child_categories',$child_categories);
    }
    public function manage_users(){
        return view ('Admin.manageUsers')
        ->with('users',User::all())
        ->with('roles',groups::all())
        ->with('all_permissions',allPermissions::where('parent_id','==','0')->where('id','!=','1')->get());
    }

    public function manage_tags(){
            
            return view ('Admin.manageTags')
            ->with('tags',category::all());
    }
    public function update_tag($id,$dis_name,$type){
            
            $tag=category::find($id);
            $tag->display_name=$dis_name;
            $tag->type=$type;
            $tag->save();
            return $data=array(
                 'display_name'=>$dis_name,
                 'type'=>$type,
            );
           
    }
     public function create_tag($tag_name,$dis_name,$type){
            
            if($tag_name !='vide'){
               if($dis_name =='vide'){
                   $dis_name =$tag_name;
               }
            $new_tag=category::create([
               'category_name'=>$tag_name,
               'display_name'=>$dis_name,
               'type'=>$type,
            ]);
            $output='
            <div class="flex-table-row" thisid="'.$new_tag->id.'">
            <div class="flex-table-item width-1">
                <input class="pretty-checkbox" type="checkbox" id="tag-checkbox-'.$new_tag->id.'" value="0">
                <i class="fa fa-check"></i>
                <label for="tag-checkbox-'.$new_tag->id.'" id="'.$new_tag->id.'"><span></span></label>
            </div>
            <div class="flex-table-item cat_name">'.$new_tag->category_name.'</div>
            <div class="flex-table-item capitalize cat_type">'.$new_tag->type.'</div>
            <div class="flex-table-item width-3 cat_display_name">'.$new_tag->display_name.'</div>
            <div class="flex-table-item"></div>
            <div class="flex-table-item width-1 center edit-icon" tooltip="Edit Tag">
                    <i class="fa fa-pencil " aria-hidden="true"></i>                         
            </div>
          </div>';
            return $data=array(
                 'new_tag'=>$output,
            );
        }else{
            return '';
        }
           
    }
    public function delete_tag($tags){
        $ids=explode(',',$tags);
        
       foreach($ids as $id){
           $tag=category::find($id);
           $tag->delete();
       }
       return $data=$ids;
    }
    public function delete_users(){
        $users_id=$_GET['array_of_id'];
       foreach($users_id as $id){
           $user=User::find($id);
           $user->delete();
       }
       return $data=$users_id;
    }
    public function manage_groups(){
            return view ('Admin.manageGroups')
            ->with('groups',groups::all())
            ->with('first_group',Assign_users_group::where('group_id',groups::all()->first()->id)->get())
            ->with('all_permissions',allPermissions::where('parent_id','==','0')->where('id','!=','1')->get());
    }
    public function manage_pages(){
                return view ('Admin.managePages');
    }
    public function manage_settings(){
                return view ('Admin.manageSettings');
    }
     public function manage_appearance(){
                return view ('Admin.manageAppearance');
    }
    public function manage_triggers(){
                return view ('Admin.manageTrigger');
    }
    public function manage_reports(){
        return view('Admin.manageReports');
    }
    public function manage_canned_replies(){
        return view('Admin.manageCannedReplies')
        ->with('canned_replies',reply::where('type','canned')->get());
    }

    public function manage_mail_templates(){
        return view ('Admin.manageMailTemplates')
        ->with('body','Let me see: I\'ll give them a railway station.) However, she did not venture to go from here?\' \'That depends a good deal frightened by this time, as it didn\'t sound at all know whether it was just in.');
    }
    public function search_all($word,$type){
        $output='';
        switch ($type) {
            case 'Search tags':
                $tags=category::where('category_name','like','%'.$word.'%')->get();
                foreach($tags as $new_tag){
                  $output.=  '
                  <div class="flex-table-row" thisid="'.$new_tag->id.'">
                  <div class="flex-table-item width-1">
                      <input class="pretty-checkbox" type="checkbox" id="tag-checkbox-'.$new_tag->id.'" value="0">
                      <i class="fa fa-check"></i>
                      <label for="tag-checkbox-'.$new_tag->id.'" id="'.$new_tag->id.'"><span></span></label>
                  </div>
                  <div class="flex-table-item cat_name">'.$new_tag->category_name.'</div>
                  <div class="flex-table-item capitalize cat_type">'.$new_tag->type.'</div>
                  <div class="flex-table-item width-3 cat_display_name">'.$new_tag->display_name.'</div>
                  <div class="flex-table-item"></div>
                  <div class="flex-table-item width-1 center edit-icon" title="Edit Tag">
                          <i class="fa fa-pencil " aria-hidden="true"></i>                         
                  </div>
                </div>';
                }
                
                break;
            case 'Search users':
                $users=User::where('firstname','like','%'.$word.'%')->orWhere('lastname','like','%'.$word.'%')->get();
                
                foreach($users as $user){
                  $output.=  '
                  <div class="flex-table-row" thisid="'.$user->id.'">
                  <div class="flex-table-item width-1">
                      <input class="pretty-checkbox" type="checkbox" id="user-checkbox-'.$user->id.'" value="0">
                      <i class="fa fa-check" style="color: transparent;"></i>
                      <label for="user-checkbox-'.$user->id.'" id="'.$user->id.'" class=""><span></span></label>
                  </div>
                  <div class="flex-table-item width-2 image"><img src="http://127.0.0.1:8000/img/'.$user->avatar.'"></div>
                  <div class="flex-table-item width-3 no-wrap">'.$user->email.'</div>
                  <div class="flex-table-item capitalize no-wrap clickable"><span>customers</span></div>
                  <div class="flex-table-item no-wrap capitalize clickable"><span></span></div>
                  <div class="flex-table-item">'.$user->firstname.'</div>
                  <div class="flex-table-item">'.$user->lastname.'</div>
                  <div class="flex-table-item width-1 center edit-icon" title="Edit User">
                      <!----><i class="fa fa-pencil " aria-hidden="true"></i>
                  </div>
              </div>';
                }
                
                break; 
                case 'Search Canned Replies':
                $canned_r=reply::where('name','like','%'.$word.'%')->where('type','canned')->get();
                
                foreach($canned_r as $reply){
                    $output.='
                    <div class="flex-table-row" thisId="'.$reply->id.'">
                    <div class="flex-table-item width-1">
                        <input class="pretty-checkbox" type="checkbox" id="tag-checkbox-'.$reply->id.'" value="0">
                        <i class="fa fa-check"></i>
                        <label for="tag-checkbox-0" id="'.$reply->id.'"><span></span></label>
                    </div>
                    <div class="flex-table-item canned-name">'.$reply->name.'</div>
                    <div class="flex-table-item capitalize canned-content">'.str_limit($reply->reply_content,250).'</div>
                    <div class="flex-table-item width-3 user-email">'.$reply->user->email.'</div>
                    <div class="flex-table-item canned-created-at">'.date("d-m-o",strtotime($reply->created_at)).'</div>
                    <div class="flex-table-item width-1 center edit-icon edit-canned-reply" title="Edit Tag">
                            <i class="fa fa-pencil " aria-hidden="true"></i>                         
                    </div>
                </div>';
                }
                
                break; 
            
            default:
                # code...
                break;
        }
        return $data=array(
            'rows'=>$output,
        );
    }
    public function search_users_of_group(){
        $output=''; $group=$_GET['group_id'];$word=$_GET['word'];
        $all_users=Assign_users_group::where('group_id',$group);
        $users=User::where('firstname','like','%'.$word.'%')->orWhere('lastname','like','%'.$word.'%')->get();
        $all_id='';
        foreach($users as $user){
            $all_id.=$user->id;
        }
        $output='<div class="flex-table-row flex-table-header">
        <div class="flex-table-item width-1">
            <input class="pretty-checkbox" id="toggle-all-users-checkbox" type="checkbox">
            <i class="fa fa-check"></i>
            <label for="toggle-all-users-checkbox" id="'.$all_id.'"><span></span></label>
        </div>
        <div class="flex-table-item width-2 image" trans="">Avatar</div>
        <div class="flex-table-item width-3" trans="">Email</div>
        <div class="flex-table-item" trans="">First Name</div>
        <div class="flex-table-item" trans="">Last Name</div>
        <div class="flex-table-item width-1"></div>
       </div>';
        foreach($users as $user){
          $output.=  '
          <div class="flex-table-row">
          <div class="flex-table-item width-1">
                  <input class="pretty-checkbox" id="user-checkbox-'.$user->id.'" type="checkbox">
                  <i class="fa fa-check "></i>
                  <label for="user-checkbox-'.$user->id.'" id="'.$user->id.'"><span></span></label>
          </div>
              <div class="flex-table-item width-2 image" trans=""><img class="user-group-avatar" src="../../img/loggedin.png" alt=""></div>
              <div class="flex-table-item width-3" trans="">'.$user->email.'</div>
              <div class="flex-table-item" trans="">'.$user->firstname.'</div>
              <div class="flex-table-item" trans="">'.$user->lastname.'</div>
              <div class="flex-table-item width-1"></div>
           
        
      </div>';
        }

        return $data=array(
            'rows'=>$output,
        );  
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save_appear_general(Request $request)
    {
        $site_settings=siteSettings::find(1);
    
                    
        $this->validate($request,[
            'app_gen_img' => 'mimes:jpeg,ico,png'
        ]);
       
       
        $image_name=$request->file('app_gen_img');
        $input_name=$request->input('image_name');
        if($image_name!=''){
            $img_changed=time().$image_name->getClientOriginalName();
            $image_name->move(public_path('img/'),$img_changed);
        switch ($input_name) {
            case 'copyright-img':
                $site_settings->copyright_img=$img_changed;
                break;
             case 'logoWhite':
                $site_settings->logoWhite=$img_changed;
                break;
            case 'favicon-icon':
                $site_settings->favicon_icon=$img_changed;
                break;
             case 'site-name':
                $site_settings->site_name=$img_changed;
                break;
             case 'site-url':
                $site_settings->site_url=$img_changed;
                break;   
            default:
                # code...
                break;
        }
        }
        else{
            return redirect()->back();
            }
        $site_settings->save();
        return redirect()->back();
        
    }
    public function save_appear_helpCenter(Request $request){
        
        $site_settings=siteSettings::find(1);     
              if($request->input('intro_title') !=''){
                  $site_settings->into_title=$request->input('intro_title');
              }
              if($request->input('intro_search_placeholder') !=''){
                  $site_settings->intro_search_placeholder=$request->input('intro_search_placeholder');
              }
        $site_settings->save();
        return redirect()->back();
    }
    
    public function save_appear_newTicketpage(Request $request){
       
        $paramNewTicketPage=newTicketPage::find(1);
        $paramNewTicketPage->title=$request->input('title');
        $paramNewTicketPage->Category_label=$request->input('Category_label');
        $paramNewTicketPage->Sub_Category_label=$request->input('Sub_Category_label');
        $paramNewTicketPage->Subject_Label=$request->input('Subject_Label');
        $paramNewTicketPage->Description_Label=$request->input('Description_Label');
        $paramNewTicketPage->Sidebar_Title=$request->input('Sidebar_Title');
        $paramNewTicketPage->Submit_button=$request->input('Submit_button');
        $paramNewTicketPage->Sidebar_Tips1=$request->input('Sidebar_Tips1');
        $paramNewTicketPage->Sidebar_Tips1_details=$request->input('Sidebar_Tips1_details');
        $paramNewTicketPage->Sidebar_Tips2=$request->input('Sidebar_Tips2');
        $paramNewTicketPage->Sidebar_Tips2_details=$request->input('Sidebar_Tips2_details');
        $paramNewTicketPage->Sidebar_Tips3=$request->input('Sidebar_Tips3');
        $paramNewTicketPage->Sidebar_Tips3_details=$request->input('Sidebar_Tips3_details');
        $paramNewTicketPage->save();
        return redirect()->back();
    }


     public function delete_menu(){
         if(request()->input('menu_id') !='1'){
         $menu =Menu::find(request()->input('menu_id'));
        
         $menu->delete();
          }
         return redirect()->back(); 
          
     }
     public function update_menu($id){

        $menu =Menu::find($id);
        $menu->name=request()->input('name');
        $menu->position=request()->input('position');
        
        $menu_item=
        $menu->label=request()->input('label');
        $menu->type=request()->input('type');
        $menu->action=request()->input('action');
        $menu->condition=request()->input('condition');
       $menu->save();
        return redirect()->back(); 
         
    }
    public function getCharts(){
        $replies=first_reply::all();
     $data=array();
     $first=0;  $second=0;  $third=0;  $forth=0;
     foreach($replies as $row){
        switch ($row->period) {
            case '0-1':
                $first =$first+1;
                break;
            case '0-1':
                $second =$second+1;
                break;
             case '0-1':
                $third =$third+1;
                break;
             case '0-1':
                $forth =$forth+1;
                break;
            default:
                # code...
                break;
        }

        
     }
     array_push($data,$first);array_push($data,$second);array_push($data,$third);array_push($data,$forth);

     return $data;

    }
    

    public function get_ticket_of_tag($tag_id,$ticket_id){
        $back_button_href='/mailbox/tickets/tag/'.$tag_id;
        $folders=category::where('id','<',7)->get();
        
        $tags=array('Open','Closed','Pending','Spam');
        if($tag_id=='13' || $tag_id=='14' || $tag_id=='15' || $tag_id=='16'){
            switch ($tag_id) {
                case '13':
                  $router_active='Open';
                    break;
                case '14':
                  $router_active='Closed';
                    break;
                case '15':
                  $router_active='Pending';
                    break;
                case '16':
                  $router_active='Spam';
                    break;
                default:
                    # code...
                    break;
            }
        }else{
        $router_active=category::find($tag_id)->category_name;
        }
        //count of each status
        $tickets_count_open=ticket::where('status','Open')->get()->count();
        $tickets_count_closed=ticket::where('status','Closed')->get()->count();
        $tickets_count_pending=ticket::where('status','Pending')->get()->count();
        $tickets_count_spam=ticket::where('status','Spam')->get()->count();
        // end count

        $ticket=ticket::find($ticket_id);
        $all_tags=explode(',',$ticket->added_tags);
        array_pop($all_tags);
        return view('Admin.TicketsOftag')
        ->with('ticket',$ticket)
        ->with('all_tags',$all_tags)
        ->with('replies',reply::where('ticket_id',$ticket_id)->orderby('created_at','desc')->get())
        ->with('folders',$folders)
        ->with('tags',$tags)
        ->with('router_active',$router_active)
        ->with('back_button_href',$back_button_href)
        ->with('tco',$tickets_count_open)
        ->with('tcc',$tickets_count_closed)
        ->with('tcp',$tickets_count_pending)
        ->with('tcs',$tickets_count_spam);
    }
     public function change_ticket_status($ticket_id,$status){
         $ticket=ticket::find($ticket_id);
         $ticket->status=$status;
         $ticket->save();
         return "status changed";
     }
     public function change_multiple_tickets_status(){
        $data=array();
         $tickets_id=$_GET['tickets_id']; $statut=$_GET['statut'];
         foreach($tickets_id as $id){
             $ticket=ticket::find($id);
             if($ticket->status == $statut){
                 return $data=array(
                     'total_rows'=>0,
                    'tickets_id'=>$tickets_id,
                );
             }
             $ticket->status=$statut;
             $ticket->save();
         }
         return $data=array(
            'total_rows'=>count($tickets_id),
             'tickets_id'=>$tickets_id,
         );
     }
     public function assign_users_to_tickets(){
         $tickets_id=$_GET['tickets_id'];$type=$_GET['type_of_assignement'];

         $exist=false;
        if($type == "Me"){
            $assign_exist=assign_users_to_ticket::where('user_id',Auth::id())->get();
            if($assign_exist->count() > 0){
            
            foreach($tickets_id as $id){
                foreach($assign_exist as $as){
                    if($as->ticket_id !=$id){
                    assign_users_to_ticket::create([
                    'ticket_id'=>$id,
                    'user_id'=>Auth::id(),
                 ]); 
                    }
                }
               
            }
           }else{
               
            foreach($tickets_id as $id){
                  dd($id);
 
            }
           }
        }
        else{
         
        
     }
    }
     public function tag_search_value($tag_value){
      $tag_exist=category::where('category_name','like','%'.$tag_value.'%')->get()->first()->category_name;
      return $tag_exist;
     }
     public function add_tag($ticket_id,$tag){
        $exist=false;
        $ticket=ticket::find($ticket_id);

        $tags_exist=$ticket->added_tags;
        
        $array_of_tags=explode(',',$tags_exist);

        if(!in_array($tag,$array_of_tags)){

         $ticket->added_tags.=$tag.',';
         $ticket->save();
         return "tag added";
     }else{
         return "tag exist";
     }
    }
    public function add_tag_multiple_tickets(){
        $tickets_id=$_GET['tickets_id'];$tag=$_GET['tag_name'];
        
        foreach($tickets_id as $id){

        $ticket=ticket::find($id);

        $tags_exist=$ticket->added_tags;
        
        $array_of_tags=explode(',',$tags_exist);

        if(!in_array($tag,$array_of_tags)){

         $ticket->added_tags.=$tag.',';
         $ticket->save();
         
     }
    }
    return "tag added";
    }
    public function delete_multiple_tickets(){
        $tickets_id=$_GET['tickets_id'];
        foreach($tickets_id as $id){
            $ticket=ticket::find($id);
            $ticket->delete();
        }
        return $data=array(
            'tickets_id'=>$tickets_id,
        );
    }
    //remove tags
    public function remove_tag($ticket_id,$tag){
       
        $ticket=ticket::find($ticket_id);

        $tags_exist=$ticket->added_tags;
        
        $array_of_tags=explode(',',$tags_exist);
        
        if(($key = array_search($tag,$array_of_tags)) !== false){

         unset($array_of_tags[$key]);
         // concatinate elements
         $tags_after_removing=implode(',',$array_of_tags);
         $ticket->added_tags=$tags_after_removing;
         $ticket->save();
         return "tag removed";
     }else{
         return "tag exist";
     }
    } 





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function test_exist($model,$attr){
        $exist=false;
        

        $already_exist=$model::all();
        foreach ($already_exist as $exist) {
            if(($assigned->ticket_id == $tickets_id) && ($assigned->user_id==$user_id)){
               $exist=true; 
            }
        }
    }
    public function create_reply(Request $request){

        if($request->input('reply_content') !=''){
          reply::create([
            'user_id'=>Auth::id(),
            'ticket_id'=>$request->input('ticket_id'),
            'reply_content'=>$request->input('reply_content'),
            'type'=>$request->input('reply_type')
          ]);
          $ticket_status=$request->input('ticket_status');
          $ticket_to_change=ticket::find($request->input('ticket_id'));
          $ticket_to_change->status=$ticket_status;
          $ticket_to_change->save();

          switch ($request->input('redirect_after_reply')) {
            case 'back_to_folder':
    
                return redirect($request->input('tag_id'));
            case 'next-active-ticket':
                $cat=ticket::find($request->input('ticket_id'))->category_id;
               
                $ne=ticket::where('category_id',$cat)->get();
                if($request->input('ticket_id') != $ne->last()->id){
                $next=$ne->where('id','>',$request->input('ticket_id'))->first()->id;
                   return redirect("/mailbox/tickets/tag/".$cat."/ticket/".$next);  
                }else{
                    return redirect()->back();
                    Session::flash('success','this is the last ticket of this category');
                }
               
                break;
            case 'stay-on-page':
                 return redirect()->back();
                break;
            default:
                # code...
                break;
        }
        }else{
            return redirect()->back();
            Session::flash('danger','The reply should not be empty');
        }
        
    }
    public function create_note(Request $request){
        if($request->input('reply_type')=='draft'){
            $draft_id=$request->input('draft_id');
            $draft=reply::find($draft_id);
            return($draft);
            if($draft != null){
             $draft->reply_content=$request->input('reply_content');
             $draft->type=$request->input('reply_type');
             $draft->save();
            }
        }else{
        
        if($request->input('reply_content') !=''){
            reply::create([
              'user_id'=>Auth::id(),
              'ticket_id'=>$request->input('ticket_id'),
              'reply_content'=>$request->input('reply_content'),
              'type'=>$request->input('reply_type')
            ]);
        }else{
            Session::flash('danger','The content should not be empty');
         }
            return redirect()->back();
        }
    }
    public function update_reply(Request $request){

        $reply_id=$request->input('reply_to_update');
        $reply=reply::find($reply_id);
        
        if($request->input('update_reply') !=''){
        
        $reply->reply_content=$request->input('update_reply');
        //$reply->type=$reply->type;
        $reply->save();
        Session::flash('success','The reply is updated');
    
        }else{
           Session::flash('danger','The reply content should not be empty');  
        }
       return redirect()->back();
        
    }
    public function delete_reply($reply_id){
        $reply=reply::find($reply_id);

        $reply->delete();
        return 'deleted';
    }

    ////////////////////
    public function update_category(Request $request){
         $this->validate($request,[
             'name_category'=>'string',

         ]);
          $cat_id=$request->input('id_cateory');
          $parent_id=$request->input('parent_id');
          //
          $parent_before=$request->input('id_parent_before');
          //
         if($parent_id == '0'){
           $category=category::find($cat_id);

           $category->category_name=$request->input('name_category');
           $category->save();
         }else{
            $child_category=childCategory::find($cat_id);
            

            $child_of_parent=ParentChildCategories::where('parent_id',$parent_before)->where('child_id',$cat_id)->get()->first();
            
            if($child_of_parent != null){
              $child_of_parent->parent_id=$parent_id; 
              $child_of_parent->description=$request->input('description');
               $child_of_parent->save(); 
               // get ticket relative
               $tickets=ticket::where('category_id',$parent_before)->where('sub_category_name', $child_category->child_category_name)->get();
               
               foreach($tickets as $ticket){
                   $ticket->category_id=$parent_id;
                   $ticket->save();
               }
               
            }
            $child_category->child_category_name=$request->input('name_category'); 
            $child_category->save();
             
         }
         Session::flash('success','The category updated successfuly');
         return redirect()->back();
    }
    public function detach_child_category($parent_id,$child_id){
        $child_of_parent=ParentChildCategories::where('parent_id',$parent_id)->where('child_id',$child_id)->get()->first(); 
        $child_of_parent->delete();
        return 'detached';
    }
    public function delete_category($parent_id,$child_id,$include_in){
        if($parent_id =='0'){
                $category=category::find($child_id);
                $ticket_of=ticket::where('category_id',$child_id)->get();
                foreach($ticket_of as $ticket){
                    $ticket->category_id=$include_in;
                    $ticket->save();
                }
                $category->delete();
                return "deleted";
              
            }
          else{
                $child_of_parent=ParentChildCategories::where('child_id',$child_id)->get(); 
                foreach($child_of_parent as $ch){
                $ch->delete();
                }
                $child_cat=childCategory::find($child_id);
                $child_cat->delete();
                return 'Deleted';
           
        }
        
       // return 'detached';
    }
    public function create_child_category(){
        $this->validate(request(),[
            'name_category'=>'required|string',
        ]);
        $cat_name=request()->input('name_category');

        if(request()->input('parent_id') != '0'){
        //////////
        
        $child_created=childCategory::create([
          'child_category_name'=>$cat_name,
        ]);
        ///////////////// 
        ParentChildCategories::create([
            'order'=>$child_created->id,
        'parent_id'=>request()->input('parent_id'),
        'child_id'=>$child_created->id,
        'description'=>request()->input('description')
        ]);
        Session::flash('success','The child category was created successfully');
        }else{
           
            category::create([
              'category_name'=>$cat_name,
            ]);
            Session::flash('success','The category was created succesfully');
        }
        return redirect()->back();

        

    }
    public function update_canned_reply($canned_id){
        $canned_name= $_GET['canned_name'];
        $canned_content=$_GET['canned_content'];
        $reply=reply::find($canned_id);
        $reply->name=$canned_name;
        $reply->reply_content=$canned_content;
        $reply->save();
        return $data=array(
            'canned_id'=>$canned_id,
            'canned_name'=>$canned_name,
            'canned_content'=>$canned_content,
        );
    }
    public function delete_canned_reply($canned_id){
    
     $ids=explode(',',$canned_id);
     
    foreach($ids as $id){
        $canned_r=reply::find($id);
        $canned_r->delete();
    }
    return $data=$ids;
    }
    public function create_canned_reply(){
        $output='';
        $canned_name= $_GET['canned_name'];
        $canned_content=$_GET['canned_content'];
        if($canned_content != ''){
        $reply=reply::create([
           'reply_content'=>$canned_content,
           'user_id'=>Auth::id(),
           'type'=>'canned',
           'name'=>$canned_name,
        ]);
        
        
        
        $output.='
        <div class="flex-table-row" thisId="'.$reply->id.'">
        <div class="flex-table-item width-1">
            <input class="pretty-checkbox" type="checkbox" id="tag-checkbox-'.$reply->id.'" value="0">
            <i class="fa fa-check"></i>
            <label for="tag-checkbox-0" id="'.$reply->id.'"><span></span></label>
        </div>
        <div class="flex-table-item canned-name">'.$reply->name.'</div>
        <div class="flex-table-item capitalize canned-content">'.str_limit($reply->reply_content,250).'</div>
        <div class="flex-table-item width-3 user-email">'.$reply->user->email.'</div>
        <div class="flex-table-item canned-created-at">'.date("d-m-o",strtotime($reply->created_at)).'</div>
        <div class="flex-table-item width-1 center edit-icon edit-canned-reply" title="Edit Tag">
                <i class="fa fa-pencil " aria-hidden="true"></i>                         
        </div>
    </div>';
        }else{
            $output='';
        }
    return $data=array(
        'row_content'=>$output,
    );
    }

    public function search_all_canned_replies(){
        $search_content=$_GET['search_content'];
        
        $replies=reply::where('name','like','%'.$search_content.'%')->get();

        $output='';
        foreach($replies as $reply){
            $output.='
            <div class="flex-table-row" thisid="'.$reply->id.'">
            <div class="flex-table-item width-1">
                <input class="pretty-checkbox" type="checkbox" id="tag-checkbox-21" value="">
                <i class="fa fa-check"></i>
                <label for="tag-checkbox-21" id="21"><span></span></label>
            </div>
            <div class="flex-table-item canned-name">'.$reply->name.'</div>
            <div class="flex-table-item capitalize canned-content">'.$reply->reply_content.'</div>
            <div class="flex-table-item width-3 user-email">'.$reply->user->email.'</div>
            <div class="flex-table-item canned-created-at">'.date('o-m-d',strtotime($reply->created_at)).'</div>
            <div class="flex-table-item width-1 center edit-icon edit-canned-reply" tooltip="Edit Tag">
                    <i class="fa fa-pencil " aria-hidden="true"></i>                         
            </div>
        </div>
            ';
        }
        return $data=array(
              'row_result'=>$output,
        );
    }
    public function detach_roles(){
        $user_id=$_GET['user'];
        $role_element=$_GET['element'];

        $roles_array=[];
        $roles_updated=[];

        if($user_id != null && $role_element != null){
           $user=User::find($user_id);
           

            $roles_array=explode(',',$user->groups_id);
            if(count($roles_array) > 1){
             array_pop($roles_array);
            }
         
            $key=array_search($role_element,$roles_array);
            
            if(($key) !== false){
                unset($roles_array[$key]);
         
            if(count($roles_array) > 0){
       
            $groups_id_updated=implode(',',$roles_array);
            $user->groups_id=$groups_id_updated.',';
            $user->save();
            }else{
                $user->groups_id='';
                $user->save(); 
            }
        }
        }
        
    }
    public function detach_permissions(){
     $output='';
     $user_id=$_GET['user'];
     $element=$_GET['element'];
     $permission=permissions::where('user_id',$user_id)->where('id',$element)->get()->first();
     $permission->delete();
    
     $rest_permissions= permissions::where('user_id',$user_id)->get();
     if($rest_permissions->count() > 1){
        foreach($rest_permissions as $per){
       $output.=''.$per->permission_name.' ,';  
     } 
     }else{
        foreach($rest_permissions as $per){
            $output.=''.$per->permission_name.'';  
          }
     }
     
     
     return $data=array([
           'type'=>'permissions',
          'all_permission'=>$output,
     ]);
    }
    public function getUsers_of_group(){
        $group_id=$_GET['group_id'];
        $output='';

        if($group_id !=null){
          $users=Assign_users_group::where('group_id',$group_id)->get();
          if($users->count() > 0){
             foreach($users as $user){
                 $output.='
                 <div class="flex-table-row">
                 <div class="flex-table-item width-1">
                         <input class="pretty-checkbox" id="users-checkbox-'.$user->user->id.'" type="checkbox">
                         <i class="fa fa-check"></i>
                         <label for="users-checkbox-'.$user->user->id.'" id="'.$user->user->id.'"><span></span></label>
                     </div>
                     <div class="flex-table-item width-2 image" trans=""><img class="user-group-avatar" src="../../img/'.$user->user->avatar.'" alt="avatar img"></div>
                     <div class="flex-table-item width-3" trans="">'.$user->user->email.'</div>
                     <div class="flex-table-item" trans="">'.$user->user->firstname.'</div>
                     <div class="flex-table-item" trans="">'.$user->user->lastname.'</div>
                     <div class="flex-table-item width-1"></div>
                  
               
             </div>
                 ';
             }   
          }
          
        }
        
        return $data=array(
            'rows_result'=>$output,
        );
        
    }
    public function search_emails_users(){
        $output='';
        $search_email=$_GET['search_email'];
        $users=User::where('email','like','%'.$search_email.'%')->get();
        if($users->count() > 0){
           foreach($users as $user){
               $output.='<div class="searched-emails" inp="'.$_GET['input_id'].'">'.$user->email.'</div>';
           }
        }
        return $data=array(
            'rows_result'=>$output,
            'total_row'=>$users->count(),
        );
    }
    public function assign_users_to_group(){
        $output='';
        $array_of_emails=$_GET['array_of_emails'];
        $group=$_GET['group_id'];
   
        for($i=0;$i<count($array_of_emails);$i++){
        $user_id=User::where('email',$array_of_emails[$i])->get()->first()->id;
        $exist_user=Assign_users_group::where('user_id',$user_id)->get()->first();
        if(($exist_user ==null) || ($group !=$exist_user->group_id)){
        
        Assign_users_group::create([
            'user_id'=>$user_id,
            'group_id'=>$group
        ]);
        }
        $users=Assign_users_group::where('group_id',$group)->get();
        if($users->count() > 0){
           foreach($users as $user){
               $output.='
               <div class="flex-table-row">
               <div class="flex-table-item width-1">
                       <input class="pretty-checkbox" id="users-checkbox-'.$user->user->id.'" type="checkbox">
                       <i class="fa fa-check"></i>
                       <label for="users-checkbox-'.$user->user->id.'" id="'.$user->user->id.'"><span></span></label>
                   </div>
                   <div class="flex-table-item width-2 image" trans=""><img class="user-group-avatar" src="../../img/'.$user->user->avatar.'" alt="avatar img"></div>
                   <div class="flex-table-item width-3" trans="">'.$user->user->email.'</div>
                   <div class="flex-table-item" trans="">'.$user->user->firstname.'</div>
                   <div class="flex-table-item" trans="">'.$user->user->lastname.'</div>
                   <div class="flex-table-item width-1"></div>
                
             
           </div>
               ';
           }   
        }
        return $data=array(
            'rows_result'=>$output,
        );
        
    }
        
    }
   public function unassign_users(){
       $output='';
       $users=$_GET['users_id'];
       $group_id=$_GET['group_id'];
     
       foreach($users as $user_id){
           $user=Assign_users_group::where('user_id',$users)->where('group_id',$group_id)->get()->first();
           $user->delete();
       }
        $users=Assign_users_group::where('group_id',$group_id)->get();
          if($users->count() > 0){
             foreach($users as $user){
                 $output.='
                 <div class="flex-table-row">
                 <div class="flex-table-item width-1">
                         <input class="pretty-checkbox" id="users-checkbox-'.$user->user->id.'" type="checkbox">
                         <i class="fa fa-check"></i>
                         <label for="users-checkbox-'.$user->user->id.'" id="'.$user->user->id.'"><span></span></label>
                     </div>
                     <div class="flex-table-item width-2 image" trans=""><img class="user-group-avatar" src="../../img/'.$user->user->avatar.'" alt="avatar img"></div>
                     <div class="flex-table-item width-3" trans="">'.$user->user->email.'</div>
                     <div class="flex-table-item" trans="">'.$user->user->firstname.'</div>
                     <div class="flex-table-item" trans="">'.$user->user->lastname.'</div>
                     <div class="flex-table-item width-1"></div>
                  
               
             </div>
                 ';
             }   
          }
          return $data=array(
            'rows_result'=>$output,
        );
   }
   public function get_group_permissions(){
       $output='';
       $output_assign_type='';
       $all_grp_per_id='';
       $rows_count=0;
       $group_id=$_GET['groupid'];
       $grp_permissions=groups_permissions::where('group_id',$group_id)->get();
       foreach ($grp_permissions as $permission){
        $rows_count++;
        $all_grp_per_id.=$permission->permission_id.'.';
        $output.='<div class="permission">
        <span>'.$permission->permission->permission_name.'</span>
        <input type="hidden" value="'.$permission->id.'" >
        <button class="remove-icon round-close-button remove-group_permission" tooltip="Remove"><i class="fa fa-close"></i></button>
         </div>';
       }
       $assign_type=groups::find($group_id)->assign_type;
       if($assign_type =='Default'){
       $output_assign_type.='
        
        <div class="setting-checkbox">
                                    <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="default" value="Default" name="default" type="checkbox">
                                    <i class="fa fa-check fa-check-grp" style="color:#fff;" ></i>
                                    <label for="default" trans="" class="label-check-befor">Default</label>
                                    <p trans="">Assign this group to new users automatically.</p>
                                    <!---->
        </div>
         <div class="setting-checkbox">
                                    <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="guest" value="Guests" name="guest" type="checkbox">
                                    <i class="fa fa-check fa-check-grp"></i>
                                    <label for="guest" trans="">Guests</label>
                                    <p trans="">Assign this group to guests (not logged in users).</p>
                                    <!---->
        </div>';
       }else{
        $output_assign_type.='
        
        <div class="setting-checkbox">
                                    <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="default" value="Default" name="default" type="checkbox">
                                    <i class="fa fa-check fa-check-grp" ></i>
                                    <label for="default" trans="">Default</label>
                                    <p trans="">Assign this group to new users automatically.</p>
                                    <!---->
        </div>
         <div class="setting-checkbox">
                                    <input class="pretty-checkbox ng-untouched ng-pristine ng-valid" id="guest" value="Guests" name="guest" type="checkbox">
                                    <i class="fa fa-check fa-check-grp" style="color:#fff;"></i>
                                    <label for="guest" trans="" class="label-check-befor">Guests</label>
                                    <p trans="">Assign this group to guests (not logged in users).</p>
                                    <!---->
        </div>';  
       }
       return $data=array(
           'permissions'=>$output,
           'rows_count'=>$rows_count,
           'all_grp_per_id'=>$all_grp_per_id,
           'output_assign_type'=>$output_assign_type,
           'assign_type'=>$assign_type,
       );
   }
    public function update_group_details(){
        $grp_id=$_GET['grp_id'];$grp_name=$_GET['grp_name'];$all_grp_per_id=$_GET['all_grp_per_id'];
        $group_assign_type=$_GET['group_assign_type'];

        $group_info=groups::find($grp_id);
        $group_permission=groups_permissions::where('group_id',$grp_id)->get();
        if($grp_name !=''){
            $group_info->group_name=$grp_name;  
        }
        $group_info->assign_type=$group_assign_type;
        $group_info->save();
        /////  update permissions
        foreach($group_permission as $permission){
            $permission->delete();
        }
        foreach($all_grp_per_id as $id){
            groups_permissions::create([
                'group_id'=>$grp_id,
                'permission_id'=>$id,
            ]);
        }
        return $data=array(
            'group_name'=>$group_info->group_name,
        );

    }
   public function add_group(){
       $output='';
       $grp_name=$_GET['grp_name'];$all_grp_per_id=$_GET['all_grp_per_id'];$group_assign_type=$_GET['group_assign_type'];
       if($group_assign_type ==''){
           $group_assign_type='Default';
       }
       $group=groups::create([
          'group_name'=>$grp_name,
          'assign_type'=>$group_assign_type,
      ]);
      foreach($all_grp_per_id as $per_id){
      groups_permissions::create([
        'group_id'=>$group->id,
        'permission_id'=>$per_id,
      ]);
      }
      $output.='
      <div class="nav-item ">
      <div class="name">'.$group->group_name.'</div>
      <dropdown class="actions">
          <button class="no-style"><i class="fa fa-cog fa-lg" style="margin-top: 6px;"></i></button>
          
      </dropdown>
      <div class="dropdown-menu transformed grp-dropdown" thisid="'.$group->id.'">
          <!----><div class="dropdown-item" trans="">Edit</div>
          <!----><div class="dropdown-item" trans="">Delete</div>
      </div>
        </div>';
        return $data=array(
            'new_group'=>$output,
        );
   }

  public function update_site_name_url(){
      $site_name=$_GET['site_name'];$site_url=$_GET['site_url'];
      $siteSettings=siteSettings::first();
      $siteSettings->site_name=$site_name;
      $siteSettings->site_url=$site_url;
      $siteSettings->save();
      return array(
          'site_name'=>$site_name, 'site_url'=>$site_url,
      );

  }
  public function use_default_site_images(){
      $siteSettings=siteSettings::first();
      $image_setting_type=$_GET['image_setting_type'];
      switch ($image_setting_type) {
          case 'footer':
               $siteSettings->copyright_img='poostel.png';
              break;
          case 'white':
               $siteSettings->logoWhite='hc-logob.png';
              break;
          case 'favicon':
                $siteSettings->favicon_icon='poostel.png';
              break;
          default:
              # code...
              break;
      }
      $siteSettings->save();
      return array(
          'image_setting_type'=>$image_setting_type,
          'footer_img'=>$siteSettings->copyright_img,
          'white_img'=>$siteSettings->logoWhite,
           'favicon_img'=>$siteSettings->favicon_icon
      );

  }
  public function remove_img_src(){
        $img_type=$_GET['img_remove_type'];
        $site_settings=siteSettings::first();
        switch ($img_type) {
            case 'footer':
                $site_settings->copyright_img='';
                break;
            case 'white':
                $site_settings->logoWhite='';
                break;
            case 'favicon':
                $site_settings->favicon_icon='';
                break;
            default:
                # code...
                break;
         
        }
        $site_settings->save();
  }
  public function verify_email(){
      $email=$_GET['email'];
      if(filter_var(''.$email.'',FILTER_VALIDATE_EMAIL)){
          $users=User::all(); $email_exist=false;
          foreach($users as $user){
              if($user->email == $email){
                   $email_exist=true;
                   break;
              }
          }
          return $data=array('result'=>true,'email_exist'=>$email_exist);
      }else{
        return $data=array('result'=>false);
      }
  }
  public function create_new_user(Request $request){
      parse_str($_POST['form_data'],$form_data);
      $av_img='';
      if($form_data['avatar_string']!=''){
        $av_img=$form_data['avatar_string'];
      }else{$av_img='loggedin.png';}
    $user=User::create([
      'firstname'=>$form_data['first_name'],
      'lastname'=>$form_data['last_name'],
      'email'=>$form_data['email'],
      'password'=>bcrypt($form_data['password']),
      'avatar'=>$av_img,
    ]);
    if($_POST['added_roles'][0] != 0){
        foreach($_POST['added_roles'] as $role){
          Assign_users_group::create([
              'user_id'=>$user->id,
              'group_id'=>$role,
            ]);
        }
    }
    if($_POST['added_permissions'][0] != 0){
      foreach($_POST['added_permissions'] as $permission){
          permissions::create([
            'user_id'=>$user->id,
            'permission_id'=>$permission,
          ]);
      }
  }
    $permissions='';
        foreach($user->permissions($user->id) as $permission){
                if($user->permissions($user->id)->count() > 1){',';}
    }
     
    $output='
    <div class="flex-table-row" thisid="1">
                     <div class="flex-table-item width-1">
                         <input class="pretty-checkbox" type="checkbox" id="user-checkbox-'.$user->id.'" value="0">
                         <i class="fa fa-check"></i>
                         <label for="user-checkbox-'.$user->id.'" id="'.$user->id.'"><span></span></label>
                     </div>
                     <div class="flex-table-item width-2 image user-avatar"><img src="../img/'.$user->avatar.'"></div>
                     <div class="flex-table-item width-3 no-wrap user-email">'.$user->email.'</div>
                     <div class="flex-table-item capitalize no-wrap clickable user-roles">
                          <input type="hidden" id="all-roles" value="">                            
                        <span id="grp-id"></span></div>
                     <div class="flex-table-item no-wrap capitalize clickable user-permissions">
                      <input type="hidden" id="all-permissions" value="1.">
                      <span id="usePer">'.$permissions.'</span></div>
                     <div class="flex-table-item firstname">'.$user->firstname.'</div>
                     <div class="flex-table-item lastname">'.$user->lastname.'</div>
                     <div class="flex-table-item width-1 center edit-icon edit-user" tooltip="Edit User">
                         <!----><i class="fa fa-pencil " aria-hidden="true"></i>
                     </div>
                 </div>
    ';
    return $data=array('new_user'=>$output);
  }
  public function upload_avatar(Request $request){
      $av_img='';
     $fichier=$request->file('file');
     if($fichier !=''){
        
        $av_img=time().$fichier->getClientOriginalName();
        $fichier->move(public_path('img/'),$av_img);
     }
     return $av_img;
  }

}
