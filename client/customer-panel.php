<body>
<?php 
include "client-import.php";
 
if (!isset($_SESSION['user']))
{
   header("Location:index.php");
 }
 ?>
 <div class="jumbotron" style="border-radius:0;background:url('../images/3.jpg');background-size:cover;height:400px;"></div>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
           
        </div>
            <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:#05141e;color:FFFFFF;">
                <h3 class=""><center>Welcome new members</center></h3>
                </div> 
                <div class="card-body"></div>

        <br>      
                 <a href="function.php" class="btn btn-light"></a>
                </form>
                </div>
      </div>
       </div>
       <div>
        <p><h1>Chat with us</h1></p>
       <iframe src='https://webchat.botframework.com/embed/languageservice12-bot16?s=vXrCcn78xf8.Xz7QVfNPFE8s4EvOS3hZ2B7WNGHDJsKH8SCuNkc-CAs'  style='min-width: 400px; width: 100%; min-height: 500px;'></iframe>
       </div>
        <div class="mt-5"></div>
  