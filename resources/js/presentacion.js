document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".nav-tabs li");
    const tabContents = document.querySelectorAll(".tab-content");

    tabs.forEach((tab, index) => {
        tab.addEventListener("click", function (e) {
            
            tabs.forEach((t) => t.classList.remove("active"));
            tabContents.forEach((content) => content.classList.remove("active"));

            tab.classList.add("active");
            tabContents[index].classList.add("active");
            e.preventDefault();
        });
    });
});