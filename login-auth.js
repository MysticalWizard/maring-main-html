const loginForm = document.getElementsByClassName("login-box");
const loginButton = document.getElementsByClassName("login-submit-button");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
  e.preventDefault();
  const username = loginForm.username.value;
  const password = loginForm.password.value;

  if (username === "admin" && password === "password") {
      alert("You have successfully logged in.");
      location.reload();
  } else {
      loginErrorMsg.style.opacity = 1;
  }
})
