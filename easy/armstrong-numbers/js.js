var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (number) {
    if ('' === number) {
        return;
    }

    var digitSum = 0;

    for (var i in number) {
        digitSum += Math.pow(number[i], number.length)
    }

    console.log((number == digitSum) ? 'True' : 'False');
});
