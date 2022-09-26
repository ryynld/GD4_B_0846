<?php 
    include '../component/sidebar.php'
?> 

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <div class="body d-flex justify-content-between">
        <h4>EDIT PROFILE</h4>
    </div><hr>
    <div class="profile-input-field">
        <form method="post" action="#" >
                <?php
                $query = mysqli_query($con, "SELECT * FROM users  ORDER BY id DESC LIMIT 1") or die(mysqli_error($con));
                if (mysqli_num_rows($query) == 0) { 
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>'; 
                }
                else{
                    while($data = mysqli_fetch_assoc($query)){
                        echo'
                        <div class=form-group>
                            <h5>Nama</h5>
                            <input type="text" class="form-control" name="name" value="'.$data['name'].'" required />
                        </div><br>
                        <div class=form-group>
                            <h5>Email</h5>
                            <input type="text" class="form-control" name="email" value="'.$data['email'].'" required />
                        </div><br>
                        <div class=form-group>
                            <h5>Phone Number</h5>
                            <input type="text" class="form-control" name="phonenum" value="'.$data['phonenum'].'" required />
                        </div><br>
                        <div class=form-group>
                            <h5>Membership</h5>
                            <input type="text" class="form-control" name="membership" value="'.$data['membership'].'" required />
                        </div>';
                    }
                }
                ?>
        </form>
    </div>
</div>

</aside> 
<script rc="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> 
</body> 
</html>
