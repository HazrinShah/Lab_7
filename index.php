<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            margin: 0;
        }
        .sidebar {
            width: 200px;
            background: #f0ad4e;
            padding: 20px;
        }
        .sidebar a {
            display: block;
            margin-bottom: 10px;
            padding: 10px;
            background: #0275d8;
            color: white;
            text-decoration: none;
            text-align: center;
        }
        .content {
            flex: 1;
            padding: 500px;
            background: #eee;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <a href="?action=read">View Users</a>
        <a href="?action=insert">Insert User</a>
    </div>

    <div class="content">
        <?php
        $action = $_GET['action'] ?? '';

        if ($action === 'read') {
            include 'read.php';
        } elseif ($action === 'insert') {
            include 'insert_form.php';
        } else {
            echo "<h2>Welcome to the User Management System</h2>";
            echo "<p>Use the menu to view or insert users.</p>";
        }
        ?>
    </div>

</body>
</html>
