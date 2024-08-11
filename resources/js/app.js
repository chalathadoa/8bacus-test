// social media
document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById('mobile-menu');
    const socialButtons = document.getElementById('social-media');

    if (menuButton && socialButtons) {
        menuButton.addEventListener('click', function() {
            if (socialButtons.classList.contains('hidden-social')) {
                socialButtons.classList.remove('hidden-social');
            } else {
                socialButtons.classList.add('hidden-social');
            }
        });
    }
});

