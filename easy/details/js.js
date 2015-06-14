var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var min = -1;

    line.split(',')
        .map(function(row) {
            return row.indexOf('Y') - row.lastIndexOf('X') - 1;
        })
        .forEach(function(dist) {
            if ((min > -1) && (dist >= min)) {
                return;
            }

            min = dist;
        });

    console.log(min);
});
