var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var sum = 0;

    line.split('').forEach(function(char) {
        sum += parseInt(char);
    });

    console.log(sum);
});
