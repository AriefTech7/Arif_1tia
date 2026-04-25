function appendToDisplay(value) {
    let display = document.getElementById('display');
    display.value += value;
}

function clearDisplay() {
    let value = document.getElementById('display');
    value.value = "";
}

function add(a, b) {
    return a + b;
}

function subtract(a, b  ) {
    return a - b;
}

function multiply(a, b) {
    return a * b;
}

function divide(a, b) {
    return a / b;
}

function calculate() {
    const display = document.getElementById('display');
    let input = display.value;

    let number;
    let result = input;
    

    if (input.includes('+')) {
        number = input.split('+');
        result= number.map(parseFloat).reduce((a, b) => add(a, b));
    } else if (input.includes('-')) {
        number = input.split('-');
        result= number.map(parseFloat).reduce((a, b) => subtract(a, b));
    } else if (input.includes('*')) {
        number = input.split('*');
        result= number.map(parseFloat).reduce((a, b) => multiply(a, b));
    } else if (input.includes('/')) {
        number = input.split('/');
        result= number.map(parseFloat).reduce((a, b) => divide(a, b));
    } else {
        result = input;
    }
    
    display.value = result;
}
