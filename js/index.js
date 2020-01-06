$(document).ready(function() {
  // NAVBAR
  // Init nav dropdowns
  $('.dropdown-button').dropdown({
    belowOrigin: true,
    alignment: 'left'
  });

  $('.button-collapse').sideNav({
    hover: true
  });

  // TABS
  $('.tabs').tabs();

  // PARALLAX
  $('.parallax').parallax();

  // FORM SELECTS
  $('select').material_select();
  $('.select-wrapper').click(function(e){
    e.stopPropagation();
  });

  // DATE PICKER
  $('.datepicker').pickadate({
    selectMonths: true,
    selectYears: 15,
    closeOnSelect: true
  })
  // below code stops picker from immediately closing when clicked into in Chrome (may be needed in SELECT elements also)
  $('.datepicker').on('mousedown',function(event){ event.preventDefault(); })

  // COLLAPSIBLE
  $('.collapsible').collapsible()

  // CAROUSEL
  // $('.carousel').carousel();
  // $('.carousel-slider').carousel({ fullWidth: true});

  // to be able to keyboard select the checkbox in register form
  document.getElementById("privacy").addEventListener('keypress', (e) => { if (e.code === "Enter"){ document.getElementById("privacy").checked = true } } )
});