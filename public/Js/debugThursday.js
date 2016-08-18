'use strict';
// This is the  correct format for the debug...you had the right idea in creating a Json file, however it wasn't necessary. 
// the var friends is correct syntax. NO CHANGES NEED TO BE MADE TO THE VAR FRIENDS. 
        var friends = [
            {name: 'Oliver', books: ['Ansible for DevOps', 'Servers for hackers']},
            {name: 'Barry', books: ['Working effectively with unit tests', '50 quick ideas for your tests']},
            {name: 'Jessica', books: ['Understanding the 4 rules of simple design', 'Principles of package design']},
            {name: 'Clark', books: ['Selling test driven projects']}

// {     You didn't have to break down into Json format. you can use the format given in the original code. 
//         "name": "Oliver",
//         "title": 'Ansible for DevOps',
//         "secondTitle": "From Good To Great To Unstoppable"
//         }
//     },
// {
//         "name": "Barry",
//         "title": 'Working effectively with unit tests',
//         "secondTitle": "50 quick ideas for your tests"
//         }
//     },
// {
//         "name": "Jessica",
//         "title": 'Understanding the 4 rules of simple design',
//         "secondTitle": "Principles of package design"
//         }
//     },
// {
//         "name": "Clark",
//         "Title": 'Selling test driven projects',
//         "secondTitle": 'N/A'
//         }
// },



];
  var $friendSelect = $('#friend');
  var options;

        friends.forEach(function (friend, i) {
            options += '<option value="' + (i + 1) + '">' + friend.name + '</option>'; // first the value must be changed from i to i + 1. Second, the list of names doesn't display everyone. change + friend to + friend.name
        });
        console.log(options);
        $friendSelect.html(options);


//         
// }