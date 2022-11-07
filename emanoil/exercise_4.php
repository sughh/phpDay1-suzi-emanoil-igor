<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
</head>
<body>
    <?php
        $cartoons = array(
            "Mickey Mouse" => array(
                "type"=> "mouse",
                "creator" => "Walt Disney",
                "genre" => "adventure" 
            ),

            "Pokemon" => array(
                "type"=> "fictional character",
                "creator" => "Satoshi Tajiri",
                "genre" => "action" 
            ),

            "Tom" => array(
                "type"=> "cat",
                "creator" => ["William Hanna", "Joseph Barbera"],
                "genre" => "komedy" 
            ),

            "Jerry" => array(
                "type"=> "mouse",
                "creator" => ["William Hanna", "Joseph Barbera"],
                "genre" => "komedy" 
            ),

            "Fred Flintsone" => array(
                "type"=> "prehistoric character",
                "creator" =>  ["William Hanna", "Joseph Barbera"],
                "genre" => "komedy" 
            ),

            "Wilma Flintstone" => array(
                "type"=> "prehistoric character",
                "creator" => ["William Hanna", "Joseph Barbera"],
                "genre" => "komedy" 
            )
            );
            
            echo "<pre><h5>";
            print_r ($cartoons);
            echo "</h5></pre>";
    ?>
</body>
</html>