<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="../style.css" rel="stylesheet">
        <title>Register Page</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container">
                <!-- Nama : Reynald -->
                <a class="navbar-brand fw-bold" href="/gd4_b_0846">PHP - Reynald</a>
            </div>
        </nav>
        <div class="bg bg-light text-dark">
            <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
                <div class="card text-white bg-dark ma-5 shadow " style="min-width: 25rem;">
                    <div class="card-header fw-bold">Register</div>
                    <div class="card-body">
                        <?php if(!empty($_SESSION['message'])) {?>
                            <div class="alert text-center alert-success" role="alert">
                                <?php 
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                ?>
                            </div>
                        <?php }?>
                    <div class="card-body">
                        <form action="../process/registerProcess.php" name="contact-form" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputName1" class="form-label">Name</label>
                                <input class="form-control" id="name" name="name" aria-describedby="nameHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPhonenum1" class="form-label">Phone Number</label>
                                <input class="form-control" id="phonenum" name="phonenum" aria-describedby="phonenumHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputMembership1" class="form-label">Membership</label>
                                <select class="form-select" aria-label="Default select example" name="membership" id="membership">
                                    <option value="Reguler">Reguler</option> 
                                    <option value="Platinum">Platinum</option> 
                                    <option value="Gold">Gold</option> 
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label> 
                                <input class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="register">Register</button> 
                            </div>
                        </form>
                        <p class="mt-2 mb-0">Have an account? <a href="./loginPage.php" class="text-primary">Login here!</a></p>
                    </div> 
                </div> 
            </div> 
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
        <script>
            $(function() {
                $("form[name='contact-form']").validate({
                    rules: {
                        email: "required",
                        phonenum: "required",
                        
                        email: {
                            required: true,
                            email: true
                        },          
                        phonenum: {
                            required: true,
                            minlength: 12,
                            maxlength: 12,
                            number: true
                        }
                    },
                    messages: {
                        email: {
                            required: "Tolong masukan Email",
                            minlength: "Email harus berisi @gmail.com"
                        },
                        phonenum: {
                            required: "Tolong masukan Nomor Telepon",
                            minlength: "Nomor Telepon harus minimal 12 karakter",
                            maxlength: "Nomor Telepon tidak boleh lebih dari 12 karakter"
                        }
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });
            });    
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
                crossorigin="anonymous"></script>
    </body>
</html>