<?php 
    exec('git pull 2>&1',$out);
    var_dump($out);