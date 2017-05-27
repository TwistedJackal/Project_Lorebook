<?php

// ========= CREATE NEW CREATURE =========

acf_form_head();
get_header();

?>


<div id="lorebook-main">

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

  <div id="create-Fields">

  	<?php
  	acf_form(array(
      'field_groups' => array('acf_language'),
  		'post_id'		=> 'new_language',
  		'post_title'	=> true,
  		'post_content'	=> true,
  		'new_post'		=> array(
  			'post_type'		=> 'language',
  			'post_status'	=> 'publish'
  		),
      'submit_value' => 'Create'
  	));
  	?>

  </div>

</div>

<?php get_footer(); ?>
