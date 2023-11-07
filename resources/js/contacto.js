export function showModal() {
    const message = document.getElementById('message-alert');
    const close = document.getElementById('close');

    if (message) {
        setInterval(() => {
            message.style.display = 'none';
        }, 3000)

        close.addEventListener('click', function () {
            message.style.display = 'none';
        });
    }
}