var body = new Vue({
    // Add the id here.
    el: '#app',
    //data for the comments
    data: {
        //heading to check if vue is working
        heading: 'vue is working',
        comments: [],
    },
    created() {
        this.getList()
    },
    //method for the comments
    methods: {
        getList: function() {
            let thisID = $("#gameID").text();
            $.get(`http://localhost:82/games-review/index.php/home/comments/${thisID}`, function(data) {
                for (let i = 0; i < data.length; i++) {
                    body.comments.push(data[i]);
                }
            });
        },
        //make sure you use commentSpace in the home/comments
        setList: function() {
            let thisID = $("#gameID").text();
            var postData = { 'UserComment': $('#commentSpace').val(), moreData };
            var moreData = { 'UserName': 'Active user' }
                //to get the comments shown on the page
            $.post(`http://localhost:82/games-review/index.php/home/insertComments/${thisID}`, postData)

            .done(function(data) {
                body.comments.push(postData);
                $('#commentSpace').val() = "";
            });

            body.comments.push(postData);
        },
    }
});