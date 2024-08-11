document.getElementById('load-more').addEventListener('click', function() {
    const photos = document.querySelectorAll('#photo-grid .photo');
    const button = document.getElementById('load-more');

    if (button.textContent === 'Load More') {
        photos.forEach(photo => {
            photo.classList.remove('hidden');
        });
        button.textContent = 'Hide';
    } else {
        photos.forEach((photo, index) => {
            if (index >= 6) {
                photo.classList.add('hidden');
            }
        });
        button.textContent = 'Load More';
    }
});
