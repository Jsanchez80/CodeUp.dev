    displayNum = "";
    storedNum = "";
    operation = 0;
    queuedOperation = 0;
    calculationFinished = false;

function clearDisplay() {
    // Select the calculator's display
    var display = document.getElementById("leftOperand");

    // Clear the global variables and the display
    displayNum = "";
    storedNum = "";
    operation = 0;
    queuedOperation = 0;        
    display.value = displayNum;

}

function numInput(num) {
    // Select the calculator's display
    var display = document.getElementById("leftOperand");
    document.getElementById('key-7').addEventListener('click', listener, false);
    document.getElementById('key-8').addEventListener('click', listener, false);
    document.getElementById('key-9').addEventListener('click', listener, false);
    document.getElementById('key-4').addEventListener('click', listener, false);
    document.getElementById('key-5').addEventListener('click', listener, false);
    document.getElementById('key-6').addEventListener('click', listener, false);
    document.getElementById('key-1').addEventListener('click', listener, false);
    document.getElementById('key-2').addEventListener('click', listener, false);
    document.getElementById('key-3').addEventListener('click', listener, false);
    document.getElementById('key-0').addEventListener('click', listener, false);


    // Check if the display is empty and the number being pressed is 0
    // This is to make sure the first number isn't 0 because then javascript thinks we are using OCTAL (Base eight)
    if ((display.value == "") && num == "0") {
    // If it is, do nothing
      return;
    }
    // Check if a calculation has finished
    // If it has replace the number in the display (the answer to the calculation with the number
    // that was just pressed and change calculation finished back to false 
    else if (calculationFinished == true) {
        display.value = num;
        calculationFinished = false;
    }
    // if neither of these is the case input the numbers as usual
    else {
      display.value += num;
    }
}

function insertDecimal(dec) {
    // Select the calculator's display
    var display = document.getElementById("leftOperand");
    document.getElementById('key-PD').addEventListener('click', listener, false);
    // Loop through the current number to make sure there isn't already a decimal
    for (i = 0; i < display.value.length; i++)
        if (display.value.charAt(i) == '.') {
            // If there is, do nothing
            return;
        }
    // If there isn't add a decimal to the end of the displayed number
        display.value += dec;
}

function setOperation(command) {
    // Select the calculator's display
    var display = document.getElementById("operator"),
    document.getElementById('key-X').addEventListener('click', listener, false);
    document.getElementById('key-D').addEventListener('click', listener, false);
    document.getElementById('key-A').addEventListener('click', listener, false);
    document.getElementById('key-S').addEventListener('click', listener, false);
            displayNum = display.value;
    // eval both the numbers to remove quotes
    // otherwise 4 + 5 will be "4" + "5" which in JS will equal 45
            evalDisplay = eval(displayNum),
            evalStored = eval(storedNum);

    // Check if there is a queued operation
    // If there is a queued operation calculate it
    // Then set the stored number to total of the calculation       
    if (queuedOperation == 0) {
        storedNum = display.value;
    }
    else if (queuedOperation == 1) {
        storedNum = evalStored + evalDisplay;
    }
    else if (queuedOperation == 2) {
        storedNum = evalStored - evalDisplay;
    }
    else if (queuedOperation == 3) {
        storedNum = evalStored * evalDisplay;
    }

    // Check what command was put into the calculator
    // Then set the operation to the correct number
    if (command == 'add') {
        operation = 1;
    }
    else if (command == 'subtract') {
        operation = 2;
    }
    if (command == 'multiply') {
        operation = 3;
    }

    // Queue up an operation for enterint multiple  commands without hitting equals
    // i.e. 10x4+8-9+3=
    queuedOperation = operation;
    // Clear the display in order to receive a new number
    display.value = '';
}

function calculate() {
    // Select the calculator's display
    var display = document.getElementById("leftOperand");
            displayNum = display.value;
    var evalDisplay = eval(displayNum),
            evalStored = eval(storedNum);

    // Do the math
    if (operation == 1) {
        displayNum = evalStored + evalDisplay;
    }
    else if (operation == 2) {
        displayNum = evalStored - evalDisplay;
    }
    else if (operation == 3) {
        displayNum = evalStored * evalDisplay;
    }
    // Change display to the answer
    display.value = displayNum;
    if (operation != 0)
        calculationFinished = true;
    // Clear all the global variables
    // Necessary in case the user wants to make a calculation using the answer
    operation = 0;
    queuedOperation = 0;
    displayNum = "";
    storedNum = "";
}






