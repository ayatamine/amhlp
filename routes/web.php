<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hi',function(){
	return view('hi');
});
Route::get('/hi/{name}',function($name){
	return " hello $name";
});
Route::get('/header', function () {
    return view('headerfooter.header');
});
Route::get('/help-center',[
    'uses' => 'MainController@index',
    'as'=> 'MainController.helpCenter'
]);
Route::get('/help-center/articles/{slug}',[
    'uses' => 'MainController@show',
    'as'=> 'MainController.singleArticle'
]);
Route::get('/help-center/tickets/new',[
    'uses' => 'MainController@create',
    'as'=> 'MainController.addTicket'
]);
Route::get('/helpCenter/Tickets',[
    'uses' => 'MainController@myTickets',
    'as'=> 'MainController.myTickets'
]);
Route::post('/helpCenter/Tickets/createTicket',[
    'uses' => 'MainController@store_ticket',
    'as'=> 'MainController.store_ticket'
]);
Route::get('/helpCenter/categories/{slug}',[
    'uses' => 'MainController@getCategories',
    'as'=> 'MainController.getCategories'
]);
Route::get('/helpCenter/search/{word}',[
    'uses' => 'MainController@search',
    'as'=> 'MainController.search'
]);
Route::get('/helpCenter/search-article/{word}',[
    'uses' => 'MainController@search_ajax',
    'as'=> 'MainController.search_ajax'
]);
Route::post('/help-center/article/{slug}/{val}',[
    'uses' => 'MainController@feedback',
    'as'=> 'MainController.feedback'
]);
Route::post('/help-center/filter',[
    'uses' => 'MainController@filter_articles',
    'as'=> 'MainController.filter_articles'
]);
Auth::routes();
Route::get('logout', 'HomeController@logout');
Route::get('/home', 'MainController@index')->name('home');

// arabic routes

Route::get('/helpCenter-ar',[
    'uses' => 'MainControllerAr@index',
    'as'=> 'MainControllerAr.helpCenter'
]);
Route::get('/helpCenter-ar/articles/{slug}',[
    'uses' => 'MainControllerAr@show',
    'as'=> 'MainControllerAr.singleArticle'
]);
Route::get('/helpCenter-ar/tickets/new',[
    'uses' => 'MainControllerAr@create',
    'as'=> 'MainControllerAr.addTicket'
]);
Route::get('/helpCenter-ar/Tickets',[
    'uses' => 'MainControllerAr@myTickets',
    'as'=> 'MainControllerAr.myTickets'
]);
Route::post('/helpCenter-ar/Tickets/createTicket',[
    'uses' => 'MainControllerAr@store_ticket',
    'as'=> 'MainControllerAr.store_ticket'
]);
Route::get('/helpCenter-ar/categories/{slug}',[
    'uses' => 'MainControllerAr@getCategories',
    'as'=> 'MainControllerAr.getCategories'
]);
Route::get('/helpCenter-ar/search/{word}',[
    'uses' => 'MainControllerAr@search',
    'as'=> 'MainControllerAr.search'
]);
Route::get('/helpCenter-ar/search-article/{word}',[
    'uses' => 'MainControllerAr@search_ajax',
    'as'=> 'MainControllerAr.search_ajax'
]);
Route::post('/help-helpCenter-ar/article/{slug}/{val}',[
    'uses' => 'MainControllerAr@feedback',
    'as'=> 'MainControllerAr.feedback'
]);
Route::post('/helpCenter/filter',[
    'uses' => 'MainControllerAr@filter_articles',
    'as'=> 'MainControllerAr.filter_articles'
]);

//Admin routs

Route::get('/mailbox/tickets',[
    'uses' => 'AdminController@index',
    'as'=> 'admin.index'
]);
Route::get('/mailbox/tickets/tag/{tag_id}',[
    'uses' => 'AdminController@ticket_by_tags',
    'as'=> 'admin.ticket_by_tags'
]);
Route::get('/mailbox/tickets/tag/{tag_id}/ticket/{ticket_id}',[
    'uses' => 'AdminController@get_ticket_of_tag',
    'as'=> 'admin.get_ticket_of_tag'
]);
Route::post('/change-ticket-status/{ticket_id}/{status}',[
    'uses' => 'AdminController@change_ticket_status',
    'as'=> 'admin.change_ticket_status'
]);
Route::get('/change-multiple-tickets-status',[
    'uses' => 'AdminController@change_multiple_tickets_status',
    'as'=> 'admin.change_multiple_tickets_status'
]);
Route::get('/manage/articles',[
    'uses' => 'AdminController@manage_articles',
    'as'=> 'admin.manage_articles'
]);
Route::get('/manage/articles/new',[
    'uses' => 'AdminController@manage_new_article',
    'as'=> 'admin.manage_new_article'
]);
Route::post('/manage/articles/store',[
    'uses' => 'AdminController@store_article',
    'as'=> 'admin.store_article'
]);
Route::post('/manage/articles/update/{slug}',[
    'uses' => 'AdminController@update_article',
    'as'=> 'admin.update_article'
]);
Route::get('/manage/edit-articles/{article_id}',[
    'uses' => 'AdminController@edit_article',
    'as'=> 'admin.edit_article'
]);
Route::get('/manage/categories',[
    'uses' => 'AdminController@manage_categories',
    'as'=> 'admin.manage_categories'
]);
Route::get('/admin/tags',[
    'uses' => 'AdminController@manage_tags',
    'as'=> 'admin.manage_tags'
]);
Route::get('/admin/users',[
    'uses' => 'AdminController@manage_users',
    'as'=> 'admin.manage_users'
]);
Route::get('/admin/groups',[
    'uses' => 'AdminController@manage_groups',
    'as'=> 'admin.manage_groups'
]);
Route::get('/admin/pages',[
    'uses' => 'AdminController@manage_pages',
    'as'=> 'admin.manage_pages'
]);
Route::get('/admin/settings',[
    'uses' => 'AdminController@manage_settings',
    'as'=> 'admin.manage_settings'
]);
Route::get('/admin/appearance',[
    'uses' => 'AdminController@manage_appearance',
    'as'=> 'admin.manage_appearance'
]);
Route::get('/admin/triggers',[
    'uses' => 'AdminController@manage_triggers',
    'as'=> 'admin.manage_triggers'
]);
Route::get('/admin/reports',[
    'uses' => 'AdminController@manage_reports',
    'as'=> 'admin.manage_reports'
]);
Route::get('/admin/canned-replies',[
    'uses' => 'AdminController@manage_canned_replies',
    'as'=> 'admin.manage_canned_replies'
]);
Route::get('/admin/mail-templates',[
    'uses' => 'AdminController@manage_mail_templates',
    'as'=> 'admin.manage_mail_templates'
]);

Route::get('/return-reports',function(){
 return view('Admin.manageReports') ;
});


//fonctionalite routes
// appearance
Route::post('/admin/save-appear-general/',[
    'uses' => 'AdminController@save_appear_general',
    'as'=> 'admin.save_appear_general'
]);
Route::post('/admin/save-appear-helpCenter/',[
    'uses' => 'AdminController@save_appear_helpCenter',
    'as'=> 'admin.save_appear_helpCenter'
]);
Route::post('/admin/save-appear-newTicketpage/',[
    'uses' => 'AdminController@save_appear_newTicketpage',
    'as'=> 'admin.save_appear_newTicketpage'
]);
Route::post('/admin/delete-menu/',[
    'uses' => 'AdminController@delete_menu',
    'as'=> 'admin.delete_menu'
]);
Route::post('/admin/update-menu/{id}',[
    'uses' => 'AdminController@update_menu',
    'as'=> 'admin.update_menu'
]);

// reports charts 
Route::post('/getCharts',[
    'uses' => 'AdminController@getCharts',
    'as'=> 'admin.getCharts'
]);
// assign_users_to_tickets
Route::get('/assign_users_to_tickets',[
    'uses' => 'AdminController@assign_users_to_tickets',
    'as'=> 'admin.assign_users_to_tickets'
]);
// search tags to display 
Route::get('/tag_search_value/{tag_value}',[
    'uses' => 'AdminController@tag_search_value',
    'as'=> 'admin.tag_search_value'
]);
Route::get('/add_tag/{ticket_id}/{tag}',[
    'uses' => 'AdminController@add_tag',
    'as'=> 'admin.add_tag'
]);
Route::post('/add-tag-multiple-tickets',[
    'uses' => 'AdminController@add_tag_multiple_tickets',
    'as'=> 'admin.add_tag_multiple_tickets'
]);
Route::get('/delete-multiple-tickets',[
    'uses' => 'AdminController@delete_multiple_tickets',
    'as'=> 'admin.delete_multiple_tickets'
]);
Route::get('/remove-tag/{ticket_id}/{tag}',[
    'uses' => 'AdminController@remove_tag',
    'as'=> 'admin.remove_tag'
]);
Route::post('/create-reply',[
    'uses' => 'AdminController@create_reply',
    'as'=> 'admin.create_reply'
])->middleware('auth');
Route::get('/delete-reply/{reply_id}',[
    'uses' => 'AdminController@delete_reply',
    'as'=> 'admin.delete_reply'
])->middleware('auth');
Route::post('/update-reply',[
    'uses' => 'AdminController@update_reply',
    'as'=> 'admin.update_reply'
])->middleware('auth');
Route::post('/create-note',[
    'uses' => 'AdminController@create_note',
    'as'=> 'admin.create_note'
])->middleware('auth');
Route::get('/create-canned-reply',[
    'uses' => 'AdminController@create_canned_reply',
    'as'=> 'admin.create_canned_reply'
])->middleware('auth');
Route::get('/update-canned-replies/{canned_id}',[
    'uses' => 'AdminController@update_canned_reply',
    'as'=> 'admin.update_canned_reply'
])->middleware('auth');
Route::get('/delete-canned-reply/{canned_id}',[
    'uses' => 'AdminController@delete_canned_reply',
    'as'=> 'admin.delete_canned_reply'
])->middleware('auth');
// manage article and categories
Route::get('/delete-articles/{article_id}',[
    'uses' => 'AdminController@delete_articles',
    'as'=> 'admin.delete_articles'
]);
Route::get('/update-articles',[
    'uses' => 'AdminController@update_ticket',
    'as'=> 'admin.update_ticket'
]);
Route::get('/get-articles-checked/{cat_id}/{child_name}',[
    'uses' => 'AdminController@get_articles_checked',
    'as'=> 'admin.get_articles_checked'
]);
Route::get('/filter-by-publish-state/{filter_type}',[
    'uses' => 'AdminController@filter_by_publish_state',
    'as'=> 'admin.filter_by_publish_state'
]);
Route::get('/manage-search-categories/{cat_name}',[
    'uses' => 'AdminController@manage_search_categories',
    'as'=> 'admin.manage_search_categories'
]);

Route::get('/manage-filter-categories/{filter_name}',[
    'uses' => 'AdminController@manage_filter_categories',
    'as'=> 'admin.manage_filter_categories'
]);
Route::get('/manage-search-article/{search_type}/{search_word}',[
    'uses' => 'AdminController@manage_search_word',
    'as'=> 'admin.manage_search_word'
]);



////////////////
Route::post('/manage-category/update',[
    'uses' => 'AdminController@update_category',
    'as'=> 'category.update'
]);
Route::get('/detach-child-category/{parent_id}/{child_id}',[
    'uses' => 'AdminController@detach_child_category',
    'as'=> 'category.detach'
]);
Route::get('/delete-category/{parent_id}/{child_id}/{include_in}',[
    'uses' => 'AdminController@delete_category',
    'as'=> 'category.delete'
]);
Route::post('/create-child-category',[
    'uses' => 'AdminController@create_child_category',
    'as'=> 'admin.create_child_category'
]);
///////////////  manage tags 
Route::get('/update-tag/{id}/{display_name}/{type}',[
    'uses' => 'AdminController@update_tag',
    'as'=> 'admin.update_tag'
]);
Route::get('/create-tag/{tag_name}/{display_name}/{type}',[
    'uses' => 'AdminController@create_tag',
    'as'=> 'admin.create_tag'
]);

Route::get('/delete-tags/{tags}',[
    'uses' => 'AdminController@delete_tag',
    'as'=> 'admin.delete_tag'
]);
Route::get('/delete-users',[
    'uses' => 'AdminController@delete_users',
    'as'=> 'admin.delete_users'
]);
Route::get('/verify-email',[
    'uses' => 'AdminController@verify_email',
    'as'=> 'admin.verify_email'
]);
Route::post('/create-new-user',[
    'uses' => 'AdminController@create_new_user',
    'as'=> 'admin.create_new_user'
]);
Route::post('/upload-avatar',[
    'uses' => 'AdminController@upload_avatar',
    'as'=> 'admin.upload_avatar'
]);
//////////////////////////////////////////
Route::get('/search-all/{word}/{type}',[
    'uses' => 'AdminController@search_all',
    'as'=> 'admin.search_all'
]);
//////////////////////////////////////////

Route::get('/search-all-canned-replies',[
    'uses' => 'AdminController@search-all-canned-replies',
    'as'=> 'admin.search_all_canned_replies'
]);
Route::get('/detach-roles',[
    'uses' => 'AdminController@detach_roles',
    'as'=> 'admin.detach_roles'
]);
Route::get('/detach-premissions',[
    'uses' => 'AdminController@detach_permissions',
    'as'=> 'admin.detach_permissions'
]);


// get users of group 
Route::get('/getUsers-of-group',[
    'uses' => 'AdminController@getUsers_of_group',
    'as'=> 'admin.getUsers_of_group'
]);
Route::get('/search-emails-users',[
    'uses' => 'AdminController@search_emails_users',
    'as'=> 'admin.search_emails_users'
]);
Route::get('/assign-users-to-group',[
    'uses' => 'AdminController@assign_users_to_group',
    'as'=> 'admin.assign_users_to_group'
]);
Route::get('/unassign-users',[
    'uses' => 'AdminController@unassign_users',
    'as'=> 'admin.unassign_users'
]);
Route::get('/search-users-of-group',[
    'uses' => 'AdminController@search_users_of_group',
    'as'=> 'admin.search_users_of_group'
]);
Route::get('/get-group-permissions',[
    'uses' => 'AdminController@get_group_permissions',
    'as'=> 'admin.get_group_permissions'
]);
Route::get('/update-group-details',[
    'uses' => 'AdminController@update_group_details',
    'as'=> 'admin.update_group_details'
]);
Route::get('/add-group',[
    'uses' => 'AdminController@add_group',
    'as'=> 'admin.add_group'
]);
//////////// apperance pangel
Route::get('/update-site-name-url',[
    'uses' => 'AdminController@update_site_name_url',
    'as'=> 'admin.update_site_name_url'
]);
Route::get('/use-default-site-images',[
    'uses' => 'AdminController@use_default_site_images',
    'as'=> 'admin.use_default_site_images'
]);
Route::get('/remove-img-src',[
    'uses' => 'AdminController@remove_img_src',
    'as'=> 'admin.remove_img_src'
]);






