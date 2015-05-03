var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var seqs = line.split(' ')
      , bin  = '';

    while (seqs.length) {
        var flag = seqs.shift()
          , seq  = seqs.shift();

        if ('0' == flag) {
            bin += seq;
        } else {
            bin += Array(seq.length + 1).join('1');
        }
    }

    console.log(parseInt(bin, 2));
});
