'use strict'

window.addEventListener('load', function() {

    const languages = document.getElementsByClassName('language');
    const arrayLang = Array.from(languages);

    arrayLang.forEach((lang) => {
        lang.addEventListener('click', async () => {
            await postLang(lang.innerHTML);
        });
    });

    const postLang = async lang => {
        const url = 'http://localhost/MyPortfolio/lang/lang?lang=' + lang;
        const response = await fetch (url);
    }
});