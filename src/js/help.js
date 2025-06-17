document.addEventListener('DOMContentLoaded', function () {
    const next = document.querySelector('.next');
    const prev = document.querySelector('.prev');
    const slide = document.querySelector('.slide');

    if (!next || !prev || !slide) return; // Exit if required elements are missing

    next.addEventListener('click', function () {
        const items = document.querySelectorAll('.item');
        slide.appendChild(items[0]);
    });

    prev.addEventListener('click', function () {
        const items = document.querySelectorAll('.item');
        slide.prepend(items[items.length - 1]);
    });
});
