/**
 * Checking what's going to happen when negation is being applied
 * to the variable which could be true or false but it's actually
 * set as null
 *
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 */

// Variable which has null instead of true or false
const foo = null;

// Output negation of variable which has null as value
console.log(`Expected false got ${!foo}`);
