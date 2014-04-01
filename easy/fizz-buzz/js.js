var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var def    = line.split(' ')
      , fizz   = def[0]
      , buzz   = def[1]
      , max    = def[2]
      , output = [];

    for (var i = 1; i <= max; i++) {
        if ((0 == i % fizz) && (0 == i % buzz)) {
            output.push('FB');
        } else if (0 == i % buzz) {
            output.push('B');
        } else if (0 == i % fizz) {
            output.push('F')
        } else {
            output.push(i);
        }
    }

    console.log(output.join(' '));
});
