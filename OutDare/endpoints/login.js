var database = require('../database.js');

module.exports.url = '/login';
module.exports.verb = 'post';
module.exports.handler = function (req, res) {
    database.user.findOne({ user: req.body.user }, function (e, doc) {
        if (e) throw ("error finding user to log in", e);
        res.json(doc);
        res.end();
    })
}