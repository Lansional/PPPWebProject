function passwd_check() {
    var passwd = document.getElementById('passwd');
    var passwd_check = document.getElementById('passwd_check');

    if (passwd.value != passwd_check.value) {
        alert('비밀번호가 다릅니다.');
        return;
    }

    var toServer = document.getElementById('toServer');
    toServer.submit();
}