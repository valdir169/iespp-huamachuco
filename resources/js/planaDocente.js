const tableContainer = document.getElementById("table-open"),
    table = document.getElementById("table"),
    icon = document.getElementById("icon");

tableContainer.addEventListener("click", e => {
    table.classList.toggle("is-open");
    table.style.overflowX = "auto";
    // table.style.width = 100;
    e.stopPropagation();

    if (icon.classList.contains("bx-plus")) {
        icon.classList.remove("bx-plus")
        icon.classList.add("bx-minus")
    } else {
        icon.classList.add("bx-plus")
        icon.classList.remove("bx-minus")
    }   

})