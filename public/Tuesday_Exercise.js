'use strict';
(function(){

var myNameIs = 'Zach'

function sayHello (name) {
    console.log('Hello '  + name)
}

//use return instead of console.log ex. return('Hello ' + name)

// expect to see 'hello zach' in the console

// ----------------------------------------------------------------------------

var theirName= 'Everyone'

function sayHelloToEveryoneExceptZach (name) {
    if (name = 'Zach') {
        console.log('goodbye ' + name);
    } else {
    	(theirName = 'Everyone')
        console.log('hello ' + name);
    }
}
////////////////////////////////////////////////////////////////////////////////
var nombre = 'Ryan'

function sayHelloToEveryoneExceptZach(name){
	if (name ='Ryan') {
		console.log('Good Morning ' + name)
	} else {

	}
}
})();