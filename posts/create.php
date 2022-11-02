<?php
    include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>

<body>
    <div>
        <form method = "get">
            <input name = "title" type = "text"  placeholder = "Title">
            <textarea name = "content" placeholder = "Content" class = "form-control bg-dark text-white my-3"></textarea>
            <input name="img_main" type="text" placeholder = "Image Main Name" id="avatar"  accept="image/png, image/jpeg" class = "form-control bg-dark text-white my-3 text-center">
            <input name="img_sec" type="text" placeholder = "Image secondary Name" id="avatar"  accept="image/png, image/jpeg" class = "form-control bg-dark text-white my-3 text-center">
            <input name = "date" type = "date" placeholder =  "date">
            <input name = "author" type = "text" placeholder = "author name">  
            <input name = "author_desc" type = "text" placeholder = "author description">  
            <button name = "new_post" class = "btn btn-dark" >Add Post</button>
        </form> 
    </div>

</body>
</html>