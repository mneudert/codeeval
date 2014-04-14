var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var digits = ''
      , map    = { a: '0', b: '1', c: '2', d: '3', e: '4',
                   f: '5', g: '6', h: '7', i: '8', j: '9' };

    for (var i in line) {
        if (map[line[i]]) {
            digits += map[line[i]];
        }

        if (!isNaN(parseInt(line[i]))) {
            digits += line[i];
        }
    }

    console.log(('' === digits) ? 'NONE' : digits);
});
