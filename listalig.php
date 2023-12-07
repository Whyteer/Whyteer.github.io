<?php include("includes/header.php"); ?>

<?php

$sql = "SELECT ligi.ID, ligi.Nazwa, ligi.Sezony, ligi.Logo FROM ligi
ORDER BY ligi.ID ASC;";

$res = mysqli_query($conn,$sql) or die(mysqli_error());



?>

<div id="main">

<p class="h1 text-white">Lista lig: </p>
<div class="table-wrapper">
    <table class="table table-bordered">
    <thead>
    <tr class="table-primary">
      <th scope="col">#</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Sezony</th>
      <th scope="col">Logo</th>
    </tr>
  </thead>
  <tbody class="table-group-divider table-divider-color">
    
        <?php while ($row = mysqli_fetch_assoc($res)) { ?>
            <tr>
      <th scope="row"><?php echo $row["ID"]; ?></th>
      <td><?php echo $row["Nazwa"];?></td>
      <td><?php echo $row["Sezony"];?></td>
      <td><?php echo "<img src='grafika/".$row["Logo"]."' alt='".$row["Logo"]."'>";?></td>
      </tr>
      <?php  } mysqli_close($conn);?>
        
  </tbody>
</table>
        </div>

</div>




<?php include('includes/footer.php'); ?>