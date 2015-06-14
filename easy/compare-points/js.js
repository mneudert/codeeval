var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var direction = ''
      , parts     = line.split(' ');

    var o = parseInt(parts[0])
      , p = parseInt(parts[1])
      , q = parseInt(parts[2])
      , r = parseInt(parts[3]);

    if (p < r) {
        direction += 'N';
    } else if (p > r) {
        direction += 'S';
    }

    if (o < q) {
        direction += 'E';
    } else if (o > q) {
        direction += 'W';
    }

    if ('' === direction) {
        console.log('here');
    } else {
        console.log(direction);
    }
});
