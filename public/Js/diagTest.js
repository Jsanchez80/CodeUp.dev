var soughtDiagnosis = [
    {
        subcategories: "Subcategory",
        diagnosis: "Schizoprenia",
        symptoms: ["Lemon", "Bluetooth Connectivity", "GPS Navigation"],
        organization: {
            name: "SA Clubhouse",
            streetAddress: "1234 Citizen's Pkwy",
            city: "San Antonio", 
            state: "TX"
        }
    },
    {
        subcategories: "Subcategory",
        diagnosis: "Schizoaffective",
        symptoms: ["Lemon", "Bluetooth Connectivity", "GPS Navigation"],
        organization: {
            name: "Tyrese",
            streetAddress: "1234 Citizen's Pkwy",
            city: "San Antonio", 
            state: "TX"
        }
    }
];

console.log("The first diagnosis is " + soughtDiagnosis[0].diagnosis + " " + soughtDiagnosis[0].symptoms + ".");
console.log("Discover the following resources to learn more " + soughtDiagnosis[1].organization.name + soughtDiagnosis[1].organization.streetAddress + soughtDiagnosis[1].organization.city + soughtDiagnosis[1].organization.state);
// console.log("The owner of the second car is " + cars[1].owner.name + ".");

console.log("Here are all the symptoms of all the diagnosis:");
soughtDiagnosis.forEach(function(soughtDiagnosis) {
    soughtDiagnosis.symptoms.forEach(function(symptoms) {
        console.log(symptoms);
    });
});