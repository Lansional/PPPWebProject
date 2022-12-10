<?php
function NULLReturn($str) {
    echo "<script>alert('$str')</script>";
    echo "<script>location.href='uploadNotice.html';</script>";
}

include "../theNotice.inc";

$title = $_POST['title'];
$file = $_FILES['file'][name];
$content = $_POST['content'];

if (!$title)
    NULLReturn('제목을 입력하세요!');
else if (!$file)
    NULLReturn('파일을 올리세요!');
else if (!$content)
    NULLReturn('내용을 입력하세요!');

$result = mysqli_query($db_conn, "SELECT * FROM $forTable");
$row = mysqli_fetch_array($result);

$id = $row['id'] + 1;
$time = date('Y-m-d');

$upload_dir = "Images/".$_FILES['file'][name];
move_uploaded_file($_FILES['file']['tmp_name'], $upload_dir);

// echo "\$id: $id<br>";
// echo "\$upload_dir: ".$upload_dir."<br>";

$result = mysqli_query($db_conn, "INSERT INTO $forTable VALUES ($id, '$title', '$content', '$file', '$time')");

if ($result) {
    // echo "성공";
    echo "<script>alert('게시 성공하였습니다.')</script>";
    echo "<script>location.href='uploadNotice.html';</script>";
} else {
    // echo "실패";
    echo "<script>alert('게시 실패하였습니다.')</script>";
    echo "<script>location.href='uploadNotice.html';</script>";
}

mysqli_close($db_conn);
?>