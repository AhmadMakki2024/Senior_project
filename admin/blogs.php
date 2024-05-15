<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">latest News</h5>
                        <h1 class="display-4">Blogs</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>No.</th>
				<th>Title</th>
				<th>Date of Publish</th>
				<th>Category</th>
                <th>View</th>
                <th>Comments</th>
                <th>Delete</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM blogs ORDER BY blogID ASC");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
?>
				<td><?php echo $n ?></td>
                <th><?php echo $row['title'] ?></th>
                <td><?php echo $row['date_of_publish'] ?></td>
                <td><?php echo $row['category'] ?></td>
                <td><a href='view-blog.php?id=<?php echo $row['blogID'] ?>' class='btn btn-info btn-xs'><i class="fa fa-eye"></i></a></td>
                <td><a href='view-comments.php?id=<?php echo $row['blogID'] ?>' class='btn btn-success btn-xs'><i class="fa fa-comment"></i></a></td>
                <td><a href='delete-blog.php?id=<?php echo $row['blogID'] ?>' class='btn btn-danger btn-xs'><i class="fa fa-trash"></i></a></td>
			</tr>
                <?php $n++; }} else {echo "No blogs Found";}?>	
		    </table>
            </div>

                <!-- form -->
                <div class="col-lg-6">
                    <div class="bg-light  rounded p-5">
                        <h1 class="mb-4">Add Blog</h1>
                        <form action="save-blog.php" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <label>Blog Title</label>
                                    <input name="title" type="text" class="form-control bg-white border-0" style="height:50px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Details</label>
                                    <textarea name="description" class="form-control bg-white border-0" rows="4"></textarea>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Image</label>
                                    <input name="img" type="file" class="form-control bg-white border-0">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label>Category</label>
                                    <select name="category" class="form-control bg-white border-0" style="height: 50px;">
                                        <option value="Medicine">Medicine</option>
                                        <option value="Pharmacy">Pharmacy</option>
                                        <option value="Health Care">Health Care</option>
                                        <option value="Nutrition">Nutrition</option>
                                        <option value="Beauty">Beauty</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Add Blog</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

<?php include "footer.php"; ?>