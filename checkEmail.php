<?php
function checkEmail($email) {
    if (!(strpos($email, '@') && strpos($email, '.'))) {
        return true;
    }
    return false;
}