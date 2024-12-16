<?php
function getStory($doorNumber) {
    $stories = [
        1 => "In the depths of a forgotten library, ancient shelves rise like silent sentinels. Dust-laden manuscripts whisper secrets of long-lost civilizations, their pages crackling with untold mysteries waiting to be unraveled.",
        
        2 => "A moonlit garden stretches before you, silver moonbeams dancing on ethereal flowers. Twisted stone paths wind through meticulously trimmed topiaries, each step echoing with the subtle melody of distant wind chimes.",
        
        3 => "Mechanical wonders fill this workshop, a symphony of brass and steel. Intricate gears turn in silent precision, blueprints scatter like fallen leaves, hinting at inventions that blur the line between imagination and reality."
    ];
    
    return $stories[$doorNumber] ?? "No story found for this door.";
}

$door = isset($_GET['door']) ? intval($_GET['door']) : 0;
$story = getStory($door);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Adventure Begins</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="story-container">
        <h1>Door <?php echo $door; ?></h1>
        <p><?php echo $story; ?></p>
        <a href="index.html" class="back-link">← Return to Doors</a>
    </div>
</body>
</html>