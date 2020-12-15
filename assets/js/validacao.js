function validarMovie(){
    var title = formMovies.title.value;
    var linkMovie = formMovies.linkMovie.value;

    if(title == "" || linkMovie == "" ){
        document.getElementById("msgErro").innerHTML="Verifique se todos os campos foram preenchidos!";
        return false;
    }
}

function validarSeries(){
    var title = formSeries.title.value;
    var linkSeries= formSeries.linkSeries.value;

    if(title == "" || linkSeries == "" ){
        document.getElementById("msgErro").innerHTML="Verifique se todos os campos foram preenchidos!";
        return false;
    }
}

function validar(){
    var emailSent = formName.emailSent.value;
    var passwordSent = formName.passwordSent.value;

    if(emailSent == "" || passwordSent == "" ){
        document.getElementById("msgErro").innerHTML="Verifique se todos os campos foram preenchidos!";
        return false;
    }
}

function validarForm(){
    var name = formName.name.value;
    var lastName = formName.lastName.value;
    var emailSent = formName.emailSent.value;
    var passwordSent = formName.passwordSent.value;


    if(emailSent == "" || passwordSent == "" || lastName == "" || name == "" ){
        document.getElementById("msgErro").innerHTML="Verifique se todos os campos foram preenchidos!";
        return false;
    }
}