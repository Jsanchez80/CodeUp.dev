"use strict";


import {Component} from ' ex. angular2/core';
import {WeatherComponent} from "./weather.component";

// We're going to create metadata and make it available by calling @Component

// In the template, we will be calling upon a previous instance of Class we defined to pull data.
// when we call upon "my_weather" angular is able to look up the template we designed in "my_weather"
// and recreate it for use. 
@Component({
	selector: 'weatherList',
	template: `
		<section class="weatherList">

		<my_weather></my_weather>
		</section>


	`,


	// You have to inform the operation that you are calling upon a previous instance and give
	// instructions on what to look for in your build. In this case we called upon "weatherComponent"
	// which we declared in "weather.component.ts".  Now we can give the build instructions on how to use 
	// this call by defining our directives. 

	directives:[WeatherComponent]
})



export class WeatherListComponent {
	
}