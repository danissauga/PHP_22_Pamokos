<?php

class Datadb {

    public function test_data_exist() {
        if(isset($_SESSION['accounts'])) {
            if (count($_SESSION['accounts']) !== 0) {
                return $_SESSION['accounts'];
            }

        }
    }


}