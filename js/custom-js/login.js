 			$('.login-btn').click(function(){
                event.stopPropagation();
                $('.login').addClass("open");
            });
            $('body').click(function(){
                $('.login').removeClass("open");

            });
            $('.login').click(function(event) {
                event.stopPropagation();
            });