'use strict'

import { renderSkills } from './skills-render.js';

//const url = 'http://192.168.0.20/MyPortfolio/api/v1/skills';
const url = 'http://localhost/MyPortfolio/api/v1/skills';

const consumeAPI = url => {
	fetch(url)
	.then(response => response.json())
	.then(response => {
        renderSkills(response);
	})
	.catch(e => {
		console.log('Error ' + e);
	});
}

consumeAPI(url);