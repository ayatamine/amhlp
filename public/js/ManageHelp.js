$('.datepicker').datepicker();
//$('.admin-search').attr('pag',window.location.pathname.replace("/manage/","")); 
$( document ).tooltip();

$("#category-sortable").sortable({
    axis: "y",
    revert: true,
    scroll: false,
    placeholder: "sortable-placeholder",
    cursor: "move",

    start:function(){
        $('.category-list-item:first-child').each(function(){
            var item_clone=$(this).clone();
            var position=$(this).position();
            console.log(position);
             
            });  
    },
    stop:function(){
        $('.category-list-item:first-child').each(function(){
            var item_clone=$(this).clone();
            var position=$(this).position();
            console.log(position);
            
            });
    },
    update:function(event,helper){
        $('.category-list-item:first-child').each(function(){
            var item_clone=$(this).clone();
            var position=$(this).position();
            console.log(position);
            
            });
    }
});
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
});


$(document).on("click",".articls-list-item .trash-article",function(e){
    e.stopPropagation();
$('.modal-delete-tickets').addClass('tab-displayed');
$('.modal-delete-tickets #ticket-id').attr('action',$(this).parent().find('#tickett-id').val());
$('.modal-delete-tickets #ticket-id').attr('toRemove',$(this).parent().find('#tickett-id').attr('toRemove'));

});
$(document).on('click','.modal-delete-tickets .submit-button',function(){
    var v=$('.modal-delete-tickets #ticket-id').attr('action');
    var div_to_remove=$('.modal-delete-tickets #ticket-id').attr('toRemove');
   console.log(div_to_remove);
    $('.modal-delete-tickets').removeClass('tab-displayed');
    $.ajax({
        url:$('.modal-delete-tickets #ticket-id').attr('action'),
        method:'GET',
        data:{},
        dataType:'json',
        success:function(data){
            console.log(data);
            $('[toRemove="'+div_to_remove+'"').parent().remove();
            //$('[value="/delete-articles/'+id+'"').parent().remove();
        }  
        
    });
    
   
   
    return false;
});
 

// get articles by checkbox
$(document).on('click','.manage-articls-container .tags-categories .category label',function(){
  
     if($(this).hasClass('label-check-befor')){
         $(this).removeClass('label-check-befor');
         $('.category i').css('color','transparent');
     }else{
       $(this).addClass('label-check-befor');  
       $('.category i').css('color','#fff'); 
     }
    
});

// article settings 
$('.create-new-article i.fa-cog').click(function(){
 $('.modal-update-ticket').addClass('tab-displayed');
});

//show preview button
$(document).on('click','#preview-article-button',function(){
$('.modal-preview-article').addClass('tab-displayed');
$('.modal-preview-article .article-content').text($('#article-content').val());
$('.modal-preview-article .article-content').text(tinyMCE.get('article-content').getContent());

});
 var array_id=[];
 var last_content=$('.articles-of-each-category .row').html(); 

//get article by check tags
$(document).on('click','.tags-categories .categories .category label',function(){
 $(this).toggleClass('get-ticket-checked');
 $(this).find('i').toggleClass('check-ticket2');
 var ticket_id=$(this).parent().find('input').val();
 var ticket_id_2=$(this).parent().find('input').attr('par');

 console.log(ticket_id);
 if($(this).hasClass('get-ticket-checked')){
    $.ajax({
        url:'/get-articles-checked/'+ticket_id_2+'/'+ticket_id,
        method:'GET',
        data:{},
        dataType:'json',
        success:function(data){
           if(data.total_row > 0){
            $('.articles-of-each-category .row').css('display','flex');
            $('.search-ajax.no-results-message').addClass('tab-not-displayed'); 

            $('.articles-of-each-category .row').html(' ');   
            $('.articles-of-each-category .row').append(data.ticket_fonded);
       
         data.array_id.forEach(function(id) {
           array_id.push(id);
         }, this);
        }else{
            $('.articles-of-each-category .row').css('display','none');
            $('.search-ajax.no-results-message').removeClass('tab-not-displayed'); 
        }
        }  
        
    });
    
 }
 else{
    
   //display the row
   $('.articles-of-each-category .row').css('display','flex');
   $('.search-ajax.no-results-message').addClass('tab-not-displayed'); 
     
   array_id.forEach(function(id) {
    var input= $('.articles-of-each-category .row').find('input'); 
      $('[value="/delete-articles/'+id+'"').parent().remove();
   }, this);
   $('.articles-of-each-category .row').html(last_content); 

 }
});
var array_id2=[];
// add tags 
$(document).on('click','.add-tags-button',function(){
 var ticket_id;
 var tag_name=$('.tags-string-model').val();
$('.tags-filter .selected-tags').append('<div class="tag"><button class="round-close-button"><i class="fa fa-close"></i></button><span class="tag-name">'+tag_name+'</span></div>');
      switch (tag_name) {
            case 'Getting Started':
                    ticket_id=1;
                    break;
            case 'Shipping Methods':
                    ticket_id=2;
                    break;
             case 'Tips and Tricks':
                    ticket_id=3;
                    break;
             case 'Troubleshooting':
                    ticket_id=4;
                    break;
             case 'Admin Panel':
                    ticket_id=5;
                    break;
             case 'Customization':
                    ticket_id=6;
                    break;
             
          default:
              
              break;
      }
       if(ticket_id !=0){
        $.ajax({
            url:'/get-articles-checked/'+0+'/'+ticket_id,
            method:'GET',
            data:{},
            dataType:'json',
            success:function(data){
                console.log(data);
                if(data.total_row > 0){
                    $('.articles-of-each-category .row').css('display','flex');
                    $('.search-ajax.no-results-message').addClass('tab-not-displayed');

                $('.articles-of-each-category .row').html(' ');   
             $('.articles-of-each-category .row').append(data.ticket_fonded);
             data.array_id.forEach(function(id) {
                array_id2.push(id);
              }, this);
            }else{
                $('.articles-of-each-category .row').css('display','none');
                $('.search-ajax.no-results-message').removeClass('tab-not-displayed'); 
            }
             //article_names.push(data.ticket_fonded.find('input').val());
            }  
            
        });}else{
            $('.articles-of-each-category .row').css('display','none');
            $('.search-ajax.no-results-message').removeClass('tab-not-displayed'); 

        }
});
//get tickets by tag exist 
$(document).on('click','.existing-tags .tags-list .tag-name',function(){
    
     var ticket_id=$(this).attr('tagId');
     var ticket_id_2=0;
     var tag_name=$(this).text();
     $('.tags-filter .selected-tags').append('<div class="tag"><button class="round-close-button"><i class="fa fa-close"></i></button><span class="tag-name">'+tag_name+'</span></div>');

        $.ajax({
            url:'/get-articles-checked/'+ticket_id_2+'/'+ticket_id,
            method:'GET',
            data:{},
            dataType:'json',
            success:function(data){
                console.log(data);
                if(data.total_row > 0){
                    $('.articles-of-each-category .row').css('display','flex');
                    $('.search-ajax.no-results-message').addClass('tab-not-displayed');

                $('.articles-of-each-category .row').html(' ');   
             $('.articles-of-each-category .row').append(data.ticket_fonded);
             data.array_id.forEach(function(id) {
                array_id2.push(id);
              }, this);
            }else{
                $('.articles-of-each-category .row').css('display','none');
                $('.search-ajax.no-results-message').removeClass('tab-not-displayed'); 
            }
             //article_names.push(data.ticket_fonded.find('input').val());
            }  
            
        });
        
    });
//remove elements
$(document).on('click','.tags-filter .selected-tags .tag .round-close-button',function(){
       
   $(this).parent().remove(); 
   array_id2.forEach(function(id) {
    var input= $('.articles-of-each-category .row').find('input'); 
      $('[value="/delete-articles/'+id+'"').parent().remove();
   }, this);
   $('.articles-of-each-category .row').html(last_content); 
            
});
// get tickets by publish type
$(document).on('click','.article-type-filter .filter-button',function(){
  if(!$(this).hasClass('active')){
  $(this).addClass('active');
  $(this).siblings('.filter-button').removeClass('active');
  }
  var filter_type='';
        if( $(this).hasClass('all-filter-button')){
          filter_type='all';
       }else{
        if($(this).hasClass('not-draft-filter-button')){
        filter_type='published';
       }else{
        filter_type='draft';
       }}
  
  
  $.ajax({
  url:'/filter-by-publish-state/'+filter_type,
  method:'GET',
  data:{},
  dataType:'json',
  success:function(data){
      //console.log(data);
      if(data.total_row > 0){
        $('.articles-of-each-category .row').css('display','flex');
        $('.search-ajax.no-results-message').addClass('tab-not-displayed');

      $('.articles-of-each-category .row').append(data.ticket_fonded);
      data.array_id.forEach(function(id) {
        array_id2.push(id);
      }, this);
  }else{
    $('.articles-of-each-category .row').css('display','none');
    $('.search-ajax.no-results-message').removeClass('tab-not-displayed');  
  }
}

  });
});
// get searching categories 
let last_data= $('.categories').html();
$(document).on('keyup','#categories-manager-search',function(){
   var search_cat=$(this).val();

   if(search_cat !=''){
   $.ajax({
    url:'/manage-search-categories/'+search_cat,
    method:'GET',
    data:{},
    dataType:'json',
    success:function(data){
        //console.log(data.all_result);
        
        $('.categories').html(data.all_result);
        
    }
    });
   }else{
   
                $('.categories').html(last_data); 
        
   }
});

////  get by select input mh 
$('#manage-filter-categories').on('change',function(){
   var filter_name=$(this).val();
   $('.articles-of-each-category .row').html('');
   $.ajax({
    url:'/manage-filter-categories/'+filter_name,
    method:'GET',
    data:{},
    dataType:'json',
    success:function(data){
        //console.log(data.ticket_fonded);
        $('.articles-of-each-category .row').append(data.ticket_fonded);
    }
    });

});



//// search articles 

$(document).on('keyup','#admin-search',function(){
    
 
    var search_type=$(this).parent().parent().attr('pag');
    var search_word=$(this).val();
   console.log(search_type + ''+search_word);
  
    if(search_word !=''){
       $.ajax({
           url:'/manage-search-article/'+search_type+'/'+search_word,
           method:'GET',
           data:{},
           dataType:'json',
           success:function(data){
              if(data.total_row > 0){
               $('.articles-of-each-category .row').css('display','flex');
               $('.search-ajax.no-results-message').addClass('tab-not-displayed'); 
   
               $('.articles-of-each-category .row').html(' ');   
               $('.articles-of-each-category .row').append(data.ticket_fonded);
          
            data.array_id.forEach(function(id) {
              array_id.push(id);
            }, this);
           }else{
               $('.articles-of-each-category .row').css('display','none');
               $('.search-ajax.no-results-message').removeClass('tab-not-displayed'); 
           }
           }  
           
       });
       
    }
    else{
      $('.articles-of-each-category .row').html(last_content); 
   
    }
   });

// custom pagination
$(document).on('click','.paginator .item-paginate-selected',function(){
    $('.paginate-dropmenu').toggleClass('tab-displayed');
    $(this).addClass('blue-border-bottom');
    if($('.paginate-dropmenu').hasClass('tab-displayed')){
        $('.pag-par-size').css('margin-right','-31px');
    }else{
        $('.pag-par-size').css('margin-right','14px'); 
    }
    });
///// when choose a pagination
$(document).on('click','.paginate-dropmenu div div',function(){
        $(this).addClass('selected');
        $(this).siblings('div').removeClass('selected');
    $('.item-paginate-selected span').text($(this).attr('pag'));
    $(this).parent().parent().removeClass('tab-displayed');
    $('.pag-par-size').css('margin-right','14px'); 
    $('.paginator .item-paginate-selected').removeClass('blue-border-bottom');

    var pag_count= $('.item-paginate-selected span').text();

});

/////////
$(document).on('click','.prev-next-pag i',function(e){
e.preventDefault();
//console.log($('.real-paginate ul li a').attr('href'));
location.href=$(this).attr('route');
return false;
});


// editor toggle button
$(document).on('click','.editor-toggle-buttons .editor-button',function(){
var style_text=$(this).attr('trans');
var v= tinyMCE.get('article-content').getContent();
console.log(v);
$(this).addClass('active').siblings('.editor-button').removeClass('active');
//console.log($('.mce-tinymce .mce-edit-area').attr('id'));
switch (style_text) {
    case 'visual-mode-button':
        $('#article-content').removeClass('tab-not-displayed');
        $('#article-source_code').addClass('tab-not-displayed');
        break;
     case 'source-mode-button':
        $('#article-content').addClass('tab-not-displayed');
        $('#article-source_code').removeClass('tab-not-displayed');
        if(tinyMCE.get('article-content') !== null){
        (tinyMCE.get('article-content').getBody()).html(htmlDecode(amine));
        }else{
            $('#article-content').val('<p>amine</p>');
        }
        break;
    default:
        break;
}
});

// create artcle button
let category_array=[];

$(document).on('click','.tags-categories .categories .category.parent-category label',function(){
   
    var input_val=$(this).parent().find('input').val();
if($(this).hasClass('get-ticket-checked')){
    category_array.push(input_val);
   
}else{
   var index=category_array.indexOf(input_val) ;
   if(index > -1){
        category_array.splice(index,1);
   }
   
}
if(category_array.length > 0){
$('#cat-id').attr('value',category_array[0]);

}
else{
    $('#cat-id').attr('value',1);   
}

});
//sub cat
let sub_category_array=[];
$(document).on('click','.tags-categories .categories .category.child-category label',function(){
    var input_val=$(this).parent().find('input').val();
if($(this).hasClass('get-ticket-checked')){
    sub_category_array.push(input_val);
   
}else{
   var index=sub_category_array.indexOf(input_val) ;
   if(index > -1){
    sub_category_array.splice(index,1);
   }
   
}
if(sub_category_array.length > 0){
$('#sub-cat-id').attr('value',sub_category_array[0]);

}
else{
    $('#sub-cat-id').attr('value',1);   
}

});

//submit 

$(document).on('click','.create-new-article #create-article-span,.create-new-article #update-article-span',function(){
    for(var i=0;i<sub_category_array.length;i++){
        $('#new-article-form').append('<input type="text" id="" name="added_tags_id[]" value="'+sub_category_array[i]+'" style="display: none;">')
    }
    for(var i=0;i<category_array.length;i++){
        $('#new-article-form').append('<input type="text" id="" name="added_cat_id[]" value="'+category_array[i]+'" style="display: none;">')
    }
$('#new-article-form').submit();
});

// article setting 
$('.ar-settings').on('click',function(e){
    e.preventDefault();
$('.modal-article-settings').removeClass('tab-displayed');
});


/////////////////////////////////////////////////////////////
// manage categories 

/* update   */
$(document).on('click','.update-category-button',function(){
/// category type
if($(this).parent().hasClass('child-cat')){
    $('.single-cat').css('display','none');
    $('.all-cat').css('display','block');
    
}else{
    $('.single-cat').css('display','block');
    $('.all-cat').css('display','none');
    $('.all-cat').attr('selected',false);
}
/// cat id 
var parent_id=$(this).parent().attr('parid');
var catname=$(this).parent().attr('catname');
var id=$(this).parent().attr('thisId');
var description=$(this).parent().find('.hidden-description').html();

$('.modal-update-cat').addClass('tab-displayed');
$('[value='+parent_id+']').attr('selected',true).siblings('option').attr('selected',false);
$('#name-category').val(catname);
$('#id-category').val(id);
$('#id-parent-before').val(parent_id);
$('#description').val(description);
});

///* delete   */
$(document).on('click','.delete-category-button',function(){
 $('.modal-delete-cat').addClass('tab-displayed');
 $('#parent_of_to_delete').val($(this).parent().attr('parid'));
 $('#this_id_to_delete').val($(this).parent().attr('thisId'));
 $('#parchild').val($(this).parent().attr('ParChild'));
if($(this).parent().attr('ParChild').substr(1,1) == '0'){
   $('.cat-to-include-in').css('display','block');
   $('[value='+$(this).parent().attr('thisId')+']').css('display','none');
}else{
    $('.cat-to-include-in').css('display','none');
    $('#from-all').css('display','inline-block');
}
});
$(document).on('click','.submit-delete-category',function(e){
    e.preventDefault();
    var parent_id=$('#parent_of_to_delete').val();
    var child_id=$('#this_id_to_delete').val();
    var par_child=$('#parchild').val();
    var include_in;
    if($('.cat-to-include-in').css('display')=='block'){
     include_in=$('#cat-to-include-in').val();}
     else{
         include_in='0';
     }
    
    $.ajax({
        url:'/delete-category/'+par_child.substr(1,1)+'/'+child_id+'/'+include_in,
        method:'GET',
        data:{},
        dataType:'json',
        success:function(data){
           console.log(data);
        }
       });
       $('[ParChild ='+par_child+']').parent().remove(); 
       $('.modal-delete-cat').removeClass('tab-displayed');

});
// cancel -button
$('.cancel-button,.cancel').on('click',function(){
 $('.modal').removeClass('tab-displayed');
});

//  *   detach */
$(document).on('click','.detach-category-button',function(){
$('.modal-detach-child-cat').addClass('tab-displayed');
//// 
var parent_id=$(this).parent().attr('parid');
var id=$(this).parent().attr('thisId');
var par_child=$(this).parent().attr('ParChild');
/////////////////////
$('#parent_of_to_detach').val(parent_id);
$('#this_id').val(id);
$('#parchild').val(par_child);


});
$(document).on('click','.submit-detach',function(e){
e.preventDefault();
var parent_id=$('#parent_of_to_detach').val();
var child_id=$('#this_id').val();
var par_child=$('#parchild').val();
    $.ajax({
        url:'/detach-child-category/'+parent_id+'/'+child_id,
        method:'GET',
        data:{},
        dataType:'json',
        success:function(data){
           
        }
       });
       $('[ParChild ='+par_child+']').parent().remove(); 
       $('.modal-detach-child-cat').removeClass('tab-displayed');
});

//* create child categoy */
$(document).on('click','.new-child-category-button,.create-new-category',function(){
    var catid=$(this).attr('catid');
   $('.modal-create-child-cat').addClass('tab-displayed') ;
   $('[value='+catid+']').attr('selected',true).siblings('option').attr('selected',false);
});

/////////
$('button').on('mouseenter',function(){
$('.ui-helper-hidden-accessible').addClass('tab-not-displayed');
});


/// draggable 
/*
$('.category-list-item').each(function(){
var item_clone=$(this).clone();
var position=$(this).position();
console.log(position);

});*/
//$('.category-list-item').on('change',)









//////////////////////////////// manage tags 

$(document).on('click','.tags-inner .edit-icon',function(){
    var item=$(this);
    var our_modal=$('.modal-update-tags-details');
   our_modal.addClass('tab-displayed');
   our_modal.find('#cat-id').val(item.parent().attr('thisId'));
   our_modal.find('#name').val(item.parent().find('.cat_name').text());
   our_modal.find('#display-name').val(item.parent().find('.cat_display_name').text());
   $('[value='+item.parent().find('.cat_type').text()+']').attr('selected','true');
   
});
$(document).on('click','.modal-update-tags-details .submit-button',function (e) {
    var our_modal=$('.modal-update-tags-details');
    
    e.preventDefault();
    var id=our_modal.find('#cat-id').val();
    var display_name=our_modal.find('#display-name').val();
    var type=our_modal.find('#type').val();

    $.ajax({
        url:'/update-tag/'+id+'/'+display_name+'/'+type,
        method:'GET',
        data:{},
        dataType:'json',
        success:function(data){
          our_modal.removeClass('tab-displayed');
          $('[thisId='+id+']').find('.cat_display_name').text(data.display_name);
          $('[thisId='+id+']').find('.cat_type').text(data.type);
        }
    });

});

$(document).on('click','.tags-inner .header-inner  .button.primary',function(){
$('.modal-create-tags').addClass('tab-displayed');
});
$(document).on("click",".modal-create-tags .submit-button",function(e){
    var our_modal=$('.modal-create-tags');
    
    e.preventDefault();
    var tag_name=our_modal.find('#name').val();
    if(tag_name=='vide'){tag_name ='vide'}
    var display_name=our_modal.find('#display-name').val();
    if(display_name ==''){display_name='vide'}
    var type=our_modal.find('#type').val();
    $.ajax({
        url:'/create-tag/'+tag_name+'/'+display_name+'/'+type,
        method:'GET',
        data:{},
        dataType:'json',
        success:function(data){
          our_modal.removeClass('tab-displayed');
          console.log(data);
          $('.tags-inner .flex-table-bordered').append(data.new_tag);
        }
    });
});

// search all
let content_before_search=$('.content-inner .flex-table-bordered').html();
$(document).on('keyup','.header-inner .search',function(){
 var word=$(this).val();
 var type=$(this).attr('placeholder');
 if(word !=''){
 $.ajax({
   url:'/search-all/'+word+'/'+type,
   method:'GET',
   data:{},
   dataType:'json',
   success:function(data){
   // console.log(data);
    $('.content-inner .flex-table-bordered').html(data.rows);
   }
 });
}
 else{
    $('.content-inner .flex-table-bordered').html(content_before_search);
 }
});

$(document).on('keyup','.header-inner #search_groups',function(){
 var word=$(this).val();
 var type=$(this).attr('placeholder');
 var group_id=$('.groups-inner .nav-item.selected .dropdown-menu').attr('thisId');
 if(word !=''){
 $.ajax({
   url:'/search-users-of-group',
   method:'GET',
   data:{word,group_id},
   dataType:'json',
   success:function(data){
   //console.log(data);
    $('.content-inner .flex-table-bordered').html(data.rows);
   }
 });
}
 else{
    $('.content-inner .flex-table-bordered').html(content_before_search);
 }
});


//
let all_roles=[];
let all_permissions=[];
let all_permissions_id=[];
let grp_id=[];
$(document).on('click','.edit-user',function(){
    $('.modal-update-user-details').addClass('tab-displayed');
    var item=$(this).parent();
   
    var  our_modal=$('.modal-update-user-details');
    our_modal.find('#user-id').val(item.attr('thisId'));
    our_modal.find('#avatar').val(item.find('.user-avatar img').attr('src'));
    our_modal.find('#first-name').val(item.find('.firstname').text());
    our_modal.find('#last-name').val(item.find('.lastname').text());
    our_modal.find('#email').val(item.find('.user-email').text());

    
    all_grp=(item.find('#grp-id').text()).split(', ');
    
       
    /////////////
    all_roles_id=(item.find('#all-roles').val()).split('.');
    if(all_roles_id.length > 1){
        all_roles_id.pop();   
    }
    

    all_roles=(item.find('#grp-id').text()).split(', ');
    
    if(all_roles.length > 1){
     all_roles.pop();   
    }
    console.log(all_roles);
    if((all_roles.length > 0) && (all_roles[all_roles.length-1] !='')){
    $('.panel-body.roles').html('');
    var i=-1;
    all_roles.forEach(function(role) {
        i++;
        $('.panel-body.roles').append('<div class="panel-item role"><span>'+role+'<input type="hidden" id="permission-id" value="'+all_roles_id[i]+'"></span><!----><button class="round-close-button detach" detachType="roles" type="button"><i class="fa fa-close"></i></button></div>' );  
    }, this);
   }
    //// permissions 
    all_permissions_id=item.find('#all-permissions').val().split('.');
    if(all_permissions_id.length > 1){
        all_permissions_id.pop();   
    }
    //console.log(all_permissions_id);
    all_permissions=item.find('#usePer').text().split(', ');
    if(all_permissions.length > 1){
        all_permissions.pop();   
    }

    if((all_permissions.length > 0) && (all_permissions[all_permissions.length-1] !='')){
    $('.panel-body.permissions-panel').html('');
    var i=-1;
    all_permissions.forEach(function(permission) {
        i++;
        $('.panel-body.permissions-panel').append('<div class="panel-item permission"><span>'+permission+'<input type="hidden" id="permission-id" value="'+all_permissions_id[i]+'"></span><!----><button class="round-close-button detach" detachType="permissions" type="button"><i class="fa fa-close"></i></button></div>' );  
    }, this);
      }
});
//////////////////////////////////////
function detach_elements(url,user,element){
    $.ajax({
    url:url,
    method:'GET',
    data:{user,element},
    dataType:'json',
    success:function(data){
      // if(data.type =='permissions'){
           $('#usePer').html(data.all_permission);
     //  }else{
           //$('#grp-id').html(data);
     //  }
    }
    });
}

/////////////////////////////////////
$('.panel-outter').on('click','.detach i',function(e){
  
 var item=$(this);
 var user=$('.modal-update-user-details').find('#user-id').val();
 var element_to_detach=item.parent().parent().find('input').val();

 var detach_type=item.parent().attr('detachType');
 switch (detach_type) {
     case 'roles':
              var index=all_roles.indexOf(element_to_detach);
              if(index > -1){
                  all_roles.splice(index,1);
              }
              detach_elements('/detach-roles',user,element_to_detach);
          
         break;
    case 'permissions':
              var index=all_permissions.indexOf(element_to_detach);
              if(index > -1){
                 all_permissions.splice(index,1);
              }
              detach_elements('/detach-premissions',user,element_to_detach);
     default:
         break;
 }
   item.parent().parent().remove();
   if(all_roles.length == 0){ $('.panel-body.roles').html('<div class="no-roles" trans="">No roles yet.</div>'); } 
   if(all_permissions.length == 0){ $('.panel-body.permissions-panel').html('<div class="no-permissions" trans="">No permissions yet.</div>');}
});
///// append rest of roles 

$(document).on('click','.select-roles-modal-button',function(e){
    e.preventDefault();
    $('.modal-add-role').addClass('tab-displayed');
    /// try to update the rest of roles and permissions 
    all_roles_id.forEach(function(id) {
        $('[roleId='+id+']').addClass('mat-list-item-disabled');
        $('[roleId='+id+']').find('mat-pseudo-checkbox').addClass('role-permission-label-disabled');
        $('[roleId='+id+']').find('i').addClass('role-permission-icon-disabled');
    }, this);
});

///// check to add roles
let added_roles=[];
let added_roles_names=[];
let added_permissions=[];
let added_permissions_names=[];
$(document).on('click','.mat-pseudo-checkbox i',function(){
 var clicktype=$(this).attr('clickType');
  var item=$(this);
  var mat_parent=$(this).parent('mat-pseudo-checkbox');
  var input_val=item.parent().find('input').val();
  var role_text=item.parent().parent().find('.mat-list-text').text();
  var permission_text=item.parent().parent().find('.mat-list-text .permission-name').text();
  if(!item.hasClass('role-permission-icon-disabled')){
        item.toggleClass('role-permission-icon-checked');
        if(clicktype == 'check-role'){
        manage_seleced_role_permissions(item,added_roles,input_val,role_text,added_roles_names);
        }else{
            $('.modal-add-permissions form .buttons').remove();
            $('.modal-add-permissions form').append('<div class="buttons right"><button class="button close-role-per-modal" type="submit"><!----><span trans="">Cancel</span><!----></button><button class="button primary submit-button" type="submit"><!----><span trans="">Select</span><!----></button></div>');
            manage_seleced_role_permissions(item,added_permissions,input_val,permission_text,added_permissions_names);   
        }
  }


    
  if(!mat_parent.hasClass('role-permission-label-disabled')){
         mat_parent.toggleClass('role-permission-label-selected');
  }
 
});
function manage_seleced_role_permissions(item,arr1,input_val,display_text,arr2){
    if(item.hasClass('role-permission-icon-checked')){
        
         if(!arr1.includes(input_val)){
            arr1[arr1.length]=input_val; 
         }
         if(!arr2.includes(display_text)){
            arr2[arr2.length]=display_text; 
         }
       
      console.log(arr1);  
      console.log(arr2); 
     }else{
       
       var index=arr1.indexOf(input_val);
       if(index > -1){
        arr1.splice(index,1);
       }
       console.log(arr1); 
       var index_name=arr2.indexOf(display_text);
       if(index_name > -1){
        arr2.splice(index_name,1);
       }
       console.log(arr2); 
     }
}

//// submit 
$(document).on('click','.modal-add-role .buttons.right .button',function(e){
   e.preventDefault();
   $('.modal-add-role').removeClass('tab-displayed');
   if(!$(this).hasClass('close-role-per-modal')){
  var output='';
   var i=-1;
   added_roles_names.forEach(function(role) {
       i++;
        output+='<div class="panel-item role"><span>'+role+'<input type="hidden" id="permission-id" value="'+added_roles[i]+'"></span><!----><button class="round-close-button detach" detachType="roles" type="button"><i class="fa fa-close"></i></button></div>';  
   }, this);
   $('.tab-displayed .panel-body.roles,.tab-displayed .panel-body.groups').html(output);
}
});

//// afficher modal add permissions

///// afficher sub permissions
$(document).on('click','.mat-expansion-panel-header',function(){
  var item=$(this).parent();
  var item_header=item.find('.mat-expansion-panel-header');
  var icon_indicator=item.find('.mat-expansion-indicator i');
  item.toggleClass('mat-expansion-panel-spacing');item.toggleClass('mat-expanded');
  if(item.hasClass('mat-expansion-panel-spacing')){
      item_header.animate({
          'height':'64px',
      });
      icon_indicator.removeClass('fa-chevron-down');
      icon_indicator.addClass('fa-chevron-up');
  }else{
    item_header.animate({
        'height':'initial',
    });
    icon_indicator.addClass('fa-chevron-down');
    icon_indicator.removeClass('fa-chevron-up');
  }
   item.find('.mat-expansion-panel-content').toggleClass('mat-expanded');
   item.find('.mat-expansion-panel-content').toggleClass('sub-permission-expaned');
});








/// delete tags ane canned replies function
function open_modal(launcher,the_modal){
  $(document).on('click',''+launcher+'',function(){
   $(the_modal).addClass('tab-displayed');
  });
}
function delete_param(the_modal,selector,url){
$(document).on('click',''+selector+'',function(e){
    e.preventDefault();
 $.ajax({
    url:'/'+url+'/'+array_of_id,
    method:'GET' ,
    data:{},
    dataType:'json',
    success: function(data){
        console.log(data[0]);
        for(var i=0;i<data.length;i++){
        $('[thisId='+data[i]+']').remove();
        }
        array_of_id.length=0;
        $(the_modal).removeClass('tab-displayed');
        $('.content-inner .flex-table-panel-header .header-inner.selected').removeClass('header-inner-selected');
        $('.content-inner .flex-table-panel-header .header-inner.default').removeClass('neg-header-inner-selected'); 
    }
    
 });

});
}
/////////////////////////////////
open_modal('.delete-tags','.modal-delete-tag');
delete_param('.modal-delete-tag','.modal-delete-tag .submit-button','delete-tags');

open_modal('.delete-users','.modal-delete-user');
$(document).on('click','.modal-delete-user .submit-button',function(e){
    e.preventDefault();
   $.ajax({
    url:'/delete-users',
    method:'GET' ,
    data:{array_of_id},
    dataType:'json',
    success: function(data){
        console.log(data[0]);
        for(var i=0;i<data.length;i++){
        $('[thisId='+data[i]+']').remove();
        }
        array_of_id.length=0;
        $('.modal-delete-user').removeClass('tab-displayed');
        $('.content-inner .flex-table-panel-header .header-inner.selected').removeClass('header-inner-selected');
        $('.content-inner .flex-table-panel-header .header-inner.default').removeClass('neg-header-inner-selected'); 
    }
    
 });

});
let email_correct=false;
open_modal('.users-inner .add-user','.modal-add-user');
$(document).on('keyup','.modal-add-user #email',function(){
    var email=$(this).val();
    $.ajax({
        url:'/verify-email',
        method:'GET',
       data:{email},
       dataType:'json',
       success:function(data){
          if(data.result == false){
            $('.modal-add-user form').find('#email').css('border','1px solid red');
            $('.modal-add-user form').find('#wrong-email').css('display','block');
          }else{
              if(data.email_exist == true){
                $('.modal-add-user form').find('#email').css('border','1px solid red');
                $('.modal-add-user form').find('#exist-email').css('display','block');
              }else{
                $('.modal-add-user form').find('#email').css('border','1px solid #e0e0e0');
                $('.modal-add-user form').find('#exist-email').css('display','none');
                email_correct=true;
              }
              
              $('.modal-add-user form').find('#email').css('border','1px solid #e0e0e0');
              $('.modal-add-user form').find('#wrong-email').css('display','none');
              email_correct=true;
          }
       }
    });
});



// submit add user
$(document).on('click','.modal-add-user .submit-button',function(e){
     e.preventDefault();
     //var form_data=$('.modal-add-user form').serialize();
    var avatar_img=$('#avatar_string').val();
     if(added_roles.length==0){added_roles[0]=0}if(added_permissions.length==0){added_permissions[0]=0}

     if(email_correct ==true){
      upload_avatar();
      
      
     $.ajax({
        url:'/create-new-user',
        method:'POST',
        data:{added_roles,added_permissions,form_data,avatar_img},
        dataType:'json',
        success:function(data){
           console.log(data);
           $('.modal-add-user').removeClass('tab-displayed');
           $('.content-inner .flex-table-bordered').append(data.new_user);
        }
     });
    }
});








let rslt='';
 function upload_avatar(){
     var file_data=$('.modal-add-user #avatar').prop('files')[0];
     var form_data=new FormData();

    form_data.append('file',file_data);
    
    rslt=$.ajax({
        url:"/upload-avatar",
        method:'POST',
        data:form_data,
        dataType:'text',
        contentType:false,
        cache:false,
        processData:false,
        success:function(data){
           //console.log(data);
        }
     });
     rslt.done(function(msg){
        $('#avatar_string').val(msg);
     });
}
$(document).on('click','.modal-add-permissions .close-role-per-modal',function(e){
 e.preventDefault();
 $('.modal-add-permissions').removeClass('tab-displayed');
});
$(document).on('click','.modal-add-permissions .close-button',function(e){
    e.preventDefault();
    $('.modal-add-permissions').removeClass('tab-displayed');
    $('.modal-add-user').addClass('tab-displayed');
    $('.modal-update-user-details').addClass('tab-displayed');
   });
$(document).on('click','.modal-add-role .close-button',function(e){
    e.preventDefault();
    $('.modal-add-role').removeClass('tab-displayed');
    $('.modal-add-user').addClass('tab-displayed');
    $('.modal-update-user-details').addClass('tab-displayed');
   });
open_modal('#mat-raised-button','.modal-add-role');
/////// canned replies
let our_modal=$('.modal-update-canned-reply');
$(document).on('click','.edit-canned-reply',function(){
    $('.modal-update-canned-reply').addClass('tab-displayed');
    var item=$(this).parent();
    our_modal.find('#canned-reply-id').val(item.attr('thisId'));
     our_modal.find('#canned-reply-name').val(item.find('.canned-name').text());
     our_modal.find('#canned-reply-update').val(item.find('.canned-content').text());
     tinyMCE.get('canned-reply-update').setContent(item.find('.canned-content').text())
});
$(document).on('click','.modal-update-canned-reply .submit-button',function(e){
   e.preventDefault();
   var canned_id=our_modal.find('#canned-reply-id').val(); 
   var canned_name=our_modal.find('#canned-reply-name').val();
   var canned_content=tinyMCE.get('canned-reply-update').getContent();
   if(canned_content == null){
    canned_content=our_modal.find('#canned-reply-update').val();
   }
   $.ajax({
     url:'/update-canned-replies/'+canned_id,
     method:'GET',
     data:{canned_name,canned_content},
     dataType:'json',
     success:function(data){
       $('[thisId='+data.canned_id+']').find('.canned-name').text(data.canned_name);
       $('[thisId='+data.canned_id+']').find('.canned-content').html(data.canned_content);
       our_modal.removeClass('tab-displayed');
     }
   });
});

//////
let add_canned_modal=$('.modal-add-canned-reply');
$('.canned-replies-inner .header-inner .add-new-canned').on('click',function(){
  add_canned_modal.addClass('tab-displayed');
});

$(document).on('click','.modal-add-canned-reply .submit-button',function(e){
 e.preventDefault();
 var canned_name=add_canned_modal.find('#canned-reply-name').val();
 var canned_content=tinyMCE.get('canned-reply').getContent();
 if(canned_content ==null){
  canned_content=add_canned_modal.find('#canned-reply').val();}
 $.ajax({
    url:'/create-canned-reply',
    method:'GET',
    data:{canned_name,canned_content},
    dataType:'json',
    success:function(data){
        add_canned_modal.removeClass('tab-displayed');
        $('.content-inner .flex-table-bordered').append(data.row_content);
    
    }
  });
});
//
let count_id=0;
let array_of_id=[];
function select_checkboxes(selector,check_all,page_name){


$(document).on('click',''+selector+'',function(){
count_id=count_id++;

 var icon =$(this);
 var elem=$(this).parent().find('label');
 var id=elem.attr('id');
 var label_for=elem.attr('for');
 var value=icon.parent().find('input').val();
 //console.log(value);
//console.log(count_id);
 

 if(elem.hasClass('label-check-befor')){
    if(label_for=='toggle-all-'+check_all+'-checkbox'){
        array_of_id.length=0;
        $('.header-inner.selected').html('<div class="left">'+0+' <span trans="">'+page_name+' Selected</span></div><div class="right"><button class="no-style delete-'+check_all+'" title="Delete" style="    padding: 5px 8px;border: 1px solid #cacaca;"><img src="../img/trash.png" alt="delete-'+check_all+'" class="" style="height:25px;width:23px;"> </button></div>');
        $('.content-inner label').removeClass('label-check-befor'); 
        $('.content-inner .flex-table-item i.fa-check').css('color','transparent'); 
        $('.content-inner .flex-table-panel-header .header-inner.selected').removeClass('header-inner-selected');
        $('.content-inner .flex-table-panel-header .header-inner.default').removeClass('neg-header-inner-selected'); 
     }else{
     //array_of_id.length--;
     var index=array_of_id.indexOf(id);
     if(index > -1){
         array_of_id.splice(index,1);
     } 
     $('.header-inner.selected').html('<div class="left">'+array_of_id.length+' <span trans="">'+page_name+' Selected</span></div><div class="right"><button class="no-style delete-'+check_all+'" tooltip="Delete" style="    padding: 5px 8px;border: 1px solid #cacaca;"><img src="../img/trash.png" alt="delte-'+check_all+'" class="" style="height:25px;width:23px;"> </button></div>');
     $(elem).removeClass('label-check-befor');
     $(icon).css('color','transparent');
     if(array_of_id.length==0){
     $('.content-inner .flex-table-panel-header .header-inner.selected').removeClass('header-inner-selected');
     
       $('.content-inner .flex-table-panel-header .header-inner.default').removeClass('neg-header-inner-selected');   
     }
    }
    
 }else{
    if(label_for=='toggle-all-'+check_all+'-checkbox'){
        
        var all_tags=id.split('.');
        for(var i=0;i<all_tags.length-1;i++){
            if(!array_of_id.includes(all_tags[i]))
            array_of_id[array_of_id.length]=all_tags[i];
        }
        // get id from blade 
        $('.header-inner.selected').html('<div class="left">'+array_of_id.length+' <span trans="">'+page_name+' Selected</span></div><div class="right"><button class="no-style delete-'+check_all+'" title="Delete" style="    padding: 5px 8px;border: 1px solid #cacaca;"><img src="../img/trash.png" alt="delte-'+check_all+'" class="delete-'+check_all+'" style="height:25px;width:23px;"> </button></div>');
        $('.content-inner label').addClass('label-check-befor'); 
        $('.content-inner .flex-table-item i.fa-check').css('color','#fff'); 
        $('.content-inner .flex-table-panel-header .header-inner.selected').addClass('header-inner-selected');
        $('.content-inner .flex-table-panel-header .header-inner.default').addClass('neg-header-inner-selected'); 
     }else{
   //save element in array
   if(!array_of_id.includes(id)){
    array_of_id[array_of_id.length]=id;
   }
   $('.header-inner.selected').html('<div class="left">'+array_of_id.length+' <span trans="">'+page_name+' Selected</span></div><div class="right"><button class="no-style delete-'+check_all+'" title="Delete" style="    padding: 5px 8px;border: 1px solid #cacaca;"><img src="../img/trash.png" alt="delte-'+check_all+'" class="delete-'+check_all+'" style="height:25px;width:23px;"> </button></div>');
   $(elem).addClass('label-check-befor'); 
   $(icon).css('color','#fff'); 
   $('.content-inner .flex-table-panel-header .header-inner.selected').addClass('header-inner-selected');
   $('.content-inner .flex-table-panel-header .header-inner.default').addClass('neg-header-inner-selected'); 
 }
 }
console.log(array_of_id);
});
}
//////////////////////////////////////////////
select_checkboxes('.content-inner.canned-replies-inner .flex-table-item i.fa-check','canned-replies','Canned Replies');

select_checkboxes('.content-inner.tags-inner .flex-table-item i.fa-check','tags','Tags');
select_checkboxes('.content-inner.users-inner .flex-table-item i.fa-check','users','Users');
///////////assigned and unassigned users to groups
open_modal('.header-inner #assign-button','.modal-assign-user-togrp');

let users_id=[];
let assign_button=$('.header-inner .button#assign-button');
let unassign_button=$('.header-inner .button#unassign-button');
$(document).on('click','.content-inner.groups-inner .flex-table-item i.fa-check',function(){

     var icon =$(this);
     var elem=$(this).parent().find('label');

     var id=elem.attr('id');
     var label_for=elem.attr('for');

     var value=icon.parent().find('input').val();
     ///////// get the unassigned button 
  
     if(elem.hasClass('label-check-befor')){ 
       

     if(label_for =='toggle-all-users-checkbox') {
         
        users_id.length=0;
        $('.content-inner label').removeClass('label-check-befor'); 
        $('.content-inner .flex-table-item i.fa-check').css('color','transparent'); 
    
      }else{
        users_id.length--;
        $(elem).removeClass('label-check-befor');
        $(icon).css('color','transparent');
      }
       if(users_id.length == 0){
        assign_button.addClass('assign-button');
        assign_button.removeAttr('disabled');
        unassign_button.attr('disabled','true');
        unassign_button.removeClass('assign-button');
        $('.content-inner label').removeClass('label-check-befor'); 
        $('.content-inner .flex-table-item i.fa-check').css('color','transparent'); 
       }
     }else{
        assign_button.removeClass('assign-button');
        assign_button.attr('disabled','true');
        unassign_button.removeAttr('disabled');
        unassign_button.addClass('assign-button');

        if(label_for=='toggle-all-users-checkbox'){
            var all_users_id=id.split('.');
            for(var i=0;i<all_users_id.length-1;i++){
                if(!users_id.includes(all_users_id[i]))
                users_id[users_id.length]=all_users_id[i];
            }
            $('.content-inner label').addClass('label-check-befor'); 
            $('.content-inner i.fa-check').css('color','#fff'); 
        }else{
            if(!users_id.includes(id)){
                users_id[users_id.length]=id;
                }
            $(elem).addClass('label-check-befor'); 
            $(icon).css('color','#fff'); 
        }
        
     }
     console.log(users_id);
});
open_modal('.header-inner #unassign-button','.modal-unassign-user-from-grp');
$(document).on('click','.modal-unassign-user-from-grp .submit-button',function(e){
    e.preventDefault();
    var group_id=$('.groups-inner .nav-item.selected .dropdown-menu').attr('thisId');
    $.ajax({
        url:'/unassign-users',
        method:'GET' ,
        data:{group_id,users_id},
        dataType:'json',
        success: function(data){
            $('.modal-unassign-user-from-grp').removeClass('tab-displayed');
            $('.all-users-of-group').html(data.rows_result);
            assign_button.addClass('assign-button');
            assign_button.removeAttr('disabled');
            unassign_button.attr('disabled','true');
            unassign_button.removeClass('assign-button');
            
        }
    })
});
// update groups

 open_modal('.grp-dropdown .dropdown-item:nth-child(1)','.modal-update-group');
 let all_grp_per_id=[];
$(document).on('click','.grp-dropdown .dropdown-item:nth-child(1)',function(){
 all_grp_per_id=[];
 var our_modal=$('.modal-update-group');
 var groupid=$(this).parent().attr('thisId')
 our_modal.find('input#id').val(groupid); 
 our_modal.find('input#name').val($(this).parent().parent().find('.name').text());
 $('.setting-checkbox').remove();
 $.ajax({
     url:'/get-group-permissions',
     method:'GET',
     data:{groupid},
     dataType:'json',
     success:function(data){
        
        our_modal.find('.manage-permissions').html(data.permissions);
        our_modal.find('.panel-outter').append(data.output_assign_type);
        group_assign_type=data.assign_type;
         if(data.rows_count > 0){
             our_modal.find('.no-permissions').css('display','none');
             all_grp_per_id=data.all_grp_per_id.split('.');
             if(all_grp_per_id.length > 1){
                all_grp_per_id.pop();   
            }
         }else{
            our_modal.find('.no-permissions').css('display','block'); 
         }
         
         console.log(all_grp_per_id);
       // console.log(data);
     }

 });

});
$(document).on('click','.modal-update-group .remove-group_permission',function(e){
    e.preventDefault();
  var index=all_grp_per_id.indexOf($(this).parent().find('input').val());
  if(index > -1){
      all_grp_per_id.splice(index,1);
  }
  $(this).parent().remove();
  console.log(all_grp_per_id);
});
$(document).on('click','.modal-add-group .remove-group_permission',function(e){
    e.preventDefault();
  var index=all_grp_per_id.indexOf($(this).parent().find('input').val());
  if(index > -1){
      all_grp_per_id.splice(index,1);
  }
  $(this).parent().remove();
  console.log(all_grp_per_id);
});
let group_assign_type='';
$(document).on('click','.setting-checkbox i.fa-check',function(){
  var label_check=$(this).parent().find('label');
  var assign_type=label_check.parent().find('input').val();
  label_check.toggleClass('label-check-befor');
  if(label_check.hasClass('label-check-befor')){
    $(this).css('color','#fff');
        group_assign_type=assign_type;
    console.log(group_assign_type);
    label_check.parent().siblings('.setting-checkbox').find('label').removeClass('label-check-befor');
    label_check.parent().siblings('.setting-checkbox').find('i.fa-check').css('color','transparent');
  }else{
    $(this).css('color','transparent'); 
    var index=group_assign_type.indexOf(assign_type);
    if(index > -1){
        group_assign_type.splice(index,1);
    }
    console.log(group_assign_type); 
  }
});
$(document).on('click','.select-permissions-modal-button',function(e){
    e.preventDefault();
    $('.modal-add-permissions').addClass('tab-displayed');
});
$(document).on('click','.modal-add-permissions .submit-button',function(e){
 e.preventDefault();
 var output='';
 $('.modal-add-permissions').removeClass('tab-displayed');
 $('.no-permissions').css('display','none');
 for(var i=0;i<added_permissions.length;i++){
  all_grp_per_id.push(added_permissions[i]);
 output+='<div class="permission"><span>'+added_permissions_names[i]+'</span><input type="hidden" value="'+added_permissions[i]+'"><button class="remove-icon round-close-button remove-group_permission" tooltip="Remove"><i class="fa fa-close"></i></button></div>';
 }
 $('.manage-permissions,.permissions-panel').html(output);
});
$(document).on('click','.modal-update-group .submit-button',function(e){
    e.preventDefault();
    var grp_id=$(this).parent().parent().find('#id').val();
    var grp_name=$(this).parent().parent().find('#name').val();
    //all_grp_per_id
    //console.log(group_assign_type);
    $.ajax({
        url:'/update-group-details',
        method:'GET',
        data:{grp_id,grp_name,all_grp_per_id,group_assign_type},
        dataType:'json',
        success:function(data){
           // console.log(data);
           $('[thisId='+grp_id+']').parent().find('.name').text(data.group_name);
        }
    })
});
$(document).on('mouseenter','.modal-add-group .submit-button',function(){ 
    var grp_name=$('.modal-add-group #name');
    if(grp_name.val() ==''){
   
        grp_name.css('border','1px solid red');
        $(this).css('cursor','not-allowed');
    }else{
        grp_name.css('border','initial');
        $(this).css('cursor','pointer');
    }
});
$(document).on('click','.modal-add-group .submit-button',function(e){ 

    e.preventDefault();
    var grp_name=$('.modal-add-group #name').val();
    group_assign_type=$('.modal-add-group .setting-checkbox label.label-check-befor').parent().find('input').val();
    
    //all_grp_per_id
    //console.log(group_assign_type);
    $.ajax({
        url:'/add-group',
        method:'GET',
        data:{grp_name,all_grp_per_id,group_assign_type},
        dataType:'json',
        success:function(data){
           // console.log(data);
           $('.admin-pill-nav.solid.with-actions').append(data.new_group);
        }
    })
});
open_modal('.new-group .button','.modal-add-group');
///////////////////////////////////////////////
open_modal('.delete-canned-replies','.modal-delete-canned-reply');
delete_param('.modal-delete-canned-reply','.modal-delete-canned-reply .submit-button','delete-canned-reply');
/*/*//*/*//*/**//*/* */
$(document).on('click','.articles-of-each-category .articls-list-item',function(){
var article_id=$(this).find('input').attr('toRemove');
window.location.href='edit-articles/'+article_id+'';
});







