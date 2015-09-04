var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var elements = line.trim().split(',');

    console.log(
        elements
            .filter(function(e, i) { return elements.indexOf(e) == i; })
            .join(',')
    );
});
