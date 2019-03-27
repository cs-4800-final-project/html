$('#myCarousel').carousel({
  interval: 1000
}).on('slide.bs.carousel', function () {
  document.getElementById('player').pause();
});

var figure = $(".pb-video").hover( hoverVideo, hideVideo );

function hoverVideo(e) {  
    $('pb-video', this).get(0).play(); 
}

function hideVideo(e) {
    $('pb-video', this).get(0).pause(); 
}