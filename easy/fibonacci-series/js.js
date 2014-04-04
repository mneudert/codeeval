var fs   = require('fs')
  , fibs = [0, 1];

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (fib) {
    if ('' === fib) {
        return;
    }

    if (!fibs[fib]) {
        for (var f = fibs.length; f <= fib; f++) {
            fibs[f] = fibs[f - 1] + fibs[f - 2];
        }
    }

    console.log(fibs[fib]);
});
