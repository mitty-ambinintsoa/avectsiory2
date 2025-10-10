document.addEventListener("DOMContentLoaded", () => {
    const lignes = document.querySelectorAll(".contenu8 .row");

    lignes.forEach((ligne) => {
        ligne.classList.remove("visible");
    });

    lignes.forEach((ligne, index) => {
        setTimeout(() => {
            ligne.classList.add("visible");
        }, index * 600);
    });
});
