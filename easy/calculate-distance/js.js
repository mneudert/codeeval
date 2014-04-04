var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var points = line.match(/\((.+), (.+)\) \((.+), (.+)\)/);

    console.log(
        Math.sqrt(
            Math.pow(points[1] - points[3], 2)
            + Math.pow(points[2] - points[4], 2)
        )
    );
});
