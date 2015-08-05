var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    console.log(
      line
        .toLowerCase()
        .replace(/[^a-z]+/g, ' ')
        .replace('  ', ' ')
        .trim()
    );
});
