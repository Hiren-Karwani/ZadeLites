document.addEventListener('DOMContentLoaded', () => {
    const mainImage = document.getElementById('main-image');
    const thumbnails = document.querySelectorAll('.thumbnail');
    
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', () => {
            mainImage.src = thumbnail.src;
        });
    });

    document.getElementById('buy-now-btn').addEventListener('click', () => {
        alert('Thank you for contacting us!');
        window.open('https://wa.me/918452930292', '_blank');
    });
});
