var fs     = require('fs')
  , months = { 'Jan': 1, 'Feb':  2, 'Mar':  3, 'Apr':  4,
               'May': 5, 'Jun':  6, 'Jul':  7, 'Aug':  8,
               'Sep': 9, 'Oct': 10, 'Nov': 11, 'Dec': 12 };

var monthIdx = function(date) {
    return (12 * (parseInt(date.substr(4, 4)) - 1990)) + months[date.substr(0, 3)] - 1;
}

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var periods = line.trim().split('; ')
      , work    = [];

    periods.forEach(function(period) {
        var range = period.split('-')
          , from  = monthIdx(range[0])
          , to    = monthIdx(range[1]);

        for (var i = from; i <= to; i += 1) {
            work[i] = true;
        }
    });

    console.log(Math.floor(
        work.filter(function(w) { return true === w; }).length / 12
    ));
});
