    <footer class="footer">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) : ?>
      <?php endif; ?>
    </footer> <!-- end footer -->
    <?php wp_footer(); // js scripts are inserted using this function ?>
  </body>
</html>
