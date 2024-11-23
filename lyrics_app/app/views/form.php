<h1>Send Lyrics Anonymous</h1>
<form method="GET" action="">
    <label for="search">Search by Name (For You):</label>
    <input type="text" id="search" name="search" value="<?= htmlspecialchars($searchQuery) ?>">
    <button type="submit">Search</button>
</form>

<form method="POST" action="">
    <label for="name">For You:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="lyrics">Song Lyrics:</label><br>
    <textarea id="lyrics" name="lyrics" rows="4" cols="50" required></textarea><br><br>
    <button type="submit">Submit Lyrics</button>
</form>
