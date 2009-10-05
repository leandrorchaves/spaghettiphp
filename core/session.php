<?php
/**
 *  Short description.
 *
 *  @license   http://www.opensource.org/licenses/mit-license.php The MIT License
 *  @copyright Copyright 2008-2009, Spaghetti* Framework (http://spaghettiphp.org/)
 *
 */

class Session extends Object {
    public static function start() {
        return session_start();
    }
    public static function read($name) {
        return $_SESSION[$name];
    }
    public static function write($name, $value) {
        $_SESSION[$name] = $value;
    }
}

?>