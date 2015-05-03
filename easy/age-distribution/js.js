var fs = require('fs');

fs.readFileSync(process.argv[2]).toString().split('\n').forEach(function (line) {
    if ('' === line) {
        return;
    }

    var age = parseInt(line);

    if (age < 0 || age > 100) {
        console.log('This program is for humans');
        return;
    }

    if (age <= 2) {
        console.log('Still in Mama\'s arms');
    } else if (age <= 4) {
        console.log('Preschool Maniac');
    } else if (age <= 11) {
        console.log('Elementary school');
    } else if (age <= 14) {
        console.log('Middle school');
    } else if (age <= 18) {
        console.log('High school');
    } else if (age <= 22) {
        console.log('College');
    } else if (age <= 65) {
        console.log('Working for the man');
    } else {
        console.log('The Golden Years');
    }
});
