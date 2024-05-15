<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Search Result Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
<!-- Blog Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Blog Post</h5>
                <h1 class="display-4">Our Latest Medical Blog Posts</h1>
            </div>
            <div class="row g-5">
<?php
$result = mysqli_query($con,"SELECT * FROM blogs");
if(mysqli_num_rows($result)>0){   
while($row = mysqli_fetch_array($result)){
$bid = $row['blogID'];
$resultc = mysqli_query($con,"SELECT * FROM comments WHERE blogID='$bid'");
$nb = mysqli_num_rows($resultc);
?>
                <div class="col-xl-4 col-lg-6">
                    <div class="bg-light rounded overflow-hidden">
                        <img class="img-fluid w-100" src="../blogs-img/<?php echo $row['image'] ?>" alt="">
                        <div class="p-4">
                            <a class="h3 d-block mb-3" href=""><?php echo $row['title'] ?></a>
                        </div>
                        <div class="d-flex justify-content-between border-top p-4">
                            <div class="d-flex align-items-center">
                                <a class="rounded-circle me-2" href="view-blog.php?id=<?php echo $row['blogID']?>"><small><i class="far fa-eye text-primary me-1"></i> Read More</small></a>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="far fa-comment text-primary me-1"></i><?php echo $nb ?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }} else { echo "No Blogs Found" ;} ?>
            </div>
        </div>
    </div>
</div></div>
</div>


    <?php include "footer.php"; ?>