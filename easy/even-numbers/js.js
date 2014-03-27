var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' == line) {
        return;
    }

    console.log((parseInt(line) + 1) % 2);
});
