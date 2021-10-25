<?php
//model class - has all methods to connect to db
class Categories extends Dbh {
    public function getAllCategoriesForNav() {
        $sql = "SELECT category_id, category_title FROM categories;";
        $smt = $this->mypdo_connection()->prepare($sql);
        if (!$smt->execute()) {
            $smt = null;
            header("location: ../index.php");
            exit();
        }
        return $smt->fetchAll();
    }
}
