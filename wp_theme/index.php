
<?php get_header() ?>

<br>
<br>
<br>

<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-12 col-md-9">

            <div class="row">

                <?php
                if (have_posts()) : while(have_posts()) : the_post();
                ?>
                <div class="col-6 col-lg-10">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title();   ?></a></h2>
                    <?php
                    the_post_thumbnail();
                    ?>
                    <p><?php
                        the_content();
                        ?></p>
                    <p>Author: <?php the_author();?></p>
                    <p>Date: <?php the_date(); ?> </p>

                    <p><?php  the_tags(); ?></p>

                    <hr>
                </div>

                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>

            </div><!--/row-->


        </div><!--/span-->


<?php get_sidebar(); ?>
        </div><!--/span-->
    </div><!--/row-->



    <?php get_footer(); ?>


