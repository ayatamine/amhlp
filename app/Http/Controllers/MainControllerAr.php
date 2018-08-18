<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\ticket;
use App\category;
use App\feedback;
use Auth;
class MainControllerAr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view ('MainPagesAr.helpCenterAr')

        ->with('categories',category::where('id','>','6')->get())
        ->with('introduction_articles',ticket::where('sub_category_name','Introduction')->where('language','arabic')->get())
        ->with('installation_articles',ticket::where('sub_category_name','Installation')->where('language','arabic')->get())
        ->with('shipping_articles',ticket::where('sub_category_name','Shipping')->where('language','arabic')->get())
        ->with('billing_articles',ticket::where('sub_category_name','Billing')->where('language','arabic')->get())
        ->with('import_export_articles',ticket::where('sub_category_name','Import & Export ')->where('language','arabic')->get())
        ->with('setting_articles',ticket::where('sub_category_name','Settings & Configuration')->where('language','arabic')->get());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MainPagesAr.addTicket');
    }
    public function store_ticket(Request $request){
        $this->validate($request,[
           'title'=>'required|string',
           'content'=>'required',   
          ]);
          if($request->content == ''){
            $details='';
          }else{
              $details=$request->input('content');
          }
        ticket::create([
          'title'=>$request->input('title'),
          'user_id'=>Auth::id(),
          'slug'=>str_slug($request->input('title')),
          'details'=>$details,
          'category_id'=>$request->input('category'),
          'sub_category_name'=>$request->input('sub_category'),
          
        ]);
        Session::flash('success','the operation finished with success');
        return redirect()->back();
    }
    public function myTickets(){
        $tickets=ticket::where('user_id',Auth::id())->orderby('created_at','desc')->get();
        return view ('MainPagesAr.myTickets')
        ->with('tickets',$tickets);
        
        
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
    public function show($slug)
    {
        
        return view ('MainPagesAr.singleArticle')
        ->with('ticket',ticket::where('slug',$slug)->get()->first())
        ->with('introduction_articles',ticket::where('sub_category_name','Introduction')->where('language','arabic')->paginate(3))
        ->with('installation_articles',ticket::where('sub_category_name','Installation')->where('language','arabic')->paginate(3))
        ->with('shipping_articles',ticket::where('sub_category_name','Shipping')->where('language','arabic')->paginate(3))
        ->with('billing_articles',ticket::where('sub_category_name','Billing')->where('language','arabic')->paginate(3))
        ->with('import_export_articles',ticket::where('sub_category_name','Import & Export ')->where('language','arabic')->paginate(3))
        ->with('setting_articles',ticket::where('sub_category_name','Settings & Configuration')->where('language','arabic')->paginate(3));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getCategories($id){
        return view ('MainPagesAr.singleCategoryArticles')
        ->with('category',category::find($id))
        ->with('articles',ticket::where('language','arabic')->paginate(10))
        ->with('introduction_articles',ticket::where('sub_category_name','Introduction')->where('language','arabic')->paginate(5))
        ->with('installation_articles',ticket::where('sub_category_name','Installation')->where('language','arabic')->paginate(5))
        ->with('shipping_articles',ticket::where('sub_category_name','Shipping')->where('language','arabic')->paginate(5))
        ->with('billing_articles',ticket::where('sub_category_name','Billing')->where('language','arabic')->paginate(5))
        ->with('import_export_articles',ticket::where('sub_category_name','Import & Export ')->where('language','arabic')->paginate(5))
        ->with('setting_articles',ticket::where('sub_category_name','Settings & Configuration')->where('language','arabic')->paginate(5));
    }
    public function search($word){

        return view('MainPagesAr.searchArticles')
        ->with('word',$word)
        ->with('articles',ticket::where('title','like','%'.$word.'%')->get());
        
    }
    public function search_ajax($word){

        $output='';
        $data=ticket::where('title','like','%'.$word.'%')->get()->first();
        $title=$data->title;$slug=$data->slug;
        $body=str_limit($data->details,150);
        $img= '<img src="img/document.png" alt="document">';
        $link='href="/help-center/articles/"'.$data->slug.'>';
        $category=category::where('id',$data->category_id)->get()->first()->category_name;
        $sub_category=$data->sub_category_name;
        
    
                $data=array(
                    'title' => $title,
                    'slug'=>$slug,
                    'body'=>$body,
                    'img'=>$img,
                    'link'=>$link,
                    'category'=>$category,
                    'sub_category'=>$sub_category,
                    'search_word'=>$word
                );
    return $data;
    }
    public function feedback($slug,$val)
    {
         
         $article_id=ticket::where('slug',$slug)->get()->first()->id;
       
         if($val=='pos'){
            $feed_type='positive';
          }else{
            $feed_type='negative';
          }
          feedback::create([
            'article_id'=>$article_id,
            'user_id'=>Auth::id(),
            'feed_type'=>$feed_type,
           ]);
         return $val;
    }
    public function filter_articles(Request $request){
        $filter=$request->input('filter');
        $category=$request->input('category');
          if($filter=='mv'){
               $articles=ticket::where('language','arabic')->orderby('created_at','asc')->paginate(10);
   
          }
          if($filter=='mh'){
          //  $feeds=feedback::where('feed_type','positive')->get();
          $articles=ticket::where('language','arabic')->orderby('created_at','asc')->paginate(10);

         }
         if($filter=='az'){
            $articles=ticket::where('language','arabic')->orderby('title','asc')->paginate(10);
            
         }
         if($filter=='new'){
            $articles=ticket::where('language','arabic')->where('category_id',$category)->orderby('created_at','desc')->paginate(10);
            
         }
         return view ('MainPagesAr.singleCategoryArticles')
         ->with('category',category::find($category))
         ->with('articles',$articles)
         ->with('introduction_articles',ticket::where('sub_category_name','Introduction')->where('language','arabic')->paginate(5))
         ->with('installation_articles',ticket::where('sub_category_name','Installation')->where('language','arabic')->paginate(5))
         ->with('shipping_articles',ticket::where('sub_category_name','Shipping')->where('language','arabic')->paginate(5))
         ->with('billing_articles',ticket::where('sub_category_name','Billing')->where('language','arabic')->paginate(5))
         ->with('import_export_articles',ticket::where('sub_category_name','Import & Export ')->where('language','arabic')->paginate(5))
         ->with('setting_articles',ticket::where('sub_category_name','Settings & Configuration')->where('language','arabic')->paginate(5));
     
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
}
