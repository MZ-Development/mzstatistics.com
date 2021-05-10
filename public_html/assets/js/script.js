const signInBtn = document.getElementById("signIn");
const signUpBtn = document.getElementById("signUp");
const fistForm = document.getElementById("form1");
const secondForm = document.getElementById("form2");
const container = document.querySelector(".container");
if(signInBtn){
signInBtn.addEventListener("click", () => {
	container.classList.remove("right-panel-active");
});
}
if (signUpBtn){
signUpBtn.addEventListener("click", () => {
	container.classList.add("right-panel-active");
});}
if(fistForm){
fistForm.addEventListener("submit", (e) => e.preventDefault());}
if(secondForm){
secondForm.addEventListener("submit", (e) => e.preventDefault());}


