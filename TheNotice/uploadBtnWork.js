var uploadBtn = document.getElementById('uploadBtn');

uploadBtn.addEventListener('click', function toServer() {
    var textArea = document.getElementById('textArea');

    textArea.submit();
});