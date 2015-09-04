var fs  = require('fs')
  , map = { 'M': 1000, 'CM': 900,
            'D':  500, 'CD': 400,
            'C':  100, 'XC':  90,
            'L':   50, 'XL':  40,
            'X':   10, 'IX':   9,
            'V':    5, 'IV':   4,
            'I':    1 };

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var number = parseInt(line.trim())
      , roman  = [];

    [
      'M', 'CM', 'D', 'CD', 'C', 'XC',
      'L', 'XL', 'X', 'IX', 'V', 'IV', 'I'
    ].forEach(function(r) {
        var value = map[r];

        while (number >= value) {
            number -= value;
            roman.push(r);
        }
    });

    console.log(roman.join(''));
});
