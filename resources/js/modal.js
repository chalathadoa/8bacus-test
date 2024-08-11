const modals = document.querySelectorAll('.modal');
const jobButtons = document.querySelectorAll('.job-btn');
const closeButtons = document.querySelectorAll('.close');

jobButtons.forEach(button => {
    button.addEventListener('click', function () {
        const jobId = this.getAttribute('data-job');
        const modal = document.getElementById(`${jobId}-modal`);
        modal.style.display = "block";
    });
});

closeButtons.forEach(button => {
    button.addEventListener('click', function () {
        const modal = this.closest('.modal');
        modal.style.display = "none";
    });
});

window.addEventListener('click', function (event) {
    modals.forEach(modal => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});

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