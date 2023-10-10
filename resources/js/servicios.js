document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.desplegable-item');

    accordionItems.forEach(item => {
        const iconContainer = item.querySelector('.icon-container');
        const icon = iconContainer.querySelector('i');

        iconContainer.addEventListener('click', function () {
            accordionItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.desplegable-item-content').style.display = 'none';
                    otherItem.querySelector('.icon-container i').classList.remove('bx-minus');
                    otherItem.querySelector('.icon-container i').classList.add('bx-plus');
                }
            });

            const content = item.querySelector('.desplegable-item-content');
            const isActive = item.classList.toggle('active');

            content.style.display = isActive ? 'block' : 'none';
            icon.classList.toggle('bx-minus', isActive);
            icon.classList.toggle('bx-plus', !isActive);
        });
    });
});