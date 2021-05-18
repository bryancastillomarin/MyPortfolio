'use strict'

import { renderProjects } from './projects-render.js';

//const url = 'http://192.168.0.20/MyPortfolio/api/v1/projects';
const url = 'http://localhost/MyPortfolio/api/v1/projects';

const consumeAPI = url => {
	fetch(url)
	.then(response => response.json())
	.then(response => {
        renderProjects(response);
	})
	.catch(e => {
		console.log('Error ' + e);
	});
}

consumeAPI(url);