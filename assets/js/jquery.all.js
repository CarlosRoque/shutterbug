/**
 * @author Johnm
 */

	Cufon.replace('h1',{fontFamily: "Eurostile LT Condensed"});
	Cufon.replace('h3',{fontFamily: "Eurostile LT Condensed"});
	
	$(function(){
		
		// Selects the current link in the subnavigation.
		pathArray = window.location.pathname.split( '/' );
		
		$(".current_nav li").each(function(){
			$(this).removeClass('sub_active');
			if($(this).attr("class") == pathArray[5])
			{
				$(this).addClass('sub_active');
			}
		});
		
	});
