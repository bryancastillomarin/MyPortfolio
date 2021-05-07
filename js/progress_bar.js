'use strict'

window.addEventListener('load', () => {
    const calcPercent = percent => (percent * 180) / 100;

    const object = {
        name: 'javascript',
        percent: 50,
    }

    //getting parent node
    const skills = document.querySelector('.skills');

    //creating elements
    const skill = document.createElement('div');
    const technology = document.createElement('div');
    const progress = document.createElement('div');
    const technologyText = document.createElement('span');
    const progressText = document.createElement('span');
    const technologyTextNode = document.createTextNode(object.name);
    const progressTextNode = document.createTextNode(`${object.percent}%`)

    //adding classes to elements
    skill.classList.add('skill', object.name);
    technology.classList.add('skill__technology');
    progress.classList.add('skill__progress');
    technologyText.classList.add('skill__technology-text');
    progressText.classList.add('skill__progress-text');

    //appending children
    technologyText.appendChild(technologyTextNode);
    progressText.appendChild(progressTextNode);
    technology.appendChild(technologyText);
    progress.appendChild(progressText);
    skill.appendChild(technology);
    skill.appendChild(progress);

    //calculating and rendering percent
    const percent = calcPercent(object.percent);
    skill.style.transform = `rotate(${percent}deg)`;
    technology.style.transform = `rotate(-${percent}deg) scale(1.1)`;
    progress.style.transform = `rotate(-${percent}deg)`;

    //appending skill to main parent (skills)
    skills.appendChild(skill);
});