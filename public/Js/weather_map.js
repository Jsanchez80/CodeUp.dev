
"use strict"

	const myAPIKey = 'fc37c83528f23dadee47e07cf11a7c46';

            // http://api.openweathermap.org/data/2.5/forecast/daily
	$.get("http://api.openweathermap.org/data/2.5/weather", {
    APPID: "fc37c83528f23dadee47e07cf11a7c46",
    q:     "San Antonio, TX",
    units: "imperial"

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

//})        (Don't do this. You had the right idea, but were double calling data when you performed the AJAX CALL)
//          (You already called data when you performed the Get on line 7.)

            //$.ajax("http://api.openweathermap.org/data/2.5/weather", {
            //}).done(function(data) {

            // The reason you did not get your data to display within your html data was because you placed it down here.
            // Placing your function down here acst as your "FAIL FUNCTION" because you listed it below the "FAIL". 
            // Remember to place this within the "Call Function" to get the output you desire. 
			 
            //  console.log(data) // console log to ensure you're data is being captured
            // var conditions= ""; //declare a variable that your function can use and interpret
            // $(data).each(function(index){//what are you trying to display? a table <tr> and <th> with content for each list item: ref lines 12-17: this is how you want your data to display
            //     conditions +='<tr>' + data.name + '</td>';//this is the beginning of your table
            //     conditions +=
            //     conditions +='<td>' + data.main.temp + '</td>'; //these are elements within your table
            //     conditions +='<td>' + data.clouds + '</td>';
            //     conditions +='<td>' + data.main.humidity + '</td>';
            //     conditions +='<td>' + data.wind.speed + '</td>';
            //     conditions +='<td>' + data.main.pressure + '</td>';
            //     conditions +='</tr>'  //this is where you close your table
            //     console.log("Hello are you there?");
            // }); 
            //      console.log(conditions); //you want to make sure you are getting data in the format you just coded: this will also act as a check and balance for your display
            //       $('#weatherData').html(conditions) //Now input your data into the <tbody id> using reference of # ex ('#insertProducts') into the HTML (.html) and source your variables(inventory)
            //     By completing this function, you can continue to add unlimited data to your table without having to re-write code. You can add data to your table by adding on to your JSON file. 
            // });
            // $("#ref_butn").click(function(index) {
            //      //    location.reload("/data/inventory.json");
            //      //    alert("New Product's Were Just Added!")
            //     console.log("working on it");
            //     $.ajax(myAPIKey).fail(function(data) {
            //         console.log("Everything went wrong!");
});



