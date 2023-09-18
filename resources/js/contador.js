export default function contador() {
    let allElements = document.querySelectorAll('[data-valor]');

    // Almacenar elementos ya observados
    let observedElements = new Set();

    function observeContent(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const targetElement = entry.target;
                const targetValue = parseInt(targetElement.getAttribute('data-valor'));

                // Verificar si el elemento ya ha sido observado
                if (!observedElements.has(targetElement)) {
                    let x = 0;
                    const intervalId = setInterval(() => {
                        if (x <= targetValue) {
                            targetElement.textContent = x + "+";
                            x++;
                        } else {
                            clearInterval(intervalId);

                            // Marcar el elemento como observado
                            observedElements.add(targetElement);
                        }
                    }, 200);
                }
            }
        });
    }

    const observer = new IntersectionObserver(observeContent, { threshold: 0.5 });
    allElements.forEach(el => observer.observe(el));
}
