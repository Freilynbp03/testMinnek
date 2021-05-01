<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Exercise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<style>
        a {
        color: black;
        text-decoration: none; 
        }
        a:hover {
        color: #555;
        }
</style>
<body>

<center>
    <h1>ARRAY</h1>
    <div class="container">
       <table class="table table-striped">
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
          $array = implode(" - ", $array);
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
            $all = strlen($string);
            $normal = [];
            $special = [];
            for ($i = 0; $i < $all; $i++) {
              // keep special characters and their current position in a new array
              // mantener los caracteres especiales y su posición actual en una nueva matriz
    
              if (preg_match('#[^a-zA-Z0-9]#', $string[$i])) {
                $pos = stripos($string, $string[$i]);
                $special[$pos] = $string[$i];
              } else {
                // push only normal characters
                // obtener solo caracteres normales
                array_push($normal, $string[$i]);
              }
              // reverse the normal characters
              // invertir los caracteres normales
              $reversed_string = array_reverse($normal);
            }
            // loop through special characters and add them to the reversed array at their original position
            // recorrer los caracteres especiales y agregarlos a la matriz invertida en su posición original
            foreach ($special as $key => $value) {
              array_splice($reversed_string, $key, 0, $value);
            }
            // convert array to string
            // convertir matriz a cadena de texto
            $array_to_string =  implode(' - ', $reversed_string);
            return $array_to_string;
          }

          echo reverse_string("n2&al9q47iajbz%8");
          ?>
        </td>
      </tr>
    </tbody>
  </table>  
    </div>
   
  <button type="button" class="btn btn-outline-success btn-rounded waves-effect"><i class="fas fa-cogs pr-2"
        aria-hidden="true"><a href="index.php">Back</a> </i></button>
</center>

</body>
</html>