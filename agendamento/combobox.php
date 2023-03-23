
<?php
include_once("../includes.php");
$sql = "SELECT idcidade FROM cidade ORDER BY idcidade";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)!=0){
    $result = $conn->query($sql); 

    foreach($result as $row) {?>
    <p>
                <select name="idcidade">
                    <option value="">Selenciona Uma Cidade</option>
                    <option value=""><?php echo $row ['idcidade'] ?></option>
                    
                </select>
    </p>
    <?php
    }
       }
    
       ?>
