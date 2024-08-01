<?php

namespace app\models;

class PasswordGenerator {
    public function __construct(
        private int $length = 5,
        private bool $use_uppercase = true,
        private bool $use_numbers = true,
        private bool $use_special_chars = true
    ){}

    public function generate() {
        $chars = 'abcdefghijklmnopqrstuvwxyz';
        if ($this->use_uppercase == true) {
            $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if ($this->use_numbers == true) {
            $chars .= '0123456789';
        }
        if ($this->use_special_chars == true) {
            $chars .= '!@#$%^&*()_+-={}:<>?';
        }
        $password = '';
        for ($i = 0; $i < $this->length; $i++) {
            $password .= $chars[rand(0, strlen($chars) - 1)];
        }
        echo $password;
    }
}