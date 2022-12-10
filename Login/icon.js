var changed = document.getElementById("btn");

changed.addEventListener('click', function clickTheIcon() {
    var passwd = document.getElementById('passwd');

    if (changed.innerText == "visibility") {
        changed.innerText = "visibility_off";
        passwd.type = "text";
    } else {
        changed.innerText = "visibility";
        passwd.type = "password";
    }
});

function accountAndPasswordCheck() {
    var toServer = document.getElementById('byServer');

    toServer.submit();
}