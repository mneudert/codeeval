var fs  = require('fs')
  , sum = 0;

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    sum += parseInt(line);
});

console.log(sum);
