<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
        <?php
            $name = "Dark Matter";
            $read = true;
            $books = [
                [
                    'name' => 'book1',
                    'author' => 'someone1',
                    'price' => 40
                ],
                [
                    'name' => 'book2',
                    'author' => 'someone2',
                    'price' => 45
                ]
            ];

            function filterByAuthor($books, $author) {
                $filteredBooks = [];

                foreach ($books as $book) {
                    if ($book['author'] === $author) {

                        $filteredBooks[] = $book;
                    }
                }
                return $filteredBooks;
            }

            if ($read) {
                $message = "you have read $name";
            } else {
                $message = "you have not read $name";
            }
        ?>

        <h1>Recommended Books</h1>

    <h1>
        
        <?= $message ?>
    </h1>
   

    <ul>

        <!-- looping over an array -->
        <?php foreach ($books as $book):
        ?>


            <!-- Filtering through the array -->
            <?php if ($book['author'] === 'someone2') :  ?>

        <li><?= $book['name']; ?></li>
        <?php endif; ?>
        <?php endforeach; ?>

        <!-- getting an object in an array -->
         <!-- <?= "$books[1] is the second book on the list"?>  -->
    </ul>

    <ul>
    <!-- Filtering through the array using function -->
    <?php foreach (filterByAuthor($books, 'someone1') as $book);?>

<li><?="this book:" . $book['name']; ?></li>


<!-- getting an object in an array -->
 <!-- <?= "$books[1] is the second book on the list"?>  -->
</ul>

</body>
</html>



class Person{
    public $name;
    public $age;

    public function breathe() {
        echo "breathing";
    }
}

$person = new Person();

$person -> name = 'John DOe';
$person -> age = 54;

$person->breathe();