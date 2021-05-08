window.addEventListener('load', () => {
    
    const moon = document.querySelector('.fa-cloud-moon');
    const sun = document.querySelector('.fa-cloud-sun');

    moon.addEventListener('click', () => {
        moon.classList.add('hidden');
        sun.classList.remove('hidden');
    });

    sun.addEventListener('click', () => {
        sun.classList.add('hidden');
        moon.classList.remove('hidden');
    });

});