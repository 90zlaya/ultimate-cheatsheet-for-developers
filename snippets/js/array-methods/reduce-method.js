/**
 * Demonstration of the reduce method
 *
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 */

// Assign data object to the variable
const formulaOneChampions = require('./data-object.js');

// Get all winning seasons from oldest to newest
const allWinningSeasons = formulaOneChampions.map((champion) => {
  return champion.winning_seasons;
}).reduce((previous, current) => {
  return previous.concat(current);
}).sort();

console.log('All winning seasons', allWinningSeasons);
