var fs = require('fs');

var wordMap = {
    one: '1', two:   '2', three: '3', four: '4', five: '5',
    six: '6', seven: '7', eight: '8', nine: '9', zero: '0'
};

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var digits = [];

    line.split(';').forEach(function(digit) {
        digits.push(wordMap[digit]);
    });

    console.log(digits.join(''));
});
