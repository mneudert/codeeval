var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var exprs  = line.trim().split(' ').reverse()
      , values = [];

    exprs.forEach(function (expr) {
        switch (expr) {
            case '+':
                values.push(values.pop() + values.pop());
                break;

            case '*':
                values.push(values.pop() * values.pop());
                break;

            case '/':
                values.push(values.pop() / values.pop());
                break;

            default:
                values.push(parseInt(expr, 10));
        }
    });

    console.log(values[0]);
});
