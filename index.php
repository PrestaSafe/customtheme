<?php get_header(); ?>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
          <!-- Blog Post -->
          <div class="card mb-4">
          <?php if ( has_post_thumbnail() ) { ?>
                    <div style="min-height: 300px; background: url(<?php the_post_thumbnail_url(); ?>) no-repeat">&nbsp;</div>
                <?php } else { ?>
                        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                <?php } ?>
            <div class="card-body">
              <h2 class="card-title"><?php the_title(); ?></h2>
              <p class="card-text"><?php the_content('Read more',true); ?></p>

              <!-- <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite <i class="fa fa-arrow-right"></i></a> -->
            </div>
            <div class="card-footer text-muted">
              Posted on <?php the_date(); ?> by
              <!-- <a href="#">Start Bootstrap</a> -->
              <?php the_author_posts_link(); ?>
            </div>
          </div>
<?php endwhile; endif; ?>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

        
          <!-- Categories Widget -->
          <div class="card my-4">
          <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <ul id="sidebar">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </ul>
        <?php endif; ?>
            


          
        </div>

      </div>
      <!-- /.row -->

      </div>
    </div>
    <!-- /.container -->
<?php get_footer(); ?>
