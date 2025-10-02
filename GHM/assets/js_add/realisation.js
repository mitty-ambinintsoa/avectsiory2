// Navigation entre les réalisations
document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.realisation-item');
    const prevBtn = document.querySelector('.nav-prev');
    const nextBtn = document.querySelector('.nav-next');
    const progressBar = document.querySelector('.progress-bar');
    const currentText = document.querySelector('.current-realisation');
    const totalText = document.querySelector('.total-realisations');
    
    let currentIndex = 0;
    const totalItems = items.length;
    
    // Initialisation
    totalText.textContent = totalItems;
    updateNavigation();
    
    // Navigation suivante
    nextBtn.addEventListener('click', function() {
        if (currentIndex < totalItems - 1) {
            items[currentIndex].classList.remove('active');
            currentIndex++;
            items[currentIndex].classList.add('active');
            updateNavigation();
        }
    });
    
    // Navigation précédente
    prevBtn.addEventListener('click', function() {
        if (currentIndex > 0) {
            items[currentIndex].classList.remove('active');
            currentIndex--;
            items[currentIndex].classList.add('active');
            updateNavigation();
        }
    });
    
    // Mise à jour de la navigation et progression
    function updateNavigation() {
        // Barre de progression
        const progress = ((currentIndex + 1) / totalItems) * 100;
        progressBar.style.width = progress + '%';
        
        // Texte actuel
        currentText.textContent = currentIndex + 1;
        
        // Boutons de navigation
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex === totalItems - 1;
        
        // Animation
        items.forEach(item => {
            if (item.classList.contains('active')) {
                item.style.animation = 'fadeIn 0.5s ease';
            }
        });
    }
    
    // Modal pour les images
    const imageModal = document.getElementById('imageModal');
    if (imageModal) {
        imageModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const imageSrc = button.getAttribute('data-image');
            const modalImage = imageModal.querySelector('.modal-image');
            modalImage.src = imageSrc;
        });
    }
    
    // Navigation au clavier
    document.addEventListener('keydown', function(event) {
        if (event.key === 'ArrowLeft' && !prevBtn.disabled) {
            prevBtn.click();
        } else if (event.key === 'ArrowRight' && !nextBtn.disabled) {
            nextBtn.click();
        }
    });
});