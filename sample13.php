<!-- 少数を切り上げ・切り下げ四捨五入しよう -->
3,000円のものから、100円引きした場合、
    <?php echo floor(100 / 3000 * 100); ?>%引きです。
    <!-- floor 切り捨て -->

<br>
<?php echo ceil(3.33); ?>
<!-- ceil 切り上げ -->
<br>

<?php echo round(3.66); ?>
<!-- round 四捨五入 -->
<br>

<?php echo round(3.66, 1); ?>
<!-- round 四捨五入 -->