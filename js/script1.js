// Script to handle mobile menu toggle (hamburger menu)
document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.hamburger');
    const navList = document.querySelector('.nav-list ul');

    // Toggle the visibility of the navigation menu on mobile
    hamburger.addEventListener('click', () => {
        navList.classList.toggle('open');
        hamburger.classList.toggle('active');
    });

    // Close the navigation menu when a link is clicked (on mobile)
    document.querySelectorAll('.nav-list ul li a').forEach(link => {
        link.addEventListener('click', () => {
            navList.classList.remove('open');
            hamburger.classList.remove('active');
        });
    });
});

// Script to show "Thank You" popup for feedback form
function showFeedbackPopup(message) {
    alert(message); // Basic alert for feedback message
}

// Redirect after a delay (10 seconds)
function redirectAfterDelay(url, delay) {
    setTimeout(function () {
        window.location.href = url;
    }, delay);
}

// Example: Call the redirect after form submission
if (window.location.pathname === '/submit_form.php') {
    redirectAfterDelay('index.html', 10000); // Redirect after 10 seconds to homepage
}
