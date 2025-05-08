<figure class="file-viewmode-token file-viewmode-<?php print $view_mode; ?> media media-element-container media-<?php print $view_mode; ?>">
  <?php
    $build = file_view($file, $view_mode);
    print render($build);
  ?>
</figure>
