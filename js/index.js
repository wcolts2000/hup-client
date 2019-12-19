const appState = {
  username: '',
  password: '',
  loggedIn: false,
  loginModalOpen: false
}

// NAVBAR
  $(document).ready(function() {
    // Init nav dropdowns
    $('.dropdown-button').dropdown({
      belowOrigin: true,
      hover: true,
      alignment: 'left'
    })

    $('.button-collapse').sideNav({
      hover: true
    });

  });

function handleLoginClick(ev) {
  console.log(ev)
  if(appState.loggedIn) {

    logout()
  } else {
    login("samwise", "pass")
  }
}

function login(username, password) {
  console.log(appState, username, password)
  appState.username = username
  appState.password = password
  appState.loggedIn = true
  console.log(appState)
  LoginNavHandle()
}

function logout() {
  appState.username = '';
  appState.password = '';
  appState.loggedIn = false;
  appState.loginModalOpen = false;
  console.log(appState)
  LoginNavHandle()
}

function handleFormSubmit(event) {
  event.preventDefault()
  console.log(event)
  console.dir(event)
  const URL = "http://localhost:8080/api/auth/register"
  const registerBody = {"username": "samwise@email.com", "password": "pass"}
  
  axios.post(URL, registerBody)
    .then(res => console.log("RES", res))
    .catch(err => console.log("ERR", err))
}


