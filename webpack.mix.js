const {MIX_PACKAGE, NPM, VENDOR, OUTPUT, output} = require('laravel-multimix');

const branchesPath = `${__dirname}/modules/`;

require(`${branchesPath}/${MIX_PACKAGE}/webpack.mix.js`);