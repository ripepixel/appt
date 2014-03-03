<section id="footer">
        <div class="container">
            <div class="row" id="newsletter">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" >
                    
                    <h2>Subscribe to our newsletter</h2>
                    <p>Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum.
                    </p>
                    
                    <div id="newsletter_form">
                        <form action="" method="post" class="subscribe-form" id="subscribe-form">
                            <input type="email" name="email" class="subscribe-input" placeholder="Enter your e-mail address..."  required>
                                <button type="submit" class="subscribe-submit">Notify Me</button>
                        </form>
                    </div>
                    <div id="preview"></div>
                    
                </div>
            </div>
           
           <div class="row">
               <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1" id="share">
                   
                   <div id="social_icons">
                       <ul>
                           <li><svg viewBox="0 0 32 32" id="fb_icon" onclick="location.href='#'"><use xlink:href="#facebook"></use></svg></li>
                           <li><svg viewBox="0 0 32 32" id="tw_icon" onclick="location.href='#''"><use xlink:href="#twitter"></use></svg></li>
                           <li><svg viewBox="0 0 32 32" id="in_icon" onclick="location.href='#'"><use xlink:href="#linkedin"></use></svg></li>
                           <li><svg viewBox="0 0 32 32" id="g_icon" onclick="location.href='#'"><use xlink:href="#google-plus"></use></svg></li>
                           <li><svg viewBox="0 0 32 32" id="pin_icon" onclick="location.href='#'"><use xlink:href="#pinterest"></use></svg></li>
                           <li><svg viewBox="0 0 32 32" id="fli_icon" onclick="location.href='#'"><use xlink:href="#flickr"></use></svg></li>
                       </ul>
                   </div>
                   
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
    <script src="<?php echo base_url(); ?>js/retina.js"></script>
    <script src="<?php echo base_url(); ?>js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>js/nivo-lightbox.min.js"></script>
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
    <script>
        var url ='<?php echo base_url(); ?>images/icons.svg';
        var c=new XMLHttpRequest(); c.open('GET', url, false); c.setRequestHeader('Content-Type', 'text/xml'); c.send();
        document.body.insertBefore(c.responseXML.firstChild, document.body.firstChild)
    </script>


  </body>
</html>