var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var parts = line.trim().split('|')
      , wines = parts[0].trim().split(' ')
      , chars = [];

    parts[1].trim().split('').map(function(char) {
        chars[char] = (chars[char] || 0) + 1;
    });

    var known = [];

    wines.forEach(function(wine) {
        var isKnown   = true
          , wineChars = [];

        wine.split('').map(function(wineChar) {
            wineChars[wineChar] = (wineChars[wineChar] || 0) + 1;
        });

        Object.keys(chars).forEach(function(char) {
            if (!wineChars[char] || wineChars[char] < chars[char]) {
                isKnown = false;
            }
        });

        if (isKnown) {
            known.push(wine);
        }
    });

    if (!known.length) {
        console.log('False');
    } else {
        console.log(known.join(' '));
    }
});
