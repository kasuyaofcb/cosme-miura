// スムーススクロール
document.addEventListener("DOMContentLoaded", function () {
  // 'href' が '#' で始まるすべてのリンクを取得
  const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');

  // 各リンクにクリックイベントを追加
  smoothScrollLinks.forEach(function (link) {
    link.addEventListener("click", function (event) {
      // デフォルトのリンク動作を無効化（ページ遷移を防ぐ）
      event.preventDefault();

      // ページの最上部へスムーススクロール
      window.scrollTo({
        top: 0,
        behavior: "smooth", // スムーススクロールオプション
      });
    });
  });
});

// ハンバーガ―メニュー
const hamburgerNav = document.querySelector(".header__hamburgerNav");
const hamburgerMenu = document.querySelector(".header__hamburgerMenu");
const hamburgerItem = document.querySelectorAll(".header__hamburgerItem");
const hamburgerBox = document.querySelector(".header__hamburgerBox");

hamburgerBox.addEventListener("click", function () {
  hamburgerNav.classList.toggle("active");
  hamburgerBox.classList.toggle("active");
  hamburgerMenu.classList.toggle("active");
});

for (let i = 0; i < hamburgerItem.length; i++) {
  hamburgerItem[i].addEventListener("click", function () {
    hamburgerNav.classList.toggle("active");
    hamburgerBox.classList.toggle("active");
    hamburgerMenu.classList.toggle("active");
  });
}
