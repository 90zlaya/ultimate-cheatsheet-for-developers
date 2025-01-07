/**
 * Checking what's going to happen when
 * optional chaining is used on example object
 *
 * @author Zlatan Stajic <contact@zlatanstajic.com>
 */

const rider = {
    name: {
        first: 'Valentino',
        last: 'Rossi'
    },
    present() {
        return `My name is ${ this.name.first ?? '' } ${ this.name.last ?? '' }`;
    }
};

console.log(rider?.name?.first);
console.log(rider?.present());
