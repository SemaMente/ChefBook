<?php
// the creating class
class create
{
    public function createRecipe($data, $file, $user_id)
    {
        $query = "INSERT INTO recieps VALUES (null, '" . $data['name'] . "', '" . $data['description'] . "', '" . $file['image']['name'] . "','" . $data['category'] . "', $user_id, CURRENT_TIMESTAMP)";
        $DB = new Database();
        return $DB->save($query);
    }

    public function createComment($data, $user_id)
    {
        $query = "INSERT INTO comments VALUES (null, '" . $data['comment'] . "', " . $user_id . ", " . $data['recipe_id'] . ", CURRENT_TIMESTAMP)";
        $DB = new Database();
        return $DB->save($query);
    }
    // public function createBlog( $title, $blogcontent, $blogphoto){
    //     $query = "insert into blogs(blog_title,blog_text,blog_photo) values ('$title','$blogcontent','$blogphoto')";
    //     $DB = new Database();
    //     $result = $DB->save($query);
    // }
}