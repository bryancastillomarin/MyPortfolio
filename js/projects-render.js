'use strict'

    //getting parent node
    const projectsDOM = document.querySelector('.projects');

    //function that creates an span element in the given node
    const createSpanTechnology = (technology, node) => {
        const technologyDOM = document.createElement('span');
        const technologyDOMText = document.createTextNode(technology);
        //adding class to span
        technologyDOM.classList.add('technology');
        //appending text to span
        technologyDOM.appendChild(technologyDOMText);
        //appending node (span) to projectTechnologies (div)
        node.appendChild(technologyDOM);
    }

    function renderProjects(projects) {
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
            createSpanTechnology(object.technology1, projectTechnologies);
            createSpanTechnology(object.technology2, projectTechnologies);
            createSpanTechnology(object.technology3, projectTechnologies);

            //adding classes to elements
            project.classList.add('project');
            projectImage.classList.add('project__image');
            projectDescription.classList.add('project__description', 'flex', 'flex-ai-c', 'flex-jc-c');
            projectTechnologies.classList.add('project__technologies', 'flex', 'flex-jc-sa');

            projectImageLink.classList.add('project__image-link');
            projectImageImg.classList.add('project__image-img');
            projectDescriptionText.classList.add('project__description-text');

            //linking image with url
            projectImageLink.href = object.url;
            projectImageLink.target = '_blank';

            //setting source image to element
            projectImageImg.src = object.image;

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
        });
    }

    export { renderProjects };