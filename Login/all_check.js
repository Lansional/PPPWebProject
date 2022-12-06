var changed = document.getElementById("submit");

changed.addEventListener('click', function clickTheIcon() {
    var check1 = document.getElementById('first');
    var check2 = document.getElementById('second');
    var check3 = document.getElementById('third');

    if (!check1.checked || !check2.checked || !check3.checked) {
        alert('모든 약관에 동의해야 합니다!');
        return;
    }

    location.href = 'joinmembership2.html';
});