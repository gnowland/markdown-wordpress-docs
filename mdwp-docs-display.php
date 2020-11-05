<?php

/**
 * Docs Display page
 *
 * @since      1.0.0
 *
 * @package    Markdown_WordPress_Docs
 */
?>

<div class="wrap">
<?php
  $doc = empty( $_GET[ 'doc' ] ) ? 'README.md' : htmlspecialchars( $_GET[ 'doc' ] );

  $Parsedown = new Parsedown();
  $file = file_get_contents( __DIR__ . '/docs/' . $doc );
  $file = str_replace( ['./', '../', 'docs/'], '?page=docs&doc=', $file );
  echo $Parsedown->text( $file );
?>
</div>
