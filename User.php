<?php
class User
{
    private $conn;

    public function __construct($db)
        {
        $this->conn = $db;
        }


    public function createUser($matric, $name, $password, $role)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(matric, name, password, role) VALUES (?,?,?,?)";

        $stmt = $this->conn->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("ssss", $matric, $name, $password, $role);
                $result = $stmt->execute();
                    if ($result){
                        echo"<script>alert('User successfully been added');</script>";
                        
                    }
                    else {
                        return "Error: " . $stmt->error;
                    }
                    $stmt->close();
            }
            else{
                return "Error: ".$this->conn->error;
            }

    }
    // file ni yang proses collected data


    public function getUsers()
    {
        $sql = "SELECT matric, name, role FROM users";
        $result = $this->conn->query($sql);
        return $result;
    }



}
