$(window).scroll(function(){
  if ( $(this).scrollTop()>100 ) {
    $('.ir-arriba').addClass("arriba2");
  } else {
    $('.ir-arriba').removeClass("arriba2");
  }
});

// $('.ir-arriba').click(function(){
//   alert("chegou");
//   $('body, html').animate({
//     scrollTop: '0px'
//   }, 300);
// });


function scrollToTop (duration) {
    // cancel if already on top
    if (document.scrollingElement.scrollTop === 0) return;

    const cosParameter = document.scrollingElement.scrollTop / 2;
    let scrollCount = 0, oldTimestamp = null;

    function step (newTimestamp) {
        if (oldTimestamp !== null) {
            // if duration is 0 scrollCount will be Infinity
            scrollCount += Math.PI * (newTimestamp - oldTimestamp) / duration;
            if (scrollCount >= Math.PI) return document.scrollingElement.scrollTop = 0;
            document.scrollingElement.scrollTop = cosParameter + cosParameter * Math.cos(scrollCount);
        }
        oldTimestamp = newTimestamp;
        window.requestAnimationFrame(step);
    }
    window.requestAnimationFrame(step);
}
