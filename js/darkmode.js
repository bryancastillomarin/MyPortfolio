window.addEventListener('load', () => {
    
    const body = document.querySelector('body');
    const moon = document.querySelector('.fa-cloud-moon');
    const sun = document.querySelector('.fa-cloud-sun');

    moon.addEventListener('click', () => {
        moon.classList.add('hidden');
        sun.classList.remove('hidden');
        body.classList.toggle('dark');
    });

    sun.addEventListener('click', () => {
        sun.classList.add('hidden');
        moon.classList.remove('hidden');
        body.classList.toggle('dark');
    });

});