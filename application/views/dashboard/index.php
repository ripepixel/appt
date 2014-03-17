<section id="page-title">
    <div class="container">
            <div class="row">
            <h2>Dashboard</h2>
          	</div>
    </div>
</section>

<section id="dashboard-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div id='calendar-dashboard'></div>	
			</div>
			<div class="col-lg-3 col-lg-offset-1">
				<h4>Appointment Requests</h4>

				<h4>Upcoming Appointments</h4>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
$(document).ready(function() {
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
        firstHour: 6,
        events: '<?php echo base_url(); ?>dashboard/get_appointments'
    })
});
</script>