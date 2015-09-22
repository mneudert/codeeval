var fs = require('fs');

var timeSort = function(a, b) {
    for (var i = 0; i < a.length; i += 1) {
        if (a[i] === b[i]) {
            continue;
        }

        return parseInt(b[i]) - parseInt(a[i]);
    }
};

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    console.log(line.split(' ').sort(timeSort).join(' '));
});
