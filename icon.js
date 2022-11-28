var changed = document.getElementById("btn");

changed.addEventListener('click', function clickTheIcon() {
    if (changed.innerText == "visibility") 
        changed.innerText = "visibility_off";
    else 
        changed.innerText = "visibility";
});