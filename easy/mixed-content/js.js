var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var content  = []
      , words    = []
      , numerics = [];

    line.split(',').forEach(function (element) {
        if (isNaN(parseInt(element))) {
            numerics.push(element)
        } else {
            words.push(element);
        }
    });


    if (numerics.length) {
        content.push(numerics.join(','))
    }

    if (words.length) {
        content.push(words.join(','));
    }

    console.log(content.join('|'));
});
