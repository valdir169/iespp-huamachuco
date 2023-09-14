export default function contador() {
    let x = 0;
    let allElements = document.querySelectorAll('[data-valor]');

    function interval() {
        x++;
        for (let i = 0; i < allElements.length; i++) {
            let result = parseInt(allElements[i].getAttribute('data-valor'));

            if (x > result) {
                continue;
            }

            allElements[i].textContent = x + "+";
        }
    }

    setInterval(interval, 200);
}
