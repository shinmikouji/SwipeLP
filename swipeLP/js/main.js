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