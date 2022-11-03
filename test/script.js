const switchBtn = document.querySelector(".switch");
const welcome = document.querySelector(".welcome");
const form = document.querySelector(".form");
const particle = document.querySelector(".particle");
console.log(form);

welcomeWidth = welcome.clientWidth;
formWidth = form.clientWidth;

let isLogin = false;

switchBtn.addEventListener("click", () => {
  if (!isLogin) {
    welcome.style.transform = `translate(${formWidth}px)`;
    form.style.transform = `translate(-${welcomeWidth}px)`;
    welcome.querySelector("h1").classList.add("hide");
    form.querySelector("h1").classList.add("hide");
    particle.style.transform = "translate(50px)";

    setTimeout(() => {
      
      form.querySelector(".name").style.height = "0px";
      form.querySelector(".phone").style.height = "0px";
      form.querySelector("h1").innerText = "Sign in";
      form.querySelector("button").innerText = "SIGN IN";
      welcome.querySelector("button").innerText = "SIGN UP";
      welcome.querySelector("h1").innerText = "Didn't have an account !";

      welcome.querySelector("h1").classList.remove("hide");
      form.querySelector("h1").classList.remove("hide");
    }, 300);

    isLogin = true;
  } else {
    welcome.style.transform = `translate(0px)`;
    form.style.transform = `translate(0px)`;
    welcome.querySelector("h1").classList.add("hide");
    form.querySelector("h1").classList.add("hide");
    particle.style.transform = "translate(0px)";
 

    setTimeout(() => {
      form.querySelector(".phone").style.height = "4rem";

      form.querySelector(".name").style.height = "4rem";
      form.querySelector("h1").innerText = "Create account";
      form.querySelector("button").innerText = "SIGN UP";
      welcome.querySelector("button").innerText = "SIGN IN";
      welcome.querySelector("h1").innerText = "Welcome back !";

      form.querySelector("h1").classList.remove("hide");
      welcome.querySelector("h1").classList.remove("hide");
    }, 300);

    isLogin = false;
  }
});



// let name1 = document.querySelector(".name");
let switch1=document.querySelector(".switch");
// switch1.addEventListener("click", () => {switch1.classList.add("switch2")});
switch1.addEventListener("click", () => {switch1.classList.remove("switch")});


// let phone1=document.querySelector(".phone");
let description1 =document.querySelector(".description");


// switch1.addEventListener("click", () => {name1.style.display="none"});
// switch1.addEventListener("click", () => {phone1.style.display="none"});
switch1.addEventListener("click", () => {description1.style.display="none"});




// let sign_up = document.querySelector(".switch2");

// sign_up.addEventListener("click", () => {description1.style.display="block"});
// sign_up.addEventListener("click", () => {name1.style.display="block"});
// sign_up.addEventListener("click", () => {phone1.style.display="block"});