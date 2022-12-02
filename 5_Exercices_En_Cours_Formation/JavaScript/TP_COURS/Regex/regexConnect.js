let btnSelector = document.querySelector("button");
let logSelector = document.querySelector(".login");
let pwdSelector = document.querySelector(".pwd");
let reponsePassword = document.querySelector("p");

let loginFormat = /[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
let pwdFormat = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$.!?&])[A-Za-z\d@$.!?&]{6,}$/;

btnSelector.addEventListener("click", function () {
  verifyMail(logSelector.value);
  verifyPwd(pwdSelector.value);
});

function verifyMail(loginCheck) {
  if (loginFormat.test(loginCheck)) {
    logSelector.style.backgroundColor = "green";
  } else {
    logSelector.style.backgroundColor = "red";
  }
}

function verifyPwd(pwdCheck) {
  if (pwdFormat.test(pwdCheck)) {
    pwdSelector.style.backgroundColor = "green";
    reponsePassword.textContent = " "
  } else {
    reponsePassword.textContent =
    `Le password est : Trop court  Doit contenir un chiffre  Doit contenir un caractère spécial`;
    pwdSelector.style.backgroundColor = "red";
  }
}
