const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = () => {
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
};
loginBtn.onclick = () => {
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
};
signupLink.onclick = () => {
  signupBtn.click();
  return false;
};


let password = document.querySelector("#YourPassword");
let show = document.querySelector(".show");
show.onclick = function () {
  if (password.type === "password") {
    password.setAttribute("type", "text");
    show.classList.add("hide");
  } else {
    password.setAttribute("type", "password");
    show.classList.remove("hide");
  }
};