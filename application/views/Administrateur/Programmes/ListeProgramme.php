<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 02/02/15
 * Time: 11:39
 */
?>
<html>

<head>
    <title></title>
    <?php //echo base_url() ?>
</head>

<body>
<?php foreach($liste as $listes): ?>
    <a href="<?php echo base_url()."/index.php/Emission/listeParProgramme/".$listes->idprogramme; ?>">
        <?php echo $listes->p_date; ?>
    </a>
    <br />
<?php endforeach; ?>
<h3>Nouveau programme</h3>

<form method="post" action="<?php echo base_url();?>/index.php/Programme/ajouter">
    <table>
        <tr>
            <td>Date:</td>
            <td><input name="dateProgramme" type="text"></td>
            <td><input type="submit" value="OK" /></td>
        </tr>
    </table>
</form>
</body>

</html>