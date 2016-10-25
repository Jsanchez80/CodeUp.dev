"use strict";
// Similar to the require_once feature of SQL, we will need to ensure we reference the directory 
// our instance of "Weather Component" came from. 

import {Component} from 'ex. angular2/core';


// We're going to create metadata and make it available by calling @Component

// When declaring your selector, make sure you choose a name that has no interference with a  
// possible 3rd party package. You can do so by adding my_ or weather_item for example.
		 // The HTML Code acts as the template we will use to output our data from 
		 // the chosen data source. 
@Component({
	selector: 'my_weather',
	template: `
		<article class="weather-element">
			<div class="col-1">
			<h3>City Name</h3>
				<p class="info">Clouds</p>
			</div>
			<div class="col-2">
				<span class="temperature">32 C</span>
			</div>
		</article>
		
	`,
	// we want to add styling to the current template and we can do so by calling on an import
	// feature within Angular called "styleURLs".  styleURLs takes in a string and imports data 
	// from the file we specify. 
	styleURLs: ['/weatherAppCSS/weatherApp.css']
})



// Creates a new class: "export" class makes this available outside of this file, because we
// want to use this component in other files, we make it available as a resource
export class WeatherComponent {
	
}