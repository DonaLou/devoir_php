<?php

$conn = new PDO("mysql:host=localhost;dbname=base1;charset=utf8;port=8888", "root", "root", []);
$req = $conn->prepare("SELECT * FROM categorie");
$req->execute();
$categories = $req->fetchALL(PDO::FETCH_OBJ);

?>

<form action="#" method="post" name="searchcategorie">
    <select name="searchcategorie">
    	<?php foreach ($categories as $categorie):?>

    		<option value="<?php echo $categorie->id_categorie;?>">
    			<?php echo $categorie->nom_categorie;?>
    		</option>

   		<?php endforeach ?>
    </select>
    <button>Rechercher</button>
</form>


