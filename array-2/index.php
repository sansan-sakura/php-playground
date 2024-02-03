<?php
$output = null;
$ids=[10,21,33,22,12,34];
$users=["user1","user2","user3"];

//count
echo count($ids);

//sort

echo sort($ids);
echo sort($users);

echo rsort($ids);
echo rsort($users);

array_push($ids,100);
array_pop($users);

 $id2=array_slice($ids,2,3);
 var_dump($id2);
//  echo $ids;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semi-bold my-4">IDs Array:</h2>
            <p>
                <pre><?php print_r($ids)?></pre>
            </p>
            <h2 class="text-xl font-semi-bold my-4">Users Array:</h2>
            <p>
                <pre><?php print_r($users)?></pre>
            </p>
            </p>
        </div>
    </div>
</body>

</html>