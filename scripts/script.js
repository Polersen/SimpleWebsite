document.addEventListener("click", (event) => {
    if (event.target.classList.contains("toggleHeader")) {
        const targetId = event.target.getAttribute("data-target");
        const targetElement = document.getElementById(targetId);


        if (targetElement.style.display === "none") {
            targetElement.style.display = "block";
        }
        else {
            targetElement.style.display = "none";
        }
    }
});