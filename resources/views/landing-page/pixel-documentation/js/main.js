/* -- Smooth scrolling
	---------------------------------- --*/
	smoothScroll.init({
	    selector: '[data-scroll]',
	    selectorHeader: null, 
	    speed: 1500,
	    easing: 'easeInOutQuint', 
	    offset: 20, 
	    callback: function ( anchor, toggle ){}
	});