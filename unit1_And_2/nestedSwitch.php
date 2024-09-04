<?php
$author = "Stephen King";
$book ="The silence of the lambs";
switch($author)
{
case "JK Rowling":
{
    switch($book)
    {
    case "Harry Potter1";
    echo "Harry Potter1, The price is 300$";
    break;
    case "Harry Potter2";
    echo "Harry Potter2, The price is 200$";
    break;
    default:
    echo "Author found but not the book";
    }
}
break;
case "Stephen King":
{
    switch($book)
    {
    case "Hannibal";
    echo "Hannibal, The price is 500$";
    break;
    case "The silence of the lambs";
    echo "The silence of the lambs, The price is 700$";
    break;
    default:
    echo "Author found but not the book";
    }
}
break;
default:
echo "Author not found";
}
?>
