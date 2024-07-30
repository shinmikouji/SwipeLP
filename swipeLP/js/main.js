// デモ画面の処理
const demo_button = document.querySelector(".demo-button");
const sidebar = document.querySelector(".sidebar");
const handleClick = () => {
  sidebar.classList.toggle("visible");
  sidebar.classList.toggle("hidden");
  // ボタンのテキストを切り替え
  if (sidebar.classList.contains("visible")) {
    demo_button.innerHTML = 'デモ画面<br />を閉じる';
  } else {
    demo_button.innerHTML = 'デモ画面<br />を見る';
  }
};
demo_button.addEventListener("click", handleClick);

/*===========================================================*/
/* アニメーション
/*===========================================================*/
function fadeAnime() {
  function handleClassOnScroll(elements, className) {
    elements.forEach(function(element) {
      let elemPos = element.getBoundingClientRect().top + window.scrollY - 50;
      let scroll = window.scrollY;
      let windowHeight = window.innerHeight;
      if (scroll >= elemPos - windowHeight) {
        element.classList.add(className);
      } else {
        element.classList.remove(className);
      }
    });
  }

  let fadeUpTriggers = document.querySelectorAll('.fadeUpTrigger');
  let flipLeftTriggers = document.querySelectorAll('.flipLeftTrigger');
  let slideInFromLeftTriggers = document.querySelectorAll('.slideInFromLeftTrigger');
  let slideInFromRightTriggers = document.querySelectorAll('.slideInFromRightTrigger');

  handleClassOnScroll(fadeUpTriggers, 'fadeUp');
  handleClassOnScroll(flipLeftTriggers, 'flipLeft');
  handleClassOnScroll(slideInFromLeftTriggers, 'slideInFromLeft');
  handleClassOnScroll(slideInFromRightTriggers, 'slideInFromRight');
}

/*===========================================================*/
/* 関数をまとめる*/
/*===========================================================*/
// ページの読み込みが完了した時にfadeAnimeを実行
window.addEventListener('DOMContentLoaded', fadeAnime);

// スクロールイベント時にfadeAnimeを実行
window.addEventListener('scroll', fadeAnime);