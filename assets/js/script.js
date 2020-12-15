const btnLogin = document.querySelector(".btn-login");
const form     = document.querySelector("form");

btnLogin.addEventListener("click", event => {
    // event.preventDefault();

    // const fields = [...document.querySelectorAll(".input-block input")];

    // fields.forEach(field => {
    //   if (field.value === "") form.classList.add("validate-error");
    // });

    // const formError = document.querySelector(".validate-error");
    // if (formError) {
    //   formError.addEventListener("animationend", event => {
    //     if (event.animationName === "nono") {
    //       formError.classList.remove("validate-error");
    //     }
    //   });
    // } 
    // else {
    //   form.classList.add("form-hide");
    // }
});

form.addEventListener("animationstart", event => {
    if (event.animationName === "down") {
        document.querySelector("body").style.overflow = "hidden";
    }
});

form.addEventListener("animationend", event => {
    if (event.animationName === "down") {
        form.style.display = "none";
        document.querySelector("body").style.overflow = "none";
    }
});

/* background squares */
const ulSquares = document.querySelector("ul.squares");

for (let i = 0; i < 11; i++) {
    const li = document.createElement("li");

    const random = (min, max) => Math.random() * (max - min) + min;

    const size     = Math.floor(random(10, 120));
    const position = random(1,  99);
    const delay    = random(5, 0.1);
    const duration = random(24, 12);

    li.style.width  =  `${size}px`;
    li.style.height =  `${size}px`;
    li.style.bottom = `-${size}px`;

    li.style.left = `${position}%`;

    li.style.animationDelay    =    `${delay}s`;
    li.style.animationDuration = `${duration}s`;
    li.style.animationTimingFunction = `cubic-bezier(${Math.random()},
${Math.random()},
${Math.random()},
${Math.random()})`;

    ulSquares.appendChild(li);
}


//////////////////////////////////////////////////////////////////// VALIDATE SENT EMAIL
// document.getElementById("sentEmail").addEventListener("click", emailSucessed);

var sendAnEmail = document.getElementById("sentEmail").addEventListener("click", emailSucessed); 
function validar() {
    var x = formName.emailSent.value;
    var y = forName.passwordSent.value;

    if (x != "" || y != "") {
        document.getElementById('msgSenha').innerHTML = "<small>senha ou email errado<small>";
        // window.open("_self","/assets/pagHome.html");

    }else{
        document.getElementById("msgErro").innerHTML = "Verifique se todos os campos foram preenchidos!";
    }

}

// VALIDATE SENT EMAIL//////////////////////////////////////////////////////////////////


/*function validar(){
    var emailSent = formName.emailSent.value;
    var passwordSent = formName.passwordSent.value;

    if(emailSent == "" || passwordSent == "" ){
        document.getElementById("msgErro").innerHTML="Verifique se todos os campos foram preenchidos!";
    }else if(emailSent != "" || passwordSent != "" ){
        document.getElementById("msgSenha").innerHTML="Senha ou e-mail incorretos!";
    }else{
        window.location="pagHome.html";
    }
}