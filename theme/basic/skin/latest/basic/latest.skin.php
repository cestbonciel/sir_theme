<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<div class="lat">
    <h2 class="lat_title">뉴스룸<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" id="btn_more">더보기</a></h2>
    <ul>
    <? for ($i=0; $i<count($list); $i++) {  
			$_content = 
			cut_str(strip_tags($list[$i]['wr_content']),30,'...');
		?>
        <li>
            <? echo "<a href=\"".$list[$i]['href']."\"> "; ?>
                <!-- echo $list[$i]['subject']; -->
				<h4 class="news_title" ><? echo $list[$i]['subject']; ?></h4>



            <? echo "</a>"; ?>
			
            <span class="lt_date"><?php echo $list[$i]['datetime2'] ?></span>

        </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
    <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span><i class="fa fa-plus" aria-hidden="true"></i><span class="sound_only"> 더보기</span></a>

</div>
