$(document).ready(function(){
$('body').removeClass('jsOff').addClass('jsOn');

$('#tabs a').on('click', function(e){
	e.preventDefault();
	$('#tabs a.current').removeClass('current');
	$('.tab-section:visible').hide();
	$(this.hash).show();
	$(this).addClass('current');
}).filter(':first').click();
  $('a[rel="gaSimCenter"]').colorbox({
    width: '75%',
    height: '70%',
    slideshow: true,
    slideshowSpeed: 2000,
    slideshowAuto: false,
    slideshowStart: 'Start Slide Show',
    slideshowStop: 'Stop Slide Show'
  });
    $('a[rel="gaSimCenterVideos"]').colorbox({
    iframe: true,
    innerWidth: 640,
    innerHeight: 390,
    current: 'Video {current} of {total}'
  });
$('#carousel .cycle-slide').on('click', function(e){
	e.preventDefault();
	var index = $('#carousel .cycle-slideshow').data('cycle.API').getSlideIndex(this);
	$('.cycle-slideshow').cycle('goto', index);
});
});