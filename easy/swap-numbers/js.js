var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var words = line.split(' ');

    for (var i = 0; i < words.length; i++) {
        var length = words[i].length;

        words[i] = words[i][length - 1]
                 + words[i].substr(1, length - 2)
                 + words[i][0];
    }

    console.log(words.join(' '));
});
