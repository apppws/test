<?php 
    exec('git pull 2>&1',$out);
    echo json_encode($out);