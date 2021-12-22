<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--styles-->
    <link href="css/index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Ole&family=Source+Code+Pro:wght@600&family=Twinkle+Star&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container titles mt-3">
        <h1 class="main-title">ReachMe</h1>
        <h2 class="sub-title">Connect with your loved ones</h2>
    </div>

    <div class="container forms justify-content-center">
        <div class="row pt-4 align-items-center">
            <div class="col-md-5 sign-up">
                <h5 class="mb-4">Sign up here!</h5>
                <form action="">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="Name" placeholder="name@example.com">
                        <label for="Name">Name</label>
                    </div>
                    <div class="form-floating mb-2 ">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="number" placeholder="name@example.com">
                        <label for="floatingInput">Mobile Number</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-primary me-md-2" type="button">Sign up</button>
                        <button class="btn btn-primary" type="button">Clear</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5 login">
                <h5 class="mb-4">Login here!</h5>
                <form action="">
                    <div class="form-floating mb-2 ">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-primary me-md-2" type="button">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>