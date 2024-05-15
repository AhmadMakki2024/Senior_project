<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<div class="row">
                <div class="col-12" style="height:200px;">
                    <div class="position-relative h-100">
                        <img src="img/hero.jpg" style="height:300px; width:100%"/>
                    </div>
                </div>
            </div>
<div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1;">
                <div class="col-lg-8">
                    <div class="bg-white rounded p-5 m-5 mb-0" style="border: 2px solid #13C5DD">
                        <h2>Welcome to MediNurse! Please Sign In</h2><br>
                        <form action="login.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <lable>Email or Phone Number</label>
                                    <input type="text" name="username" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <lable>Password</label>
                                    <input type="password" name="password" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                </div>
                                <p> Don't have an account? <a href="signup.php">Sign Up</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


<?php include "footer.php"; ?>