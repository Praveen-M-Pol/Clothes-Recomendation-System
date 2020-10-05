<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand text-white font-weight-bold" href="#home">Clothes Recomendation system</a>
        </nav>
        <div class="container">
            <div id="home" style="margin-top: 1%;">
                <?php
                  if (isset($_GET['submit'])) {
                    $name = $_GET['name'];
                    $link = mysqli_connect('localhost', 'root', '', 'CRS');
                    if(!$link) echo mysqli_error().'not connected';
                    else {
                      $query = "select * from data where did='$name'";
                      $result = mysqli_query($link, $query);
                      ?>
                      <div class="container" id="content">
                        <div class="row">
                        <?php
                      while($row=mysqli_fetch_array($result)) {
                        ?>
                            <div class="col-sm" style="margin-top: 2%;">
                              <div class="card" style="width: 18rem;">
                                  <img class="card-img-top" src="<?php echo $row['path'] ?>" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="card-text"><?php echo $row['name'] ?></h5>
                                    <p class="card-text">Size: <?php echo $row['size'] ?> <br>Price: <?php echo $row['price'] ?> INR</p>
                                  </div>
                              </div>
                            </div>
                        <?php
                      }
                      ?>
                        </div>
                      </div>
                      <?php
                    }
                  }
                ?>
                <div class="container" style="margin-top: 3%;">
                    <div class="row">
                      <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="MC.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-text">Shirt</h5>
                              <p class="card-text">Size: L <br>Price: 3000 INR</p>
                              <p class="card-text">Click below to recomend more of these types...</p>
                              <form method='get'>
                                <input type='hidden' name='name' value='MC' />
                                <input type='submit' name='submit' value='Recomend more' class='btn btn-outline-primary'/>
                              </form>
                            </div>
                        </div>
                      </div>
                      <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="WC.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-text">Sleeve</h5>
                              <p class="card-text">Size: L <br>Price: 3000 INR</p>
                              <p class="card-text">Click below to recomend more of these types...</p>
                              <form method='get'>
                                <input type='hidden' name='name' value='WC' />
                                <input type='submit' name='submit' value='Recomend more' class='btn btn-outline-primary' />
                              </form>
                            </div>
                        </div>
                      </div>
                      <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="KC.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-text">Frock</h5>
                              <p class="card-text">Size: L <br>Price: 3000 INR</p>
                              <p class="card-text">Click below to recomend more of these types...</p>
                              <form method='get'>
                                <input type='hidden' name='name' value='KC' />
                                <input type='submit' name='submit' value='Recomend more' class='btn btn-outline-primary' />
                              </form>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
