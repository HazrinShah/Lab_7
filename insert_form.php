<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Form</title>
    <style>
        div {
            margin : 50px;
            padding : 25px;
            width : 250px;
            height : 100px;
            background-color : white;
            border : 1px solid black;
        }
    </style>
</head>
<body>
    <div>
        <form action="insert.php" method="post">
            Matric : <input type="text" id="matric" name="matric">
            <br>Name : <input type="text" id="name" name="name">
            <br>Password : <input type="password" id="password" name="password">
            <br>Role : <select name="role" id="role">
                <option value="" selected>Please Select</option>
                <option value="lecturer">Lecturer</option>
                <option value="student">Student</option>
            </select>
            <br><input type="submit" value="submit">
        </form>
    </div>
</body>
</html>

<!-- file ni deal dengan client -->