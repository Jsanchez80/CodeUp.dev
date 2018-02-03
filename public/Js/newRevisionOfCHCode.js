(function(){
    "use strict";

    var btnTest = document.getElementById('testBtn');
	btnTest.addEventListener('click', function (e) {
		// the event is defined above as 'e' so event.preventDefault() needs to be e.preventDefault()
		e.preventDefault();

		var age = document.getElementById('age').value;
		// console.log(document.getElementById('gender').value);
		// Since you were getting the value by ID the value of id="gender" is always male
		// Change your query to the selected radio button like so...
		var gender = document.querySelector('input[name = "gender"]:checked').value;

		console.log(age);
		console.log(gender);

		// the ageGender Function wasn't being called
		ageGender(age, gender);

		// Because we're getting the value of the checked button we don't need to loop through the inputs

		//            function getRadioVal(form, name) {
		//                var val;
		//                // get list of radio buttons with specified name
		//                var radios = form.elements[name];
		//
		//                // loop through list of radio buttons
		//                for (var i=0, len=radios.length; i<len; i++) {
		//                    if ( radios[i].checked ) { // radio checked?
		//                        val = radios[i].value; // if so, hold its value in val
		//                        break; // and break out of for loop
		//                    }
		//                }
		//                return val;
		//
		//                console.log(document.getElementById('gender'));
		////     return age;// return value of checked radio or undefined if none checked
		//            }

	});

	function ageGender(age, gender) {

		if ((age >= 18 && gender === 'male') || (age >= 18 && gender === 'female') || (age >= 18 && gender === 'other')) {
			console.log('I m ' + gender + ' over 18.');
			window.location.replace('https://youtu.be/vo7ZnSC59mY');

		} else if ((age <= 17 && gender === 'male') || (age <= 17 && gender === 'female') || (age <= 17 && gender === 'other')) {
			console.log('Im ' + gender + ' and ' + age + ' years old.');
			window.location.replace('https://youtu.be/TnpTcrtsN3U');
		} else {
			return ('https://youtu.be/H5Vzo-iPGCo');
		}

	};

	})();