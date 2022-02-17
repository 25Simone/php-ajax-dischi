<?php
include __DIR__ . "/../database/discsDb.php";

foreach ($discs as $disc) {
    $discTitle = $disc['title'];
    $discAuthor = $disc['author'];
    $discYear = $disc['year'];
}