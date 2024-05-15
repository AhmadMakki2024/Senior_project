<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<div class="row">
                <div class="col-12" style="height:200px;">
                    <div class="position-relative h-100">
                        <img src="img/hero.jpg" style="height:550px; width:100%"/>
                    </div>
                </div>
            </div>
<div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1;">
                <div class="col-lg-8">
                    <div class="bg-white rounded p-5 m-5 mb-0" style="border: 2px solid #13C5DD">
                        <h2>Are you a nurse? Please enter your info to join us</h2><br>
                        <form action="send-application.php" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                            <h4>Personal Info</h4>
                                <div class="col-12 col-sm-6">
                                    <lable>First Name</label>
                                    <input type="text" name="fname" class="form-control bg-light border-0" style="height: 35px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Last Name</label>
                                    <input type="text" name="lname" class="form-control bg-light border-0" style="height: 35px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Gender</label>
                                    <select name="gender" class="form-control bg-light border-0" style="height: 35px;" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Birthdate</label>
                                    <input type="date" name="birthdate" class="form-control bg-light border-0" style="height: 35px;" required>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <lable>Profile Picture</label>
                                    <input type="file" name="profile" class="form-control bg-light border-0" style="height: 35px;" required>
                                </div>
                                </div><br>
                                <div class="row g-3">
                                    <h4>Contact Info</h4>
                                <div class="col-12 col-sm-12">
                                    <lable>Address</label>
                                    <input type="text" name="address" class="form-control bg-light border-0" style="height: 35px;" required>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <lable>Phone Number</label>
                                    <input type="number" name="phone" class="form-control bg-light border-0" style="height: 35px;" required>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <lable>Email Address</label>
                                    <input type="text" name="email" class="form-control bg-light border-0" style="height: 35px;" required>
                                </div>
                                </div><br>
                                <div class="row g-3">
                                    <h4>Education & Experience</h4>
                                <div class="col-12 col-sm-4">
                                    <lable>Certificate</label>
                                    <input type="text" name="certificate" class="form-control bg-light border-0" style="height: 35px;" required>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <lable>College</label>
                                    <input type="text" name="college" class="form-control bg-light border-0" style="height: 35px;" required>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <lable>Years of Experience</label>
                                    <input type="number" name="years" class="form-control bg-light border-0" style="height: 35px;" required>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <lable>Skills</label>
                                    <textarea name="skills" class="form-control bg-light border-0" required></textarea>
                                </div>
                                </div><br>
                                <div class="row g-3">
                                    <h4>Create Password</h4>
                                <div class="col-12 col-sm-6">
                                    <lable>Type Password</label>
                                    <input type="password" name="pass1" class="form-control bg-light border-0" style="height: 35px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <lable>Re-type Password</label>
                                    <input type="password" name="pass2" class="form-control bg-light border-0" style="height: 35px;" required>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Send Application</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


<?php include "footer.php"; ?>