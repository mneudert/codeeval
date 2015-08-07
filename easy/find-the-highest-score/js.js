var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var highest = []
      , rows    = line.trim().split('|').map(function(row) { return row.trim().split(' '); });

    for (var i = 0; i < rows.length; i += 1) {
        for (var j = 0; j < rows[i].length; j += 1) {
            col = parseInt(rows[i][j], 10);

            if (!highest[j] || col > highest[j]) {
                highest[j] = col;
            }
        }
    }

    console.log(highest.join(' '));
});
