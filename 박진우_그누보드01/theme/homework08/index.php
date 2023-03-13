<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<main>
            <section class="mainVisual">
                <div class="inner">
                    <div class="main_slide">
                        <div class="itm01">

                        </div>
                        <div class="itm02">

                        </div>
                        <div class="itm03">

                        </div>
                    </div>
                </div>
            </section>
            <section class="mainContents">
                <div class="inner">
                    <div class="left">
                        <div class="tit">
                            <span>상큼한 일상을 향해</span>
                            <h2>Ready BERRY Go!</h2>
                            <strong>메가MGC커피 딸기 시즌 메뉴</strong>
                            <p>지금 메가MGC커피에서
                                <br />
                                상큼한 딸기를 만나, 당신의 일상을 달콤하게 시작해보세요.
                            </p>
                            <button>
                                <a href="">메뉴 더보기</a>
                            </button>
                        </div>
                    </div>
                    <div class="right">
                        <div class="con_slide">
                            <div class="itm itm01">
                                <img src="<?php echo G5_THEME_URL ?>/img/con_slide01.jpg" alt="">
                                <div class="desc">
                                    <h3>딸기 쿠키 프라페</h3>
                                    <p>Strawberry Cookie Frappe</p>
                                    <span>
                                        부드러운 바닐라와 달달한 딸기, 바삭한 오레오 쿠키가 달콤한 하모니를 선물하는 프라페.</span>
                                </div>
                            </div>
                            <div class="itm itm02">
                                <img src="<?php echo G5_THEME_URL ?>/img/con_slide02.jpg" alt="">
                                <div class="desc">
                                    <h3>딸기주스</h3>
                                    <p>
                                        Strawberry Juice</p>
                                    <span>피쉬 콜라겐 480mg을 더한 산뜻한 맛과 향의 딸기 주스
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

<?php
include_once(G5_THEME_PATH.'/tail.php');