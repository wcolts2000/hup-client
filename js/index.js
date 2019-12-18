const appState = {
  username: '',
  password: '',
  loggedIn: false,
  loginModalOpen: false
}

const navUser = document.querySelector('.nav-login');
const form = document.getElementById('form')
const formSubmit = document.getElementById('form-submit')

const axios = require('axios')


function LoginNavHandle() {navUser.textContent = appState.loggedIn ? "LOGOUT" : "LOGIN"}
LoginNavHandle()


navUser.addEventListener('click', handleLoginClick) 

form.addEventListener('submit', handleFormSubmit)

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
const h1 = document.createElement('h1')

h1.textContent = "INJECTED HEADER";


