<?php
    $date = new DateTime();
    $date= $date->setTimestamp(1445864828 );
    echo "Date: ".$date->format("y-m-d");

?>