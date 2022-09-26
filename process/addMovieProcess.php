<?php
    session_start();
    if($_GET['act']== 'tambahMovie'){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $release = $_POST['release'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
    
        $queryAdd =  mysqli_query($con, "INSERT INTO movies VALUES('$id' , '$name' , '$genre' , '$release' , '$season' , '$synopsis')")
        or die(mysqli_error($con));
    
        if ($queryAdd) {
            header("../page/listMoviesPage.php" );
        }
        else{
            echo "ERROR, tidak berhasil". mysqli_error($con);
        }
    }
    else{
        echo 
            '<script> 
                window.history.back() 
            </script>';
    }
?>

