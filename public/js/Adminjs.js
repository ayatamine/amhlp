$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
});
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });
$( document ).tooltip({
    position: {
      my: "center bottom-20",
      at: "center top",
      using: function( position, feedback ) {
        $( this ).css( position );
        $( "<div>" )
          .addClass( "arrow" )
          .addClass( feedback.vertical )
          .addClass( feedback.horizontal )
          .appendTo( this );
      }
    }
  });


$('.ad-logged-in-widget').on('click',function(){
    if($('.xs-dropdown-auth').hasClass('hide-dropdown')){
      $('.xs-dropdown-auth').removeClass('hide-dropdown');
    }
    else{
        $('.xs-dropdown-auth').addClass('hide-dropdown');
    }
  
});
/* style of displaying articles grid or list  */
$('.filter-articles-table > .fa-th-list').on('click',function(){
$('.articles-of-each-category .articls-list-item').css('min-width','100%');
});
$('.filter-articles-table > .fa-th').on('click',function(){
    $('.articles-of-each-category .articls-list-item').css('min-width','inherit');
});
// menu manage articls in xs-media

$(document).on('click','.xs-manage-categories-list',function(){
    var list=$(this).parent().find('.actions');
 if(list.hasClass('show-manage-category-list')){
    if(list.parent().hasClass('parent-category')){
        list.parent('.parent-category').next().find('.xs-manage-categories-list').css('margin-right','0');
     }
    list.removeClass('show-manage-category-list');
    
 }else{
     $('.actions').removeClass('show-manage-category-list');
     if(list.parent().hasClass('parent-category')){
        list.parent('.parent-category').next().find('.xs-manage-categories-list').css('margin-right','-117px');
     }
     list.addClass('show-manage-category-list');
 }
});
// select categories to display articls

$(document).on('click','.tags-categories .category label',function(){

 var cat=$(this).attr('for');
 
 if($(this).hasClass('label-check-befor')){
     $(this).removeClass('label-check-befor');
     $('.tags-categories .category i').css('color','transparent');
 }else{
   $(this).addClass('label-check-befor');  
   $('.tags-categories .category i').css('color','#fff'); 
 }

});


/*
// selected tags 
let count_id_tags=0;
$('.tags-inner .flex-table-item i.fa-check').on('click',function(){
count_id_tags=count_id_tags++;

 var icon_tag =$(this);
 var elem_tag=$(this).parent().find('label');
 var id_tag=elem_tag.attr('for');
 var value_tag=$(this).parent().find('input').val();
//console.log(value);
//console.log(count_id_tags);
 

if(elem_tag.hasClass('label-check-befor')){
    if(id_tag=='toggle-all-tags-checkbox'){

        $('.header-inner.selected').html('<div class="left">'+0+' <span trans="">Tags Selected</span></div><div class="right"><button class="no-style" tooltip="Delete" style="    padding: 5px 8px;border: 1px solid #cacaca;"><img src="../img/trash.png" alt="delte-user" class="create-child-category" style="height:25px;width:23px;"> </button></div>');
        $('.tags-inner label').removeClass('label-check-befor'); 
        $('.tags-inner .flex-table-item i.fa-check').css('color','transparent'); 
        $('.tags-inner .flex-table-panel-header .header-inner.selected').removeClass('header-inner-selected');
        $('.tags-inner .flex-table-panel-header .header-inner.default').removeClass('neg-header-inner-selected'); 
     }else{
     array_of_id.length--;
     $('.header-inner.selected').html('<div class="left">'+array_of_id.length+' <span trans="">Tags Selected</span></div><div class="right"><button class="no-style" tooltip="Delete" style="    padding: 5px 8px;border: 1px solid #cacaca;"><img src="../img/trash.png" alt="delte-user" class="create-child-category" style="height:25px;width:23px;"> </button></div>');
     $(elem_tag).removeClass('label-check-befor');
     $(icon_tag).css('color','transparent');
     if(array_of_id.length==0){
     $('.tags-inner .flex-table-panel-header .header-inner.selected').removeClass('header-inner-selected');
     
       $('.tags-inner .flex-table-panel-header .header-inner.default').removeClass('neg-header-inner-selected');   
     }
    }
    
 }else{
    if(id_tag=='toggle-all-tags-checkbox'){
        // get id from blade 
        $('.header-inner.selected').html('<div class="left">'+15+' <span trans="">Tags Selected</span></div><div class="right"><button class="no-style" tooltip="Delete" style="    padding: 5px 8px;border: 1px solid #cacaca;"><img src="../img/trash.png" alt="delte-user" class="create-child-category" style="height:25px;width:23px;"> </button></div>');
        $('.tags-inner label').addClass('label-check-befor'); 
        $('.tags-inner .flex-table-item i.fa-check').css('color','#fff'); 
        $('.tags-inner .flex-table-panel-header .header-inner.selected').addClass('header-inner-selected');
        $('.tags-inner .flex-table-panel-header .header-inner.default').addClass('neg-header-inner-selected'); 
     }else{
   //save element in array
   array_of_id[array_of_id.length]=id;
   $('.header-inner.selected').html('<div class="left">'+array_of_id.length+' <span trans="">Tags Selected</span></div><div class="right"><button class="no-style" tooltip="Delete" style="    padding: 5px 8px;border: 1px solid #cacaca;"><img src="../img/trash.png" alt="delte-user" class="create-child-category" style="height:25px;width:23px;"> </button></div>');
   $(elem_tag).addClass('tags-check-befor'); 
   $(icon_tag).css('color','#fff'); 
   $('.tags-inner .flex-table-panel-header .header-inner.selected').addClass('header-inner-selected');
   $('.tags-inner .flex-table-panel-header .header-inner.default').addClass('neg-header-inner-selected'); 
 }
 }
});
*/


// show and hide menu of admin area
$('.admin-hide-show-menu').on('click',function(){
 var leftc=$('.ad-ar-content .left-column');
 var contentinner=$('.content-inner');
 if((leftc).hasClass('left-column-no-width')){
   $(leftc).removeClass('left-column-no-width');
   contentinner.css('width','calc(100% - 225px)')
   
 }else{
     $(leftc).addClass('left-column-no-width');
     contentinner.animate({
        width:'100%',
     });
     contentinner.css('position','absolute');
    
 }
});

// edit and delete groups dropdown menu
$(document).on('click','.admin-pill-nav .actions i',function(e){
e.stopPropagation();
var drpmenu=$(this).parent().parent().parent().find('.dropdown-menu');
if(drpmenu.hasClass('dropdown-menu-open')) {
 drpmenu.removeClass('dropdown-menu-open');   
}else{
    drpmenu.addClass('dropdown-menu-open');
}

});

$(document).on('click',function(){
        if($('.admin-pill-nav .nav-item .dropdown-menu').hasClass('dropdown-menu-open')){
            $('.admin-pill-nav .nav-item .dropdown-menu').removeClass('dropdown-menu-open')   ;
        }
    })
//change the selected group to make operations
$(document).on('click','.admin-pill-nav.solid>.nav-item',function(){

        $(this).addClass('selected');
        $(this).siblings('.nav-item').removeClass('selected');
        var group_id=$(this).find('.grp-dropdown').attr('thisId');
        $.ajax({
            url:'/getUsers-of-group',
            method:'GET',
            data:{group_id},
            dataType:'json',
            success:function(data){
               // console.log(data);
                $('.all-users-of-group').html(data.rows_result);
            }
        
        });
  
});
// assign more users
let count_inputs=0;
$(document).on('click','.assign-users .more',function(){
 count_inputs++;
 $(this).parent().parent().append('<div class="input-container with-addon"><input placeholder="Email Address" type="text" id="1" class="ng-untouched ng-pristine ng-valid"><i class="fa fa-close fa-lg"></i><!----></div>');
});
$(document).on('click','.input-container.with-addon .fa-close',function(){
  $(this).parent().remove();
});
// search users keyup
$(document).on('keyup','.modal-assign-user-togrp input',function(){
    var item=$(this);
    var input_id=$(this).attr('id');
  var search_email=$(this).val();
  if(search_email !=''){

    $.ajax({
        url:'/search-emails-users',
        method:'GET',
        data:{search_email,input_id},
        dataType:'json',
        success:function(data){
            if(data.total_row > 0){
              item.parent().parent().find('.emails-result').html(data.rows_result)   ;
            }else{
                $(this).parent().parent().append('<div>No user found with this email</div>')   ;
            }    
        }
    
    });

  }
});
//set the input at the selected email result
$(document).on('click','.emails-result .searched-emails',function(){
  $('input#'+$(this).attr('inp')+'').val($(this).text());
})
// submit asssign user to group
$(document).on('click','.modal-assign-user-togrp .submit-button',function(e){
 e.preventDefault();
 var array_of_emails=[];

 var group_id=$('.nav-item.selected .dropdown-menu').attr('thisId');
 console.log(count_inputs);
 if(count_inputs != 0){
 for(var i=0;i<=count_inputs;i++){
      array_of_emails[i] = $('.modal-assign-user-togrp input#'+i+'').val();
 }
 ;}else{
    array_of_emails[array_of_emails.length] = $('.modal-assign-user-togrp input').val();
 }
 

    
     $.ajax({
        url:'/assign-users-to-group',
        method:'GET',
        data:{array_of_emails,group_id},
        dataType:'json',
        success:function(data){
            $('.modal-assign-user-togrp').removeClass('tab-displayed');
            $('.all-users-of-group').html(data.rows_result);
           
        }
    
    });
 
 
});
// change the active route link from the left side

$('.left-column>.menu-items>.menu-item').click(function(){
setTimeout(function(){if($(this).attr('routerlink')==$('.router').val()){
    $(this).addClass('router-link-active');
    $(this).siblings('.menu-item').removeClass('router-link-active');
    }},3000);
});

var tabcontent=$('#appearance-tab-content');
// admin appearance tab-content
$('#appearance-nav-tabs ul li').on('click',function(){

    $('#appearance-nav-tabs').removeClass('tab-displayed');
    $('#appearance-nav-tabs').addClass('tab-not-displayed');
    $(tabcontent).removeClass('tab-not-displayed'); 
    $(tabcontent).addClass('tab-displayed');
});
// go back to nav-tab
$('#appearance-tab-content .header .back-button').click(function(){

    $(tabcontent).removeClass('tab-displayed');
    $(tabcontent).addClass('tab-not-displayed'); 
    $('#appearance-nav-tabs').removeClass('tab-not-displayed');
    $('#appearance-nav-tabs').addClass('tab-displayed');
    
});
$(document).delegate(".back-to-menu-tab","click",function(){
 window.location.href='/admin/appearance';
});
// collapse and expand menus 
$('.collapse-header').click(function(){
$(this).parent().toggleClass('expanded');
});
// modal delete menu
$('.delete-menu .delete-button').click(function(){
 if($(this).attr('id') !='1'){
 $('.modal-delete-menu').addClass('tab-displayed');
 $('.modal-delete-menu #menu-id').val($(this).attr('id'))
 }else{
    $('.modal-delete-menu').addClass('tab-displayed');
    $('.modal-delete-menu .confirm-content').html('<p style="font-size: 1.2rem;">You can\'t delete this minimal menu?</p>') ;
 }
});


//show edit menu in appearance tabs
$('.cus-gen-dropdown .no-style').click(function(e){
    e.stopPropagation();
 $(this).parent().find('.dropdown-menu').toggleClass('dropdown-menu-open');
});
$(document).on('click',function(){
    if($('.cus-gen-dropdown .dropdown-menu').hasClass('dropdown-menu-open')){
        $('.cus-gen-dropdown .dropdown-menu').removeClass('dropdown-menu-open')
    }
});
let image_setting_type='';
let image_setting_changed=false;
let img_src_changed =false;
let img_remove_type="";
var img_src_before="";
$(document).on('click','.cus-gen-dropdown .dropdown-menu .dropdown-item',function(){

    var image_type=$(this).parent().attr('id');
    $('.appearance .save-button').removeAttr('disabled');
     
    var action_type=$(this).text();
    if(action_type == 'Remove'){
       var iimg=$(this).parent().parent().parent().find('img');
       img_src_before=iimg.attr('src');
       $(this).parent().parent().parent().find('.add-image-after-remove').css('display','block');
       img_remove_type=$(this).parent().attr('id');
       iimg.attr('src',"");
       img_src_changed=true;
    }else{
       image_setting_type=image_type;
       image_setting_changed=true;
       
    }
});
//show upload image in appearance general
$('.img-container').click(function(){
    console.log($(this).find('input').attr('id'));
    $('.modal-insert-image').addClass('tab-displayed');
    $('#image-name').val($(this).find('input').attr('id'));
});
let iframe=$('#full-iframe');
let  iframe_content=iframe.contents();

function element_bordered_changed(selector,iframe_content,element_in_iframe){
    $(document).on('click',selector,function(){
        iframe_content.find(element_in_iframe).css('border','2px dashed red ');
       });
       $(document).on('keyup',selector,function(){
        iframe_content.find(element_in_iframe).text($(this).val());
            iframe_content.find(element_in_iframe).attr('placeholder',$(this).val());
       });
       $(document).on('mouseout',selector,function(){
        iframe_content.find(element_in_iframe).css('border','initial');
       });
}
element_bordered_changed('#intro-title',iframe_content,'#myf');
element_bordered_changed('.search-in-appearance',iframe_content,'#search-title');
element_bordered_changed('#Site-Name',iframe_content,'.nav-content.inner-nav-content');
let iframe_new_ticket=$('#iframe-new-ticket');
let  iframe_new_ticket_content=iframe_new_ticket.contents();


element_bordered_changed('#Titlem',iframe_new_ticket_content,'#sb');
element_bordered_changed('#Category-Label',iframe_new_ticket_content,'#category-label');
element_bordered_changed('#sub-Category',iframe_new_ticket_content,'#sub-category-label');
element_bordered_changed('#Subject-Label',iframe_new_ticket_content,'#subject-label');
element_bordered_changed('#Description-Label',iframe_new_ticket_content,'#description-label');
element_bordered_changed('#Sidebar-Title',iframe_new_ticket_content,'.note-about-add-ticket');
element_bordered_changed('#Submit-button',iframe_new_ticket_content,'input#submit');
element_bordered_changed('.title.t1',iframe_new_ticket_content,'#st1');
element_bordered_changed('.title.t2',iframe_new_ticket_content,'#st2');
element_bordered_changed('.title.t3',iframe_new_ticket_content,'#st1');
$('.modal-visible form').on('change',function(){
 $('.appearance .save-button').removeAttr('disabled');
});
$('.appearance-panel input').on('change',function(){
 $('.appearance .save-button').removeAttr('disabled');
});
$('.form-changed input').on('keyup',function(){
 $('.appearance .save-button').removeAttr('disabled');
});
$('.form-changed select').on('change',function(){
    $('.appearance .save-button').removeAttr('disabled');
   });
$('#Site-Name,#Site-Url').on('keydown',function(){
    $('.appearance .save-button').removeAttr('disabled');
   });
$('.appearance .save-button').click(function(){
    //$('.modal-visible form').submit()
    $('.tab-pane.active .form-changed').submit();
    $(this).attr('disabled','true');
});
$('.appearance .save-button').click(function(){
    var info_type=$(this).parent().parent().find('.tab-pane.active');
    if(info_type.attr('id')=='general'){
       var site_name=info_type.find('#Site-Name').val();
       var site_url=info_type.find('#Site-Url').val();
       $.ajax({
          url:'/update-site-name-url',
          method:'get',
          data:{site_name,site_url},
          dataType:'json',
          success:function(data){
            info_type.find('#Site-Name').val(data.site_name);
            iframe_content.find('.nav-content.inner-nav-content').text(data.site_name);
            info_type.find('#Site-Url').val(data.site_url);
          } 
       });
      if(image_setting_changed == true){
        
        $.ajax({
            url:'/use-default-site-images',
            method:'get',
            data:{image_setting_type},
            dataType:'json',
            success:function(data){
             if(image_setting_type == 'footer'){
                $('#footer').parent().parent().find('img').attr('src','../img/'+data.footer_img);
             }else{
                 if(image_setting_type == 'white'){
                    $('#white').parent().parent().find('img').attr('src','../img/'+data.white_img);
                 }else{
                    $('#favicon').parent().parent().find('img').attr('src','../img/'+data.favicon_img);
                 }
             }
            } 
         });
      }
      if((img_src_changed == true) && ($('#'+img_remove_type+'').parent().parent().find('img').attr('src')=='')){
        
        $.ajax({
            url:'/remove-img-src',
            method:'get',
            data:{img_remove_type},
            dataType:'json',
            success:function(data){
             
            } 
         });
      }
    }
    $('.tab-pane.active .form-changed').submit();
    console.log($('input#iconcolor1').val());
});
$('.form-control').on('focus',function(){
 $(this).css('box-shadow','0 0 0 0.2rem rgba(255, 255, 255, 0.25)');
});
// delete sidebar tips details  show us tel us

$('.appearance-list-input .remove-item-button').click(function(){
 $(this).parent().remove();
 $('.appearance .save-button').removeAttr('disabled');
});
var co_of_add_items=1;
$('.add-slidebar-tip').click(function(){
 $('.slidebar_tips3 ').removeClass('tab-not-displayed');
 $('.appearance .save-button').removeAttr('disabled');
 $(this).attr('disabled','disabled');
 $(this).find('button').css('cursor','not-allowed');
});
// add new menu 

$('.action-buttons.add-menu').click(function(){
var number_of_menu=$('#number-of-menu').val();
number_of_menu ++;
$('#list-of-header-menu').append('<li role="presentation"><a class="nav-item" href="#menu-details'+number_of_menu+'" aria-controls="menu-details'+number_of_menu+'" role="tab" data-toggle="tab"><span class="name" style="min-width: 100px;font-size: 1rem;">New Item</span><i class="fa fa-chevron-right "></i></a></li>');
$('#appearance-tab-content').append('<div role="tabpanel" class="tab-pane" id="menu-details'+number_of_menu+'"><div class="header"><div class="back-button back-to-menu-tab"><i class="fa fa-chevron-left fa-lg "></i></div><div class="title"><div class="static" i18="">Customizing</div><div class="path"><span>Menus</span></div></div>       </div>menu details</div>');
});







$('.backdrop,i.fa-close').click(function(){
    $('.modal').removeClass('tab-displayed');
    $('.modal-insert-image').removeClass('tab-displayed');
    $('.modal').css('display','none !important');
});
$('.close-button i.fa-close').click(function(){
    $('.modal').css('display','none');
});
// change the iframe to display add ticket page 
$(document).on('click','a.nav-item',function(){
    var addt_title=$('.add-ticket .submit-ticket');
    console.log(addt_title);
    if($(this).attr('href')=='#newticket'){
       
        $('.appearance-inner.live-preview #full-iframe').css('display','none');
        $('.appearance-inner.live-preview #iframe-new-ticket').css('display','block');
        //attr('src','../help-center/tickets/new') ;
        /*$('.appearance-panel.add-ticket-panel').find('#title').val();
        $('.appearance-panel.add-ticket-panel').find('#Category').val();
        $('.appearance-panel.add-ticket-panel').find('#Subject').val();
        $('.appearance-panel.add-ticket-panel').find('#Description').val();
        $('.appearance-panel.add-ticket-panel').find('#Sidebar').val();
        $('.appearance-panel.add-ticket-panel').find('.list-item .title.t1').val();
        $('.appearance-panel.add-ticket-panel').find('.list-item .title.t2').val();*/



      }else{
        if($(this).attr('href')=='#helpCenter'){
            $('.appearance-inner.live-preview #full-iframe').css('display','block');
            $('.appearance-inner.live-preview #iframe-new-ticket').css('display','none');  
        }
      }

});
// inputs effect    
$('.appearance-panel.add-ticket-panel').find('#title').on('blur',function(){
 // console.log('enter');
  $('.submit-ticket').css('border','2px dashed red');
});
$('.add-ticket-panel .input-container').find('#Category').on('click',function(){
  //console.log('enter');
  $('.add-ticket .submit-ticket').css('border','2px dashed red');
});
$('.appearance-panel.add-ticket-panel').find('#Subject').on('click',function(){
 // console.log('enter');
  $('.add-ticket .submit-ticket').css('border','2px dashed red');
});
$('.appearance-panel.add-ticket-panel').find('#Description').on('click',function(){
  //console.log('enter');
  $('.add-ticket .submit-ticket').css('border','2px dashed red');
});
$('.add-ticket-panel #Sidebar').on('blur',function(){
  //console.log('enter');
  $('.add-ticket .submit-ticket').css('border','2px dashed red');
});
$('.appearance-panel.add-ticket-panel').find('.list-item .title.t1').on('click',function(){
  console.log('enter');
  $('.add-ticket .submit-ticket').css('border','2px dashed red');
});
$('.appearance-panel.add-ticket-panel').find('.list-item .title.t2').on('click',function(){
    console.log('enter');
    $('.submit-ticket').css('border','2px dashed red');
  });
// change the image dfooter copyright
$('')

// close appearance sidebar
$('.sidebar .header .back-button .icon-close').click(function(){
    window.location.href="/admin/reports";
});
// add inputs in adding triggers 

$('.add-trigger .action-button.add-button').click(function(){
 $(this).parent().parent().find('.panel-body.conditions').append('<div class="condition"><!----><div><div class="condition-inner"><div class="inputs"><div class="input-container"><select id="condition-0" class="ng-untouched ng-pristine ng-valid form-control"><option disabled="" selected="" value="0">-- Select a condition. --</option><!----><option value="1: 1">Ticket: Subject</option><option value="2: 2">Ticket: Body</option><option value="3: 3">Ticket: Status</option><option value="4: 4">Ticket: Is</option><option value="5: 5">Ticket: Category</option><option value="6: 6">Ticket: Number of Attachments</option><option value="7: 7">Ticket: Assignee</option><option value="8: 8">Customer: Name</option><option value="9: 9">Customer: Email</option></select></div>             <button class="no-style remove-button action-button" tooltip="Remove condition" type="button"><i class="fa fa-minus icon-remove"></i></button></div>         </div><!----></div></div>');
});
$('.add-trigger .action-button.remove-button').click(function(){
 $(this).parent().parent().parent().parent().remove();

});

// show add trigger after clicking add button
$('.triggers-inner .header-inner .left .primary').click(function(){
 $('.outer-trigger').css('display','none');
 $('.add-trigger').css('display','block');
});
$('.triggers-inner .add-trigger .back-button .icon-close').click(function(){
    $('.outer-trigger').css('display','block');
    $('.add-trigger').css('display','none');
});
$('.canned-replies-inner  .left .primary').click(function(){
    $('.modal-add-canned-reply').css('display','block');
   
});
$('.ace_scroller.ace_scroll-left').text('sdlfsdjfjlkdsf');


// get the selected mail template 
$('#selected-template').change(function(){
  var sval=$(this).val();
  var printed_in=$('.mail-templates #subject');
  switch (sval) {
      case '0':
           printed_in.val('{{EMAIL_SUBJECT}}');
          break;
     case '1':printed_in.val('Request received: {{TICKET_SUBJECT}}');break;
     case '2':printed_in.val('Request rejected.');break;
     case '3':printed_in.val('RE: {{TICKET_SUBJECT}}');
      default:
          break;
  }
});

// change display of mail  template
$('.change-layout-action .filter-articles-table .fa-th-list').click(function(){
 $('.mail-template-content').css('flex','1 0 50%');
 $('.mail-template-content').css('width','100%');
 $('#editor').css('width','100%');
 $('#editor').css('margin-bottom','10px');
});
$('.change-layout-action .filter-articles-table .fa-th').click(function(){
    $('.mail-template-content').css('flex','0 0 50%');
    $('.mail-template-content').css('width','50%');
    $('#editor').css('width','50%');
    $('#editor').css('margin-bottom','0');
});







//manage  reports page 
$('#primary_range,#compare_range').change(function(){
  if($(this).attr('id')=='compare_range'){
     $('#primary_range').val($(this).val()); 
  }
  var date_val=$(this).val();
  switch (date_val) {
      case 'last_30_days':
          if($('#report-pariod-last-30-day').hasClass('report-pariod-inputs')){
            $('#report-pariod-last-30-day').attr('disabled','disabled');
            $('.report-pariod-input-static').attr('disabled','disabled');
            $('#report-pariod-last-30-day').removeClass('report-pariod-inputs');
            $('#report-pariod-last-30-day').siblings('input').addClass('report-pariod-inputs');
          };
          break;
     case 'last_month':
          if($('#report-pariod-last-30-day').hasClass('report-pariod-inputs')){
            $('#report-pariod-last-30-day').attr('disabled','disabled');
            $('.report-pariod-input-static').attr('disabled','disabled');
            $('#report-pariod-last-30-day').removeClass('report-pariod-inputs');
            $('#report-pariod-last-30-day').siblings('input').addClass('report-pariod-inputs');
          };
          break;
     case 'last_7_days':
          if($('#report-pariod-last-7-days').hasClass('report-pariod-inputs')){
            $('#report-pariod-last-7-days').attr('disabled','disabled');
            $('.report-pariod-input-static').attr('disabled','disabled');
            $('#report-pariod-last-7-days').removeClass('report-pariod-inputs');
            $('#report-pariod-last-7-days').siblings('input').addClass('report-pariod-inputs');
          };
          break;
     case 'last_week':
          if($('#report-pariod-last-7-days').hasClass('report-pariod-inputs')){
            $('#report-pariod-last-7-days').attr('disabled','disabled');
            $('.report-pariod-input-static').attr('disabled','disabled');
            $('#report-pariod-last-7-days').removeClass('report-pariod-inputs');
            $('#report-pariod-last-7-days').siblings('input').addClass('report-pariod-inputs');
          };
          break;
     case 'today':
          if($('#report-pariod-today').hasClass('report-pariod-inputs')){
            $('#report-pariod-today').attr('disabled','disabled');
            $('.report-pariod-input-static').attr('disabled','disabled');
            $('#report-pariod-today').removeClass('report-pariod-inputs');
            $('#report-pariod-today').siblings('input').addClass('report-pariod-inputs');
          };
          break;
     case 'custom':
          if($('#report-pariod-custom').hasClass('report-pariod-inputs')){
            $('#report-pariod-custom').removeClass('report-pariod-inputs');
            $('#report-pariod-custom').siblings('input').addClass('report-pariod-inputs');
            $('.report-pariod-input-static').removeAttr('disabled');
          };
          break;
      default:
          break;
  }
}) ;


$('.menu-item').click(function(){
    var ctxx = $("#first-response-by-hours-canvas").getContext('2d');
    var myChart = new Chart(ctxx, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
/*if($(this).attr('routerlink')=='reports'){
   $.ajax({
    url:'/getCharts',
    method:'GET',
    data:{},
    dataType:'json',
    success:function(data){
        console.log(data);
        var periods=['0-1','0-8','8-24','>24'];
        var score = [];
        for(var i in data){
            score.push(data[i]);
        }
        var chartdata={
            labels: periods,
            datasets :{
                label : 'average first reply',
                backgroundColor:'rgba(200,200,200,0.75)',
                hoverbackgroundColor:'rgba(200,200,200,0.75)',
                borderColor:'rgba(200,200,200,1)',
                hoverBorderColor:'rgba(200,200,200,1)',
                data:score

            }
        };
        var ctx =$('#first-response-by-hours-canvas').getContext('2d');
        var barCraph = new Chart(ctx,{
          type:'bar',
          data:chartdata
        });
    },
    error:function(data){
        console.log(data);
    }
   });
} */
});


// tickets management
$('.delete-tickets-button').click(function(){
 $('.modal-delete-multiple-tickets').addClass('tab-displayed');
});

// select an item from tickets
let tickets_id=[];
//let tickets_id_removed=[];
let ticketid;
$(document).on('click','.cp-right-column .select-label',function(){
    //console.log($(this).parent().find('input').val());
    var all_selector=$('.cp-right-column .select-label');
    ticketid=$(this).parent().find('input').val();
    // ticket toolbar
    var ticket_toolbar= $('.ticket-floating-toolbar');
    
   // ticket_toolbar.toggleClass('tab-flex-displayed');
   // $(this).toggleClass('ticket-selected');
   // $(this).find('i.fa-check').toggleClass('ticket-icon-selected');
  
   if($(this).hasClass('ticket-selected')){
       if($(this).hasClass('select-all-tickets')){
         tickets_id.length=0;
         all_selector.removeClass('ticket-selected');
         all_selector.find('i.fa-check').removeClass('ticket-icon-selected');
         ticket_toolbar.removeClass('tab-flex-displayed');
         
       }else{
        var index=tickets_id.indexOf(ticketid);
        if(index > -1){
            tickets_id.splice(index,1);
        }
        $(this).removeClass('ticket-selected');
        $(this).find('i.fa-check').removeClass('ticket-icon-selected');
        if(tickets_id.length ==0){
            all_selector.removeClass('ticket-selected');
            all_selector.find('i.fa-check').removeClass('ticket-icon-selected');
            ticket_toolbar.removeClass('tab-flex-displayed');
        }
       }
       console.log(tickets_id);
   }else{
      
    if($(this).hasClass('select-all-tickets')){
        var all_id=ticketid.split(',');
        for(var i=0;i<all_id.length-1;i++){
            if(!tickets_id.includes(all_id[i]))
            tickets_id[tickets_id.length]=all_id[i];
        }
        all_selector.addClass('ticket-selected');
        all_selector.find('i.fa-check').addClass('ticket-icon-selected');
        
     }else{
       
        if(!tickets_id.includes(ticketid)){
            tickets_id.push(ticketid);
        }
        $(this).addClass('ticket-selected');
        $(this).find('i.fa-check').addClass('ticket-icon-selected');
        
     }
     ticket_toolbar.addClass('tab-flex-displayed');
     console.log(tickets_id);
   }
});
///////  click item of ticketBytags
$(document).on('click','.cp-right-column.ticketBytags ticket-floating-toolbar .toolbar-item',function(e){
    e.stopPropagation();
  var id=$(this).attr('id');
  switch (id) {
      case 'assign-ticket-dropdown':
        //assign_users_tickets();
       
          break;
        
      default:
          break;
  }
});
$(document).on('click','.change-status-drop .status-tag',function(e){
    e.preventDefault(); 
    var statut=$(this).text();
    $.ajax({
        url:'/change-multiple-tickets-status',
        method:'GET',
        data:{tickets_id,statut},
        dataType:'json',
        success:function(data){
            $('.ticket-floating-toolbar').removeClass('tab-flex-displayed');
            if(data.total_rows !=0){
                ticket_count=$('a.'+statut+' .tickets-count');
                ticket_count_int=parseInt($.trim(ticket_count.text()));
                ticket_count.text(ticket_count_int+data.total_rows);
                //// 2eme 
                actual_statut=$('a.router-link-active .tickets-count');
                actual_statut_tickets_count=parseInt($.trim(actual_statut.text()));
                actual_statut.text(actual_statut_tickets_count-data.total_rows);
                data.tickets_id.forEach(function(element) {
                    $('input[value='+element+']').parent().parent().remove();  
                }, this);
            }

        }
   });
  });
//when click search value in multiple tickets
$(document).on("click",".ticketBytags .dropdown-menu .tags .dropdown-item.tag",function(){
    var tag_name=$('.dropdown-menu .tag-search-input');
    tag_name.val($(this).text());
    
    $.ajax({
        url:'/add-tag-multiple-tickets',
        method:'GET',
        data:{tickets_id,tag_name},
        dataType:'json',
        success:function(data){
          console.log(data);
          
        }
      })
      //$(this).parent().parent().removeClass('tab-displayed');

});
$(document).on("click",".modal-delete-multiple-tickets .submit-button",function(e){
    e.preventDefault();
     
    $.ajax({
        url:'/delete-multiple-tickets',
        method:'GET',
        data:{tickets_id},
        dataType:'json',
        success:function(data){
            $('.modal-delete-multiple-tickets').removeClass('tab-displayed');
            $('.ticket-floating-toolbar').removeClass('tab-flex-displayed');
            data.tickets_id.forEach(function(element) {
             $('input[value='+element+']').parent().parent().remove();   
            }, this);
            
        }
   });
    
});
function assign_users_tickets(){
$(document).on('click','assign-ticket-dropdown .dropdown-item',function(){
    var type_of_assignement=$(this).text();
        $.ajax({
             url:'/assign_users_to_tickets',
             method:'GET',
             data:{tickets_id,type_of_assignement},
             dataType:'json',
             success:function(data){
                 console.log(data);
             }
        });
    
});
}
// show dropdown menu
$(document).on('click','.toolbar-item',function(){
  var drop_menu_sibling=$(this).parent().find('.dropdown-menu.transformed');
  if(drop_menu_sibling.hasClass('tab-displayed')){
     drop_menu_sibling.removeClass('tab-displayed'); 
  }
  if($(this).hasClass('change-status-dropdown')){
    $(this).parent().find('.add-tag-drop').toggleClass('tab-displayed');
  }
  $(this).find('.dropdown-menu.transformed').toggleClass('tab-displayed');
});
$(document).on('click','.left.toolbar-actions .action',function(e){
    e.stopPropagation();
    $(this).find('.dropdown-menu').toggleClass('dropdown-menu-open');
    if(!$(this).hasClass('change-status-dropdown')){
        $('.change-status-dropmenu').removeClass('dropdown-menu-open');
    }
    
    if($(this).hasClass('change-status-dropdown')){
        $('.change-status-dropmenu').toggleClass('dropdown-menu-open');
    }

    var drop_siblings= $(this).siblings('.action').find('.dropdown-menu');

    if(drop_siblings.hasClass('dropdown-menu-open')){
        drop_siblings.removeClass('dropdown-menu-open');
    }
    

});
$(document).on('click','add-tag-dropdown .dropdown-menu',function(e){
 e.stopPropagation();
});
$(document).on('click',function(){
    if($('.left.toolbar-actions .dropdown-menu').hasClass('dropdown-menu-open')){
      $('.left.toolbar-actions .dropdown-menu').removeClass('dropdown-menu-open'); 
    }
  });
   
// change status of tickets 
$(document).on('click','.change-status-dropmenu .dropdown-item',function(){
var status=$(this).text();
var ticket_id=$('.ticket-number').attr('id');
$.ajax({
    url:'/change-ticket-status/'+ticket_id+'/'+status,
    method:'POST',
    data:{},
    dataType:'json',
    success:function(data){
    }  
});
    $('.ticket-status').text(status); 
    $('.ticket-status').removeClass('Open');
    console.log(status);
    if((status =='open')){
        $('.ticket-status').addClass('Open');
        if($('.reply-button').parent().hasClass('tab-not-displayed')){
            $('.reply-button').parent().removeClass('tab-not-displayed');
            $('.reply-button').parent().css('display','inline-block');
        }
    }else{
        $('.reply-button').parent().addClass('tab-not-displayed') ;
    }
   
});
//show add note modal 
$(document).on('click','.add-note-button',function(){
 $('.modal-add-note').addClass('tab-displayed');
});
// reply action 
$('.reply-actions').click(function(){
$(this).parent().find('.reply-actions-dropdown').toggleClass('tab-displayed');
});
$('.ticket-container.scroll-container').scroll(function(){
    if($('.reply-actions-dropdown').hasClass('tab-displayed')){
        $('.reply-actions-dropdown').removeClass('tab-displayed');
    }
;
});
// show modal update reply
$('.update-reply-button').click(function(){
    $(this).parent().removeClass('tab-displayed');
    $('.modal-edit-reply').addClass('tab-displayed');
    });
// show modal delete  reply
$(document).on('click','.delete-reply-button',function(){
    $(this).parent().removeClass('tab-displayed');
    $('.modal-delete-reply').addClass('tab-displayed');
    $('.modal-delete-reply #reply-to-delete').val($(this).parent().parent().find('.reply-class').val());
    $('.modal-delete-reply #rep').val($(this).parent().parent().parent().parent().parent().attr('rep'));
    });


// toggle show conversation profile
$('conversation-sidebar>.tickets-list-container>.title').on('click',function(){
    var chevron_value=$(this).find('i');
  if(chevron_value.hasClass('fa-chevron-down')){
      chevron_value.removeClass('fa-chevron-down');
      chevron_value.addClass('fa-chevron-up');
  }else{
    chevron_value.addClass('fa-chevron-down');
    chevron_value.removeClass('fa-chevron-up');
  }
  $('conversation-sidebar>.tickets-list-container>.tickets-list>.ticket').toggleClass('tab-displayed');
});

// afficher change-ticket-statuts whene create a reply
$('.change-ticket-statuts').parent().click(function(){
 if($(this).parent().parent().find('.dropdown-menu').hasClass('tab-displayed')){
    $(this).parent().parent().find('.dropdown-menu').removeClass('tab-displayed');
 }
 $('.editor-change-ticket-status-dropdown').toggleClass('tab-displayed');
});
/*      ******************************   
$('.dropdown-item').click(function(){
    var type_of_assignement=$(this).text();
    $('.dropdown-menu').removeClass('tab-displayed');
   
   if(tickets_id.length > 0){
    for(var j=0;i<tickets_id_removed.length;j++){

    if(tickets_id.includes(tickets_id_removed[j])){
        
          var index_of_ticket=tickets_id.indexOf(tickets_id_removed[j]);
          if( index_of_ticket > -1){
              tickets_id.splice(index_of_ticket,1);
          }    
        }
    }
    console.log(tickets_id);
    for(var i=0;i<tickets_id.length;i++){
        $.ajax({
             url:'/assign_users_to_tickets/'+tickets_id[i]+'/'+type_of_assignement,
             method:'POST',
             data:{},
             dataType:'json',
             success:function(data){
                 console.log(data);
             }
        });
    }
}
});     ******************************   */
// assign users to ticket in single article
$('.conversation-container .dropdown-item').click(function(){
if($(this).parent().hasClass('tab-displayed')){
   $(this).parent().removeClass('tab-displayed');
 
}

var type_of_assignement=$(this).text();
var ticket_id=$('.conversation-container .ticket-number').attr('id');
$.ajax({
    url:'/assign_users_to_tickets/'+ticket_id+'/'+type_of_assignement,
    method:'GET',
    data:{},
    dataType:'json',
    success:function(data){
        console.log(data);
    }
});
});
// add tags to tickets 
$('.dropdown-menu .tag-search-input').on('keydown',function(){
var tag_value=$(this).val();
$.ajax({
  url:'/tag_search_value/'+tag_value,
  method:'GET',
  data:{},
  success:function(data){
      $('.dropdown-menu .tags .dropdown-item.tag').html(data);
  }
  
});
});
//when click search value
$(document).on("click",".dropdown-menu .tags .dropdown-item.tag",function(){
    var tag_name=$('.dropdown-menu .tag-search-input');
    tag_name.val($(this).text());
    var ticket_id=$('.ticket-number').attr('id');
    $.ajax({
        url:'/add_tag/'+ticket_id+'/'+$(this).text(),
        method:'GET',
        success:function(data){
         
          if(data =="tag added"){
              $('conversation-header .tags').append('<div class="tag-label"><span class="tag-name">'+tag_name.val()+'</span><!----><button class="no-style remove-tag-button" title="Remove Tag" type="button"><i class="fa fa-close"></i></button></div>');
          }
          
        }
      });
      //$(this).parent().parent().removeClass('tab-displayed');

});
$('.submit-button-addon').click(function(){
    if($(this).parent().parent().find('.dropdown-menu').hasClass('tab-displayed')){
        $(this).parent().parent().find('.dropdown-menu').removeClass('tab-displayed');
     }
     $('.operation-after-send-reply').toggleClass('tab-displayed');
    
});
// button return back
$('.left.toolbar-actions .action.back-button').click(function(){
 window.location.href=$('#back_button_href').val();
});
// display ticket in single page 
$('.cp-right-column table tr td').not('td:nth-child(1)').click(function(){
    window.location.href=$(this).parent().find('#select-ticket').attr('windowhref');
});
// show text editor of reply 
$('.button.reply-button').on('click',function(){

 $('conversation-text-editor').toggleClass('conversation-text-editor-displayed');
});
// save draft
$('#save-draft').click(function(){
    $('#reply-type').val('draft');
    $('conversation-text-editor form').submit();
});
$('.edit-draft-button').on('click',function(){
    $('#draft-id').val($(this).attr('id'));
    $('conversation-text-editor').addClass('conversation-text-editor-displayed'); 
    //tinyMCE.get('reply_content').setContent($(this).parent().parent().parent().parent().find('.message-body').text());
    $('conversation-text-editor #reply-content').html($(this).parent().parent().parent().parent().find('.message-body').text());
});
// remove tags 
$('.remove-tag-button').click(function(){
var tag_name=$(this).parent().find('.tag-name').text();
var ticket_id=$('.ticket-number').attr('id');
$(this).parent().remove();
$.ajax({
    url:'/remove-tag/'+ticket_id+'/'+tag_name,
    method:'GET',
    data:{},
    success:function(data){

    }
    
  });
});
// creatr a reply
$('.editor-footer .submit-button').on('click',function(){
$('conversation-text-editor form').submit();
tinyMCE.triggerSave();
var reply_content=$(this).parent().parent().parent().find('#reply-content').val();
if(reply_content == ''){
    reply_content=tinyMCE.get('reply-content').getContent();
}

var ticket_id=$('.ticket-number').attr('id');

   /* $.ajax({
        url:'/create-reply/'+ticket_id+'/'+reply_content,
        method:'POST',
        data:{},
        dataType:'json',
        success:function(data){
           console.log(data);
        }
        
      }); */
});
$('.backdrop').click(function(){
$('.modal').css('display','none');
});

// update-reply-button
$('.update-reply-button').on('click',function(){
 $('.modal-edit-reply').addClass('tab-displayed');
 $('.modal-edit-reply #reply-to-update').val($(this).parent().parent().find('.reply-class').val());
 $('.modal-edit-reply #update-reply').val($(this).parent().parent().parent().parent().find('.message-body').text());
 tinyMCE.get('update-reply').setContent($(this).parent().parent().parent().parent().find('.message-body').text());
 
});
//modal-delete-reply
$(document).on('click','.modal-delete-reply .submit-delete-reply',function(){

 var reply_to_delete=$('.modal-delete-reply #reply-to-delete').val();
 var rep=$('.modal-delete-reply #rep').val();
$.ajax({
    url:'/delete-reply/'+reply_to_delete,
    method:'GET',
    data:{},
    success:function(data){
        //console.log(data);
      
        $('.modal-delete-reply').removeClass('tab-displayed');
        
            $('[rep='+rep+']').remove();
       
    }
    
});
return false;

});
//redirect after reply
$(document).on('click','.dropdown-menu.default-redirect-dropdown .dropdown-item ',function(){
    $(this).siblings('.dropdown-item').removeClass('selected');
   $(this).addClass('selected');
   $(this).parent().parent().parent().parent().find('#redirect-after-reply').val($(this).attr('id'));
  
});
$(document).on('click','.editor-change-ticket-status-dropdown .dropdown-item',function(){
    $('.status-name').html(''+$(this).attr('id')+'<i class="fa fa-chevron-down change-ticket-statuts" style="    margin-left: 2px;"></i>');
    $(this).parent().parent().parent().parent().find('#ticket-status').val($(this).attr('id'));
});


/*
$users_id=User::all();
        foreach($tickets_id as $id){
            assign_users_to_ticket::create([
                'ticket_id'=>$tickets_id,
                'user_id'=>Auth::id(),
             ]);
        }
        $already_assigned=assign_users_to_ticket::all();
        foreach($users_id as $user_id){
        
        foreach ($already_assigned as $assigned) {
            if(($assigned->ticket_id == $tickets_id) && ($assigned->user_id==$user_id)){
               $exist=true; 
            }
            if(!$exist){
                assign_users_to_ticket::create([
                   'ticket_id'=>$tickets_id,
                   'user_id'=>$user_id,
                ]);
        }
        
    
        return "created";
        }
     }
     */

/*
$(document).on('click','.field-color-input .color-picker-container label',function(){
   console.log($('#iconcolor1').val());
});*/


$('input#iconcolor1').on('click',function(){
   console.log($(this).val());
});
