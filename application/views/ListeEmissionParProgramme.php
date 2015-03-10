

<table>
<tr>
    <th>Categorie Age</th>
    <th>Type</th>
    <th>Nom</th>
    <th>Duree</th>
    <th>Chemin</th>
    <th>Supprimer</th>
</tr>
<?php foreach($liste as $listes){ ?>
    <tr>
        <td><?php echo $listes->cat_libelle; ?></td>
        <td><?php echo $listes->t_libelle; ?></td>
        <td><?php echo $listes->e_nom; ?></td>
        <td><?php echo $listes->e_duree; ?></td><td><?php echo $listes->e_chemin; ?></td>
        <td><a href="<?php echo base_url()."/index.php/Emission/supprimerParProgramme/".$listes->idProgramme."/".$listes->idemission; ?>">Supprimer</a></td>
    </tr>
<?php } ?>
</table>

<h3>Ajouter Emission</h3>
<form method="post" action="<?php echo base_url()."/index.php/Emission/ajouterParProgramme/".$idProgramme; ?>">
    Heure Diffusion:<input name="heure_diffusion" type="text">
    <input type="submit" value="OK" />

</form>