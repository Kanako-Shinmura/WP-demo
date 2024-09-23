document.addEventListener("DOMContentLoaded", function () {
    let scrollAnimElements = document.querySelectorAll(".scrollAnim");

    // ページ読み込み時に要素に ready クラスを追加
    scrollAnimElements.forEach(function (element) {
        element.classList.add("ready");

        // ファーストビューに表示される要素には、少し遅れてactiveクラスを追加
        let windowHeight = window.innerHeight;
        let elementTop = element.getBoundingClientRect().top;

        if (elementTop < windowHeight) {
            setTimeout(function () {
                element.classList.add("active");
            }, 300);  // 300ミリ秒遅延
        }
    });

    // スクロールイベントを監視してアニメーションを発火
    window.addEventListener("scroll", function () {
        let windowHeight = window.innerHeight;
        let scrollAmount = window.scrollY;

        scrollAnimElements.forEach(function (element) {
            let targetPosition = element.getBoundingClientRect().top + window.scrollY;

            if (scrollAmount > targetPosition - windowHeight + 60) {
                element.classList.add("active");
            } else {
                element.classList.remove("active");
            }
        });
    });
});
