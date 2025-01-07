/**
 * Demonstration of the find method
 * 
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 * @since 2021-02-25
 */

// Assign data object to the variable
const formulaOneChampions = require('./data-object.js');

// Get champion for season 1989
const season = 1989;
const championFromYear = formulaOneChampions.find((champion) => {
    return champion.winning_seasons.includes(season);
});

console.log(`Champion for season ${ season }`, championFromYear);
