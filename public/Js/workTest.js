console.log('hello');

// var schizoprenia = '{"diagTest":[' + 
//     {
//         "subcategories": "Schizophrenia Spectrum and Other Psychotic Disorders",
//         "diagnosis": "Schizotypal (Personality) Disorder",
//         "organization": "SA Clubhouse ",
//         "streetAddress": "1234 Citizen's Pkwy, ",
//         "city": "San Antonio, ", 
//         "state": "TX",
//         "zip": "78229",
//         "phone": "(210) 798-1619",
//         "website": "http://www.SAClubhouse.org"
// },' + '{
//        "subcategories": "Schizophrenia Spectrum and Other Psychotic Disorders",
//         "diagnosis": "Delusional Disorder",
//         "organization": "Alamo Elite Wellness ",
//         "streetAddress": "4242 Woodcock Ste 201, ",
//         "city": "San Antonio, ", 
//         "state": "TX",
//         "zip": "78228",
//         "phone": "(210) 625-7974",
//         "website": "http://www.MymentalHealthMatters.com/"
//     },' + ' {
//         "subcategories": "Schizophrenia Spectrum and Other Psychotic Disorders",
//         "diagnosis": "Brief Psychotic Disorder",
//         "organization": "SA Clubhouse ",
//         "streetAddress": "1234 Citizen's Pkwy, ",
//         "city": "San Antonio, ", 
//         "state": "TX",
//         "zip": "78229",
//         "phone": "(210) 798-1619",
//         "website": "http://www.mymentalhealthmatters.com/"
//     },' + ' {
//         "subcategories": "Schizophrenia Spectrum and Other Psychotic Disorders",
//         "diagnosis": "Schizophreniform Disorder",
//         "organization": "SA Clubhouse ",
//         "streetAddress": "1234 Citizen's Pkwy, ",
//         "city": "San Antonio, ", 
//         "state": "TX",
//         "zip": "78229",
//         "phone": "(210) 798-1619",
//         "website": "http://www.mymentalhealthmatters.com/"
//     },' + ' {
//         "subcategories": "Schizophrenia Spectrum and Other Psychotic Disorders",
//         "diagnosis": "Schizophrenia",
//         "organization": "SA Clubhouse ",
//         "streetAddress": "1234 Citizen's Pkwy, ",
//         "city": "San Antonio, ", 
//         "state": "TX",
//         "zip": "78229",
//         "phone": "(210) 798-1619",
//         "website": "http://www.mymentalhealthmatters.com/"
//     },' + ' {
//         "subcategories": "Schizophrenia Spectrum and Other Psychotic Disorders",
//         "diagnosis": "Schizoaffective Disorder",
//         "organization": "SA Clubhouse ",
//         "streetAddress": "1234 Citizen's Pkwy, ",
//         "city": "San Antonio, ", 
//         "state": "TX",
//         "zip": "78229",
//         "phone": "(210) 798-1619",
//         "website": "http://www.mymentalhealthmatters.com/"
//     },' + ' {
//         "subcategories": "Schizophrenia Spectrum and Other Psychotic Disorders",
//         "diagnosis": "Substance/Medication-Induced Psychotic Disorder",
//         "organization": "SA Clubhouse ",
//         "streetAddress": "1234 Citizen's Pkwy, ",
//         "city": "San Antonio, ", 
//         "state": "TX",
//         "zip": "78229",
//         "phone": "(210) 798-1619",
//         "website": "http://www.mymentalhealthmatters.com/"
//     },' + '{
//         "subcategories": "Schizophrenia Spectrum and Other Psychotic Disorders",
//         "diagnosis": "Psychotic Disorder Due to Antoher Medical Condition",
//         "organization": "SA Clubhouse ",
//         "streetAddress": "1234 Citizen's Pkwy, ",
//         "city": "San Antonio, ", 
//         "state": "TX",
//         "zip": "78229",
//         "phone": "(210) 798-1619",
//         "website": "http://www.mymentalhealthmatters.com/"
//     }
// ]};

// var text = '{"employees":[' +
// '{"firstName":"John","lastName":"Doe" },' +
// '{"firstName":"Anna","lastName":"Smith" },' +
// '{"firstName":"Peter","lastName":"Jones" }]}';

// Click Event Listener for button testing
var btnTest = document.getElementById('testBtn');
    btnTest.addEventListener('click', function (e) {
        // the event is defined above as 'e' so event.preventDefault() needs to be e.preventDefault()
        e.preventDefault();
// When button is clicked above, it will begin the process of identifying the value of the word/words in the imput.
var diagnosi = document.getElementById('diagnosis').value;
console.log(diagnosi);

// Determine what the script should do if the value of input above equals a correct response.
if (diagnosis == schizoprenia){
    obj = JSON.parse(text);
        document.getElementById("diagnosis").innerHTML =
        obj.diagTest[1].subcategories + " " + obj.diagTest[1].organization;
        console.log(obj.diagTest[1].subcategories + obj.diagTest[1].organization);
} else {
    alert('Please try again!');
}

