<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
<?php if (!defined("_INDEX_")) { ?>
    </div>

</div>

<?php } ?>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">
  <div class="container">
    <div class="ft_top">
          <div class="ft_top_left">
            <?php
            // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
            // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
            // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정

        	echo latest('theme/basic', 'notice', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
            ?>
              <!-- <p class="ft_top_left_title">고멧263</p> -->
              <!-- <ul>
                <li class="ft_top_left_account">국민/751501-00-053266</li>
                <li class="ft_top_left_account">예금주:하찬호(G.O.M.E.T 263)</li>
                <li class="ft_top_left_account">경기도 가평군 가평읍 용추로 227-98</li>
              </ul> -->
          </div>

          <div class="ft_top_right">
                <p class="ft_top_right_cscenter">Tel.</p>
                <p class="ft_top_right_cscenter">031-582-3685</p>
                <p class="ft_top_right_cstel">010-2449-8677</p>
                <p class="ft_top_right_cstel">010-4241-8677</p>
                <!-- <p class="ft_top_right_domicile">경기도 가평군 가평읍 용추로 227-98</p> -->
          </div>
    </div>

    <div class="ft_bottom">
          <ul class="ft_menu">
                <li style="padding-right: 30px;">고멧263 소개</li>
                <li>개인정보취급방침</li>
          </ul>
          <p>COPYRIGHT 2021 UNID ALL RIGHTS RESERVED</p>
    </div>

  </div>





    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

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
