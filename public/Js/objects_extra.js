var student = {
    "name": "Bob",
    "pizzaPreference": "black olives and mushrooms",
    "grades": {
        "html": [90, 77],
        "css":  [82],
        "js":   [91, 90, 89]
    },
    "languages": [
        "html", "css", "js"
    ],
    "cars": [
        {
            "make":  "honda",
            "model": "civic",
            "parkingPermits": [
                {"name": "Travis Park Garage", "isActive": true},
                {"name": "Apartment Complex",  "isAvcive": false}
            ]
        },
        {
            "make":  "honda",
            "model": "accord",
            "parkingPermits": [
                {"name": "Travis Park Garage", "isActive": false},
                {"name": "Apartment Complex",  "isAvcive": true}
            ]
        }
    ]
};

//   Task                                                        Output
//   ----                                                        ------
// get Bob's name .............................................. 'Bob'
console.log(student.name)
// get Bob's pizzaPreference ................................... 'black olives and mushrooms'
console.log(student.pizzaPreference)
// get Bob's 2nd language ...................................... 'css'
console.log(student.languages[1])
// get Bob's grades for html ................................... [90, 77]
console.log(student.grades.html)
// get Bob's last grade for javascript ......................... 89
console.log(student.grades.js[2])
// if we want to get the last grade as grades are being added you could
console.log(student.grades.js[student.grades.js.length -1])
// get Bob's first language .................................... 'html'
console.log(student.languages[0])
// get the make of Bob's second car ............................ honda
console.log(student.cars[1].make)
// number of parking permits for Bob's civic ................... 2
console.log(student.cars[0].parkingPermits.length)
//                           for Bob's accord .................. 0
console.log(student.cars[1].parkingPermits[1])
// find out if Bob's parking permit for travis park is active .. true
console.log(student.cars[0].parkingPermits[0].isActive)
console.log(student.cars[1].parkingPermits[0].isActive)
// find the average of Bob's grades for html (your solution should   not break if more items are added to the grades.html array)

var gradesAverage = (student.grades.html[0] + student.grades.html[1] % 2)
    console.log(gradesAverage)
    //or

console.log(student.grades.html[0] + [1] / 2)
    //or
console.log(student.grades.html[0] + student.grades.html[1] % 2)
    //or create a forEach Loop

    var total = 0;

/*    htmlGrades.forEach (funciton(grades) {
    total = total + grade;
   });
    console.log(student.name + "made the following average grade in HTML:" + (total / htmlGrades.length) + "!"); */    