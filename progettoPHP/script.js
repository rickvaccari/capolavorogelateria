document.addEventListener('DOMContentLoaded', () => {
    const min = 0;
    const max = 10;
    let currentValue = 0;

    const valueDisplay = document.getElementById('value');
    const incrementButton = document.getElementById('increment');
    const decrementButton = document.getElementById('decrement');

    incrementButton.addEventListener('click', () => {
        if (currentValue < max) {
            currentValue++;
            valueDisplay.textContent = currentValue;
        }
    });

    decrementButton.addEventListener('click', () => {
        if (currentValue > min) {
            currentValue--;
            valueDisplay.textContent = currentValue;
        }
    });

    // Initialize the value display
    valueDisplay.textContent = currentValue;
});
