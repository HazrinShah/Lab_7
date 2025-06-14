<?php

    include 'Database.php';
    include 'User.php';

    $db = new Database();
    $conn = $db->getConnection();

    $user = new User($conn);
    $users = $user->getUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
    <table border=1>
        <thead>
            <th>Matric</th>
            <th>Name</th>
            <th>Role</th>
        </thead>
        <tbody>
            <?php

                foreach($users as $registeredUsers) {
            ?>
            <tr>
                <td><?php echo $registeredUsers['matric']; ?></td>
                <td><?php echo $registeredUsers['name']; ?></td>
                <td><?php echo $registeredUsers['role']; ?></td>
            </tr>
            <?php

                }

            ?>
        </tbody>
    </table>
</body>
</html>