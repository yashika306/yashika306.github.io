<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body class="home-page">
   <div class="main">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <img src="/images/ezgif.com-gif-maker.gif" width="367px" height="150px">
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="home.php" class="active">Home</a></li>
                        <li><a href="#">AboutUs</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="index.html">SignUp</a></li>
                    </ul>
                </nav>
        </div>
    </header>
    <div class="slider-images">
        <div class="slides">
            <input type="radio" name="radio-btn" id="btn-1">
            <input type="radio" name="radio-btn" id="btn-2">
            <input type="radio" name="radio-btn" id="btn-3">
            <input type="radio" name="radio-btn" id="btn-4">

            <div class="slide one">
                <img src="/images/intro-1614894606.jpg" alt=""> 
            </div>
            <div class="slide">
                <img src="/images/food-spread-1c.jpg" alt=""> 
            </div>
            <div class="slide">
                <img src="/images/food-spread-1d.jpg" alt=""> 
            </div>
            <div class="slide">
                <img src="/images/food-spread-1e.jpg" alt=""> 
            </div>

            <div class="auto-nav">
                <div class="auto-btn-1"></div>
                <div class="auto-btn-2"></div>
                <div class="auto-btn-3"></div>
                <div class="auto-btn-4"></div>
            </div>
        </div>
        <div class="navigation">
            <label for="btn-1" class="man-btn"></label>
            <label for="btn-2" class="man-btn"></label>
            <label for="btn-3" class="man-btn"></label>
            <label for="btn-4" class="man-btn"></label>
        </div>
       
    </div><br>
    <div class="content">
        
        <h3 class="content-title">Glad you are here! Welcome to Munch Box</h3>
        <p>-A place where food, design, and ambiance come together to create a memorable experience.</p><br>
        <button>Order Now</button>
    </div>
    <script>
        var count=1;
         setInterval(function(){
            document.getElementById("btn-"+count).checked=true;
            count++;

            if(count>4){
                count=1
            }
        },5000)
    </script>
    
</body>
</html>
