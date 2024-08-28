document.addEventListener('DOMContentLoaded', () => {
    const themeToggleButton = document.getElementById('theme-toggle');
    const body = document.body;
    const cats = document.querySelectorAll(".category-select");
    const cards = document.querySelectorAll(".card-ques, .card-article");
    const containers = document.querySelectorAll(".ques-slider, .top-slider-con"); // تصحیح انتخابگر

    const currentTheme = localStorage.getItem('theme') || 'light';

    const applyTheme = (isDark) => {
        body.classList.toggle('dark-mode', isDark);
        themeToggleButton.classList.toggle('button-dark-mode', isDark);
        themeToggleButton.classList.toggle('button-light-mode', !isDark);

        cards.forEach(card => {
            card.classList.toggle("dark-mode-card", isDark);
            card.classList.toggle("bg-light", !isDark);
        });

        cats.forEach(cat => cat.classList.toggle("dark-mode-cat", isDark));

        // اضافه کردن یا حذف کلاس برای containers در حالت شب
        containers.forEach(container => {
            container.classList.toggle("dark-mode", isDark);
        });
    };

    // تنظیم تم بر اساس مقدار ذخیره شده
    applyTheme(currentTheme === 'dark');

    // مدیریت کلیک دکمه تغییر تم
    themeToggleButton.addEventListener('click', () => {
        const isDarkMode = body.classList.contains('dark-mode');
        applyTheme(!isDarkMode);
        localStorage.setItem('theme', isDarkMode ? 'light' : 'dark');
    });
});
