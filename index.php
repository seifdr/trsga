<?php get_header(); ?>

    <section id="content" role="main">
        <?php if ( have_posts() ) { ?>
                <article class="col-12">
                    <?php while ( have_posts() ){ 
                        the_post(); ?>
                            <?php get_template_part( 'entry' ); ?>
                            <?php comments_template(); ?>
                    <?php } //endwhile // ?>
                </article>
                <?php //get_sidebar(); ?>
            <?php } //end if ?>  
    </section>
    

<?php get_footer(); ?>