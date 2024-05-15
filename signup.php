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
                        <h2>Create New Account</h2><br>
                        <form action="register.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <lable>First Name</label>
                                    <input type="text" name="fname" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Last Name</label>
                                    <input type="text" name="lname" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Gender</label>
                                    <select name="gender" class="form-control bg-light border-0" style="height: 35px;">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Birthdate</label>
                                    <input type="date" name="birthdate" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Address</label>
                                    <input type="text" name="address" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Phone Number</label>
                                    <input type="number" name="phone" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Type Password</label>
                                    <input type="password" name="pass1" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Re-type Password</label>
                                    <input type="password" name="pass2" class="form-control bg-light border-0" style="height: 35px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                                </div>
                                <p> Already have an account? <a href="signin.php">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


<?php include "footer.php"; ?>