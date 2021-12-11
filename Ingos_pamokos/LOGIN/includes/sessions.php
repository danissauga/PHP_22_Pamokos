<?php
session_start();
if(isset($_SESSION)) {
    $_SESSION['cookie'] = 'Pirmasis sausainelis';
}