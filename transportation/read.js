const dropdownContent = document.querySelector(".dropdown-content");

document.querySelector(".dropbtn").addEventListener("click", function() {
  dropdownContent.classList.toggle("show");
});

document.querySelectorAll(".popup-form").forEach(function(popup) {
  popup.addEventListener("click", function(event) {
    event.stopPropagation();
  });
});

window.addEventListener("click", function(event) {
  if (!event.target.matches(".dropbtn")) {
    dropdownContent.classList.remove("show");
  }
});
