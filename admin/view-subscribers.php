<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>

<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Patients Applied</h5>
                <h1 class="display-4"><i class="fa fa-users"></i> Suscribers</h1>
            </div>
            <table class="table table-striped" style="color:black">
			<tr>
				<th>Subscriber No.</th>
				<th>Full Name</th>
				<th>Plan </th>
				<th>Payment Method</th>
			</tr>
<?php
$planid = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM subscriptions WHERE planID='$planid' ORDER BY patientID ASC");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
    $pid = $row['patientID'];
    
    $resultP = mysqli_query($con,"SELECT * FROM patients WHERE patientID='$pid'");
            $rowP = mysqli_fetch_array($resultP);

            $resulti = mysqli_query($con,"SELECT * FROM insurance_plans ORDER BY planID='$planid'");
                $rowi = mysqli_fetch_array($resulti);
?>
				<td><?php echo $n ?></td>
                <td><i class="fa fa-user"></i> <?php echo $rowP['first_name'] ?> <?php echo $rowP['last_name'] ?></td>
                <td>
                   <?php if($row['price_method']=="Yearly") {?>
                    <?php echo $row['price_method'] ?> Plan for <?php echo $rowi['yearly_price'] ?>$
                    <?php } else{?>
                    <?php echo $row['price_method'] ?> Plan for <?php echo $rowi['monthly_price'] ?>$
                    <?php } ?> 
                        
                </td>
                <td>
                    <?php if($row['payment_method']=="Credit Card") {?>
                    <i class="bi bi-credit-card" aria-hidden="true"></i> <?php echo $row['payment_method'] ?></td>
                    <?php } else {?>
                    <i class="fa fa-paypal"></i> <?php echo $row['payment_method'] ?></td>
                    <?php }?>
			</tr>
                <?php $n++; }} else {echo "No Subscribers Found";}?>	
		    </table>
        </div>
    </div>



<?php include "footer.php"; ?>