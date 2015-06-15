var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if (55 >= line.length) {
        console.log(line);
        return;
    }

    snip = line.substr(0, 40);

    if (0 < snip.lastIndexOf(' ')) {
        snip = snip.substring(0, snip.lastIndexOf(' ')).trim();
    }

    console.log(snip + '... <Read More>');
});
