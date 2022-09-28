<?php
    include("db.php");
    include '../component/sidebar.php'

    if( !isset($_GET['id']) ){
        header('Location: listSeries.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM series WHERE id=$id";
    $query = mysqli_query($con, $sql);
    $series = mysqli_fetch_assoc($query);

    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }
?>


<!DOCTYPE html>
<html>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
   <div class="body d-flex justify-content-between">
      <h4>EDIT DATA SERIES</h4>
   </div><hr>
   <div class="profile-input-field">
      <form action="editSeriesProcess.php" method="POST">
         <div class=form-group>
            <h5>Nama</h5>
            <input type="text" name="name"/>
         </div><br>
         <div class=form-group>
            <h5>Genre</h5>
            <input type="select" name="genre"/>
         </div><br>
         <div class=form-group>
            <h5>Release</h5>
            <input type="text" name="release"/>
         </div><br>
         <div class=form-group>
            <h5>Episode</h5>
            <input type="select" name="episode"/>
         </div><br>      
         <div class=form-group>
            <h5>Season</h5>
            <input type="text" name="season"/>
         </div><br>
         <div class=form-group>
            <h5>Synopsis</h5>
            <input type="select" name="synopsis"/>
         </div><br>
         <div class=form-group>
            <input type="submit" value="Tambah" name="tambah" />
         </div><br>
      </form>
   </div>
</div>

</body>
</html>