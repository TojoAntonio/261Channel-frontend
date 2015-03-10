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
</body>

</html>