document.addEventListener("DOMContentLoaded", function() {
    // Create and append the back-to-top button
    var backToTopButton = document.createElement('div');
    backToTopButton.id = 'GoToTheTop1';
    backToTopButton.className = 'sbttBacktotop';
    backToTopButton.innerHTML = '<img src="' + sbttback.sbttimg + '" alt="sbtt">';
    document.body.appendChild(backToTopButton);

    // Show/hide back-to-top button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.scrollY !== 0) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });

    // Smooth scroll to top when the button is clicked
    backToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        scrollToTop();
    });
});

// Function to smoothly scroll to the top
function scrollToTop() {
    var currentPosition = document.documentElement.scrollTop || document.body.scrollTop;

    if (currentPosition > 0) {
        window.requestAnimationFrame(scrollToTop);
        window.scrollTo(0, currentPosition - currentPosition / 8);
    }
}



