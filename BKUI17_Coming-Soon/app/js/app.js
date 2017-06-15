$(document).ready(function(){

	$('.tooltip').tooltipster({
		theme: 'tooltipster-shadow'
	});

	$('#countdown-timer').countdown({
		date: "November 21, 2015 08:00:00",
		render: function(data) {
          var el = $(this.el);
          el.empty()
            .append("<div class='countDays'>" + this.leadingZeros(data.days, 2) + " <span class='boxName'>hari</span></div>")
            .append("<div class='countHours'>" + this.leadingZeros(data.hours, 2) + " <span class='boxName'>jam</span></div>")
            .append("<div class='countMinutes'>" + this.leadingZeros(data.min, 2) + " <span class='boxName'>menit</span></div>")
            .append("<div class='countSeconds'>" + this.leadingZeros(data.sec, 2) + " <span class='boxName'>detik</span></div>");
        }
    });

});

$(window).load(function() {
	$(".preloader").delay(200).fadeOut();
});
