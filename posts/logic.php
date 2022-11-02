<?php 
    $conn = mysqli_connect("localhost", "root", "", "tech-blog");

    if(!$conn){
        echo "<h3>Connection to Database was not Established</h3>";
    }

    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);
    if(!$sql){
        echo "<h3>Connection to Database was not Established</h3>";
    }

    if(isset($_REQUEST["new_post"])){
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];
        $img_main = $_REQUEST['img_main'];
        $img_sec = $_REQUEST['img_sec'];
        $date = $_REQUEST["date"];
        $author = $_REQUEST['author'];
        $author_desc = $_REQUEST['author_desc'];
        
        $sql = "INSERT INTO data(title, content, img_main, img_sec, date, author, author_desc) VALUES('$title', '$content', '$img_main', '$img_sec', '$date', '$author', '$author_desc')";
        mysqli_query($conn, $sql);

        header("Location: ../index.php?info=added");
        exit();
    }

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    if(isset($_REQUEST['update'])){
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];
        $img_main = $_REQUEST['img_main'];
        $img_sec = $_REQUEST['img_sec'];
        $date = $_REQUEST['date'];
        $author = $_REQUEST['author'];
        $author_desc = $_REQUEST['author_desc'];

        $sql = "UPDATE data SET title = '$title', content = '$content', img_main = '$img_main', img_sec = '$img_sec', date = '$date', author = '$author', author_desc = '$author_desc' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: ../index.php?info=updated");
        exit();
    }

    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];
        $sql = "DELETE FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);

        header("Location: ../index.php?info=deleted");
        exit();
    }

?>