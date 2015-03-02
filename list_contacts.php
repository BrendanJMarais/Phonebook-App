<table class="table_list" cellspacing="2" cellpadding="0">
    <tr class="bg_h">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Delete Contact</th>
    </tr>
    <?php
		// display the list of all contacts in table view
        $sql = "SELECT * FROM contacts ORDER BY id ASC";
        $query = $pdo->prepare($sql);
        $query->execute();
        $list = $query->fetchAll();
        $bg = 'bg_1';
        foreach ($list as $rs) {
            ?>
            <tr class="<?php echo $bg; ?>">
                <td><?php echo $rs['first_name']; ?></td>
                <td><?php echo $rs['last_name']; ?></td>
                <td><?php echo $rs['phone_number']; ?></td>
                <td><a href="#" class="delete_c" onclick="delete_contact(<?php echo $rs['id']; ?>)"><img src="images/delete.png"> Delete</a></td>
            </tr>
            <?php
            if ($bg == 'bg_1') {
                $bg = 'bg_2';
            } else {
                $bg = 'bg_1';
            }
        }
    ?>
</table>