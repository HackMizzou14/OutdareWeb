var database = require('../database.js');

module.exports.url = '/dares/create';
module.exports.verb = 'post';
module.exports.handler = function (req, res) {
    var dare = new database.dare({
        user_id     : req.body.user_id,
        lat         : req.body.lat,
        lon         : req.body.long,
        title       : req.body.title,
        details     : req.body.details
    });
    dare.save(function (e) {
        if (e) throw ("error saving new dare", e);
        res.json(dare);
    })
}