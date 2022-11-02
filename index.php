<?php
    include "./posts/logic.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tech-blog</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- linking css file -->
    <link rel="stylesheet" href="./style.css">

    <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/4798573728.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header id = "header">
            <nav class="nav-bar" id="myTopnav">
                <button class="toggle-button">
                <span><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
                <div class="collapse">
                <ul class="navbar-nav"></ul>
                </div>
            </nav>
    </header>

    <section class="bgimage" id="home">
        <div class="intro">
            <h3>Hello</h3>
        </div>
    </section>

    <section id = "articles">
        <div class="container">
            <?php foreach($query as $q){?>
                <div class="card">
                    <div class="card__header">
                        <img src = "./Assets/img_sec/<?php echo $q['img_sec']; ?>" alt="Card image" style="width:100%" />
                    </div>
                    <div class="card__body">
                        <h4><?php echo $q['title'];?></h4>
                        <p><?php echo $q['content'];?></p>
                        <div class="text-center">
                            <button onclick="location.href='view.php?id=<?php echo $q['id'];?>'" class = "btnStyle">Read More</button>
                        </div>
                    </div>
                    <div class="card__footer">
                        <div class="user">
                            <div class="user__info">
                                <h5><?php echo $q['author'];?></h5>
                                <small><?php echo $q['date'];?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>    
        </div>     
    </section>

    <!-- footer section-->
    <footer id="footer">
        <div class="footer-bar">
            <!-- header -->
            <h3>LOREM IPSUM</h3>
            <!--content-->
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, culpa.</p>
            <!-- social media icons -->
            <ul class="socials">
                <li><a href="https://www.reddit.com/user/PureMusicDude0803" target="_blank"><i class="fab fa-reddit"></i></a></li>
                <li><a href="https://www.instagram.com/puremusicdude_08" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://twitter.com/InsaneDude08" target="_blank"><i class="fab fa-twitter"></i></a></li>
             </ul>
        </div>
    </footer>
    <!-- footer section-->

    <script src = "./js/script.js" />
</body>
</html>