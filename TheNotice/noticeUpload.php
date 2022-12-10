<?php
function NULLReturn($str) {
    echo "<script>alert('$str')</script>";
    echo "<script>location.href='uploadNotice.html';</script>";
}

include "../theNotice.inc";

$title = $_POST['title'];
$file = $_FILES['file']['name'];
$content = $_POST['content'];

if (!$title)
    NULLReturn('제목을 입력하세요!');
else if (!$file)
    NULLReturn('파일을 올리세요!');
else if (!$content)
    NULLReturn('내용을 입력하세요!');

$result = mysqli_query($db_conn, "SELECT * FROM $fortable ORDER BY id DESC LIMIT 1");


$row = mysqli_fetch_array($result);

echo "\$row['id']: ".$row['id']."<br>";
echo "\$row['title']: ".$row['title']."<br>";
echo "\$row['content']: ".$row['content']."<br>";
echo "\$row['file']: ".$row['file']."<br>";

$id = $row['id'] + 1;
$time = date('Y-m-d');

$upload_dir = "Images/".$file;
move_uploaded_file($_FILES['file']['tmp_name'], $upload_dir);

echo "\$id: $id<br>";

$result = mysqli_query($db_conn, "INSERT INTO $fortable VALUES ($id, '$title', '$content', '$file', '$time')");

if ($result) {
    echo "성공";
    // echo "<script>alert('게시 성공하였습니다.')</script>";
    // echo "<script>location.href='uploadNotice.html';</script>";
} else {
    echo "실패";
    // echo "<script>alert('게시 실패하였습니다.')</script>";
    // echo "<script>location.href='uploadNotice.html';</script>";
}

mysqli_close($db_conn);
?>