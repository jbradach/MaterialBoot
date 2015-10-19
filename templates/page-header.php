<?php use Roots\Sage\Titles; ?>

<div class="page-header">
  <h1><? echo Titles\title() . '<br><small>' . get_post_meta($post->ID, 'subtitle', true) . '</small>'; ?></h1>
</div>
