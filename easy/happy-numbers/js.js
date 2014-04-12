var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (number) {
    if ('' === number) {
        return;
    }

    var steps = [];

    while (1 < number && -1 === steps.indexOf(number)) {
        steps.push(number);

        digits = '' + number;
        number = 0;

        for (var i in digits) {
            number += Math.pow(digits[i], 2);
        }
    }

    console.log((1 == number) ? 1 : 0);
});
