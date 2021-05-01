<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEST</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>ARRAY</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Array</th>
        <th scope="col">Valores</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Array 1</th>
        <td>
          <?php
          $array = ['n', 2, '&', 'a', 'l', 9, '$', 'q', 47, 'i', 'a', 'j', 'b', 'z', '%', 8];
          $array = implode(" ; ", $array);
          echo $array;
          ?>
        </td>
      </tr>
      <tr>
        <th scope="row">Array 2</th>
        <td>
          <?php
          function reverse_string($string)
          {
            $len = strlen($string);
            $normal = [];
            $special = [];
            for ($i = 0; $i < $len; $i++) {
              // keep special characters and their current position in a new array
              if (preg_match('#[^a-zA-Z0-9]#', $string[$i])) {
                $pos = stripos($string, $string[$i]);
                $special[$pos] = $string[$i];
              } else {
                // push only normal characters
                array_push($normal, $string[$i]);
              }
              // reverse the normal characters
              $reversed_string = array_reverse($normal);
            }
            // loop through special characters and add them to the reversed array at their original position
            foreach ($special as $key => $value) {
              array_splice($reversed_string, $key, 0, $value);
            }
            // convert array to string
            $array_to_string =  implode(' ; ', $reversed_string);
            return $array_to_string;
          }

          echo reverse_string("n2&al9q47iajbz%8");
          ?>
        </td>
      </tr>
    </tbody>
  </table>

  <h1>Best Dogs</h1>
  <main>
    <div class="">
      <header>
        <h1>Dog Viewer</h1>
        <select class="breeds"></select>
      </header>
    </div>
    <div class="img-container">
      <div class="">
        <div class="spinner">
          🐶
        </div>
        <h2  class="dog-sub">VACIO</h2>
        <img src="http://placecorgi.com/260/180" class="dog-img show" alt="friendly and intimate - man's best friend" />

      </div>
    </div>
  </main>
  <script src="main.js"></script>
  <h1>Grid</h1>
  <div class="container">
  <div class="cards">
        <div class="card card1">
            <div class="container">
                <img src="https://www.saladeespera.com.do/wp-content/uploads/2017/06/Punta_Cana_opt-660x330.jpg" alt="Playa Sosùa">
            </div>
            <div class="details">
                <h3>Playa Sosùa</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
            </div>
        </div>
        <div class="card card2">
            <div class="container">
                <img src="https://www.saladeespera.com.do/wp-content/uploads/2017/06/Cayo_Levantado_opt.jpg" alt="Playa Dorada">
            </div>
            <div class="details">
                <h3>Playa Dorada</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
            </div>
        </div>
        <div class="card card3">
            <div class="container">
                <img src="https://www.saladeespera.com.do/wp-content/uploads/2017/06/Punta_Cana_Playa_Juanillo_opt.jpg" alt="Playa Rincon">
            </div>
            <div class="details">
                <h3>Playa Rincon</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
            </div>
        </div>
        <div class="card card4">
            <div class="container">
                <img src="https://i2.wp.com/muntermag.com/wp-content/uploads/2017/05/Recublica-dominicana-munter-magazine.jpg" alt="Cayo Levantado">
            </div>
            <div class="details">
                <h3>Cayo Levantado</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p>
            </div>
        </div>
    </div>
  <h1>Form</h1>
  <form action="conection.php" method="post">
    <div class="form-group">
      <label for="InputName">Name</label>
      <input type="text" class="form-control" placeholder="Name" name="name">
    </div>
    <div class="form-group">
      <label for="InputEmail">Email</label>
      <input type="email" class="form-control" placeholder=Email name="email">
    </div>
    <div class="form-group">
      <label for="InputPhone">Phone</label>
      <input type="text" class="form-control" placeholder="Phone" name="phone">
    </div>
    <div class="form-group">
      <label for="InputMessage">Message</label>
      <input type="textarea" class="form-control" placeholder="Message" name="message">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>

</html>