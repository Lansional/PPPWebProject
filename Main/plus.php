<?php
$score=file("score.dat");
$fp=fopen("score.dat", "wb");



// $no=1;
// $score=$no+$score;

echo $score;
fclose($fp);
?>