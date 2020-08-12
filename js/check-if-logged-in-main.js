//Check if logged in user and do stuff
//Then target your specific needs, like hiding css class or id

window.addEventListener('DOMContentLoaded', () => {
    checkLoggedInUser();
});

function checkLoggedInUser () {
    if(document.body.classList.contains( 'logged-in' )) {
        console.log("yep, you're logged in");
        if(document.getElementById("log-in-to-site")) {
            document.getElementById("log-in-to-site").className = "login-hide";
        }
    }
}