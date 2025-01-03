<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Demo</title>
</head>

<body>
  <h1>Recommended Books</h1>

  <?php
  $books = [
    "Do Androids Dream of Electric Sheep",
    "The Langoliers",
    "Hail Mary",
  ];
  ?>

  <ul>
    <?php foreach ($books as $book) : ?>
      <li><?= $book ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>