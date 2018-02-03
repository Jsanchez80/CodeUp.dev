(function () {
    "use strict";

    var schBtn = document.getElementById('searchBtn');
    schBtn.addEventListener('click', function (e) {
        // the event is defined above as 'e' so event.preventDefault() needs to be e.preventDefault()
        e.preventDefault();

        var searchField = document.getElementById('searchField').value;
        // console.log(document.getElementById('question1').value);
        
        // Change your query to the selected radio button like so...
        var question1 = document.querySelector('input[name = "question1"]:checked').value;

        console.log(searchField);
        console.log(question1);

        // the questionnaire Function wasn't being called
        questionnaire(searchField, question1);

        

    });

    var diagnosis = searchField;

    switch(diagnosis) {
        // Subcategory ....
        case depressed || Depressed: 
            console.log("I feel depressed");
            break;

        case schizophrenia || Schizophrenia:
            console.log("I feel I have schizophrenia");
            break;

        case schizoaffective || Schizoaffective:
            console.log("I feel Im schizoaffective");
            break;

        case dementia || Dementia:
            console.log("I feel I have dementia");
            break;
    }

    // function questionnaire(searchField, question1) {

    //     if ((searchField == depressed && question1 == 'yes')) {
    //         console.log('I m ' + question1 + ' depressed.');
    //         window.location.replace('https://youtu.be/vo7ZnSC59mY');

    //     } else if ((searchField == schizophrnic && question1 === 'no')) {
    //         console.log('Im ' + question1 + ' and ' + searchField + ' years old.');
    //         window.location.replace('https://youtu.be/TnpTcrtsN3U');
    //     } else {
    //         alert('You gotta fill out the questionnaire');
    //     }

    // };
    
})();   







// var soughtDiagnosis = [
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia:",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Post Traumatic Stress Disorder (PTSD):",
//         symptoms: ["Periods of manic mood or a sudden increase in energy", " Symptoms of depression", " Hallucinations", " Impaired communication", " Impaired occupational, academic and social functioning"],
//         organization: {
//             name: "Tyrese ",
//             streetAddress: "111 San Fernando, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "77009"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
//     {
//         subcategories: "Subcategory",
//         diagnosis: "Schizoprenia",
//         symptoms: ["Withdrawal", " Lack of Emotions", " Insomnia", " Unexplained Hostility", " Sudden Lack of Hygiene"],
//         organization: {
//             name: "SA Clubhouse ",
//             streetAddress: "1234 Citizen's Pkwy, ",
//             city: "San Antonio, ", 
//             state: "TX",
//             zip: "78229"
//         }
//     },
// ];




// console.log("Your diagnosis is " + soughtDiagnosis[0].diagnosis + " Some of the symptoms include  " + soughtDiagnosis[0].symptoms + ".");
// console.log("Discover the following resources to learn more " + soughtDiagnosis[0].organization.name + soughtDiagnosis[0].organization.streetAddress + soughtDiagnosis[0].organization.city + soughtDiagnosis[0].organization.state + soughtDiagnosis[0].organization.zip);
// console.log("Your diagnosis is " + soughtDiagnosis[1].diagnosis + " Some of the symptoms include  " + soughtDiagnosis[0].symptoms + ".");
// console.log("Discover the following resources to learn more " + soughtDiagnosis[1].organization.name + soughtDiagnosis[1].organization.streetAddress + soughtDiagnosis[1].organization.city + soughtDiagnosis[1].organization.state + soughtDiagnosis[1].organization.zip);


// For Each Loop runs through the list of symptoms and prints a list of symptoms for each iteration within the array. 
// console.log("Here are all the symptoms of all the diagnosis:");
// soughtDiagnosis.forEach(function(soughtDiagnosis) {
//     soughtDiagnosis.symptoms.forEach(function(symptoms) {
//         console.log(symptoms);
//  
   // });
// });
