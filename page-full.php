<?php
/*
Template Name: Page full width
Template Post Type: post, page
*/
get_header(); 
?>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12">
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <h1 class="my-4"><?php the_title(); ?></h1>
            <!-- Blog Post -->
            <div class="card mb-4">
                
                <?php if ( has_post_thumbnail() ) { ?>
                    <div style="min-height: 300px; background: url(<?php the_post_thumbnail_url(); ?>) no-repeat">&nbsp;</div>
                <?php } else { ?>
                        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                <?php } ?>
                <div class="card-body">
                    <p class="card-text">
                        <?php the_content(); ?>
                    </p>
                </div>
                <div class="card-footer text-muted">
                    Posted on
                    <?php the_date(); ?> by
                    <?php the_author_posts_link(); ?>
                </div>
            </div> <!-- fin post -->
            <?php endwhile; endif; ?>
        </div>

        

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
<?php get_footer(); ?>