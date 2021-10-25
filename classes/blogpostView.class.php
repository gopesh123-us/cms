<?php

class BlogPostView extends BlogPost {

    //get all blogposts data
    public function getblogpostDataAll() {
        $data  = [];
        $data = $this->getPostsDataAll();
        return $data;
    }
}
