<?php
include "db_conn.php";
 if (isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    echo $last_name;

    $sql = "INSERT INTO crud( first_name, last_name, email, gender )
    VALUES ('$first_name', '$last_name', '$email', '$gender ')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php?msg=New record created successfully");
    }
    else{
        echo "Failed: ".mysqli_error($conn);
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management App
    </title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 " style="background-color:#00ff5573;">
        User Management Application

    </nav>
        <div class="container">
            <div class="text-center mb-4">
                <h3>Add New User</h3>
                <p class="text-muted">
                    Fill in the form below to add user.
                </p>
            </div>
            <div class="container d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3"> 
                     <div class="col"> 
                        <label class="form-label"> First Name</label>
                        <input type="text" name="first_name" placeholder="Kyle">
                     </div>
                     <div class="col"> 
                        <label class="form-label"> Last Name</label>
                        <input type="text" name="last_name" placeholder="Mckinson">
                     </div>
                </div> 

                <div class="mb-3">
                <label class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="name@example.com">
                </div>
                <div class="form-group md-3">
                    <label>Gender:</label> &nbsp;
                    <input type="radio" name="gender" value="Male" class="form-check-input">
                    <label for="male" class="form-input-label">Male</label>&nbsp;
                    <input type="radio" name="gender" value="Female" class="form-check-input">
                    <label for="female" class="form-input-label">Female</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>

            </form>
            </div>
        </div>
</body>
</html>

