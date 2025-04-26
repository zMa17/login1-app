import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// DARK MODE TOGGLE BUTTON
document.addEventListener("DOMContentLoaded", function () {
    const themeToggleBtn = document.getElementById("theme-toggle");
    const darkIcon = document.getElementById("theme-toggle-dark-icon");
    const lightIcon = document.getElementById("theme-toggle-light-icon");

    // Inisialisasi ikon berdasarkan theme
    if (localStorage.getItem("color-theme") === "dark" || (!localStorage.getItem("color-theme") && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
        darkIcon.classList.remove("hidden");
    } else {
        lightIcon.classList.remove("hidden");
    }

    themeToggleBtn?.addEventListener("click", function () {
        // Toggle icon
        darkIcon.classList.toggle("hidden");
        lightIcon.classList.toggle("hidden");

        // Toggle theme
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    });
});
