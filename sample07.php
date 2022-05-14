<!-- while構文　繰り返し処理する -->
<?php
$i = 1;
// echo $i . '<br>';

// $i = $i + 1;
// echo $i . '<br>';

// リファクタリング
while ($i < 366) :
    echo $i . '日<br>';
    $i = $i + 1;
endwhile;

?>