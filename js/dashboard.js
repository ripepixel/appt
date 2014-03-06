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
            dateFormat: 'dd-mm-yy',
            yearRange: "-70:-12",
            viewMode: 'years'
        });
    });

});