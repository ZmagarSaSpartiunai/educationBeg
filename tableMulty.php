<table>
<?php
$i = 1;

while ($i <= 10) {
    $y = 1;
    echo "<td>";
    while ($y <=10) {
        
        echo "<tr>$i*$y=".$i*$y."</tr> \n";
        $y++ ;
    }
    echo "</td>";
    $i++;  
}

?>
</table>

<?php
                $i = 1;

                while ($i <= 10) {
                    $y = 1;
            ?>
        <td>
                <?php
                    while ($y <=10) {
                ?>
            <tr>
                    
                <?php
                        print ("$i*$y=".$i*$y."\n");
                ?>
            </tr> 
            <?php
                $y++ ;
                }
            ?>
        </td>
            <?php
                $i++;  
            }

            ?>