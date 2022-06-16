const initApp = () => {
    const droparea = document.querySelector('.droparea');
    const active = () => droparea.classList.add('green-border');
    const inactive = () => droparea.classList.remove('green-border');
    const prevents = (e) => e.preventDefault
}

document.addEventListener("DOMContentLoaded", initApp);