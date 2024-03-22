//pop up menu 
function openPopup() {
    document.getElementById("popupContainer").style.display = "block";
}

function closePopup() {
    document.getElementById("popupContainer").style.display = "none";
}

document.getElementById("newProjectForm").addEventListener("submit", function(event) {
    event.preventDefault();
    // Handle form submission, e.g., send data to server or process it in JavaScript
    alert("Form submitted!");
    closePopup();
});

document.querySelector(".new-project-button").addEventListener("click", openPopup);

