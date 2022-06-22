<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Constructors</title>
</head>
<body>
    
    <?php

        class Book{
            var $title;
            var $author;
            var $pages;

            function __construct($aTilte, $aAuthor, $aPages)
            {
                $this->title = $aTilte;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling",400 );
        $book1->title = "Hunger Games";
        $book2 = new Book("Lord of The Rings", "Tolkien", 700);
        
        echo $book1->title;
        echo "<br>";
        echo $book2->title;
        echo "<br>";
        echo $book2->author;
    ?>

</body>
</html>