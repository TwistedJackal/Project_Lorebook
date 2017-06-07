<?php

// ========= Upgrade Page =========

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




</div>
<!-- ========= create new page ========= -->
  <div class="dropdown">
   <button class="dropbtn">Create</button>
   <div class="dropdown-content">
     <a href="/create-scene/">Scenes</a>
     <a href="/create-group/">Groups</a>
     <a href="/create-religion/">Religions</a>
     <a href="/create-language/">Languages</a>
     <a href="/create-race/">Races</a>
     <a href="/create-creature/">Creatures</a>
     <a href="/create-magic/">Magics</a>
     <a href="/create-item/">Items</a>
     <a href="/create-character/">Characters</a>
     <a href="/create-location/">Locations</a>
     <a href="/create-universe/">Universe</a>
   </div>
  </div>

<?php get_footer(); ?>
