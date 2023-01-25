[
    <?php $nb = count($employees); $i = 0; foreach ($employees as $id => $employee): ++$i ?>
{
    "id": "<?php echo $id ?>",
    <?php $nb1 = count($employee); $j = 0; foreach ($employee as $key => $value): ++$j ?>
        "<?php echo $key ?>": <?php echo json_encode($value).($nb1 == $j ? '' : ',') ?>
        
    <?php endforeach ?>
}<?php echo $nb == $i ? '' : ',' ?>
    
    <?php endforeach ?>
]