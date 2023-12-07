<?php include("includes/header.php"); ?>


<?php

$sql = "SELECT zawodnicy.ID, CONCAT(zawodnicy.Imie,' ',zawodnicy.Nazwisko) AS 'Imie_i_nazwisko', zawodnicy.druzyna, zawodnicy.Numer, zawodnicy.Pozycja, zawodnicy.Zdjecie FROM zawodnicy ORDER BY zawodnicy.Imie ASC;";

$res = mysqli_query($conn,$sql) or die(mysqli_error());


?>

<div id="main">

<p class="h1 text-white">Zawodnicy: </p>

<div class="table-wrapper">
    <table class="table table-bordered">
    <thead>
    <tr class="table-primary">
      <th scope="col">#</th>
      <th scope="col">Imie i nazwisko <span style="color:green; font-size:25px;">↑</span></th>
      <th scope="col">Druzyna</th>
      <th scope="col">Numer</th>
      <th scope="col">Pozycja</th>
      <th scope="col">Zdjecie</th>
    </tr>
  </thead>
  <tbody class="table-group-divider table-divider-color">
    
        <?php $i=1; while ($row = mysqli_fetch_assoc($res)) { ?>
            <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row["Imie_i_nazwisko"];?></td>
      <td><?php echo $row["druzyna"];?></td>
      <td><?php echo $row["Numer"];?></td>
      <td><?php echo $row["Pozycja"];?></td>
      <td><?php echo "<img src='grafika/".$row["Zdjecie"]."' alt='".$row["Zdjecie"]."'>";?></td>
      </tr>
      <?php  $i++; } mysqli_close($conn);?>
        
  </tbody>
</table>
        </div>

</div>



<?php include('includes/footer.php'); ?>