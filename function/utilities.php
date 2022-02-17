<?php
    function printCards($discs, $selectedGenre) {
        foreach ($discs as $disc) {
            $discPoster = $disc['poster'];
            $discTitle = $disc['title'];
            $discAuthor = $disc['author'];
            $discYear = $disc['year'];

            if(strtolower($disc['genre']) == $selectedGenre) {
                // CARD
                echo "<div class='card col-2'>";
                // CARD IMAGE
                echo "<div class='card-image'>";
                    echo "<img src='$discPoster' alt='disc cover'>";
                echo "</div>";
                // CARD DATA
                echo "<div class='card-data'>";
                    echo "<h3>$discTitle</h3>";
                    echo "<p>
                                $discAuthor
                                <br>
                                $discYear
                              </p>";
                echo "</div>";
                echo "</div>";
            } else if ($selectedGenre == 'all') {
                // CARD
                echo "<div class='card col-2'>";
                // CARD IMAGE
                echo "<div class='card-image'>";
                    echo "<img src='$discPoster' alt='disc cover'>";
                echo "</div>";
                // CARD DATA
                echo "<div class='card-data'>";
                    echo "<h3>$discTitle</h3>";
                    echo "<p>
                                $discAuthor
                                <br>
                                $discYear
                              </p>";
                echo "</div>";
                echo "</div>";
            }  
        }
    }
?>    