<?php
class LyricsView {
    public function renderForm($searchQuery = '') {
        echo '<h1>Send Lyrics Anonymous</h1>';

        echo '<form method="GET" action="">
                <label for="search">Search by Name (For You):</label>
                <input type="text" id="search" name="search" value="' . htmlspecialchars($searchQuery) . '">
                <button type="submit">Search</button>
              </form>';

        echo '<form method="POST" action="">
                <label for="name">For You:</label>
                <input type="text" id="name" name="name"><br><br>
                <label for="lyrics">Song Lyrics:</label><br>
                <textarea id="lyrics" name="lyrics" rows="4" cols="50" required></textarea><br><br>
                <button type="submit">Submit Lyrics</button>
              </form>';
    }

    public function renderLyrics($lyrics) {
        if (empty($lyrics)) {
            echo '<p>No lyrics submitted yet!</p>';
        } else {
            echo '<h2>Submitted Lyrics</h2>';
            foreach ($lyrics as $lyric) {
                echo '<div><strong>' . htmlspecialchars($lyric['name']) . '</strong><br>';
                echo nl2br(htmlspecialchars($lyric['lyrics'])) . '</div><hr>';
            }
        }
    }
}
?>
