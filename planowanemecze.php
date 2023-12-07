<?php include("includes/header.php"); ?>

<?php 

$teamid = $_GET['pid'];


$sql = "SELECT druzyny.Nazwa FROM druzyny WHERE druzyny.ID = $teamid";
$sql2 = "SELECT mecze.ID, mecze.Gospodarze, mecze.Goscie, mecze.Stadion, mecze.Data_i_godzina, mecze.Wynik, mecze.zdj_sklady FROM mecze JOIN druzyny ON mecze.Gospodarze = druzyny.Nazwa WHERE mecze.status = 0 AND (mecze.Gospodarze = ($sql) OR mecze.Goscie = ($sql)) ORDER BY mecze.ID ASC;";
$res = mysqli_query($conn,$sql) or die(mysqli_error());

$row = mysqli_fetch_row($res);


?>

<div id="main">




<p class="h1 text-white">Planowane Mecze: <span style="text-decoration:underline"><?php echo $row[0]?> </span> </p>
<p class="h3 text-danger" id="error"> </p>

<?php

$res = mysqli_query($conn,$sql2) or die(mysqli_error());

if (mysqli_num_rows($res) > 0) {
?>
<div class="table-wrapper">
    <table class="table table-bordered">
    <thead>
    <tr class="table-primary">
      <th scope="col">#</th>
      <th scope="col">Gospodarze</th>
      <th scope="col">Goscie</th>
      <th scope="col">Stadion</th>
      <th scope="col">Data i godzina</th>
    </tr>
  </thead>
  <tbody class="table-group-divider table-divider-color">
    
        <?php $i=1; while ($row = mysqli_fetch_assoc($res)) { ?>
            <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row["Gospodarze"];?></td>
      <td><?php echo $row["Goscie"];?></td>
      <td><?php echo $row["Stadion"];?></td>
      <td><?php echo $row["Data_i_godzina"];?></td>
      </tr>
      <?php  $i++;} ?>
        
  </tbody>
</table>


        </div>
        <?php } else { ?> 
        <script>
              var pole = document.getElementById("error");
              pole.innerHTML = "Brak meczy";
              pole.style.margin="100px";
            
            </script>
            <?php } ?>

        <div id="myModal" class="modal">


  <span id="close">Zamknij &times;</span>


  <img class="modal-content" id="img01">


        </div>

        </div>
        <?php 
            $res = mysqli_query($conn,$sql) or die(mysqli_error());

            $row = mysqli_fetch_row($res);

?>
        <script>

var td = document.getElementsByTagName("td");

for (var i = 0; i < td.length; i++) {
    if (td[i].innerHTML === "<?php echo $row[0];?>") {
        td[i].style.backgroundColor = "yellow";
    }
}
          </script>

        <script type="text/javascript" src="js\modal.js"></script>

<?php mysqli_close($conn); include('includes/footer.php'); ?>