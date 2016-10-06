(function() {
    "use strict";


    // TODO: This function needs to be called once every second
    var count = 0
    var max = 5;
    var interval = 1

    var intervalId = setInterval(updateTimer) {
        if (detonationTimer == 0) {
            alert('EXTERMINATE!');
            clearInterval(detonationTimer > 0) 
        } else {  
            count ++;
            console.log('Repeat this line' + count);
        }

        
    }, detonationTimer); 

    // TODO: When this function runs, it needs to
    // cancel the interval/timeout for updateTimer()
    function defuseTheBOM() {

    }

    // Don't modify anything below this line!
    //
    // This causes the defuseTheBOM() function to be called
    // when the "defuser" button is clicked.
    // We will learn about events in the DOM lessons
 //   var defuser = document.getElementById('defuser');
 //   defuser.addEventListener('click', defuseTheBOM);
})();