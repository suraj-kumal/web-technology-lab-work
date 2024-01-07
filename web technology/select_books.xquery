for $book in doc("book_details.xml")//book
where $book/price > 3000
return $book
