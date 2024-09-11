document.addEventListener('DOMContentLoaded', function () {

    // Filter project cards by tag
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');
            projectCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-tags').includes(
                    filter)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Check for success message in the session and trigger the modal
    if (session('success')) {
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
    }
});