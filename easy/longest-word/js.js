var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var words   = line.split(' ')
      , longest = '';

    for (var i in words) {
        if (words[i].length > longest.length) {
            longest = words[i];
        }
    }

    console.log(longest);
});
