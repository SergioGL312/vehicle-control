const button = document.getElementById('back-home');

button.addEventListener('click', () => {
    window.location.assign(`http://localhost/vehicle-control/menu.php`);
    // history.back();http://localhost/DSI31/login/menu.php?rol=U
});