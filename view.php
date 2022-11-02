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
    <link rel="stylesheet" href="./posts/style.scss">

    <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/4798573728.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav class="nav-bar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>
    </header>

    <div class="page">
    <!-- article section -->
    <?php foreach($query as $q){?>
        <div class="main">
	        <div class="head">
                <figure>
		        	<img src="./Assets/img_main/<?php echo $q['img_main']; ?>"/>
		        </figure>
		        <h1 class="headline"><?php echo $q['title']; ?></h1>
		        <div class="article-meta">
		        	<div class="author__info">
		        		<p class="byline">By: <?php echo $q['author']; ?></p>
		        		<p class="dateline"><?php echo $q['date']; ?></p>
		        	</div>
		        </div>
	        </div>
	        <div class="content">
	        	<?php echo $q['content']; ?>
            </div>
        </div>
    <?php } ?>
    <!-- article section -->
    </div>
    
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

</body>
</html>