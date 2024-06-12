function sliderStart() {

  const slide = document.getElementById('slide_wrap');      //スライダー親
  const slideItem = slide.querySelectorAll('.slide_item');   //スライド要素
  const totalNum = slideItem.length - 1;                     // スライドの枚数を取得
  const FadeTime = 3000;                                     //フェードインの時間
  const IntarvalTime = 8000;                                 //クロスフェードさせるまでの間隔
  let actNum = 0;                                            //現在アクティブな番号
  let nowSlide;                                              //現在表示中のスライド
  let NextSlide;                                             //次に表示するスライド

  // DOM読み込み時にスライドの1枚目をフェードイン
  slideItem[0].classList.add('show_', 'zoom_');

  // 処理を繰り返す
  setInterval(() => {
      if (actNum < totalNum) {

          nowSlide = slideItem[actNum];
          NextSlide = slideItem[++actNum];

          //.show_削除でフェードアウト
          nowSlide.classList.remove('show_');
          // と同時に、次のスライドがズームしながらフェードインする
          NextSlide.classList.add('show_', 'zoom_');
          //フェードアウト完了後、.zoom_削除
          setTimeout(() => {
              nowSlide.classList.remove('zoom_');
          }, FadeTime);


      } else {

          nowSlide = slideItem[actNum];
          NextSlide = slideItem[actNum = 0];

          //.show_削除でフェードアウト
          nowSlide.classList.remove('show_');
          // と同時に、次のスライドがズームしながらフェードインする
          NextSlide.classList.add('show_', 'zoom_');
          //フェードアウト完了後、.zoom_削除
          setTimeout(() => {
              nowSlide.classList.remove('zoom_');
          }, FadeTime);

      };
  }, IntarvalTime);

}



var tgt = $('.ef');
  //loadとscrollしたとき
  $(window).on('load scroll', function () {
    var wh = $(window).height();
    var sc = $(window).scrollTop();
    var action = function () {
    //.efのある分だけまわす
    tgt.each(function () {
      var border = $(this).offset().top;
      if (sc > border - wh + 100) {
        $(this).addClass('is_visible');
      }
    });
  }; action();
});
