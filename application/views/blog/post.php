<section id="page-title">
    <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" >
                    <h2><?php echo $post->title; ?></h2>
                </div>
            </div>
    </div>
</section>

<section class="post">
    <div class="container">
            
        <div class="row" >
            <div class="col-sm-12 col-md-12 col-lg-12" >
                <?php if($post->image) {
                    echo '<img src="'.base_url().'uploads/images/blog/'.$post->image.'" class="img-responsive" alt="'.$post->title.'">';
                } ?>
                    <h6><?php echo $post->author; ?>&nbsp;&nbsp; • &nbsp;&nbsp;<?php echo date('d/m/Y', strtotime($post->date_posted)); ?>&nbsp;&nbsp; • &nbsp;&nbsp;5 Comments</h6>
                    <?php echo $post->content; ?>
            <hr>
            <a href="<?php echo base_url(); ?>blog" class="btn btn-success">All Posts</a>
            </div>
        </div>
    </div>
</section>