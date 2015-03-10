<table>
<tr><td>Categorie Age</td><td>Type</td><td>Nom</td><td>Duree</td><td>Chemin</td><td>Supprimer</td></tr>
<?php foreach($liste->result() as $listes){ ?>
    <tr><td><?php echo $listes->cat_libelle; ?></td><td><?php echo $listes->t_libelle; ?></td><td><?php echo $listes->e_nom; ?></td>
        <td><?php echo $listes->e_duree; ?></td><td><?php echo $listes->e_chemin; ?></td><td><a href="<?php echo base_url()."/index.php/Emission/supprimer/".$listes->idemission; ?>">Supprimer</a></td></tr>
<?php } ?></tr>
</table>
<h3>Nouvelle Emission</h3>


<form method="post" action="<?php echo base_url();?>/index.php/Emission/ajouter">
    Categorie:<input name="idcategorie" type="text">
    Type:<input name="idtype" type="text">
    Nom:<input name="nom" type="text">
    Duree:<input name="duree" type="text">
   Chemin:<input name="chemin" type="text">


    <input type="submit" value="OK" />

</form>