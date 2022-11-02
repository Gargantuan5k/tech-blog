/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
let toggle = document.querySelector("#header .toggle-button");
let collapse = document.querySelectorAll("#header .collapse")

toggle.addEventListener('click', function() {
    collapse.forEach(col => col.classList.toggle("collapse-toggle"))
})
