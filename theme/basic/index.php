<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');

//echo G5_THEME_PATH; ///host/home5/hanulzoo/html/theme/basic/head.php
?>
<div style="width: 100%;height: 200px;background: #f00;"></div>
<h2 class="sound_only">최신글</h2>



<div class="latest_wr">
    <!--  사진 최신글2 { -->
    <?php echo latest('theme/basic', 'bbs01', 5, 23); ?>
    <!-- } 사진 최신글2 끝 -->
</div>
<div class="latest_wr">
    <!--  사진 최신글2 { -->
    <?php echo latest('theme/basic', 'bbs02', 2, 20); ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>