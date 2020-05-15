function pageRedirect() {

    window.location.replace("mainpage.html");

}

function login() {

    var email = document.getElementById("email")
    var password = document.getElementById("password")

    const promise = auth.signInWithEmailAndPassword(email.value, password.value);
    promise.catch(e => alert(e.message));

    alert("Signed in " + email.value);
}

