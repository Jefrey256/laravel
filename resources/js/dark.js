document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('theme-toggle');
    const htmlElement = document.documentElement;
    const themeIcon = document.getElementById('theme-toggle-icon');

    function updateIcon() {
        if (htmlElement.classList.contains('dark')) {
            themeIcon.innerHTML = `
                <path d="M12 3v1m0 16v1m8.485-8.485h1m-16 0h1m12.12 7.071l.707.707M6.343 6.343l.707.707m12.12-7.071l-.707.707M6.343 17.657l-.707-.707M12 7a5 5 0 0 1 0 10V7z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            `;  // Ícone da lua para o tema escuro
        } else {
            themeIcon.innerHTML = `
                <path d="M12 3a9 9 0 0 0 0 18 9 9 0 0 0 0-18z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            `;  // Ícone do sol para o tema claro
        }
    }

    toggleButton.addEventListener('click', function () {
        htmlElement.classList.toggle('dark');
        if (htmlElement.classList.contains('dark')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
        updateIcon();
    });

    if (localStorage.getItem('theme') === 'dark') {
        htmlElement.classList.add('dark');
    }

    updateIcon();
});
