<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Registracija</title>
  <style>
    :root {
    --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
  }
  
 
  
  .card {
    background: pink;
    border: 1px solid #dd2476;
    margin-bottom: 2rem;
  }
  
  .btn {
    border: 5px solid;
    border-image-slice: 1;
    background: var(--gradient) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
    border-image-source:  var(--gradient) !important; 
    text-decoration: none;
    transition: all .4s ease;
  }
  
 .btn:hover, .btn:focus {
    background: var(--gradient) !important;
    -webkit-background-clip: none !important;
    -webkit-text-fill-color: #fff !important;
    border: 5px solid #fff !important; 
    box-shadow: #222 1px 0 10px;
    text-decoration: underline;
  }
  .divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}



/* BASIC */

html {
    background-color: pink;
  }
  
  body {
    font-family: "Poppins", sans-serif;
    height: 100vh;
  }
  
  a {
    color: #92badd;
    display:inline-block;
    text-decoration: none;
    font-weight: 400;
  }
  
  h2 {
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    display:inline-block;
    margin: 40px 8px 10px 8px; 
    color: #cccccc;
  }
  
  
  
  /* STRUCTURE */
  
  .wrapper {
    display: flex;
    align-items: center;
    flex-direction: column; 
    justify-content: center;
    width: 100%;
    min-height: 100%;
    padding: 20px;
  }
  
  #formContent {
    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;
    padding: 30px;
    width: 90%;
    max-width: 450px;
    position: relative;
    padding: 0px;
    -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    text-align: center;
  }
  
  #formFooter {
    background-color: #f6f6f6;
    border-top: 1px solid #dce8f1;
    padding: 25px;
    text-align: center;
    -webkit-border-radius: 0 0 10px 10px;
    border-radius: 0 0 10px 10px;
  }
  
  
  
  /* TABS */
  
  h2.inactive {
    color: #cccccc;
  }
  
  h2.active {
    color: #0d0d0d;
    border-bottom: 2px solid #5fbae9;
  }
  
  
  
  /* FORM TYPOGRAPHY*/
  
  input[type=button], input[type=submit], input[type=reset]  {
    background-color: #56baed;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
    box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 5px 20px 40px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  
  input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
    background-color: #39ace7;
  }
  
  input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
  }
  
  input[type=text], input[type=password] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
  }
  
  input[type=text]:focus {
    background-color: #fff;
    border-bottom: 2px solid #5fbae9;
  }
  
  input[type=text]:placeholder {
    color: #cccccc;
  }
  
  
  
  @-webkit-keyframes fadeInDown {
    0% {
      opacity: 0;
      -webkit-transform: translate3d(0, -100%, 0);
      transform: translate3d(0, -100%, 0);
    }
    100% {
      opacity: 1;
      -webkit-transform: none;
      transform: none;
    }
  }
  
  @keyframes fadeInDown {
    0% {
      opacity: 0;
      -webkit-transform: translate3d(0, -100%, 0);
      transform: translate3d(0, -100%, 0);
    }
    100% {
      opacity: 1;
      -webkit-transform: none;
      transform: none;
    }
  }
  
  /* Simple CSS3 Fade-in Animation */
  @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
  @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
  @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
  
  .fadeIn {
    opacity:0;
    -webkit-animation:fadeIn ease-in 1;
    -moz-animation:fadeIn ease-in 1;
    animation:fadeIn ease-in 1;
  
    -webkit-animation-fill-mode:forwards;
    -moz-animation-fill-mode:forwards;
    animation-fill-mode:forwards;
  
    -webkit-animation-duration:1s;
    -moz-animation-duration:1s;
    animation-duration:1s;
  }
  
  .fadeIn.first {
    -webkit-animation-delay: 0.4s;
    -moz-animation-delay: 0.4s;
    animation-delay: 0.4s;
  }
  
  .fadeIn.second {
    -webkit-animation-delay: 0.6s;
    -moz-animation-delay: 0.6s;
    animation-delay: 0.6s;
  }
  
  .fadeIn.third {
    -webkit-animation-delay: 0.8s;
    -moz-animation-delay: 0.8s;
    animation-delay: 0.8s;
  }
  
  .fadeIn.fourth {
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    animation-delay: 1s;
  }
  
  /* Simple CSS3 Fade-in Animation */
  .underlineHover:after {
    display: block;
    left: 0;
    bottom: -10px;
    width: 0;
    height: 2px;
    background-color: #56baed;
    content: "";
    transition: width 0.2s;
  }
  
  .underlineHover:hover {
    color: #0d0d0d;
  }
  
  .underlineHover:hover:after{
    width: 100%;
  }
  
  
  
  /* OTHERS */
  
  *:focus {
      outline: none;
  } 
  
  #icon {
    width:60%;
  }
  /*-- Global Selectors --*/
a{
  color:#47649F;
}

body{
  font-family:'helvetica';    
}

/*-- Bootstrap Override Style --*/


/*-- Content Style --*/
.post-footer-option li{
  float:left;
  margin-right:50px;
  padding-bottom:15px;
}

.post-footer-option li a{
  color:#AFB4BD;
  font-weight:500;
  font-size:1.3rem;
}

.photo-profile{
  border:1px solid #DDD;    
}

.anchor-username h4{
  font-weight:bold;    
}

.anchor-time{
  color:#ADB2BB;
  font-size:1.2rem;
}

.post-footer-comment-wrapper{
  background-color:#F6F7F8;
}

  </style>
</head>
<body>

<div class="wrapper">
  <div id="formContent">

    <!-- Login Form -->
    <form action="/users" method="POST">
      <br>
      @csrf
      <input type="text" name="name" placeholder="Unesite ime i prezime" value={{old('name');}}> 
        @error('name')
        <p style="color:red;">{{$message}}</p> 
        @enderror
      <input type="text" name="email"  placeholder="Unesite korisničko ime" value={{old('email');}}>
        @error('email')
        <p style="color:red;">{{$message}}</p> 
        @enderror
      <input type="password" name="password" placeholder="Unesite lozinku">
        @error('password')
          <p style="color:red;">{{$message}}</p> 
        @enderror
      <input type="password" name="password_confirmation"  placeholder="Unesite ponovljenju lozinku">
        @error('password_confirmation')
          <p style="color:red;">{{$message}}</p> 
        @enderror
      <input type="submit" value="Registrujte se">
    </form>
    Već imate nalog?<a href="/login">Ulogujte se</a>
    
  </div>
  
</div>

</body>
</html>
