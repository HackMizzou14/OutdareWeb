var database = require('../database.js');

module.exports.url = '/submissions/create';
module.exports.verb = 'post';
module.exports.handler = function (req, res) {
    console.log(req);
    var submission = new database.submission({
        user_id : req.body.user_id,
        dare_id : req.body.dare_id,
        image   : req.body.image
    });
    submission.save(function (e) {
        if (e) throw ("failed to create new submission", e);
        res.end();
    });
}