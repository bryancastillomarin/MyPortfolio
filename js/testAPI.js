'use strict'

const consumeAPI = url => {
	fetch(url)
	.then(response => response.json())
	.then(response => {
        console.log(response);
        response.forEach(project => {
            console.log(project);
            console.log(project.id, project.description, project.image, project.technology1);
        });
	})
	.catch(e => {
		console.log('Error ' + e);
	});
}

consumeAPI('http://localhost/MyPortfolio/api/v1/projects.php');