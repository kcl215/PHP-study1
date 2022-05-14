<!-- if構文　9時になったらメッセージを変えよう -->

<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>

<?php if ($time < 19): ?>
<p>※営業時間外です</p>
<?php else: ?>
<p>ようこそ</p>
<?php endif; ?>

<?php
$s = 'あ';
// if ($s !== ''):
if ($s):
    echo '$sには文字が入っています';
endif;
?>
<br>
<?php
$x = 9;
if ($x):
    echo '$xは0ではありません';
endif;
?>
<br>
<?php
$x = 0;
if ($x === 0):
    echo '$xは0です';
endif;
?>
<br>
<?php
$x = 0;
if (!$x):
    echo '$xは0です';
endif;
?>