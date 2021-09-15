$(document).ready(function() {
    var socket = io.connect("http://localhost:8080");

    //when the form submits
    $("#chatbox").submit(function(e) {
        e.preventDefault();
        //send a msg to server.check the id should be same everywhere
        socket.emit("client message", $("#msg").get(0).value);
        //reset the input field
        $("#msg").get(0).value = "";
    });
    ///when recieving a msg from server
    socket.on("server message", function(data) {
        //add the msg to output area
        $("#chatspace").append(data + "<br>");
    });
});