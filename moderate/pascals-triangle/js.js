var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var triangle = [1];

    for (var i = 1; i < parseInt(line); i += 1) {
        triangle.push(1);

        var current = 1;

        for (var j = 1; j <= i; j += 1) {
            current = (current * (i + 1 - j)) / j;

            triangle.push(current);
        }
    }

    console.log(triangle.join(' '));
});
