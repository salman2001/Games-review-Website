<html>
<head>

<!-- Required meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Link CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <nav class="navbar navbar-inverse">
    <div>
      <div>
          <a class="navbar-brand" >Game Reviews</a>
      </div>
          <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url()?>index.php/home">Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url()?>index.php/Login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
    </div>
  </nav>
</nav>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif; text-align: center; background-color: #d1e9f3}
* {box-sizing: border-box;}

p {
  border: solid 2px grey;
  border-radius: 24px;
  padding: 2%;
}
img {
  border: solid 4px black;
  border-radius: 18px;
}
/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}
/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}
/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}
/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the sned button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
/* red button for close */
.form-container .cancel {
  background-color: red;
}
/* hover effects for buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<body>
<div class="container">
    <div class="row">
        <?php
        foreach ($result as $row)
        {
            // These classes only work if you attach Bootstrap.
            echo '<div class="card cardBodyWidth '.$cssBodyClass.'">';
            // This is presuming you have a column in your database table called ReviewImage.
            $thisImage = $row->ReviewImage;
            $thisTitle = $row->GameName;
            $thisInfo = $row->GameBlurb;
            $thisSlug = $row->slug;
            $Image = base_url(). "application/images/".$thisImage;
            echo '</br><img src="'.$Image.'" "height="225" width="225">';
            echo '<h2>'.$thisTitle.'</h2>';
            echo '<p>'.$thisInfo.'</p>';
            echo '<a href="'.base_url()."index.php/review/".$thisSlug.'"><button type ="button" class="btn btn-success">Click to find out more</button></a>';
            echo '</div>';
        }
        ?>
    </div>
</div>
<button class="open-button" onclick="openForm()">Chat</button>
<div class="chat-popup" id="myForm">
  <form id="chatbox" class="form-container">
    <h1>Chat</h1>
      <div id="chatspace"></div>
      <input type="text" id="msg"></input>
      <button type="submit" class="btn">Send</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
</script>
</body>
<!-- all the scripts that needs loading -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
<script src="<?php echo base_url('application/scripts/chat.js');?>"></script>


</html>