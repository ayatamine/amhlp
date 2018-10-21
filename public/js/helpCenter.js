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
/*
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
  */


// end 
$('.xs-article-menu-icon').click(function(){
$(this).toggleClass('iconposition');
if($(this).hasClass('iconposition')){
   
    $('.left-side-scroll-xs').animate({
        left:'0%',
    },500);
}else{
   
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
        
        
        $('#delete-icon').css('display','inline-block');
        $('.search-result').css('display','block');
        $.ajax({
            url:'/helpCenter/search-article/'+query+'',
            method:'GET',
            data:{},
            dataType:'json',
            success:function(data)
            {
              console.log(data);
              var slug;
              var i=0;
              for(i=0;i<2;i++){
              slug=data.slug;
              console.log(slug);
              
              $('.search-result').find('.title').html(data.title);
              }
              if($('.search-result').find('#see-all-result').attr('class','salr')){
                $('.search-result').find('#see-all-result').html('<a href="/helpCenter/search/'+data.search_word+'">رؤية كل النتائج</a>');

              }else{
                $('.search-result').find('#see-all-result').html('<a href="/helpCenter/search/'+data.search_word+'">See all result ...</a>');

              }
             $('.search-result').find('.article-in-category').attr('href','/help-center/articles/'+slug+'');
            }
           });

       
      });
      //hide the resulut search div
$('body').on('click',function(){
$('.search-result').css('display','none');
$('#search-articles').css('padding','0');

$('#search-articles').css('background', 'none');
$('#search-articles').css('boxShadow', 'none');

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
$('.navbar-toggler').click(function(){
  $(this).toggleClass('full-width');

  var navfull=$('.nav-full');
  if($(this).hasClass('full-width')){
    $('.nav-scroller').css('marginBottom','0');
    $('.nav-full .nav.nav-underline').css('marginTop','0');
    navfull.css('position','absolute');
   
    navfull.animate({
        zIndex: '9999',
        width:'100%',
    },500);   
  }else{
        $('.nav-scroller').css('marginBottom','4%');
        $('.nav-full .nav.nav-underline').css('marginTop','-4%');
        navfull.css('position','fixed');
        navfull.css('width','0');
       
           
      }

  
});

$('#delete-icon').on('click',function(){
 $('#search-title').val('');
 $('#inner-search-title').val('');
 $(this).css('display','none');
});


 
