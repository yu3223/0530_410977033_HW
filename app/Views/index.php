<!DOCTYPE html>
<html lang="en">
<?= $this->include("templates/head") ?> 
<body>
<?= $this->include("templates/heading") ?> 
    
    <table>
        <thead>
            <tr>
                <th>Time Used</b></th>
                <th>Step</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>                  
                <?php foreach ($todo_list as $time_used => $item1) :?>
                    <tr>
                        <td><?= esc($time_used) ?></td>

                        <?php foreach ($item1 as $item2 => $value) :?> 
                            <td><?= esc($value) ?></td>
                        <?php endforeach ?> 
                    </tr>         
                <?php endforeach ?>                       
            </tr>
        </tbody>
    </table>
</body>
</html>