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


  //   // ハンバーガーメニューボタンにクリックイベントを指定
  $(".sp-menu").click(function () {
    // ハンバーガーメニューボタンとナビゲーションメニューに
    // 同時にopenクラスを付けたり外したりする
    $(".header__inner--sp").toggleClass("open");
    // $(".sp-menu").toggleClass("open");
  });

// 【解説】.sp-menuをクリックした際に、openクラスを.header__inner--spに付けることで、メニューの表示を切り替える。
// CSS/SCSS: .header__inner--spがopenクラスを持つとき、transform: translateY(0);でメニューが表示されるようにしている。
// これで、ハンバーガーメニューの開閉が.sp-menuのクリックに連動するようになります。
});



// 確認画面モーダル
jQuery(document).ready(function($) {
  // フォーム送信ボタンが押されたとき
  $('#contact .wpcf7-submit').click(function(e) {
      e.preventDefault(); // フォームの自動送信を防ぐ

      // 各フィールドの値を取得してモーダルにセット
      $('#modal-name').text($('#your-name').val());
      $('#modal-email').text($('#your-email').val());
      $('#modal-tel').text($('#your-tel').val());
      $('#modal-message').text($('#your-message').val());

      // モーダルを表示wz
      $('#confirmation-modal').fadeIn();
  });

  // モーダルのキャンセルボタンが押されたとき
  $('#cancel-modal').click(function() {
      $('#confirmation-modal').fadeOut();
  });

  // モーダルの送信ボタンが押されたとき
  $('#submit-form').click(function() {
      $('#confirmation-modal').fadeOut();

  // 実際のフォーム送信
  $('#contact-form').submit();

  // フォーム送信後にサンクスページにリダイレクト
  window.location.href = 'http://pospal.local/thanks/'; // サンクスページのURL
  });
});


jQuery(document).ready(function($) {
  $('#contact .wpcf7-submit').click(function(e) {
      e.preventDefault();
      console.log('Submit button clicked');  // デバッグ用のログ
  });
});
