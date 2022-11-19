function forMediaQuery() {
    if (matchMedia("(max-width: 1024px)").matches) {
        console.log("tablet");
        // let text = document.getElementsByClassName('signUp');
        // text.innerText = '&#8801;';
    }
}

forMediaQuery();