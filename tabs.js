// ========= TABS =========

/* ========= FORM EDIT TABS ========= */
jQuery(document).ready(function( $ ){
  $("#edit-Fields").click( function() {
    // Tab 1
    if ($("#edit-Fields .acf-tab-wrap li:nth-child(1)").hasClass("active")) {
      // Set Active Tab Button
      $(".tablink").removeClass('active');
      $("#tablink-1").addClass('active');
      // Show Tab Content
      $(".tabcontent").hide();
      $("#tabcontent-1").show();
    }
    // Tab 2
    else if ($("#edit-Fields .acf-tab-wrap li:nth-child(2)").hasClass("active")) {
      // Set Active Tab Button
      $(".tablink").removeClass('active');
      $("#tablink-2").addClass('active');
      // Show Tab Content
      $(".tabcontent").hide();
      $("#tabcontent-2").show();
    }
    // Tab 3
    else if ($("#edit-Fields .acf-tab-wrap li:nth-child(3)").hasClass("active")) {
      // Set Active Tab Button
      $(".tablink").removeClass('active');
      $("#tablink-3").addClass('active');
      // Show Tab Content
      $(".tabcontent").hide();
      $("#tabcontent-3").show();
    }
    // Tab 4
    else if ($("#edit-Fields .acf-tab-wrap li:nth-child(4)").hasClass("active")) {
      // Set Active Tab Button
      $(".tablink").removeClass('active');
      $("#tablink-4").addClass('active');
      // Show Tab Content
      $(".tabcontent").hide();
      $("#tabcontent-4").show();
    }
    // Tab 5
    else if ($("#edit-Fields .acf-tab-wrap li:nth-child(5)").hasClass("active")) {
      // Set Active Tab Button
      $(".tablink").removeClass('active');
      $("#tablink-5").addClass('active');
      // Show Tab Content
      $(".tabcontent").hide();
      $("#tabcontent-5").show();
    }
    // Tab 6
    else if ($("#edit-Fields .acf-tab-wrap li:nth-child(6)").hasClass("active")) {
      // Set Active Tab Button
      $(".tablink").removeClass('active');
      $("#tablink-6").addClass('active');
      // Show Tab Content
      $(".tabcontent").hide();
      $("#tabcontent-6").show();
    }
    // Tab 7
    else if ($("#edit-Fields .acf-tab-wrap li:nth-child(7)").hasClass("active")) {
      // Set Active Tab Button
      $(".tablink").removeClass('active');
      $("#tablink-7").addClass('active');
      // Show Tab Content
      $(".tabcontent").hide();
      $("#tabcontent-7").show();
    }
  } );
});
/* ================================== */


/* ========= FRONTEND DISPLAY TABS ========= */
// Default Actives
jQuery(document).ready(function( $ ){
  $("#tablink-1").addClass("active");
  $(".tabcontent").hide();
  $("#tabcontent-1").show();
});

// --------- UNIVERSES ---------
jQuery(document).ready(function( $ ){
// Universe - Overview
  $(".single-universe #tablink-1").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-1").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-1").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(1)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-universe-name, #acf-universe-description, #acf-universe-genre").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Universe - History
  $(".single-universe #tablink-2").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-2").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-2").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(2)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-universe-history").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Universe - Rules
  $(".single-universe #tablink-3").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-3").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-3").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(3)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-universe-physics, #acf-universe-magic, #acf-universe-technologies").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Universe - Notes
  $(".single-universe #tablink-4").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-4").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-4").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(4)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-universe-public, #acf-universe-private").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Universe - Gallery
  $(".single-universe #tablink-5").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-5").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-5").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(5)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-universe-featured").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
});

// --------- LOCATIONS ---------
jQuery(document).ready(function( $ ){
// Location - Overview
  $(".single-location #tablink-1").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-1").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-1").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(1)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-location-name, #acf-location-type, #acf-location-universe, #acf-location-description").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Location - Culture
  $(".single-location #tablink-2").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-2").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-2").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(2)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-location-language, #acf-location-population, #acf-location-currency, #acf-location-motto, #acf-location-laws, #acf-location-sports, #acf-location-leaders, #acf-location-languages-select").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Location - Cities
  $(".single-location #tablink-3").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-3").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-3").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(3)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-location-capital, #acf-location-largest-cities, #acf-location-notable-cities").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Location - Geography
  $(".single-location #tablink-4").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-4").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-4").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(4)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-location-area, #acf-location-crops, #acf-location-located-at, #acf-location-climate").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Location - History
  $(".single-location #tablink-5").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-5").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-5").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(5)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-location-founding-date, #acf-location-founding-story, #acf-location-notable-wars").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Location - Notes
  $(".single-location #tablink-6").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-6").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-6").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(6)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-location-public, #acf-location-private").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Location - Gallery
  $(".single-location #tablink-7").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-7").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-7").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(7)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-location-featured").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
});

// --------- CHARACTERS ---------
jQuery(document).ready(function( $ ){
// Character - Overview
  $(".single-character #tablink-1").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-1").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-1").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(1)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-character-name, #acf-character-role, #acf-character-other-names, #acf-character-gender, #acf-character-age, #acf-character-universe").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Character - Looks
  $(".single-character #tablink-2").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-2").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-2").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(2)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-character-weight, #acf-character-height, #acf-character-hair-color, #acf-character-hairy-style, #acf-character-facial-hair, #acf-character-eye-color, #acf-character-race, #acf-character-skin-tone, #acf-character-body-type, #acf-character-races-select").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Character - Nature
  $(".single-character #tablink-3").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-3").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-3").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(3)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-character-mannerisms, #acf-character-motivations, #acf-character-flaws, #acf-character-prejudices, #acf-character-talents, #acf-character-hobbies, #acf-character-personality-type").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Character - Social
  $(".single-character #tablink-4").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-4").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-4").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(4)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-character-spoken-languages, #acf-character-best-friends, #acf-character-archenemies, #acf-character-religion, #acf-character-politics, #acf-character-occupation, #acf-character-color, #acf-character-weapon, #acf-character-animal").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Character - History
  $(".single-character #tablink-5").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-5").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-5").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(5)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-character-birthday, #acf-character-birthplace, #acf-character-education, #acf-character-background").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Character - Family
  $(".single-character #tablink-5").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-5").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-5").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(5)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-character-mothers, #acf-character-fathers, #acf-character-spouses, #acf-character-siblings, #acf-character-children").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Character - Notes
  $(".single-character #tablink-7").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-7").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-7").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(7)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-character-public, #acf-character-private").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Character - Gallery
  $(".single-character #tablink-8").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-8").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-8").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(8)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-character-featured").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
});

// --------- ITEMS ---------
jQuery(document).ready(function( $ ){
// Item - Overview
  $(".single-item #tablink-1").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-1").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-1").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(1)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-item-name, #acf-item-type, #acf-item-universe, #acf-item-description").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Item - Looks
  $(".single-item #tablink-2").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-2").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-2").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(2)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-item-materials, #acf-item-weight").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Item - History
  $(".single-item #tablink-3").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-3").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-3").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(3)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-item-original-owners, #acf-item-past-owners, #acf-item-current-owners, #acf-item-makers, #acf-item-creation-date").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Item - Abilities
  $(".single-item #tablink-4").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-4").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-4").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(4)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-item-magic").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Item - Notes
  $(".single-item #tablink-5").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-5").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-5").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(5)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-item-public, #acf-item-private").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Item - Gallery
  $(".single-item #tablink-6").click( function() {
    // Set Active Display Tab Button
    $(".tablink").removeClass("active");
    $("#tablink-6").addClass("active");
    // Show Tab Content
    $(".tabcontent").hide();
    $("#tabcontent-6").show();
    // Set Active Edit Tab Button
    $("#edit-Fields .acf-tab-wrap li").removeClass("active");
    $("#edit-Fields .acf-tab-wrap li:nth-child(6)").addClass("active");
    // Show Edit Tab Fields
    $(".inside .field").addClass("acf-tab_group-hide").removeClass("acf-tab_group-show");
    $("#acf-item-featured").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
});
/* ========================================= */
