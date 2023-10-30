const links = document.querySelectorAll('.list-group a');

links.forEach(link => {
    link.addEventListener('click', () => {
        // Remove the "active" class from all links
        links.forEach(link => link.classList.remove('active'));

        // Add the "active" class to the clicked link
        link.classList.add('active');
    });
});
