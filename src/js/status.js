document.addEventListener('DOMContentLoaded', function () {
    const trackBtn = document.querySelector('.track-btn');
    const statusResult = document.getElementById('status-result');

    trackBtn.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent form submit if inside form
        statusResult.style.display = 'block';
        // Optionally scroll to result
        statusResult.scrollIntoView({ behavior: 'smooth' });
    });
});

