var database = require('../database.js');

module.exports.url = '/dares/:id/submissions';
module.exports.verb = 'get';
module.exports.handler = function (req, res) {
    database.submission.find({
        dare_id : req.params.id
    }).select( '_id' ).exec(
    function (e, docs) {
        if (e) throw ("error getting dares", e);
        res.json(docs);
        res.end();
    });
}