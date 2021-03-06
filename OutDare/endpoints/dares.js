﻿var database = require('../database.js');

module.exports.url = '/dares';
module.exports.verb = 'get';
module.exports.handler = function (req, res) {
    database.dare.getDaresNearby(
    {
        lat: req.query.lat,
        lon: req.query.lon
    }, 
    function (e, docs) {
        if (e) throw ("error getting dares", e);
        res.json(docs);
        res.end();
    });
}