<?php 
$title="Learn PHP from Scratch";
$heading="Welcome to the course";
$firstName="Saku";
$lastName="Tana";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?=$title ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1><?=$firstName." ".$lastName?>

        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg s   hadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?=$heading?></h2>
            <?php echo "<p>In this course, you will learn the fundamentals of the PHP language {$firstName}</p>"?>
        </div>
    </div>
</body>

</html>