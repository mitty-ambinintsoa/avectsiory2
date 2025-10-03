// Navigation entre les réalisations
document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.realisation-item');
    const prevBtn = document.querySelector('.nav-prev');
    const nextBtn = document.querySelector('.nav-next');
    const currentSpan = document.querySelector('.navigation-counter .current');
    const totalSpan = document.querySelector('.navigation-counter .total');
    
    let currentIndex = 0;
    const totalItems = items.length;
    
    // Initialisation
    totalSpan.textContent = totalItems;
    updateNavigation();
    
    // Navigation suivante
    nextBtn.addEventListener('click', function() {
        if (currentIndex < totalItems - 1) {
            switchRealisation(currentIndex + 1);
        }
    });
    
    // Navigation précédente
    prevBtn.addEventListener('click', function() {
        if (currentIndex > 0) {
            switchRealisation(currentIndex - 1);
        }
    });
    
    // Changement de réalisation
    function switchRealisation(newIndex) {
        // Masquer la réalisation actuelle
        items[currentIndex].classList.remove('active');
        
        // Afficher la nouvelle réalisation
        currentIndex = newIndex;
        items[currentIndex].classList.add('active');
        
        updateNavigation();
    }
    
    // Mise à jour de la navigation
    function updateNavigation() {
        currentSpan.textContent = currentIndex + 1;
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex === totalItems - 1;
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