var fs = require('fs');

var fromCMYK = function(color) {
    var parts = color.substring(1, color.length - 1).split(',');

    var c = parseFloat(parts[0])
      , m = parseFloat(parts[1])
      , y = parseFloat(parts[2])
      , k = parseFloat(parts[3]);

    return rgbStr(
        (1 - c) * (1 - k),
        (1 - m) * (1 - k),
        (1 - y) * (1 - k)
    );
};

var fromHex = function(color) {
    return 'RGB(' +
        parseInt(color.substr(1, 2), 16) +
        ',' + parseInt(color.substr(3, 2), 16) +
        ',' + parseInt(color.substr(5, 2), 16) +
        ')';
};

var fromHSL = function(color) {
    var parts = color.substring(4, color.length - 1).split(',');

    var h = parseInt(parts[0])
      , s = parseInt(parts[1]) / 100
      , l = parseInt(parts[2]) / 100;

    var c  = (1 - Math.abs(2 * l - 1)) * s
      , h2 = h / 60
      , x  = c * (1 - Math.abs(h2 % 2 - 1))
      , m  = l - c / 2;

    switch (Math.floor(h2)) {
        case 0: return rgbStr(c + m, x + m, m);
        case 1: return rgbStr(x + m, c + m, m);
        case 2: return rgbStr(m,     c + m, x + m);
        case 3: return rgbStr(m,     x + m, c + m);
        case 4: return rgbStr(x + m, m,     c + m);
        case 5: return rgbStr(c + m, m,     x + m);
    }
};

var fromHSV = function(color) {
    var parts = color.substring(4, color.length - 1).split(',');

    var h = parseInt(parts[0])
      , s = parseInt(parts[1]) / 100
      , v = parseInt(parts[2]) / 100;

    var c  = v * s
      , h2 = h / 60
      , x  = c * (1 - Math.abs(h2 % 2 - 1))
      , m  = v - c;

    switch (Math.floor(h2)) {
        case 0: return rgbStr(c + m, x + m, m);
        case 1: return rgbStr(x + m, c + m, m);
        case 2: return rgbStr(m,     c + m, x + m);
        case 3: return rgbStr(m,     x + m, c + m);
        case 4: return rgbStr(x + m, m,     c + m);
        case 5: return rgbStr(c + m, m,     x + m);
    }
};

var rgbStr = function(r, g, b) {
    return 'RGB(' +
        Math.floor(r * 255 + 0.5) +
        ',' + Math.floor(g * 255 + 0.5) +
        ',' + Math.floor(b * 255 + 0.5) +
        ')';
};

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (color) {
    if ('' === color) {
        return;
    }

    color = color.trim();

    if ('(' == color[0]) {
        console.log(fromCMYK(color));
    } else if ('L' == color[2]) {
        console.log(fromHSL(color));
    } else if ('V' == color[2]) {
        console.log(fromHSV(color));
    } else {
        console.log(fromHex(color));
    }
});
