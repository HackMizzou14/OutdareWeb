var database = require('../database.js');
var formidable = require('formidable');
var fs = require('fs');
module.exports.url = '/submissions/create';
module.exports.verb = 'post';
module.exports.handler = function (req, res) {
    
    var form = new formidable.IncomingForm();
    
    form.parse(req, function (err, fields, files) {
        console.log(files);
        var submission = new database.submission({
            user    : fields.user,
            dare_id : fields.dare_id,
            image   : fs.readFileSync(files.image.path)
        });
        submission.save(function (e) {
            if (e) throw ("failed to create new submission", e);
            res.end();
        });
    })


}