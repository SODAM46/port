$(function(){
    function tick(){
        $('.notice ul li:first').slideUp(
            function(){
                $(this).appendTo($('.notice ul')).slideDown();
            });
       }
       setInterval(function(){ tick() }, 3500);
       
       $(function(){
            var sTop = 0;
                    
            $(window).on('scroll',function(){
                sTop = $(this).scrollTop(); 
                var con = $('.con01').offset().top;
                var con02 = $('.con02').offset().top;
                var conH = $(window).height();
                
                if(con/2 < sTop){
                    $('.con01 div').addClass('active');
                }if(con02*1.2 < conH + sTop){
                    $('.con02 div').addClass('active');
                }                          
            });            
            $(window).trigger('scroll');

        });

        $('#mainVisual .depth01').on('mouseover',function(){
            $('#mainVisual .depth02').slideDown();
            $('#mainVisual .depthBox').slideDown();
        });
        $('#mainVisual .depth02').on('mouseleave',function(){
            $('#mainVisual .depth02').slideUp();
            $('#mainVisual .depthBox').slideUp();
        })

        var burger = $('header .buger');
        burger.each(function(index){
            var $this = $(this);
            
            $this.on('click', function(e){
                e.preventDefault();
                $(this).toggleClass('active-' + (index+1));
            })
        });
        burger.on('click', function(){
            $('.navBox').toggleClass('on');
        })

        $('footer p').on('click',function(){
            $('footer div').fadeIn();
        });
        $('footer div p').on('click',function(){
            $('footer div').fadeOut();
        })

        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 1800) {
                    $('aside').fadeIn();
                } else {
                    $('aside').fadeOut();
                }
            });
            
            $('aside').click(function() {
                $('html, body').animate({
                    scrollTop : 0
                }, 400);
                return false;
            });
        });

        
});
