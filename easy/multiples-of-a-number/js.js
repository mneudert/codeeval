var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var parts = line.split(',')
      , base  = parseInt(parts[0])
      , comp  = parseInt(parts[1])
      , mult  = comp;

    while (base > comp) {
        comp += mult;
    }

    console.log(comp);
});
