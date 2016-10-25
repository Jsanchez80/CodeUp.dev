"use strict";
// We're creating the framework of the program we're desigining.  
// Consider this template to be similar to HTML "Bone Structure".

// import the module you want to use {Component}. This is the import you need to use the metadata 
// we created using the @Component.  From angular2/core is where the @Component is defined and 
// grants us priveledge of using the metadata. 


import {Component} from 'yourSourceFile ex. Angular2/core';
import {WeatherListComponent} from './weather/WeatherListComponent';

@Component({
	selector: 'my_app',
	template: `
		<header>
			<h1>Weather</h1>
		</header>
		<WeatherList></WeatherList>
		`,
	directives: [WeatherListComponent]
})

// Creates a new class: "export" class makes this available outside of this file, because we
// want to use this component in other files, we make it available as a resource
export class AppComponent {

}