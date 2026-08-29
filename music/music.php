<?php

$songs = [
    ["title" => "Perfect", "artist" => "Ed Sheeran", "genre" => "Pop"],
    ["title" => "Believer", "artist" => "Imagine Dragons", "genre" => "Rock"],
    ["title" => "Havana", "artist" => "Camila Cabello", "genre" => "Pop"],
    ["title" => "Faded", "artist" => "Alan Walker", "genre" => "EDM"],
    ["title" => "Shape of You", "artist" => "Ed Sheeran", "genre" => "Pop"]
];

$search = $_GET["song"] ?? "";
$found = null;

foreach ($songs as $song) {
    if (strtolower($song["title"]) == strtolower($search)) {
        $found = $song;
        break;
    }
}

echo "
<style>
body {
    font-family: Arial;
    background: linear-gradient(135deg, #6c5ce7, #a29bfe);
    padding: 40px;
}
.music {
    width: 70%;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 25px;
    box-shadow: 0 8px 25px #333;
}
h1 {
    text-align: center;
    color: #2d3436;
}
input {
    padding: 12px;
    width: 60%;
    border-radius: 10px;
    border: 2px solid #6c5ce7;
}
button {
    padding: 12px 20px;
    background: #6c5ce7;
    color: white;
    border: none;
    border-radius: 10px;
}
.song {
    background: #dfe6e9;
    margin: 10px;
    padding: 15px;
    border-radius: 12px;
}
.result {
    background: #ffeaa7;
    padding: 20px;
    margin-top: 20px;
    border-radius: 15px;
}
</style>

<div class='music'>

<h1> My Music Playlist</h1>

<form>
<input type='text' name='song' placeholder='Search song...'>
<button type='submit'>Search </button>
</form>

<h2> Available Songs</h2>
";

foreach ($songs as $song) {
    echo "
    <div class='song'>
     <b>{$song['title']}</b> -
    {$song['artist']} |
    {$song['genre']}
    </div>";
}

if ($found) {
    echo "
    <div class='result'>
     <b>Song Found!</b><br><br>
    Title: {$found['title']}<br>
    Artist: {$found['artist']}<br>
    Genre: {$found['genre']}
    </div>";
} elseif ($search != "") {
    echo "
    <div class='result'>
     Song not found in the playlist.
    </div>";
}

echo "
<h3> Total Songs: " . count($songs) . "</h3>

</div>";
?>