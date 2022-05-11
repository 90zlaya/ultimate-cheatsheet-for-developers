/**
 * Demonstration of the map method
 *
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 */

// Assign data object to the variable
const formulaOneChampions = require('./data-object.js');

// Get all winning champions
const allWinningChampions = formulaOneChampions.map((champion) => {
  return champion.name;
});

console.log('All winning champions', allWinningChampions);
