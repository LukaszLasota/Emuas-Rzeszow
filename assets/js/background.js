function updateBlackClass() {
    if ($(window).scrollTop() || $(window).width() <= 800) {
        $('.navbar').addClass('bg');
    } else {
        $('.navbar').removeClass('bg');
    }
};

$(window).on("scroll", function () {
    updateBlackClass();
});
updateBlackClass();