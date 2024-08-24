document.addEventListener('DOMContentLoaded', () => {
    const themeToggleButton = document.getElementById('theme-toggle');
    const body = document.body;
    const currentTheme = localStorage.getItem('theme') || 'light';
    const cards = document.querySelectorAll(".card-article");
    // بررسی انتخاب عنصر cards
    console.log('Elements cards found:', cards);
    if (cards.length > 0) {

        if (currentTheme === 'dark') {
            body.classList.add('dark-mode');
            themeToggleButton.classList.remove('button-light-mode');
            themeToggleButton.classList.add('button-dark-mode');
            cards.forEach(card => card.classList.add("dark-mode-card"));
        } else {
            body.classList.remove('dark-mode');
            themeToggleButton.classList.remove('button-dark-mode');
            themeToggleButton.classList.add('button-light-mode');
            cards.forEach(card => card.classList.remove("dark-mode-card"));
        }

        // مدیریت کلیک دکمه تغییر تم
        themeToggleButton.addEventListener('click', () => {
            if (body.classList.contains('dark-mode')) {
                body.classList.remove('dark-mode');
                themeToggleButton.classList.remove('button-dark-mode');
                themeToggleButton.classList.add('button-light-mode');
                localStorage.setItem('theme', 'light');
                cards.forEach(card => card.classList.remove("dark-mode-card"));
            } else {
                body.classList.add('dark-mode');
                themeToggleButton.classList.remove('button-light-mode');
                themeToggleButton.classList.add('button-dark-mode');
                localStorage.setItem('theme', 'dark');
                cards.forEach(card => card.classList.add("dark-mode-card"));
            }
        });
    } else {
        console.log('Elements cards not found');
    }
});
