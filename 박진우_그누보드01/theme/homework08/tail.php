<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

 
<footer class="footer">
            <div class="inner">
                <div class="left">
                    <ul>
                        <li class="logo">
                            <img src="<?php echo G5_THEME_URL ?>/img/logo_w.png" alt="">
                        </li>
                        <li class="sns">
                            <a href=""><img src="<?php echo G5_THEME_URL ?>/img/sns_blog.png" alt=""></a>
                            <a href=""><img src="<?php echo G5_THEME_URL ?>/img/sns_facebook.png" alt=""></a>
                            <a href=""><img src="<?php echo G5_THEME_URL ?>/img/sns_instagram.png" alt=""></a>
                        </li>
                    </ul>
                    <p>
                        <strong>주식회사 앤하우스</strong>
                        대표자 : 김대영 본사대표번호 : 02-335-0656 FAX : 02-325-5199
                        <br />
                        사업자등록번호 : 105-87-51367
                        <br />
                        주소 : 서울특별시 강남구 강남대로 518 11층, 13층 (주)앤하우스
                        <br />
                        개인정보보호 관리책임자 : 김영오
                    </p>
                </div>
                <div class="right">
                    <ul>
                        <li>
                            <p>메가 스토리</p>
                            <ul>
                                <li><a href="">브랜드</a></li>
                                <li><a href="">BI</a></li>
                                <li><a href=""> 오시는 길</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>메뉴소개</p>
                            <ul>
                                <li><a href="">음료</a></li>
                                <li><a href="">푸드</a></li>
                                <li><a href="">상품</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>매장</p>
                            <ul>
                                <li><a href="">매장찾기</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>창업안내</p>
                            <ul>
                                <li><a href="">개설비용</a></li>
                                <li><a href="">인테리어</a></li>
                                <li><a href="">창업문의</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>메가소식</p>
                            <ul>
                                <li><a href="">이벤트</a></li>
                                <li><a href="">FAQ</a></li>
                                <li><a href="">고객의 소리</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>




    <script src="<?php echo G5_THEME_URL ?>/js/slick.min.js"></script>
    <script src="<?php echo G5_THEME_URL ?>/js/homework08.js"></script>





<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");