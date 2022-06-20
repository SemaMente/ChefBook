<?php
// It was created for the purpose of extracting data from the database.
class info
{

    public function getUserInfo($id)
    {
        $query = "select * from users where userid =" . $id;
        $DB = new Database();
        $result = $DB->read($query);
        return $result;
    }

    public function getCategories()
    {
        $query = "select * from categories";
        $DB = new Database();
        $result = $DB->read($query); //We equalize the value we wrote to the result and return it.
        return $result;
    }

    public function getCategory($id)//It sends id parameter and returns records with equal id and user. Returns a single record because the ids are unique
    {
        $query = "select * from categories where id = $id";
        $DB = new Database();
        $result = $DB->read($query);
        return $result;
    }

    //Using the user's id, it shows the recipes shared by the user in the account setting section.
    public function getUserRecipes($id)
    {
        $query = "select * from recieps where user_id =" . $id;
        $DB = new Database(); //create dataset
        $result = $DB->read($query);
        return $result;
    }

    public function getCategoryRecipes($category_id) //user selects id and you return recipes belonging to that id
    {
        $query = "select * from recieps where category_id =" . $category_id;
        $DB = new Database();
        $result = $DB->read($query);
        return $result;
    }

    public function getRecipeDetail($id)
    {
        $query = "select * from recieps where id = $id";
        $DB = new Database();
        $result = $DB->read($query);
        return $result;
    }

    public function getComments($recipe_id)
    {
        $query = "SELECT  comments.*, users.first_name, users.last_name FROM comments INNER JOIN users on comments.user_id = users.userid WHERE recipe_id = $recipe_id";
        $DB = new Database();
        $result = $DB->read($query);
        return $result;
    }


}