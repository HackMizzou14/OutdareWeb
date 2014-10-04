var mongoose = require('mongoose');

module.exports.connect = function () {
    mongoose.connect('mongodb://localhost/outdare');
}

var Schema = mongoose.Schema;

var User = new Schema({
    user     : String,
    password : String,
    email    : String,
    phone    : String
});

var Dare = new Schema({
    user_id     : Schema.Types.ObjectId,
    lat         : String,
    lon         : String,
    title       : String,
    details     : String
});

var Submission = new Schema({
    user_id : Schema.Types.ObjectId,
    dare_id : Schema.Types.ObjectId,
    image   : Schema.Types.Buffer
});

module.exports.user = mongoose.model('user', User);
module.exports.dare = mongoose.model('dare', Dare);
module.exports.submission = mongoose.model('submission', Submission);


