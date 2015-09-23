var fs = require('fs');

var numbers = {
    zero: 0, one: 1, two:   2, three: 3, four: 4,
    five: 5, six: 6, seven: 7, eight: 8, nine: 9,

    ten:     10, eleven:  11, twelve:    12, thirteen: 13, fourteen: 14,
    fifteen: 15, sixteen: 16, seventeen: 17, eighteen: 18, nineteen: 19
};

var partials = {
    twenty: 20, thirty:  30, forty:  40, fifty:  50,
    sixty:  60, seventy: 70, eighty: 80, ninety: 90
};

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var words = line.trim().split(' ');

    var negative  = false
      , number    = 0
      , millions  = 0
      , thousands = 0
      , hundreds  = 0
      , rest      = 0;

    if ('negative' == words[0]) {
        negative = true;
        words.shift();
    }

    words.forEach(function (word) {
        if (numbers[word]) {
            rest += numbers[word];
        }

        if (partials[word]) {
            rest += partials[word];
        }

        if ('hundred' == word) {
            hundreds += rest * 100;
            rest      = 0;
        }

        if ('thousand' == word) {
            thousands += (hundreds + rest) * 1000;
            hundreds   = 0;
            rest       = 0;
        }

        if ('million' == word) {
            millions  = (thousands + hundreds + rest) * 1000000;
            thousands = 0;
            hundreds  = 0;
            rest      = 0;
        }
    });

    number = millions + thousands + hundreds + rest;

    if (negative) {
        number *= -1;
    }

    console.log(number);
});
