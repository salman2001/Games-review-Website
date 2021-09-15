var app = require('http').createServer(handler);
var io = require('socket.io')(app);
var fs = require('fs');

// Handle if the user connecting is new or not.
var newConnection = true;
// server created here..
app.listen(8080, function() {
    //the message printed when server starts
    console.log('The server started now');
});
// Handle the head response.
function handler(req, res) {
    fs.readFile(__dirname + '/index.html',
        function(err, data) {
            if (err) {
                res.writeHead(500);
                return res.end('Error loading index.html');
            }
            res.writeHead(200);
            res.end(data);
        });
}
io.on('connection', function(socket) {
    //server code
    console.log('a new user connected');
    socket.on("client message", function(data) {
        //print out onto terminal
        console.log("client message recieved:" + data);
        //send the same msg back to client
        io.emit("server message", data);
    });
    socket.on('disconnect', function() {
        console.log('user disconnected');
    });
});