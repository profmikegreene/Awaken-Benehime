<?php if ( ! dynamic_sidebar( 'sidebar-promo' ) ) : ?>

        <aside class="widget top">
           
                <?php dynamic_sidebar('sidebar-promo'); ?>

            
        </aside>

    <?php endif; // end sidebar widget area ?>
<aside class="widget sidebarMenu">
    <h3><?php echo bloginfo('name'); ?> Links</h3>
    <?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' )); ?>
</aside>

    <?php if ( ! dynamic_sidebar( 'sidebar-widgets' ) ) : ?>

        <aside class="widget">
           
                <?php dynamic_sidebar('sidebar-widgets'); ?>

            
        </aside>

    <?php endif; // end sidebar widget area ?>
<aside class="widget apply">
    <h3>Apply to RCC</h3>
    <div>
    
    <ul class="menu">
        <li><a href="/future">How do I become a student?</a></li>
        <li><a href="/academics/programs">What programs does RCC offer?</a></li>
        <li><a href="https://apply.vccs.edu/oa/launch.action" target="_blank">Apply to RCC</a></li>
    </ul>
</div>
</aside>

