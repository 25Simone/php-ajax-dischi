<?php
    // IMPORT DB
    include "../database/discsDb.php";
    
    // HEADER IMPOSTATION
    header("Content-Type: application/json");

    // PRINT JSON
    echo json_encode($discs);