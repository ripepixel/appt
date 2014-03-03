<section id="page-title">
    <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" >
                    <h2>Blog</h2>
                </div>
            </div>
    </div>
</section>
<section class="post">
        <div class="container">
            <?php if($posts) {
                foreach($posts as $post) { ?>
                    <div class="row" >
                        <div class="col-sm-12 col-md-12 col-lg-12" >
                            <?php if($post['image']) {
                                echo '<img src="'.base_url().'uploads/images/blog/'.$post['image'].'" class="img-responsive" alt="'.$post['title'].'">';
                            } ?>
                            <h2><?php echo $post['title']; ?></h2>
                            <h6><?php echo $post['author']; ?>&nbsp;&nbsp; • &nbsp;&nbsp;<?php echo date('d/m/Y', strtotime($post['date_posted'])); ?>&nbsp;&nbsp; • &nbsp;&nbsp;5 Comments</h6>
                            <?php echo $post['summary']; ?>
                            <a href="<?php echo base_url(); ?>blog/blog_post/<?php echo $post['id']; ?>" class="cta2" >Read More</a>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-sm-12 col-md-12 col-lg-12" >
                        <hr class="thin" />
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
            <div class="row" >
                <div class="col-sm-12 col-md-12 col-lg-12" >
                    <h2>Blog</h2>
                    <h6>Sorry, there are no blog posts to show yet. Check back soon for our news.</h6>
                </div>
            </div>
            <?php } ?>
                  
    
        </div>
</section>

<section id="pagination" >
    <div class="container">
            
        <div class="row" >
            <div class="col-sm-12 col-md-12 col-lg-12" >
                <a href="#"><h3>1, </h3></a><a href="#" class="active"><h3>2, </h3></a><a href="#"><h3>3 </h3></a>
            </div>
        </div>
            
    </div>
</section>