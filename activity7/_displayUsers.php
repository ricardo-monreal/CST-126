<!--
 * Project: Activity 7
 * Author: Ricardo Monreal
 * Date: February 17, 2021
 *
 -->
<?php

?>
<style>
    .center{
        margin: auto;
    }
    table td {
        padding: 0px 10px;
    }
</style>

<table class="center">
	<tr>
		<th>ID <span> - </span></th>
		<th>First Name <span> - </span></th>
		<th>Last Name</th>
	</tr>
    <?php


    for ($i = 0; $i < count($users); $i++) {
        echo "<tr>";
        echo "<td>" . $users[$i][0] . "</td>" . "<td>" .
                        $users[$i][1] . "</td>" . "<td>" . $users[$i][2] . "</td>";
        echo "</tr>";
    }
    ?>
</table>