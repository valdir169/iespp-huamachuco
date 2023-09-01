document.addEventListener('DOMContentLoaded', () => {
    navBar(".btn-menu", ".nav-menu");
    subMenu(".nav-link", ".submenu");
});

function navBar(btn, menu) {
    document.addEventListener("click", e => {

        if (e.target.matches(btn) || e.target.matches(`${btn} *`)) {
            document.querySelector(menu).classList.toggle("open")
            document.querySelector(btn).classList.toggle("open")
        }
    })
}

function subMenu(navLink, menu) {
    const navLinkSelectors = document.querySelectorAll(navLink);
    const menuSelector = document.querySelectorAll(menu);

    navLinkSelectors.forEach((link) => {
        link.addEventListener("click", e => {
            const submenu = link.querySelector(menu);
            submenu.classList.toggle("is-open");
            e.stopPropagation();


            let width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            const elements = document.querySelectorAll(".submenu")

            if(width > 780) {
                elements.forEach(e => {
                    e.classList.remove("is-open")
                })
            }
        })
    })


    /* menuSelector.forEach(sub => {
        sub.addEventListener("click", e => {
            e.stopPropagation();
        });
    }) */


    document.addEventListener("click", () => {
        menuSelector.forEach(sub => {
            sub.classList.remove("is-open");
        })
    })
}