
var tour = {
  id: 'hello-hopscotch',
  steps: [
    {
      
      target: document.querySelectorAll('#hopscotch-title')[1],
      title: 'Chào bạn đến với website',
      content: 'Chào bạn, bạn tên XXX phải không',
      placement: 'bottom',
      xOffset: 'center',
      arrowOffset: 'center'
    },
    {
      target: 'step3',
      title: 'Bước 3',
      content: 'Đây là bước 3',
      placement: 'right',
      yOffset: -20
    },
    {
      target: 'step4',
      placement: 'bottom',
      title: 'Bước 4',
      content: 'Đây là bước 4'
    },    
    {
      target: 'start',
      placement: 'bottom',
      title: 'See you again',
      content: 'Xin chào và hẹn gặp lại.',
      xOffset: 'center',
      arrowOffset: 'center'
    }
  ],
  showPrevButton: true,
  scrollTopMargin: 100
},

/* ========== */
/* TOUR SETUP */
/* ========== */
addClickListener = function(el, fn) {
  if (el.addEventListener) {
    el.addEventListener('click', fn, false);
  }
  else {
    el.attachEvent('onclick', fn);
  }
},

init = function() {
  var startBtnId = 'start',
      calloutId = 'startTourCallout',
      mgr = hopscotch.getCalloutManager(),
      state = hopscotch.getState();

  if (state && state.indexOf('hello-hopscotch:') === 0) {
    // Already started the tour at some point!
    hopscotch.startTour(tour);
  }
  else {
    // Looking at the page for the first(?) time.
    setTimeout(function() {
      mgr.createCallout({
        id: calloutId,
        target: startBtnId,
        placement: 'top',
        title: 'Đây là nút click vào',
        content: 'Click vào đây hay lắm',
        xOffset: 'center',
        arrowOffset: 'center',
        width: 240
      });
    }, 100);
  }

  addClickListener(document.getElementById(startBtnId), function() {
    if (!hopscotch.isActive) {
      mgr.removeAllCallouts();
      hopscotch.startTour(tour);
    }
  });
};

init();

