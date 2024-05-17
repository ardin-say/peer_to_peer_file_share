<?php

if(isset($_POST['my_peer_id'])){
    $my_peer_id = $_POST['my_peer_id'];
    $dt = date("Y-m-d");
    $short_id = random_int(100000, 999999);
    // $con = mysqli_connect("sql113.infinityfree.com","epiz_28559236","sayeed4321","epiz_28559236_fileshare");
    $con = mysqli_connect("localhost","root","","fileshare");

    $sql = "INSERT INTO peer_ids (peer_id,short_id,dt) VALUES ('$my_peer_id','$short_id','$dt')";
    mysqli_query($con,$sql);
    echo $short_id;
}

?>