/**
 * Demonstration of the filter method
 * 
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 * @since 2021-02-25
 */

// Assign data object to the variable
const formulaOneChampions = require('./data-object.js');

// Get all champions from Germany
const country = 'Germany';
const championsFromCountry = formulaOneChampions.filter((champion) => {
    return champion.country === country;
});

console.log(`All champions from ${ country }`, championsFromCountry);
