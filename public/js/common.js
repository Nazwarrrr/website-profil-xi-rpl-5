// public/js/common.js — dipakai di semua halaman lewat layout

document.addEventListener('DOMContentLoaded', () => {

    // Toggle menu mobile
    const navToggle = document.getElementById('navToggle');
    const navMobile = document.getElementById('navMobile');
    if (navToggle && navMobile) {
        navToggle.addEventListener('click', () => {
            navMobile.classList.toggle('open');
        });
    }

    // Animasi reveal saat elemen masuk viewport
    const revealEls = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => entry.target.classList.add('in-view'), i * 70);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });
    revealEls.forEach(el => observer.observe(el));

});
