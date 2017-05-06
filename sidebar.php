<?php if ( is_active_sidebar( 'primary-widget-area' ) ) { ?>
    <aside id="sidebar" class="col-12 col-sm-12 col-md-4 col-lg-3 pr-4 pt-1" role="complementary">
        <div id="primary" class="widget-area">
        <ul class="xoxo">
        <?php dynamic_sidebar( 'primary-widget-area' ); ?>
        </ul>
        </div>
    </aside>
<?php } ?>
