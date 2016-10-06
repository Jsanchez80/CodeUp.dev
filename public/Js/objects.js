(function(){
    "use strict";

    // TODO: Create person object
    var person = {
    	"value" : 1,
    	"age"   : 35,
    	"sex"   : "female",
    	"height": 72
    	//"weight": 130 + "lbs",
    //	"Origin": "Great Britain",

    };
    // var person = todo;

    // TODO: Create firstName and lastName properties in your person object; assign your name to them
person.firstName = "J";
person.lastName = "B";
    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties
person.sayHello = function(){
	aler("Howdy, from " + this.firstName + "" + this.lastName + "!")
}
    // Say hello from the person object.
    // person.sayHello();
})();
