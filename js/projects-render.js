'use strict'

    import { projects } from './projects.js';

    //getting parent node
    const projectsDOM = document.querySelector('.projects');

    //creating project for each element in projects
    projects.forEach(object => {

        //creating inner elements
        const project = document.createElement('div');
        const projectImage = document.createElement('div');
        const projectDescription = document.createElement('div');
        const projectTechnologies = document.createElement('div');

        const projectImageLink = document.createElement('a');
        const projectImageImg = document.createElement('img');
        const projectDescriptionText = document.createElement('p');

        const projectDescriptionTextNode = document.createTextNode(object.description);

        //creating and adding spans for each technology in each project
        object.technologies.forEach(technology => {
            const technologyDOM = document.createElement('span');
            const technologyDOMText = document.createTextNode(technology);
            //adding class to span
            technologyDOM.classList.add('technology');
            //appending text to span
            technologyDOM.appendChild(technologyDOMText);
            //appending node (span) to projectTechnologies (div)
            projectTechnologies.appendChild(technologyDOM);
        });

        //adding classes to elements
        project.classList.add('project');
        projectImage.classList.add('project__image');
        projectDescription.classList.add('project__description', 'flex', 'flex-ai-c', 'flex-jc-c');
        projectTechnologies.classList.add('project__technologies', 'flex', 'flex-jc-sa');

        projectImageLink.classList.add('project__image-link');
        projectImageImg.classList.add('project__image-img');
        projectDescriptionText.classList.add('project__description-text');

        //setting source image to element
        projectImageImg.src = object.src_image;

        //appending children
        projectImageLink.appendChild(projectImageImg);
        projectImage.appendChild(projectImageLink);

        projectDescriptionText.appendChild(projectDescriptionTextNode);
        projectDescription.appendChild(projectDescriptionText);

        project.appendChild(projectImage);
        project.appendChild(projectDescription);
        project.appendChild(projectTechnologies);

        //appending project to main parent (projects)
        projectsDOM.appendChild(project);


        //console.log(projectTechnologies);
    });

    