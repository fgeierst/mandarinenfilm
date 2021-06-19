</div>
<footer id="footer">

  <?php if (is_active_sidebar('primary-widget-area')) { ?>
    <div id="footer-widgets" class="widget-area footer-widget-area">
      <ul>
        <?php dynamic_sidebar('primary-widget-area'); ?>
      </ul>
    </div>
  <?php } ?>

</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>