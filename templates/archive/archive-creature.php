<?php


acf_form_head();
get_header(); ?>


<div id="lorebook-main">

  <a id="create-New" href="/create-creature/">NEW</a>

  <ul id="lorebook-navigation">
    <li><a href="/universes"><i class="fa-phone"></i>Universes</a></li>
    <li><a href="/locations"><i class="fa-phone"></i>Locations</a></li>
    <li><a href="/characters"><i class="fa-phone"></i>Characters</a></li>
    <li><a href="/items"><i class="fa-phone"></i>Items</a></li>
    <li><a href="/magics"><i class="fa-phone"></i>Magics</a></li>
    <li><a href="/creatures"><i class="fa-phone"></i>Creatures</a></li>
    <li><a href="/races"><i class="fa-phone"></i>Races</a></li>
    <li><a href="/languages"><i class="fa-phone"></i>Languages</a></li>
    <li><a href="/religions"><i class="fa-phone"></i>Religions</a></li>
    <li><a href="/groups"><i class="fa-phone"></i>Groups</a></li>
    <li><a href="/scenes"><i class="fa-phone"></i>Scenes</a></li>
  </ul>

  <div id="lorebook-archives">
    <?php // Only Show Current User's Posts
      if ( is_user_logged_in() ):
        global $current_user;
    wp_get_current_user();
    $author_query = array(
      'posts_per_page' => '-1',
      'author' => $current_user->ID,
      'post_type' => 'creature'
    );
    $author_posts = new WP_Query($author_query);
    while($author_posts->have_posts()) : $author_posts->the_post();
    ?>

      <?php
      $bg = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' );
      ?>

        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <div id="archive-post" style="background: url('<?php echo $bg[0]; ?>') repeat center center #fbfbfb; background-size:cover;">
            <h1><?php the_title(); ?></h1>
          </div>
        </a>

    <?php
    endwhile;
  endif; ?>

  </div>

  <!-- #lorebook-main display fix -->
    <style>#lorebook-main { display: flex; }</style>


<?php get_footer(); ?>
