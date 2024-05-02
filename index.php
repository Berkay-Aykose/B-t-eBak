<?php require_once 'header.php' ?>

<body class="bg-light">

<?php 
$sql = $db->prepare("SELECT * FROM income 
                    UNION ALL
                    SELECT * FROM expense;");
$sql->execute();

while ($sqlCek = $sql->fetch(PDO::FETCH_ASSOC)) {
    $category[] = $sqlCek['income_category'];
    $money[] = $sqlCek['income_money'];
    $date[] = $sqlCek['income_timedate'];
}

/*                 
echo "<pre>";
print_r($category);
print_r($money);
print_r($date);
echo "</pre>";
*/
?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Adet</th>
      <th scope="col">Kategori</th>
      <th scope="col">Tutar</th>
      <th scope="col">Tarih</th>
    </tr>
  </thead>
  <tbody>

  
    <!--veri çoğalt-->
    <?php 
    $bir=1;
    for ($i=0; $i<count($date); $i++) { ?>
        
        <tr>
            <th scope="row"> <?php echo $i+$bir ?> </th>
            <td> <?php echo $category[$i] ?> </td>
            <td> <?php echo $money[$i] ?> </td>
            <td> <?php echo $date[$i] ?> </td>
        </tr>

    <?php 
    }
    ?>

    

  </tbody>
</table>

<?php require_once 'footer.php' ?>