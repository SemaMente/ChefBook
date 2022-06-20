<?php
//update class
class update
{
//update profile information
    public function updateProfileInfo($data, $userId)
    {
        $query = "UPDATE users SET  first_name = '" . $data['first_name'] . "', last_name = '" . $data['last_name'] . "', gender = '" . $data['gender'] . "', email = '" . $data['email'] . "', password = '" . $data['password'] . "' WHERE userid = $userId";
        $DB = new Database();
        return $DB->save($query);
    }
}