import { showModal } from "./contacto";
import contador from "./contador";

document.addEventListener('DOMContentLoaded', () => {
    navBar(".btn-menu", ".nav-menu");
    subMenu(".link-button-click");
    contador();
    topMenu(".navbar")
    scrollTopMenu(".btn-scroll-top");
    showModal();
});

function navBar(btn, menu) {
    const menuElement = document.querySelector(menu),
        btnElement = document.querySelector(btn),
        navbarElement = document.querySelector(".navbar")

    function toggleNavbar() {
        menuElement.classList.toggle("open")
        btnElement.classList.toggle("open")
        document.body.classList.toggle("is-open")

        let width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        width > 1024 ? navbarElement.classList.remove("bg-[#3477db]") : navbarElement.classList.toggle("bg-[#3477db]");
        btnElement.classList.toggle("text-white")
    }

    document.addEventListener("click", e => {
        if (e.target.matches(btn) || e.target.matches(`${btn} *`) || e.target.matches(menu)) {
            toggleNavbar();
            e.stopPropagation();
        }
    })
}

function subMenu(navLink) {
    const navLinkSelectors = document.querySelectorAll(navLink);

    function clickHandler(e) {
        // Close all submenus opened
        navLinkSelectors.forEach(item => {
            if (item !== this) {
                item.classList.remove("arrow-down");
                let submenu = item.nextElementSibling;
                if (submenu) {
                    submenu.style.height = 0;
                }
            }
        });
    
        // Open or close the current submenu
        this.classList.toggle("arrow-down");
        let submenu = this.nextElementSibling;
        if (submenu) {
            let height = 0;
            if (submenu.clientHeight === 0) {
                height = submenu.scrollHeight;
            }
            submenu.style.height = `${height}px`;
        }
    }

    function removeClickHandler() {
        const menuElement = document.querySelector(".nav-menu"),
            navbarElement = document.querySelector(".navbar")

        const width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        if (width > 1024) {
            menuElement.classList.remove("open")
            document.body.classList.remove("is-open")
            navbarElement.classList.remove("bg-[#3477db]")
            navLinkSelectors.forEach(item => {
                item.removeEventListener("click", clickHandler)
            })
        } else {
            navLinkSelectors.forEach(item => {
                0
                item.addEventListener("click", clickHandler)
            })
        }
    }
    removeClickHandler()
    window.addEventListener("resize", removeClickHandler)
}


function topMenu(menu) {
    const $topMenu = document.querySelector(menu);

    window.addEventListener("scroll", e => {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        scrollTop > 120 ? $topMenu.classList.add("topMenu") : $topMenu.classList.remove("topMenu");
    });

    document.addEventListener("click", e => {
        if (e.target.matches(menu)) {
            window.scrollTo({
                behavior: "smooth",
                top: 0
            })
        }
    });
}

function scrollTopMenu(button) {
    const scrollButton = document.querySelector(button)

    window.addEventListener("scroll", e => {
        let scrollToTop = window.pageYOffset || document.documentElement.scrollTop;
        scrollToTop > 180 ? scrollButton.classList.remove("hidden") : scrollButton.classList.add("hidden");
    });

    document.addEventListener("click", e => {
        if (scrollButton.contains(e.target)) {
            window.scrollTo({
                behavior: "smooth",
                top: 0
            })
        }
    });
}