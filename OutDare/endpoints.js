var fs = require('fs');
var path = require('path');
var routes = fs.readdirSync('./endpoints');

function attach(app, routeFile) {
    var route   = require(routeFile);
    var url     = route.url;
    var verb    = route.verb;
    var handler = route.handler;
    app[verb](url, handler);
};

module.exports.attachTo = function (app) {
    for (var i in routes) {
        attach(app, path.join(__dirname,'/endpoints/',routes[i]));
    }
}