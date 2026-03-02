(function () {
    var nav = document.getElementById("mainNavbar");
    if (!nav) return;
    window.addEventListener(
        "scroll",
        function () {
            if (window.scrollY > 60) {
                nav.classList.add("scrolled");
            } else {
                nav.classList.remove("scrolled");
            }
        },
        { passive: true },
    );
})();
