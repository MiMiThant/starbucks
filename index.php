<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>
<header>
    <div class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
        <div class="navbar-brand">
            <img src="_actions/photos/logo.png">
        </div>
        <div class="navbar-nav">
            <div class="nav-item">
                <a href="#">Home</a>
            </div>
            <div class="nav-item">
                <a href="#">Menu</a>
            </div>
            <div class="nav-item">
                <a href="#">Contact</a>
            </div>
            <div class="nav-item">
                <a href="#">Order</a>
            </div>
        </div>
        </div>
    </div>
</header>
    <div class="circle"></div>
    
        <div class="content">
            <div class="text-box">
                <h2>It's not just coffee <br> It's <span>Starbucks</span></h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.Reprehenderit 
                    libero deleniti quasi fugit? Cumque eligendi,
                    ullam blanditiis dolorem quo harum, sapiente doloribus rem
                    ducimus neque quisquam eum facere debitis error?

                </p>
                <a href="#">Learn More</a>
                
            </div>
            <div class="imgbox">
                <img src="_actions/photos/pngwing.com.png" class="starbuck">
            </div>
        </div>

        <ul class="thumb">
            <li><img src="_actions/photos/greenn.png" onclick="imgSlider('_actions/photos/greenn.png');changeCircleColor('#017143')"></li>
            <li><img src="_actions/photos/pngwing.com.png" onclick="imgSlider('_actions/photos/pngwing.com.png');changeCircleColor('#eb7495')"></li>
            <li><img src="_actions/photos/choco.png" onclick="imgSlider('_actions/photos/choco.png');changeCircleColor('#6F4E37')"></li>
        </ul>
    </section>
    
    <script type="text/javascript">

        function imgSlider(anything){
            document.querySelector('.starbuck').src=anything;
        }

        function changeCircleColor(color){
            const circle=document.querySelector('.circle');
            circle.style.background=color;
        }
    </script>
</body>
</html>