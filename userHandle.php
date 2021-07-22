<?php
require "Connection.php";
class UserHandle extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }
    public function registerUser(User $user)
    {
        $firstname = $user->getFirstName();
        $lastname = $user->getLastName();
        $email = $user->getEmail();
        $phoneNo = $user->getPhoneNumber();
        $state = $user->getState();
        $city = $user->getCity();
        $tole = $user->getTole();
        $username = $user->getUserName();
        $password = $user->getPassword();
        $registerDate = $user->getregisteredDate();


        $query = "INSERT INTO `registration`(`firstName`, `lastName`, `email`, `phoneNumber`, `state`, `city`, `tole`, `userName`, `password`, `level`, `registeredDate`) VALUES ('$firstname','$lastname','$email','$phoneNo','$state','$city','$tole','$username','$password',3,'$registerDate')";

        if ($this->checkConnection()) {
            $result = mysqli_query($this->getConnection(), $query);
            if ($result) {
                return json_encode(array("status" => "Registration Sucess"));
            } else {
                return json_encode(array("status" => "Registration Failed"));
            }
        } else {
            return json_encode(array("status" => "Database Connection Failed"));
        }
    }

    function loginUser($user, $pass)
    {
        $sql = "SELECT * FROM `registration` WHERE userName = '$user' AND password = '$pass'";
        if ($this->checkConnection()) {
            $result = mysqli_query($this->getConnection(), $sql);
            if ($result->num_rows > 0) {
                return json_encode(array("status" => "Login Sucess"));
            } else {
                return json_encode(array("status" => "Incorrect Credentials"));
            }
        } else {
            return json_encode(array("status" => "Database Connection Failed"));
        }
    }
}
