<section id="footer">
        <div class="container">
            
           <div class="row">
               <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                   
                   <p>Copyright &copy; 2014 how media</p>
     
               </div>
           </div>
           
        </div>
    </section>

    <!-- JavaScript plugins comes here -->
    
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.scrollTo.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.form.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
    <script src="<?php echo base_url(); ?>js/dashboard.js"></script>
    <script src="<?php echo base_url(); ?>js/retina.js"></script>
    <script src="<?php echo base_url(); ?>js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>js/nivo-lightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>js/fullcalendar.js"></script>
    <script type="text/javascript">
        $('document').ready(function(){
                $('#subscribe-form').ajaxForm( {
                target: '#preview',
                success: function() { 
                      $('#subscribe-form').slideUp('slow');
                      $('#preview').css({"opacity":"1"});
                    }
                });
            });
    </script>
  </body>
</html>