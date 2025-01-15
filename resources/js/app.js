import './bootstrap';
import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

let cpt = 5; // Index initial

document.getElementById('next').addEventListener('click', () => {
    // Retirer la classe active de l'élément actuel
    document.getElementById('c' + cpt).classList.remove('active');

    // Incrémenter et revenir à 0 si on dépasse le dernier index
    cpt = (cpt + 1) % 6;

    // Ajouter la classe active au nouvel élément
    console.log(cpt);
    document.getElementById('c' + cpt).classList.add('active');
});

document.getElementById('prev').addEventListener('click', () => {
    // Retirer la classe active de l'élément actuel
    document.getElementById('c' + cpt).classList.remove('active');

    // Décrémenter et revenir à 5 si on descend en dessous de 0
    cpt = (cpt - 1 + 6) % 6;

    // Ajouter la classe active au nouvel élément
    console.log(cpt);
    document.getElementById('c' + cpt).classList.add('active');
});

    


let rotationStep = 60; // 360° / 6 éléments
let currentRotation = 0;

document.getElementById("next").addEventListener("click", () => {
    currentRotation -= rotationStep; // Tourne dans le sens horaire
    gsap.to("#bobine", {
        rotation: currentRotation,
        transformOrigin: "center",
        duration: 0.5,
        ease: "power2.inOut",
    });
});

document.getElementById("prev").addEventListener("click", () => {
    currentRotation += rotationStep; // Tourne dans le sens anti-horaire
    gsap.to("#bobine", {
        rotation: currentRotation,
        transformOrigin: "center",
        duration: 0.5,
        ease: "power2.inOut",
    });
});



