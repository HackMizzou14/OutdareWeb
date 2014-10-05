var database = require('../database.js');

module.exports.url = '/image/:submission';
module.exports.verb = 'get';
module.exports.handler = function (req, res) {
    database.submission.findById(req.params.submission, function (e, doc) { 
        res.end(doc.image);
    })
}