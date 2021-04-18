$(function(){
 
	resize();
	$(window).resize(function(event) {
		resize();
	});

	$(".ul_tag li").click(function () {
	    $(this).addClass("on").siblings().removeClass("on");

	})
	$(".wow_list .wow").each(function (e) {
	    $(this).attr("data-wow-delay", ($(this).index() / 10) + "s");
	})
     
	$(".banner").each(function () {
	    var num = $(".banner .item").length;
	    num = num > 10 ? num : "0" + num;
	    $(".span_num").html("<label>01</label>/" + num)

	    if ($(this).find(".item").length > 1) {
	        var owl = $(this).owlCarousel({ items: 1, loop: true, autoplay: true });
	        owl.on('changed.owl.carousel', function (event) {
	            owl.find(".animated").each(function () { $(this).removeClass($(this).attr("data-animation")); })
	            owl.find(".owl-item").eq(event.item.index).find(".animated").each(function () { $(this).addClass($(this).attr("data-animation")); });
	            var n = ($(".banner.owl-theme .owl-dots .owl-dot.active").index() + 1);
	            n = n > 10 ? n : "0" + n;

	            $(".span_num").html("<label>" + n + "</label>/" + num)
	        })
	        $(".span_cur .c_prev").click(function () { owl.trigger("prev.owl.carousel") })
	        $(".span_cur .c_next").click(function () { owl.trigger("next.owl.carousel") })

	    }
	})
	$(".banner .owl-item").eq(2).find(".animated").each(function () {
	    $(this).addClass($(this).attr("data-animation"));
	})
	

	$(window).scroll(function () {
	    $(".animated").each(function () {
	        if ($(this).offset().top - $(window).scrollTop() > $(window).height() - 80)
	            $(this).removeClass($(this).attr("data-animation"));
	        else
	            $(this).addClass($(this).attr("data-animation"));
	    })

	    if ($(window).scrollTop() > 30) {
	        $(".header").addClass("fixed");
	    }
	    else { $(".header").removeClass("fixed"); }
	})


	$(".menu_wrap").click(function () { $(".header").toggleClass("h_menu") });


	$(window).load(function () {
        if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
            if ($(window).width()>1024) new WOW().init();
	    }
	})


});

/*main*/
//

function font() {


}


/*call*/
//
function resize(){
	var ht=$(window).height();
	 
}
$.fn.countTo = function (options) {
    options = options || {};

    return $(this).each(function () {
        // set options for current element
        var settings = $.extend({}, $.fn.countTo.defaults, {
            from: $(this).data('from'),
            to: $(this).data('to'),
            speed: $(this).data('speed'),
            refreshInterval: $(this).data('refresh-interval'),
            decimals: $(this).data('decimals')
        }, options);

        // how many times to update the value, and how much to increment the value on each update
        var loops = Math.ceil(settings.speed / settings.refreshInterval),
            increment = (settings.to - settings.from) / loops;

        // references & variables that will change with each update
        var self = this,
            $self = $(this),
            loopCount = 0,
            value = settings.from,
            data = $self.data('countTo') || {};

        $self.data('countTo', data);

        // if an existing interval can be found, clear it first
        if (data.interval) {
            clearInterval(data.interval);
        }
        data.interval = setInterval(updateTimer, settings.refreshInterval);

        // initialize the element with the starting value
        render(value);

        function updateTimer() {
            value += increment;
            loopCount++;

            render(value);

            if (typeof (settings.onUpdate) == 'function') {
                settings.onUpdate.call(self, value);
            }

            if (loopCount >= loops) {
                // remove the interval
                $self.removeData('countTo');
                clearInterval(data.interval);
                value = settings.to;

                if (typeof (settings.onComplete) == 'function') {
                    settings.onComplete.call(self, value);
                }
            }
        }

        function render(value) {
            var formattedValue = settings.formatter.call(self, value, settings);
            $self.html(formattedValue);
        }
    });
};

$.fn.countTo.defaults = {
    from: 0,               // the number the element should start at
    to: 0,                 // the number the element should end at
    speed: 1000,           // how long it should take to count between the target numbers
    refreshInterval: 100,  // how often the element should be updated
    decimals: 0,           // the number of decimal places to show
    formatter: formatter,  // handler for formatting the value before rendering
    onUpdate: null,        // callback method for every time the element is updated
    onComplete: null       // callback method for when the element finishes updating
};
function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    $this.countTo(options);
}
function formatter(value, settings) {
    return value.toFixed(settings.decimals);
}