<html>
    <head>
        <title>Registration Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="text-center">
                <h1 class="mt-2 btn w-100 btn-primary">My<b>Register</b></h1>
        </div>
        <div class="w-75 container-fluid">
            <form action="register.php" method="POST" enctype="multipart/form-data">
                <div class="input-group-append">
                    <div class="input-group-text"> 
                        <div class="input-group mb-3"> 
                            <input type="file" class="form-control" name="txtfile" required>
                            <div class="input-group-text">
                                <span class="fas fa-image"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group-append">
                    <div class="input-group-text"> 
                        <div class="input-group mb-3"> 
                            <input type="text" class="form-control" name="txtfnm" placeholder="Enter Full Name" required>
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group-append">
                    <div class="input-group-text"> 
                        <div class="input-group mb-3"> 
                            <input type="email" class="form-control" name="txteml" placeholder="Enter E-mail" required>
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group-append">
                    <div class="input-group-text"> 
                        <div class="input-group mb-3"> 
                            <input type="number" class="form-control" name="txtcon" placeholder="Enter Contact Number" required>
                            <div class="input-group-text">
                                <span class="fa-solid fa-address-book"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group-append">
                    <div class="input-group-text"> 
                        <div class="input-group mb-3"> 
                            <textarea class="form-control ">Enter Address</textarea>
                            <div class="input-group-text">
                                <span class="fas fa-home"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group-append">
                    <div class="input-group-text">
                            <h6 class="w-25">Gender</h6><h6 class="">:</h6> 
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Male
                                    </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Female
                                    </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Other
                                    </label>
                            </div>
                        <div class="input-group-text">
                            <span class="fa-solid fa-person-half-dress"></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>