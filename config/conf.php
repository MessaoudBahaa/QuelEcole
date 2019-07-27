<?php
class Conf {
    static $db = array(
        'default' => array(
            'host' => 'localhost',
            'dbname' => 'quelecole_db',
            'username' => 'root',
            'password' => '',
            'options' => array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            )
        )
    );
}
?>