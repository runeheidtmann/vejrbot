<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rune Heidtmanns automatiske vejrudsit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="custom.css">

  </head>
<body>
  
  <div class="container">
    <div class="row">
      <div class="col">

        <div class="row mt-3">
          <div class="col">
          <div class="row">
            <div class="col p-2">
              <h3>Odense de næste 12 timer:</h3>
            </div>
          </div>
      
            <!-- Tablegetter:   -->
            <?php  include_once('WeatherDataRetriever.php'); ?>

        </div>

      </div>
  </div>     

</body>
</html>