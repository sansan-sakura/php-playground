<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

//rand() generate random num

$output=rand();
$getnum=getrandmax();
$randNum=rand(1,10);


//round()
$output=round(4.7);
//ceil()
$ceil=ceil(4.3);

//floor()

$floor=floor(3.4);
//pi() 
//abs() positive num
//max(1,2,3,4) or max([1,2,3,4,4]) min() as well

number_format(123455.432121,2,".",",") // format the number handy for currency

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
    </div>
  </div>
</body>

</html>