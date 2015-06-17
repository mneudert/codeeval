var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var lower  = false
      , output = [];

    line.split('').forEach(function(char) {
        var code = char.charCodeAt(0);

        if (code < 65 || (code > 90 && code < 97) || code > 122) {
            output.push(char);
            return;
        }

        output.push(lower ? char.toLowerCase() : char.toUpperCase());

        lower = !lower;
    });

    console.log(output.join(''));
});
