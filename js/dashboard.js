$(document).ready(function() {

    $('.dropdown-toggle').dropdown();


    // page is now ready, initialize the calendar...

    

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
            format: 'dd-mm-yyyy',
			startDate: today,
			endDate: "+365d",
            viewMode: 'years',
			todayBtn: "linked",
			todayHighlight: true
        });
    });

    


  

});