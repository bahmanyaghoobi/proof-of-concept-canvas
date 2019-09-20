<?php

namespace UofT\Canvas;

use \stdClass;

class User {

    public function displayMessage() {
        $user = new stdClass();
        $user->fname = 'Bahman';
        $user->lname = 'Yaghoubi Vije';
        return $user;
    }
}