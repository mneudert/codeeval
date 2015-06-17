var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var output = [];

    line.split('').forEach(function(char) {
        if (char.toLowerCase() == char) {
            output.push(char.toUpperCase());
            return;
        }

        if (char.toUpperCase() == char) {
            output.push(char.toLowerCase());
            return;
        }

        output.push(char);
    });

    console.log(output.join(''));
});
