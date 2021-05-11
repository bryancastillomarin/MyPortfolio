window.addEventListener('load', () => {
    
    const body = document.querySelector('body');
    const moon = document.querySelector('.fa-cloud-moon');
    const sun = document.querySelector('.fa-cloud-sun');

    moon.addEventListener('click', () => {
        moon.classList.add('hidden');
        sun.classList.remove('hidden');
        body.classList.toggle('dark');
        //adding dark mode to local storage
        localStorage.setItem('dark-mode', 'true');
    });

    sun.addEventListener('click', () => {
        sun.classList.add('hidden');
        moon.classList.remove('hidden');
        body.classList.toggle('dark');
        //removing dark mode from local storage
        localStorage.removeItem('dark-mode');
    });

    //evaluate local storage
    localStorage.getItem('dark-mode') && moon.click();
});