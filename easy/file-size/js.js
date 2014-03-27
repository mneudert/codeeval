var fs = require('fs');

console.log(fs.statSync(process.argv[2]).size);
