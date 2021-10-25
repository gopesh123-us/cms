<?php

class CategoriesView extends Categories {

    public function getCategories() {
        $results = [];
        $results = $this->getAllCategoriesForNav();
        return $results;
    }
}
