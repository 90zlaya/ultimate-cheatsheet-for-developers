/**
 * Implementing queue using stack
 *
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 */

// Main stack
let mainStack = [];

/**
 * Pushes passed value to the main stack
 *
 * @param any value
 */
const enqueue = (value) => {
    mainStack.push(value);
}

/**
 * Pops last item from queue
 *
 * @returns any dequeuedValue
 */
const dequeue = () => {
  // Reverse main stack
  const tempStack = [...mainStack.reverse()];
  // Get last value
  const dequeuedValue = tempStack.pop();
  // Update main stack
  mainStack = [...tempStack.reverse()];
  return dequeuedValue;
};

enqueue(1); // mainStack: [1]
enqueue(2); // mainStack: [1, 2]
enqueue(3); // mainStack: [1, 2, 3]

console.log('Dequeued', dequeue()); // Dequeued 1
console.log('Dequeued', dequeue()); // Dequeued 2
console.log('Dequeued', dequeue()); // Dequeued 3
