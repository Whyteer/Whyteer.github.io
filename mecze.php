<?php include("includes/header.php"); ?>

<?php

$sql = "SELECT mecze.ID, mecze.Gospodarze, mecze.Goscie, mecze.Stadion, mecze.Data_i_godzina, mecze.Wynik, mecze.zdj_sklady FROM mecze WHERE mecze.status = 1 ORDER BY mecze.ID ASC;";

$res = mysqli_query($conn,$sql) or die(mysqli_error());



?>

<div id="main">

<p class="h1 text-white">Ostatnie Mecze: </p> 

<div class="table-wrapper">
    <table class="table table-bordered">
    <thead>
    <tr class="table-primary">
      <th scope="col">#</th>
      <th scope="col">Gospodarze</th>
      <th scope="col">Goscie</th>
      <th scope="col">Stadion</th>
      <th scope="col">Data i godzina</th>
      <th scope="col">Wynik</th>
      <th scope="col">Sklady i Statystyki</th>
    </tr>
  </thead>
  <tbody class="table-group-divider table-divider-color">
    
        <?php while ($row = mysqli_fetch_assoc($res)) { ?>
            <tr>
      <th scope="row"><?php echo $row["ID"] ?></th>
      <td><?php echo $row["Gospodarze"];?></td>
      <td><?php echo $row["Goscie"];?></td>
      <td><?php echo $row["Stadion"];?></td>
      <td><?php echo $row["Data_i_godzina"];?></td>
      <td><?php echo $row["Wynik"];?></td>
      <td style="text-align:center"><a class="przycisk" data-zdj-sklady="<?php echo $row["zdj_sklady"]; ?>">Zobacz</a></td>
      </tr>
      <?php } mysqli_close($conn);?>
        
  </tbody>
</table>


        </div>

<div id="myModal" class="modal">


  <span id="close">Zamknij &times;</span>


  <img class="modal-content" id="img01">


        </div>
        
        <script type="text/javascript" src="js\modal.js"></script>


<?php include('includes/footer.php'); ?>