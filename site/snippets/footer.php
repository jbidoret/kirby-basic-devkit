
  <footer>


  </footer>

  <!-- scripts -->
  <?php
    if ( option('environment') == 'local' ) :
      foreach ( option('basic-devkit.assets.scripts', array()) as $style):
        echo js($style.'?version='.md5(uniqid(rand(), true)));
      endforeach;
    else:
      echo js('assets/production/all.min.js');
    endif
  ?>

</body>
</html>
