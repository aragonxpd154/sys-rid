// JavaScript Document

$(function(){
$('.galeriajs li').hover(function(){
	var legenda = $(this).find('a').attr('title');
	$(this).append('<div><p>' + legenda + '</p></div>');
//	$(this).find('div').css("opacity", 0.5).fadeIn();
	$(this).find('div').css("opacity",0.5).animate({height:"show"},500);
   }, function(){
//	$(this).find('div').fadeOut('slow',function(){$(this).remove();});
	$(this).find('div').animate({height:"hide"},500, function(){$(this).remove();});
   })


/*$('.galeriajs li').each(function(){
	var legenda = $(this).find('a').attr('title');
	$(this).append('<div><p>' + legenda + '</p></div>');
//	$(this).find('div').css("opacity", 0.5).fadeIn();
	$(this).find('div').css("opacity",0.5).animate({height:"show"},500);
   })*/

})