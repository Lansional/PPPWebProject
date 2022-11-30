var hiddenBtn = document.getElementById('hiddenBtn');

hiddenBtn.addEventListener('click', function openNav() {
    var mySidenav = document.getElementById('mySidenav');

    if (mySidenav.style.width == '320px') {
        mySidenav.style.width = '0px';
        mySidenav.style.visibility = 'hidden';
    } else {
        mySidenav.style.width = '320px';
        mySidenav.style.visibility = 'visible';
    }
});