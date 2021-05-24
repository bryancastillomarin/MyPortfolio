'use strict'

window.addEventListener('load', function(){



    const languages = document.getElementsByClassName('language');
    const arrayLang = Array.from(languages);

    arrayLang.forEach((lang) => {
        lang.addEventListener('click', async (e) => {
            e.preventDefault();
            const langLowered = lang.innerHTML.toLowerCase();
            localStorage.removeItem('lang');
            localStorage.setItem('lang', langLowered);
            await getLangTexts(langLowered);
            await getLangDescriptions(langLowered);
        });
    });

    const getLangTexts = async (lang = 'en') => {
        const url = 'http://localhost/MyPortfolio/api/lang/lang?lang=' + lang;
        const response = await fetch(url);
        const json = await response.json();
        renderTexts(json);
    }

    const getLangDescriptions = async (lang = 'en') => {
        const url = 'http://localhost/MyPortfolio/api/v1/descriptions?lang=' + lang;
        const response = await fetch(url);
        const json = await response.json();
        renderDescriptions(json);
    }

    const renderTexts = (json) => {
        document.getElementsByClassName('title-text')[0].innerHTML = json.aboutme;
        document.getElementsByClassName('aboutme__description-text')[0].innerHTML = json.description;
        document.getElementsByClassName('title-text')[1].innerHTML = json.projects;
        document.getElementsByClassName('subtitle-text')[0].innerHTML = json.projectsDesc;
        document.getElementsByClassName('title-text')[2].innerHTML = json.skills;
        document.getElementsByClassName('subtitle-text')[1].innerHTML = json.skillsDesc;
        document.getElementsByClassName('title-text')[3].innerHTML = json.contact;
        document.getElementsByClassName('copyright-text')[0].innerHTML = json.footer;
    }

    const renderDescriptions = (json) => {
        const projects = document.getElementsByClassName('project__description-text');
        const descriptions = Array.from(projects);
        json.forEach((item, index) => {
            descriptions[index].innerHTML = item.description;
        });
    }

    const lang = localStorage.getItem('lang') ? localStorage.getItem('lang') : 'en';
    getLangTexts(lang);
    getLangDescriptions(lang);

});