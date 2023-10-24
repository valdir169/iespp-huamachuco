import contador from "./contador";

document.addEventListener('DOMContentLoaded', () => {
    navBar(".btn-menu", ".nav-menu");
    subMenu(".link-button-click");
    contador();
    topMenu(".navbar")
    scrollTopMenu(".btn-scroll-top");
});

function navBar(btn, menu) {
    document.addEventListener("click", e => {

        if (e.target.matches(btn) || e.target.matches(`${btn} *`)) {
            document.querySelector(menu).classList.toggle("open")
            document.querySelector(btn).classList.toggle("open")
            document.body.classList.toggle("is-open")

            let width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            width > 1024 ? document.querySelector(".navbar").classList.remove("bg-[#3477db]") : document.querySelector(".navbar").classList.toggle("bg-[#3477db]");
            document.querySelector(".btn-menu").classList.toggle("text-white");
            e.stopPropagation()
        }

        if (e.target.matches(menu)) {
            document.querySelector(menu).classList.remove("open")
            document.querySelector(btn).classList.remove("open")
            document.body.classList.toggle("is-open")

            let width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
            width > 1024 ? document.querySelector(".navbar").classList.remove("bg-[#3477db]") : document.querySelector(".navbar").classList.toggle("bg-[#3477db]");
            document.querySelector(".btn-menu").classList.toggle("text-white");
            e.stopPropagation()
        }


    })
}

function subMenu(navLink) {
    const navLinkSelectors = document.querySelectorAll(navLink);

    function clickHandler(e) {
        this.classList.toggle("arrow-down")
        let height = 0
        let submenu = this.nextElementSibling
        // console.log(submenu.scrollHeight)
        if (submenu.clientHeight === 0) {
            height = submenu.scrollHeight
        }
        submenu.style.height = `${height}px`
    }

    navLinkSelectors.forEach((item) => {
        item.addEventListener("click", clickHandler)
    })


    function removeClickHandler() {
        const width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        if (width > 1024) {
            navLinkSelectors.forEach(item => {
                item.removeEventListener("click", clickHandler)
            })
        } else {
            navLinkSelectors.forEach(item => {
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