<?php

class dbObj extends mysqli {
    public function __construct($host='localhost', $user='root', $pass='', $db='employee') {
        parent::__construct($host, $user, $pass, $db);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }
}


?>