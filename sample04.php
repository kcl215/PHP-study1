<?php
date_default_timezone_set('Asia/Tokyo');
echo date('G時 i分 s秒');
?>
<br>
<?php
date_default_timezone_set('Asia/Tokyo');
echo '現在は、';
echo date('G時 i分 s秒');
echo 'です';
?>
<br>
<!-- 文字列連結　 -->
<?php
date_default_timezone_set('Asia/Tokyo');
echo '現在は、' . date('G時 i分 s秒') . 'です';
?>
<br>
<?php
date_default_timezone_set('Asia/Tokyo');
echo '現在は、' , date('G時 i分 s秒') , 'です';
?>
