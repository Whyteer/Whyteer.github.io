<?php include("includes/header.php"); ?>

<?php

$sql = "SELECT druzyny.ID, druzyny.Nazwa, druzyny.Logo, ligi.Nazwa AS 'Liga' FROM druzyny JOIN ligi ON druzyny.ID_Liga = ligi.ID ORDER BY ID ASC;";

$res = mysqli_query($conn,$sql) or die(mysqli_error());


?>
<div id="main">
    
    <p class="h1 text-white">Lista druzyn: </p>

    <div class="table-wrapper">
    <table class="table table-bordered table-responsive">
  <thead class="thead-dark">
    <tr class="table-primary">
      <th scope="col">#</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Liga</th>
      <th scope="col">Logo</th>
      <th scope="col">Historia rozgrywek</th>
      <th scope="col">Planowane mecze</th>
    </tr>
  </thead>
  <tbody class="table-group-divider table-divider-color">
    
        <?php while ($row = mysqli_fetch_assoc($res)) { ?>
            <tr>
      <th scope="row"><?php echo $row["ID"]; ?></th>
      <td><?php echo $row["Nazwa"];?></td>
      <td><?php echo $row["Liga"];?></td>
      <td><?php echo "<img src='grafika/".$row["Logo"]."' alt='".$row["Logo"]."'>";?></td>
      <td style="text-align:center"><a class="przycisk2" href="historiarozgrywek.php?pid=<?php echo $row["ID"];?>">Zobacz</a></td>
      <td style="text-align:center"><a class="przycisk3" href="planowanemecze.php?pid=<?php echo $row["ID"];?>">Zobacz</a></td>
      </tr>
        </div>
      <?php  } mysqli_close($conn);?>
        
  </tbody>
</table>
</div>


        </div>

<?php include('includes/footer.php'); ?>
  
 