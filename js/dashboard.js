$(document).ready(function() {

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

});