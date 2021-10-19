/**
 * Implementing queue using stack
 * 
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 * @since 2021-02-22
 */

// Main stack
let mainStack = [];

/**
 * Pushes passed value to the main stack
 * 
 * @param any value 
 */
const enque = (value) => {
    mainStack.push(value);
}

/**
 * Pops last item from queue
 * 
 * @returns any dequedValue
 */
const deque = () => {
    // Reverse main stack
    const tempStack = [...mainStack.reverse()];
    // Get last value
    const dequedValue = tempStack.pop();
    // Update main stack 
    mainStack = [...tempStack.reverse()];
    return dequedValue;
};

enque(1); // mainStack: [1]
enque(2); // mainStack: [1, 2]
enque(3); // mainStack: [1, 2, 3]

console.log('Dequed', deque()); // Dequed 1
console.log('Dequed', deque()); // Dequed 2
console.log('Dequed', deque()); // Dequed 3
