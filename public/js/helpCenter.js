$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
});

//  auth logged menu 

$('.logged-in-widget').on('click',function(){
    if($('.dropdown-auth').hasClass('hide-dropdown')){
      $('.dropdown-auth').removeClass('hide-dropdown');
    }
    else{
        $('.dropdown-auth').addClass('hide-dropdown');
    }
  
});
$('.settings i').on('click',function(){
    if($('.xs-dropdown-auth').hasClass('hide-dropdown')){
      $('.xs-dropdown-auth').removeClass('hide-dropdown');
    }
    else{
        $('.xs-dropdown-auth').addClass('hide-dropdown');
    }
  
});
// search icon 
$('.search-article').on('focus',function(){

  if($(this).attr('id')=='search-title'){
       $('#search-icon').attr('src','img/search2.png');
  }else{
    $('#search-icon').attr('src','../../img/search2.png');
  }
 
});
$('.search-article').on('focusout',function(){
    if($(this).attr('id')=='search-title'){
    $('#search-icon').attr('src','img/search.png');
    }else{
    $('#search-icon').attr('src','../../img/search2.png');   
    }
  });


// end 
$('.xs-article-menu-icon').click(function(){
$(this).toggleClass('iconposition');
if($(this).hasClass('iconposition')){
    $(this).animate({
        left:'68%',
    },500);
    $('.left-side-scroll-xs').animate({
        left:'0%',
    },500);
}else{
    $(this).animate({
        left:'2%',
    },500);
    $('.left-side-scroll-xs').animate({
        left:'-65%',
    },500);
}

});

$('.note-about-article').on('click',function(){
 $(this).css('background','#34AD00');
 $(this).css('color','#fff');

});

$('.note-about-article2').on('click',function(){
    $(this).css('background','red');
    $(this).css('color','#fff');
   
   });


 
    // search function 
    $(document).on('keyup','#search-articles',function(){
        var query = $(this).find('#search-title').val();
        if(query== undefined){
          query=$('.search-form').find('#inner-search-title').val();
        }
        
        
        
        $(this).animate({
            padding:  '1%',
            paddingBottom: '4%',
            borderRadius:  '5px',
            
           
        },600);
        $(this).css('background','white');
        $('.search-result').css('display','block');
        $.ajax({
            url:'/helpCenter/search-article/'+query+'',
            method:'GET',
            data:{},
            dataType:'json',
            success:function(data)
            {
              console.log(data);
              var slug=data.slug;
              $('.search-result').find('.title').html(data.title);
              $('.search-result').find('.body').html(data.body);
              if($('.search-result').find('#see-all-result').attr('class','salr')){
                $('.search-result').find('#see-all-result').html('<a href="/helpCenter/search/'+data.search_word+'">رؤية كل النتائج</a>');

              }else{
                $('.search-result').find('#see-all-result').html('<a href="/helpCenter/search/'+data.search_word+'">See all result ...</a>');

              }
             $('.search-result').find('.article-in-category').attr('href','/help-center/articles/'+slug+'');
              $('.search-result').find('#at1').text(data.sub_category); 
              $('.search-result').find('#at2').text(data.category); 
            }
           });

       
      });
      //hide the resulut search div
$('body').on('click',function(){
$('.search-result').css('display','none');
$('#search-articles').css('padding','0');

$('#search-articles').css('background', 'none');

});

// note about article helpful or no 

 //postitive feedback
 let slug_article=$('#feedback').find('input').val();
 
 $('.note-about-article').on('click',function(){

      var pos="pos";
        $('#feedback').fadeOut(900,function(){ 
         $.post('/help-center/article/'+slug_article+'/'+pos+'');
         $(this).html('Thank you! Yor feedback will help us improve the support experience.If you need at the top of the page').fadeIn(400);
        });
       }); 
 //negative feedback
  $('.note-about-article2').on('click',function(){
      var neg="neg";
        $('#feedback').fadeOut(900,function(){
        $.post('/help-center/article/'+slug_article+'/'+neg+'');
        if($(this).hasClass('ar-feedback')){
            
            $(this).html('شكرا لك رأيك سيساعدنا في تحسين الأداء ونشر كل ماهو مفيد .').fadeIn(400);
        }
        $(this).html('Thank you! Yor feedback will help us improve the support experience.If you need at the top of the page').fadeIn(400);
        });
       });


 // filter articles by categories 
 $('#filter-categories').on('change',function(){
 $(this).parent('form').submit();
 /*var filter=$(this).val();
 var category=$('#category-id-form').find('input').val();
 $.ajax({
    url:'/help-center/filter/'+filter+'/'+category+'',
    method:'GET',
    data:{},
    dataType:'json',
    success:function(data)
    {
     $('.right-side-categories').find()
     
    }
 

 });*/
});



 
