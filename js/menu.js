$(document).ready(function(e) {
        if(screen.width >= 768)
		{
			$(".dropdown").hover(function(){
				$(".dropdownmenu").toggleClass("open");
			});
		}
	 });
	 
	 $(document).ready(function(e) {	
		if(screen.width <= 760)
		{
			$('.menu_btn').click(function(){
				$('.nav-ul').toggleClass('active');
				$('.baars').toggleClass('cross');
				
			});
			
			$(".dropdown").click(function(){
				$(".dropdownmenu").slideToggle("open");
			}); 
			
			$('.nav-ul').click(function(e) {
				if( !$(e.target).hasClass('dropdownlink') )
				{
					$(".nav-ul.active").removeClass("active");
					$('.baars.cross').removeClass('cross');
					$(".dropdownmenu").slideUp("open");
				}
			});    
			
		}
		window.onresize = function(event)
        {
            document.location.reload(true);
        }
	 });