// Add JavaScript code here

// Example of interactive content
document.addEventListener("DOMContentLoaded", function() {
    // Example: Toggle navigation menu for smaller screens
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('nav ul');

    menuToggle.addEventListener('click', function() {
        navigation.classList.toggle('show');
    });

    // Example: Display current date in footer
    const footerDate = document.querySelector('.footer-date');
    const currentDate = new Date();
    const year = currentDate.getFullYear();
    footerDate.textContent = `&copy; ${year} Empowering Physically Abled Individuals`;
});
