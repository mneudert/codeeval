var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var numbers = line.split(' ')
      , last    = numbers.shift()
      , count   = 1
      , comps   = [];

    while (n = numbers.shift()) {
        if (n != last) {
            comps.push(count + ' ' + last);

            last  = n;
            count = 1;

            continue;
        }

        count++;
    }

    comps.push(count + ' ' + last);
    console.log(comps.join(' '));
});
