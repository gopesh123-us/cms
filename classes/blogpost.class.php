<!-- model class -->
<?php
class BlogPost extends Dbh {

    protected function getPostsDataAll() {
        $sql = <<<'SQL'
        SELECT post_id, post_category_id, post_title, post_author, post_user, post_date, post_image, post_content, post_tags, post_comment_count, post_status, post_views_count 
        FROM posts
        SQL;

        $stmt = $this->mypdo_connection()->prepare($sql);
        if (!$stmt->execute()) {
            $stmt = null;
            header("location: index.php");
            exit();
        }
        return $stmt->fetchAll();
    }
}
?>