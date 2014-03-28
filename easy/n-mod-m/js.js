var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var parts = line.split(',')
      , n     = parseInt(parts[0])
      , m     = parseInt(parts[1]);

    while (n >= m) {
        n -= m;
    }

    console.log(n);
});
