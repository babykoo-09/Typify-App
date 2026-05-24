document.addEventListener("DOMContentLoaded", () => {
    console.log("Dashboard loaded");

    const cards = document.querySelectorAll(".card");

    cards.forEach((card) => {
        card.addEventListener("mouseover", () => {
            card.style.transform = "scale(1.02)";
        });

        card.addEventListener("mouseout", () => {
            card.style.transform = "scale(1)";
        });
    });
});