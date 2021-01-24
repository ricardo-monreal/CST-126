<?php
	/*
		* Project: Activity 4
		* Author: Ricardo Monreal
		* Date: January 20, 2021
		*
		*/
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