// JS for interactivity

document.addEventListener("DOMContentLoaded", function() {
    console.log("Blogger JS Loaded");

    // Highlight forms on focus
    let inputs = document.querySelectorAll("input, textarea");
    inputs.forEach(input => {
        input.addEventListener("focus", function() {
            this.style.borderColor = "#007BFF";
        });
        input.addEventListener("blur", function() {
            this.style.borderColor = "#ccc";
        });
    });

    // Animate buttons on click
    let buttons = document.querySelectorAll("button");
    buttons.forEach(btn => {
        btn.addEventListener("click", function() {
            btn.style.transform = "scale(0.95)";
            setTimeout(() => { btn.style.transform = "scale(1)"; }, 150);
        });
    });
});

// Confirm before delete
function confirmDelete() {
    return confirm("Are you sure you want to delete this post?");
}
