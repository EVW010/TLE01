document.addEventListener("DOMContentLoaded", () => {
    const scoreElement = document.getElementById("current-score");
    const retryBtn = document.getElementById("retry-btn");

    // Functie om een willekeurige score te genereren en te tonen
    function generateRandomScore() {
        // Genereert een willekeurig heel getal tussen 0 en 10
        const randomScore = Math.floor(Math.random() * 11);
        
        // Update de tekst in de HTML
        scoreElement.textContent = randomScore;

        // Voeg kort een animatie-effect toe aan het cijfer
        scoreElement.classList.remove("pop-effect");
        void scoreElement.offsetWidth; // Trigger een reflow om de animatie te resetten
        scoreElement.classList.add("pop-effect");
    }

    // 1. Genereer direct een score als de pagina laadt
    generateRandomScore();

    // 2. Genereer een nieuwe score als er op de knop geklikt wordt
    retryBtn.addEventListener("click", () => {
        generateRandomScore();
    });
});
