var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var parts  = line.split('|')
      , chars  = parts[0]
      , keys   = parts[1].trim().split(' ')
      , writer = '';

    for (var i in keys) {
        writer += chars[keys[i] - 1]
    }

    console.log(writer);
});
