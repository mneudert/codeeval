var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var words = line.split(' ');

    for (var i in words) {
        words[i] = words[i][0].toUpperCase() + words[i].substr(1);
    }

    console.log(words.join(' '));
});
