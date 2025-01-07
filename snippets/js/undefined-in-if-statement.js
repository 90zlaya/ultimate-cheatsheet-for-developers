/**
 * Checking what's going to happen when undefined member
 * of the object is checked inside if condition
 *
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 */

// Keys and values
const foo = {
  first: 'I am first',
  second: 'I am second'
};

// Condition to check if it will enter for non-existing key
if (foo.third) {
  console.log('I should be invisible');
} else {
  console.log('You should see me');
}
