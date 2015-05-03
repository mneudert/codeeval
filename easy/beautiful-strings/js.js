var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var chars  = line.toLowerCase().split('')
      , counts = Array(26)
      , beauty = 0;

    chars.forEach(function(char) {
        var charNum = char.charCodeAt(0) - 97;

        if (0 > charNum || 25 < charNum) {
            return;
        }

        if (!counts[charNum]) {
            counts[charNum] = 0;
        }

        counts[charNum]++;
    });

    counts = counts.sort(function(a, b) { return b - a; });

    for (var n = 26; n > 0; --n) {
        var i = Math.abs(n - 26);

        if (!counts[i]) {
            continue;
        }

        beauty += n * counts[i];
    }

    console.log(beauty);
});
