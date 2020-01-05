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
  // $('.collapsible').collapsible()

  // CAROUSEL
  // $('.carousel').carousel();
  // $('.carousel-slider').carousel({ fullWidth: true});
});

function handleLoginClick(ev) {
  console.log(ev);
  if (appState.loggedIn) {
    logout();
  } else {
    login('samwise', 'pass');
  }
}

function login(username, password) {
  console.log(appState, username, password);
  appState.username = username;
  appState.password = password;
  appState.loggedIn = true;
  console.log(appState);
  LoginNavHandle();
}

function logout() {
  appState.username = '';
  appState.password = '';
  appState.loggedIn = false;
  appState.loginModalOpen = false;
  console.log(appState);
  LoginNavHandle();
}

function handleFormSubmit(event) {
  event.preventDefault();
  console.log(event);
  console.dir(event);
  const URL = 'http://localhost:8080/api/auth/register';
  const registerBody = { username: 'samwise@email.com', password: 'pass' };

  // axios.post(URL, registerBody)
  //   .then(res => console.log("RES", res))
  //   .catch(err => console.log("ERR", err))
}
