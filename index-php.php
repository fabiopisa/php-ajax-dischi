<?php
 require_once __DIR__ . '/data/db.php'
?>
<!-- farà un include di db -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Dischi</title>
</head>
<body  style="background-color: #1E2D3B;">
  
  <header>
    <div class="box-logo col-1 offset-1">
      <div class="logo"></div>
    </div>
    <div class="offset-7 col-1">
      <select name="album" id="generis" placeholder="Generi">
        <option>
          Segli un genere
        </option>
      </select>
    </div>
  </header>

  <main class="d-flex">
    <section class="box-discs col-10 offset-1">
      <?php foreach($database as $disc){ ?>
        <div class="box-disco col-12 col-md-6 col-lg-2 p-4 m-0 p-lg-0 m-lg-3 text-center">

        <div class="box-background p-3">
          <img class="img-fluid" src="<?php echo $disc['poster'] ?>" alt="cover <?php echo $disc['poster'] ?>">
          <h3><?php echo $disc['title'] ?></h3>
          <div>
            <h4><?php echo $disc['author'] ?></h4>
            <h4><?php echo $disc['year'] ?></h4>
          </div>
        </div>

      </div>
      <?php }?>
      
    </section>

  </main>

</body>
</html>