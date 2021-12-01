<!DOCTYPE html>

<html>
    <head>

        <title> To do </title>
        <link rel="stylesheet" href="style.css">

    </head>
        
<body>

<?php 

$liste_tache= array();

if(isset($_POST['tache'])) {
    $liste_tache[]= $_POST['tache'];
    file_put_contents("list.txt",$_POST['tache'] . "<br>",FILE_APPEND); }
    ?>

 <script>
    alert("Nouvelle tache ajoutée!");
</script>

<div class= "list">
<h1 class="header"> To do List </h1> 

<?php 
    $liste = file_get_contents("list.txt");
    echo $liste;
?>  
    <form class="item-add" action="" method="post">
        <input type="text" name="tache" placeholder="Tape une nouvelle tache a effectuer." class= "input" autocomplete="off required" >
        <input type="submit"  value="add" class="submit">
    </form> 
</div>

</body>
</html>


   