const itemProgram = document.querySelectorAll(".item-program"),
    table = document.querySelectorAll(".table-cont");

itemProgram.forEach((item, index) => {
    item.addEventListener("click", e => {
        table[index].classList.toggle("is-open");
        table[index].style.overflowX = "auto";

        const icon = item.querySelector("i.bx");

        if (icon.classList.contains("bx-plus")) {
            icon.style.transform = "rotate(90deg)";

            setTimeout(() => {
                icon.classList.remove("bx-plus");
                icon.classList.add("bx-minus");
                icon.style.transform = "rotate(0deg)";
            }, 500)
        } else {
            setTimeout(() => {
                icon.classList.remove("bx-minus");
                icon.classList.add("bx-plus");
                icon.style.transform = "rotate(0deg)";
            }, 500)
        }
        e.stopPropagation();
    })
})