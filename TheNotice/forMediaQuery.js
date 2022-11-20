const mediaQuery = window.matchMedia('(max-width: 1024px)');

var text = document.getElementById('text');

if (mediaQuery.matches) {
    text.innerText = '≡';
} else {
    text.innerText = '회원가입';
}