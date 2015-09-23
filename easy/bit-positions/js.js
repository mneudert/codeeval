var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var parts  = line.trim().split(',')
      , number = parseInt(parts[0], 10)
      , left   = parseInt(parts[1], 10)
      , right  = parseInt(parts[2], 10);

    var bits     = number.toString(2)
      , leftBit  = bits[bits.length - left]
      , rightBit = bits[bits.length - right];

    console.log(leftBit == rightBit ? 'true' : 'false');
});
