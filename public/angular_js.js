"Use Strict"
(function() {
    var app = angular.module("weatherApp", []);

    const myAPIKey = 'fc37c83528f23dadee47e07cf11a7c46';

            // http://api.openweathermap.org/data/2.5/forecast/daily
    $.get("http://api.openweathermap.org/data/2.5/weather", {
    APPID: "fc37c83528f23dadee47e07cf11a7c46",
    q:     "New York, NY",
    units: "imperial"        

    $.get("http://api.openweathermap.org/data/2.5/weather", {
    APPID: "fc37c83528f23dadee47e07cf11a7c46",
    q:     "Philadelphia, PA",
    units: "imperial"

	// $.get("http://api.openweathermap.org/data/2.5/weather", {
 //    APPID: "fc37c83528f23dadee47e07cf11a7c46",
 //    q:     "San Antonio, TX",
 //    units: "imperial"

    $.get("http://api.openweathermap.org/data/2.5/weather", {
    APPID: "fc37c83528f23dadee47e07cf11a7c46",
    q:     "Houston, TX",
    units: "imperial"

    $.get("http://api.openweathermap.org/data/2.5/weather", {
    APPID: "fc37c83528f23dadee47e07cf11a7c46",
    q:     "Chicago, IL",
    units: "imperial"

    $.get("http://api.openweathermap.org/data/2.5/weather", {
    APPID: "fc37c83528f23dadee47e07cf11a7c46",
    q:     "San Francisco, CA",
    units: "imperial"

.done(function (data) {
		console.log(data);
        console.log(data.name);
        console.log(data.main.temp);
        // console.log(data.clouds[0]);
        console.log(data.main.humidity);
        console.log(data.wind.speed);
        console.log(data.main.pressure);
		console.log('I\'m Done!');

          var conditions= ""; //declare a variable that your function can use and interpret
            $(data).each(function(index){//what are you trying to display? a table <tr> and <th> with content for each list item: ref lines 12-17: this is how you want your data to display
                conditions +='<tr>'//this is the beginning of your table
                conditions +='<td>' + data.name + '</td>';
                conditions +='<td>' + data.main.temp + '</td>'; //these are elements within your table
                // conditions +='<td>' + data.clouds + '</td>';
                conditions +='<td>' + data.main.humidity +'%' + '</td>';
                conditions +='<td>' + data.wind.speed + 'mph' + '</td>';
                conditions +='<td>' + data.main.pressure + ' in/Hg' + '</td>';
                conditions +='</tr>'  //this is where you close your table
                console.log("Hello are you there?");
            }); 
                 console.log(conditions); //you want to make sure you are getting data in the format you just coded: this will also act as a check and balance for your display
                  $('#weatherData').html(conditions)

}).fail(function(xhr, err, msg) {
	consolelog(xhr);


}).done(function (data) {
		console.log(data);
        console.log(data.name);
        console.log(data.main.temp);
        // console.log(data.clouds[0]);
        console.log(data.main.humidity);
        console.log(data.wind.speed);
        console.log(data.main.pressure);
		console.log('I\'m Done!');

          var conditions= ""; //declare a variable that your function can use and interpret
            $(data).each(function(index){//what are you trying to display? a table <tr> and <th> with content for each list item: ref lines 12-17: this is how you want your data to display
                conditions +='<tr>'//this is the beginning of your table
                conditions +='<td>' + data.name + '</td>';
                conditions +='<td>' + data.main.temp + '</td>'; //these are elements within your table
                // conditions +='<td>' + data.clouds + '</td>';
                conditions +='<td>' + data.main.humidity +'%' + '</td>';
                conditions +='<td>' + data.wind.speed + 'mph' + '</td>';
                conditions +='<td>' + data.main.pressure + ' in/Hg' + '</td>';
                conditions +='</tr>'  //this is where you close your table
                console.log("Hello are you there?");
            }); 
                 console.log(conditions); //you want to make sure you are getting data in the format you just coded: this will also act as a check and balance for your display
                  $('#weatherData').html(conditions)

}).fail(function(xhr, err, msg) {
	consolelog(xhr);
})();