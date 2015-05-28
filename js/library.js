jQuery.easing.easeOutQuint = function(x,t,b,c,d){
    return c*((t=t/d-1)*t*t*t*t + 1) + b;
};

$(function(){
    $(".page_top").click(function(){
        $((navigator.userAgent.indexOf("Opera") != -1) ? document.compatMode == 'BackCompat' ? 'body' : 'html' :'html,body').animate({scrollTop:0}, 'slow', 'easeOutQuint');
    })
})


/*$(function(){
     $('a img').hover(function(){
     $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
   }, function(){
     if (!$(this).hasClass('currentPage')) {
     $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
   }
   });

});*/

$(function() {
  var num = 1;
  $('.gloval_nav li img').css({'opacity':'0'});
  $('.gloval_nav li')
  //マウスオーバー画像を配置
  .find('img').hover(
    function(){
      $(this).stop().animate({'opacity' : '1'}, 300);
    },
    function(){
      $(this).stop().animate({'opacity' : '0'}, 600);
    }
  );
});

$(function() {
  $('.rover').hover(
    function(){
      $(this).stop().animate({'opacity' : '0.7'}, 300);
    },
    function(){
      $(this).stop().animate({'opacity' : '1'}, 600);
    }
  );
});