var database = require('../database.js');
var formidable = require('formidable');

module.exports.url = '/submissions/create';
module.exports.verb = 'post';
module.exports.handler = function (req, res) {
    
    var form = new formidable.IncomingForm();
    
    form.parse(req, function (err, fields, files) {
        console.log(files);
        var submission = new database.submission({
            user_id : fields.user_id,
            dare_id : fields.dare_id,
            image   : files.image
        });
    })

    submission.save(function (e) {
        if (e) throw ("failed to create new submission", e);
        res.end();
    });
}