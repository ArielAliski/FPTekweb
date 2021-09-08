<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WebSurf</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <section>
        <img src="image/bg.jpg" alt="" id="bg">
        <img src="image/moon.png" alt="" id="moon">
        <img src="image/bawah.png" alt="" id="road">
         <p id="text"><a style="color:aqua" href=".../">Explore</a> the best websites of the internet</p>
         <a href="login.html">Explore</a>
    </section>

   
    <!-- <button align="center" class="button1" type="button">Click Me!</button> -->
    
    

        
 

    <script type="text/javascript">
        let bg = document.getElementById("bg");
        let moon = document.getElementById("moon");
        let road = document.getElementById("road");
        let text = document.getElementById("text");

        window.addEventListener('scroll', function() {
            var value = window.scrollY;

            bg.style.top = value * 0.5 + 'px';
            moon.style.left = -value * 0.5 + 'px';
            road.style.top = value * 0.15 + 'px';
            text.style.top = value * 1 + 'px';
        })
    </script>
</body>
</html>