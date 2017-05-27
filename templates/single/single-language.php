<?php
/*
Template Name: Language
Template Post Type: language
*/

acf_form_head();
get_header(); ?>


<!-- Only Show if Author -->
<?php
global $current_user;
get_currentuserinfo();
if (is_user_logged_in() && $current_user->ID == $post->post_author) {
?>


<div id="lorebook-main">

  <a id="create-New" href="/create-language/">NEW</a>

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

  <div id="lorebook-header">
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ); ?>
    <style>#lorebook-header { background-image: url('<?php echo $thumb['0'];?>'); }</style>
    <h1><?php the_title(); ?></h1>
  </div>


  <!-- ========= EDIT FIELDS ========= -->
  <div id="edit-Fields">

    <button id="cancel-Button">CANCEL</button>

    <?php
      if ( !is_user_logged_in() ){
          echo 'You are not logged in. <br /> <a href="http://lorebook.twistedjackal.com/wp-login.php">Log In &rarr;</a>';
      } else {
        $language = array(
          'field_groups' => array('acf_language'),
          'submit_value' => 'Save'
        );

        acf_form( $language );
      }
    ?>

  </div>
  <!-- ========= END EDIT FIELDS ========= -->


  <!-- ========= DISPLAY FIELDS ========= -->
  <div id="display-Fields">

    <button id="edit-Button">EDIT</button>

    <!-- Tabs -->
    <div class="display-tabs">
      <button id="tablink-1" class="tablink">Overview</button>
      <button id="tablink-2" class="tablink">Info</button>
      <button id="tablink-3" class="tablink">Phonology</button>
      <button id="tablink-4" class="tablink">Grammar</button>
      <button id="tablink-5" class="tablink">Entities</button>
			<button id="tablink-6" class="tablink">Notes</button>
			<button id="tablink-7" class="tablink">Gallery</button>
    </div> <!-- End Tabs -->


    <!-- Overview -->
    <div id="tabcontent-1" class="tabcontent">

      <div id="language-name">
        <h2>Name</h2>
        <?php if(get_field('language-name')) { ?>
          <p><?php the_field('language-name'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is the name of this language?</p><?php } ?>
      </div>

      <div id="language-other-names">
        <h2>Other Names</h2>
        <?php if(get_field('language-other-names')) { ?>
          <p><?php the_field('language-other-names'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What other names is the language known by?</p><?php } ?>
      </div>

			<div id="language-universe">
				<h2>Universe</h2>
				<?php
				$universe = get_field('language-universe');

				if( $universe ):
					$post = $universe;
					setup_postdata( $post );
					?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>

    </div> <!-- End Overview -->


    <!-- Info -->
    <div id="tabcontent-2" class="tabcontent">

      <div id="language-history">
        <h2>History</h2>
        <?php if(get_field('language-history')) { ?>
          <p><?php the_field('language-history'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is the history of this language?</p><?php } ?>
      </div>

      <div id="language-typology">
        <h2>Typology</h2>
        <?php if(get_field('language-typology')) { ?>
          <p><?php the_field('language-typology'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you want!</p><?php } ?>
      </div>

      <div id="language-dialectical-information">
        <h2>Dialectical Information</h2>
        <?php if(get_field('language-dialectical-information')) { ?>
          <p><?php the_field('language-dialectical-information'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you want!</p><?php } ?>
      </div>

      <div id="language-register">
        <h2>Register</h2>
        <?php if(get_field('language-register')) { ?>
          <p><?php the_field('language-register'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you want!</p><?php } ?>
      </div>

    </div> <!-- End Info -->


    <!-- Phonology -->
    <div id="tabcontent-3" class="tabcontent">

      <div id="language-phonology">
        <h2>Phonology</h2>
        <?php if(get_field('language-phonology')) { ?>
          <p><?php the_field('language-phonology'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you want!</p><?php } ?>
      </div>

    </div> <!-- End Phonology -->


		<!-- Grammar -->
		<div id="tabcontent-4" class="tabcontent">

      <div id="language-grammar">
        <h2>Grammar</h2>
        <?php if(get_field('language-grammar')) { ?>
          <p><?php the_field('language-grammar'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you want!</p><?php } ?>
      </div>

		</div> <!-- End Grammar -->


    <!-- Entities -->
		<div id="tabcontent-5" class="tabcontent">

      <div id="language-numbers">
        <h2>Numbers</h2>
        <?php if(get_field('language-numbers')) { ?>
          <p><?php the_field('language-numbers'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you want!</p><?php } ?>
      </div>

      <div id="language-quantifiers">
        <h2>Quantifiers</h2>
        <?php if(get_field('language-quantifiers')) { ?>
          <p><?php the_field('language-quantifiers'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you want!</p><?php } ?>
      </div>

		</div> <!-- End Entities -->


		<!-- Notes -->
    <div id="tabcontent-6" class="tabcontent">

      <div id="language-public">
        <h2>Public Notes</h2>
        <?php if(get_field('language-public')) { ?>
          <p><?php the_field('language-public'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

      <div id="language-private">
        <h2>Private Notes</h2>
        <?php if(get_field('language-private')) { ?>
          <p><?php the_field('language-private'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End Notes -->


    <!-- Gallery -->
    <div id="tabcontent-7" class="tabcontent">

      <div id="language-gallery-field">
        <h2>Featured Image</h2>
        <?php if( get_field('language-featured') ): ?>
        	<img src="<?php the_field('language-featured'); ?>" />
        <?php endif; ?>
      </div>

    </div> <!-- End Notes -->

  </div>
  <!-- ========= END DISPLAY FIELDS ========= -->

</div>


<?php // If Not Post Author
 } else { ?>
	 <h2>Sorry, you do not have permission to view this.</h2>
 <?php } ?>


<?php get_footer(); ?>
