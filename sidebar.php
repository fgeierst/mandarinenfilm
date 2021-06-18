<aside id="sidebar">
    <?php if (is_active_sidebar('primary-widget-area')) { ?>
        <div id="footer-widgets" class="widget-area footer-widget-area">
            <ul class="xoxo">
                <?php dynamic_sidebar('primary-widget-area'); ?>
            </ul>
        </div>
    <?php } ?>
</aside>