document.getElementById('menu-button').addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.remove('hidden');
});

document.getElementById('close-button').addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.add('hidden');
});

document.addEventListener("DOMContentLoaded", function() {
    var accordions = document.querySelectorAll(".accordion");

    accordions.forEach(function(accordion) {
        accordion.addEventListener("click", function() {
            if (this.classList.contains("active")) {
                this.classList.remove("active");
            } else {
                this.classList.add("active");
            }
        });
    });
});