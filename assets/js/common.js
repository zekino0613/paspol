jQuery(document).ready(function ($) {
  $('.mainvisual__images').slick({
    dots: false, // ナビゲーションのドットを非表示
    infinite: true,// 無限ループ
    speed: 1000,// アニメーション速度
    fade: true,// フェードイン無効
    cssEase: 'linear',// アニメーションのパターン
    arrows: true, // 左右の矢印の有無
    autoplay: true, // 自動再生
    autoplaySpeed: 4000, // 4秒ごとに切り替え
  });


  $('.js-open').on('click', function(){
    $('.js-nav').toggleClass('active');
  
  });
});  