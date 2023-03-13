<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<!-- 상단 시작 { -->
    <div class="Wrap">
        <div class="nav_wrap">
        <?php
    include G5_THEME_PATH.'/nav.php';
        ?>
        </div>
        <header class="header">
            <div class="inner">
                <h1>
                    <a href="/">
                        <img src="<?php echo G5_THEME_URL ?>/img/logo.png" alt="로고이미지">
                    </a>
                </h1>
                <nav class="gnb">
                    <ul>
                        <li><a href="<?php echo G5_THEME_URL ?>/sub01.html">메가 스토리</a></li>
                        <li><a href="">메뉴소개</a></li>
                        <li><a href="">매장</a></li>
                        <li><a href="">창업안내</a></li>
                        <li><a href="">메가소식</a></li>
                    </ul>
                </nav>
                <div class="links">
                    <ul>
                        <li><a href=""><img src="<?php echo G5_THEME_URL ?>/img/sns_blog.png" alt=""></a></li>
                        <li><a href=""><img src="<?php echo G5_THEME_URL ?>/img/sns_facebook.png" alt=""></a></li>
                        <li><a href=""><img src="<?php echo G5_THEME_URL ?>/img/sns_instagram.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </header>
<!-- } 상단 끝 -->


<?php
if(!defined('_INDEX_')) { 
    include G5_THEME_PATH.'/doc/sub.head.php';
}
?>

<!-- 콘텐츠 시작 { -->
