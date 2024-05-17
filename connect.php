<?php

if(isset($_POST['f_short_id'])){
    $f_short_id = $_POST['f_short_id'];
    // $con = mysqli_connect("sql113.infinityfree.com","epiz_28559236","sayeed4321","epiz_28559236_fileshare");
    $con = mysqli_connect("localhost","root","","fileshare");
    $sql = "SELECT * FROM peer_ids WHERE short_id='$f_short_id' ORDER BY id DESC LIMIT 1";
    $query = mysqli_query($con,$sql);
    $result = mysqli_fetch_array($query);
    echo $result['peer_id'];
}

?>