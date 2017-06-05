(function(){
    "use strict";

    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
    //   var myDiagnosis = [
    //   "Schizophrenia",
    //   "Schizoaffective Disorder",
    //   "Bipolar I Disorder",
    //   "Bipolar II Disorder",
    //   "Cyclothymic Disorder",
    //   "Substance/Medication-Induced Bipolar and Related Disorder",
    //   "Other Specified Bipolar and Related Disorder",
    //   "Unspecified Bipolar and Related Disorder",
    //   "Disruptive Mood Dysregulation Disorder",
    //   "Major Depressive Disorder, Single and Recurrent Episodes",
    //   "Persistent Depressive Disorder AKA Dysthymia",
    //   "Premenstrual Dysphoric Disorder",
    //   "Substance/Medication-Induced Depressive Disorder",
    //   "Depressive Disorder Due to Another Medical Condition",
    //   "Other Specified Depressive Disorder",
    //   "Unspecified Depressive Disorder",
    //   "Generallized Axiety Disorder",
    //   "Substance/Medication-Induced Anxiety Disorder",
    //   "Anxiety Disorder due to another Medical Condition",
    //   "Other Specified Anxiety Disorder",
    //   "Obsessive-Compulsive Disorder",
    //   "Body Dismorphic Disorder",
    //   "Hoarding Disorder",
    //   "Excoriation Disorder/Skin-Picking",
    //   "Substance/Medication-Induced Obsessive-Compulsive and Related Disorder",
    //   "Other Specified Obsessive-Compulsive and Related Disorder",
    //   "Unspecified Obsessive-Compulsive and Related Disorder",
    //   "Reactive Attachment Disorder",
    //   "Disinhibited Social Engagement Disorder",
    //   "Posttraumatic Stress disorder",
    //   "PTSD",
    //   "Acute Stress Disorder",
    //   "Adjustment Disorders",
    //   "Other Specified Trauma-and Stressor-Related Disorder",
    //   "Unspecified Trauma-and Stressor-Related Disorder"
    // ];

    // for (var i = 0; i < myDiagnosis.length; i++) {
    // 	console.log('My declared illness ' + 'is ' + myDiagnosis[i]);
    // }

    // myDiagnosis.forEach(function (element, index, array){
    // 	console.log('My diagnosis at index ' + index + ' is ' + element);
    // });

    // // TODO: Create a log statement that will log the number of elements in the names array.
    // console.log(myDiagnosis.length);

    // // TODO: Create log statements that will print each of the names array elements individually.
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[0]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[1]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[2]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[3]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[4]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[5]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[6]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[7]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[8]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[9]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[10]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[11]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[12]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[13]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[14]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[15]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[16]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[17]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[18]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[19]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[20]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[21]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[22]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[23]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[24]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[25]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[26]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[27]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[28]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[29]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[30]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[31]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[32]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[33]);
    // console.log('Hi! My Diagnosis is ' + myDiagnosis[34]);
//     console.log('Hello World!');
//     var age = '';
//     var gender = '';
//     // console.log('I can not believe this!');
    
//     function ageGender(self) {
//     if (age >= 18 && gender == 'male' || age >= 18 && gender == 'female' || age >= 18 && gender == 'other') {
//     	// console.log('I m ' + gender + ' over 18.');
//     	window.location.assign('https://youtu.be/vo7ZnSC59mY')
// 		// console.log('I can not believe this!');
// 	// } else if (age >= 18 && gender == 'female') {
// 		console.log('I m female over 18.');
// 	} else if (age <= 17 && gender == 'male' || age <= 17 && gender == 'female' || age <= 17 && gender == 'other') {
// 		// console.log('Im ' + gender + ' and ' + age + ' years old.');
// 		window.location.assign('https://youtu.be/TnpTcrtsN3U');
// 	} else {
// 		window.location.assign('https://youtu.be/H5Vzo-iPGCo');
// 		// console.log('I can not figure this out.')
// 	}
// }

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
			window.location.replace('https://youtu.be/H5Vzo-iPGCo');
		}

	};
})();

// })();
