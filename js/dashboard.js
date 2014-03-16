$(document).ready(function() {

    $('.dropdown-toggle').dropdown();


    // page is now ready, initialize the calendar...

    $('#calendar-dashboard').fullCalendar({
        // put your options and callbacks here
        header: {
        	left: 'today, prev, next',
        	center: 'title',
        	right: 'agendaDay, agendaWeek, month'
        },
        defaultView: 'agendaDay',
        height: 900,
        firstDay: 1,
        slotMinutes: 15,
        firstHour: 6
    })

    $(function() {
        $( "#dob" ).datepicker({
            changeMonth: true,
            changeYear: true,
            format: 'dd/mm/yyyy',
            startDate: "-90y",
			endDate: "-12y",
            viewMode: 'years'
        });
    });


	$(function() {
		var today = new Date();
		var day = today.getDate();
		var month = today.getMonth()+1;
		var year = today.getFullYear();
        $( "#appointment_date" ).datepicker({
            changeMonth: true,
            changeYear: true,
            format: 'dd/mm/yyyy',
			startDate: today,
			endDate: "+365d",
            viewMode: 'years',
			todayBtn: "linked",
			todayHighlight: true
        });
    });

    


  

});