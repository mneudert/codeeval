var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var input  = line.split(' ')
      , string = input[0].toLowerCase()
      , mask   = input[1]
      , output = '';

    for (var i = 0; i < mask.length; i += 1) {
        if ('0' === mask.charAt(i)) {
            output += string.charAt(i);
        } else {
            output += string.charAt(i).toUpperCase();
        }
    }

    console.log(output);
});
