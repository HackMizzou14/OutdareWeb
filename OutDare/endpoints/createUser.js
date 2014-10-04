var database = require('../database.js');

module.exports.url = '/createUser';
module.exports.verb = 'post';
module.exports.handler = function (req, res) {
    console.log(req.body)
    var user = new database.user({
        user     : req.body.user,
        email    : req.body.email,
        phone    : req.body.phone
    });
    user.save(function (e) { 
        res.json(user);
    });
}