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
    // Tab 8
    else if ($("#edit-Fields .acf-tab-wrap li:nth-child(8)").hasClass("active")) {
      // Set Active Tab Button
      $(".tablink").removeClass('active');
      $("#tablink-8").addClass('active');
      // Show Tab Content
      $(".tabcontent").hide();
      $("#tabcontent-8").show();
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

// --------- MAGIC ---------
jQuery(document).ready(function( $ ){
// Magic - Overview
  $(".single-magic #tablink-1").click( function() {
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
    $("#acf-magic-name, #acf-magic-type, #acf-magic-universe, #acf-magic-description").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Magic - Appearance
  $(".single-magic #tablink-2").click( function() {
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
    $("#acf-magic-visuals, #acf-magic-effects").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Magic - Effects
  $(".single-magic #tablink-3").click( function() {
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
    $("#acf-magic-positive-effects, #acf-magic-neutral-effects, #acf-magic-negative-effects").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Magic - Alignment
  $(".single-magic #tablink-4").click( function() {
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
    $("#acf-magic-element, #acf-magic-deity").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Magic - Requirements
  $(".single-magic #tablink-5").click( function() {
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
    $("#acf-magic-resource-costs, #acf-magic-materials-required, #acf-magic-skills-required, #acf-magic-limitations").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Magic - Notes
  $(".single-magic #tablink-6").click( function() {
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
    $("#acf-magic-public, #acf-magic-private").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Magic - Gallery
  $(".single-magic #tablink-7").click( function() {
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
    $("#acf-magic-featured").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
});

// --------- CREATURES ---------
jQuery(document).ready(function( $ ){
// Creature - Overview
  $(".single-creature #tablink-1").click( function() {
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
    $("#acf-creature-name, #acf-creature-type, #acf-creature-universe, #acf-creature-description").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Creature - Looks
  $(".single-creature #tablink-2").click( function() {
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
    $("#acf-creature-color, #acf-creature-shape, #acf-creature-size, #acf-creature-notable-features, #acf-creature-materials").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Creature - Traits
  $(".single-creature #tablink-3").click( function() {
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
    $("#acf-creature-aggressiveness, #acf-creature-method-of-attack, #acf-creature-method-of-defense, #acf-creature-maximum-speed, #acf-creature-strengths, #acf-creature-weakness, #acf-creature-sounds, #acf-creature-spoils").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Creature - Habitat
  $(".single-creature #tablink-4").click( function() {
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
    $("#acf-creature-preferred-habitat, #acf-creature-habitats-select, #acf-creature-food-source, #acf-creature-migratory-pattern, #acf-creature-reproductive-patterns, #acf-creature-herding-pattern").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Creature - Comparisons
  $(".single-creature #tablink-5").click( function() {
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
    $("#acf-creature-similar-creatures, #acf-creature-symbolisms, #acf-creature-related-creatures").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Creature - Notes
  $(".single-creature #tablink-6").click( function() {
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
    $("#acf-creature-public, #acf-creature-private").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Creature - Gallery
  $(".single-creature #tablink-7").click( function() {
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
    $("#acf-creature-featured").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
});

// --------- RACES ---------
jQuery(document).ready(function( $ ){
// Race - Overview
  $(".single-race #tablink-1").click( function() {
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
    $("#acf-race-name, #acf-race-other-names, #acf-race-universe, #acf-race-description").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Race - Looks
  $(".single-race #tablink-2").click( function() {
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
    $("#acf-race-body-shape, #acf-race-skin-colors, #acf-race-general-height, #acf-race-general-weight, #acf-race-notable-features, #acf-race-physical-variance, #acf-race-typical-clothing").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Race - Traits
  $(".single-race #tablink-3").click( function() {
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
    $("#acf-race-strengths, #acf-race-weaknesses").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Race - Culture
  $(".single-race #tablink-4").click( function() {
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
    $("#acf-race-famous-figures, #acf-race-traditions, #acf-race-beliefs, #acf-race-governments, #acf-race-technologies, #acf-race-occupations, #acf-race-economics, #acf-race-favorite-foods").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Race - History
  $(".single-race #tablink-5").click( function() {
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
    $("#acf-race-notable-events").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Race - Notes
  $(".single-race #tablink-6").click( function() {
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
    $("#acf-race-public, #acf-race-private").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Race - Gallery
  $(".single-race #tablink-7").click( function() {
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
    $("#acf-race-featured").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
});

// --------- LANGUAGES ---------
jQuery(document).ready(function( $ ){
// Language - Overview
  $(".single-language #tablink-1").click( function() {
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
    $("#acf-language-name, #acf-language-other-names, #acf-language-universe").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Language - Info
  $(".single-language #tablink-2").click( function() {
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
    $("#acf-language-history, #acf-language-typology, #acf-language-dialectical-information, #acf-language-register").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Language - Phonology
  $(".single-language #tablink-3").click( function() {
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
    $("#acf-language-phonology").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Language - Grammar
  $(".single-language #tablink-4").click( function() {
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
    $("#acf-language-grammar").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Language - Entities
  $(".single-language #tablink-5").click( function() {
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
    $("#acf-language-numbers, #acf-language-quantifiers").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Language - Notes
  $(".single-language #tablink-6").click( function() {
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
    $("#acf-language-public, #acf-language-private").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Language - Gallery
  $(".single-language #tablink-7").click( function() {
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
    $("#acf-language-featured").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
});

// --------- RELIGIONS ---------
jQuery(document).ready(function( $ ){
// Religion - Overview
  $(".single-religion #tablink-1").click( function() {
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
    $("#acf-religion-name, #acf-religion-other-names, #acf-religion-universe, #acf-religion-description").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Religion - History
  $(".single-religion #tablink-2").click( function() {
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
    $("#acf-religion-origin-story, #acf-religion-notable-figures, #acf-religion-artifacts").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Religion - Beliefs
  $(".single-religion #tablink-3").click( function() {
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
    $("#acf-religion-deities, #acf-religion-teachings, #acf-religion-prophecies, #acf-religion-places-of-worship, #acf-religion-worship-services, #acf-religion-obligations, #acf-religion-vision-of-paradise").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Religion - Traditions
  $(".single-religion #tablink-4").click( function() {
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
    $("#acf-religion-initiation-process, #acf-religion-rituals, #acf-religion-holidays").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Religion - Spread
  $(".single-religion #tablink-5").click( function() {
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
    $("#acf-religion-locations, #acf-religion-races").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Religion - Notes
  $(".single-religion #tablink-6").click( function() {
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
    $("#acf-religion-public, #acf-religion-private").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Religion - Gallery
  $(".single-religion #tablink-7").click( function() {
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
    $("#acf-religion-featured").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
});

// --------- GROUPS ---------
jQuery(document).ready(function( $ ){
// Group - Overview
  $(".single-group #tablink-1").click( function() {
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
    $("#acf-group-name, #acf-group-description, #acf-group-other-names, #acf-group-universe").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Group - Hierarchy
  $(".single-group #tablink-2").click( function() {
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
    $("#acf-group-organization-structure, #acf-group-leaders, #acf-group-members, #acf-group-supergroups, #acf-group-subgroups, #acf-group-sistergroups").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Group - Locations
  $(".single-group #tablink-3").click( function() {
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
    $("#acf-group-locations, #acf-group-headquarters, offices").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Group - Purpose
  $(".single-group #tablink-4").click( function() {
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
    $("#acf-group-motivations, #acf-group-goals, #acf-group-obstacles, #acf-group-risks").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Group - Politics
  $(".single-group #tablink-5").click( function() {
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
    $("#acf-group-allies, #acf-group-enemies, #acf-group-rivals, #acf-group-clients").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Group - Inventory
  $(".single-group #tablink-6").click( function() {
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
    $("#acf-group-inventory, #acf-group-equipment, #acf-group-key-items, #acf-group-suppliers").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Group - Notes
  $(".single-group #tablink-7").click( function() {
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
    $("#acf-group-public, #acf-group-private").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Group - Gallery
  $(".single-group #tablink-8").click( function() {
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
    $("#acf-group-featured").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
});

// --------- SCENES ---------
jQuery(document).ready(function( $ ){
// Scene - Overview
  $(".single-scene #tablink-1").click( function() {
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
    $("#acf-scene-name, #acf-scene-summary, #acf-scene-universe").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Scene - Members
  $(".single-scene #tablink-2").click( function() {
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
    $("#acf-scene-characters, #acf-scene-locations, #acf-scene-items").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Scene - Action
  $(".single-scene #tablink-3").click( function() {
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
    $("#acf-scene-causation, #acf-scene-description, #acf-scene-results").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Scene - Notes
  $(".single-scene #tablink-4").click( function() {
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
    $("#acf-scene-public, #acf-scene-private").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
// Scene - Gallery
  $(".single-scene #tablink-5").click( function() {
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
    $("#acf-scene-featured").removeClass("acf-tab_group-hide").addClass("acf-tab_group-show");
  } );
});
/* ========================================= */
