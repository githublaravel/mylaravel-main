let lastScrollTop = 0;
const navbar = document.querySelector('.nav-mb');

window.addEventListener('scroll', function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop) {
        // کاربر به پایین اسکرول می‌کند
        navbar.classList.add('hide');
    } else {
        // کاربر به بالا اسکرول می‌کند
        navbar.classList.remove('hide');
    }
    lastScrollTop = scrollTop;
});
