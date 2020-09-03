const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-submit-button");
const loginErrorMsg = document.getElementById("login-error-msg");
const loginUsernameErrorField = document.getElementById("username-field");
const loginPasswordErrorField = document.getElementById("password-field");

loginButton.addEventListener("click", (e) => {
  e.preventDefault();
  const username = loginForm.username.value;
  const password = loginForm.password.value;

  if (username === "admin" && password === "password") {
      alert("You have successfully logged in.");
      location.reload();
  } if (username !== "admin") {
    loginErrorMsg.style.opacity = 1;
    loginUsernameErrorField.style.borderBottom = "1px solid #fe3030"
  } if (password !== "password") {
    loginErrorMsg.style.opacity = 1;
    loginPasswordErrorField.style.borderBottom = "1px solid #fe3030"
  } else {
    loginErrorMsg.style.opacity = 1;
    loginUsernameErrorField.style.borderBottom = "1px solid #fe3030"
    loginPasswordErrorField.style.borderBottom = "1px solid #fe3030"
  }
})
