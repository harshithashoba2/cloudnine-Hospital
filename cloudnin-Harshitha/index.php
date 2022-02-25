<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloudnine Hospital</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/chat.css">
</head>
<body>
<div class="container-fluid">
    <h2>Cloudnine Hospital</h2>
    <div class="nav">
        <a href="index.php">HOME</a>
        <a href="about.php">ABOUT</a>
        <a href="shop.php">SHOPPING</a>
        <a href="chat.php">COMMUNITY</a>
        <a href="yoga.php">YOGA</a>
       
       
    </div>

</div>  
<div class="slideshow-container">
    <div class="mySlides ">
      <div class="numbertext">1 / 6</div>
        <img src="static/images/1.jpg" style="width:100%">
        <div class="background">
        <div class="text"><h3>India’s No.1 Maternity Hospital Cares For You & Your Baby.</h3>
          <h6> Ultimate Birthing Experience That You Both Deserve – Delivered.</h6><button class="btn btn-primary"><a href="login.php">I want to be on Cloudnine!</a></button><br>*Available 24/7*</h6></div>
        </div>
      </div>
      
      <div class="mySlides ">
        <div class="numbertext">2 / 6</div>
        <img src="static/images/2.jpg" style="width:100%">
        <div class="background">
        <div class="text"><h3>Cloudnine’s newest bundle of joy in Faridabad</h3><br><button class="btn btn-primary"><a href="#">Know More</a></button></div>
        </div>
      </div>
      
      <div class="mySlides ">
        <div class="numbertext">3 / 6</div>
        <img src="static/images/3.jpg" style="width:100%">
        <div class="background">
        <div class="text"><h3>Cloudnine MAMAS
          Community</h3>
          <h6>Moms and Million Answers&nbsp;&nbsp;<i class="fa fa-commenting-o"></i></h6><button class="btn btn-primary"><a href="chat.php">Join Today!</a></button></div>
        </div>
      </div>
      <div class="mySlides">
        <div class="numbertext">4 / 6</div>
        <img src="static/images/4.jpg" style="width:100%">
        <div class="background">
        <div class="text"><h4>Think Safety,
          Think Cloudnine.<br>
          Trust the best for mother & child.</h4>
          <h6><i class="fa fa-user-md"></i>&nbsp;&nbsp;Vaccinated Doctors & staff<br>
            <i class="fas fa-heart">&nbsp;&nbsp;Strict safety protocols followed</i><br>
            <i class="fa fa-child"></i>&nbsp;&nbsp;Attendant & visitor restrictions followed</h6></div>
        </div>
      </div>
      <div class="mySlides ">
        <div class="numbertext">5 / 6</div>
        <img src="static/images/5.jpg" style="width:100%">
        <div class="background">
        <div class="text"><h3><b>Cloudnine - Maternity Wears</b></h3>
          <b>Flat 75% discount on First order. A one-stop shopping destination to put moms at ease.</b>
          <h6><button class="btn btn-primary"><a href="shop.php">SHOP ONLINE!</a></button></h6></div>
        </div>
      </div>
      <div class="mySlides">
        <div class="numbertext">6 / 6</div>
        <img src="static/images/6.jpg" style="width:100%">
        <div class="background">
        <div class="text"><h3><b>Cloudnine - YOGA CLASS for Women</b>
          <b>Live : Morning 6 A.M to 7 A.M (Monday to Saturday)</b></h3>
          <h6><button class="btn btn-primary"><a href="yoga.php">ENROLL NOW</a></button></h6></div>
        </div>
      </div>
      <br>
    </div>
    <div style="text-align:center">
         <span class="dot"></span> 
         <span class="dot"></span> 
         <span class="dot"></span> 
         <span class="dot"></span> 
         <span class="dot"></span> 
         <span class="dot"></span> 
    </div>
    <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 6000); // Change image every 2 seconds
        }
        </script>
<br><br>
<div class="chat-bar-collapsible">
  <button id="chat-button" type="button" class="collapsible">Chat with us!
      <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
  </button>

  <div class="content">
      <div class="full-chat-block">
          <!-- Message Container -->
          <div class="outer-container">
              <div class="chat-container">
                  <!-- Messages -->
                  <div id="chatbox">
                      <h5 id="chat-timestamp"></h5>
                      <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                  </div>

                  <!-- User input box -->
                  <div class="chat-bar-input-block">
                      <div id="userInput">
                          <input id="textInput" class="input-box" type="text" name="msg"
                              placeholder="Tap 'Enter' to send a message">
                          <p></p>
                      </div>

                      <div class="chat-bar-icons">
                          <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                              onclick="heartButton()"></i>
                          <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                              onclick="sendButton()"></i>
                      </div>
                  </div>

                  <div id="chat-bar-bottom">
                      <p></p>
                  </div>

              </div>
          </div>

      </div>
  </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/responses.js"></script>
<script src="static/scripts/chat.js"></script>
</body>
</html>