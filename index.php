<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="index.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   

    <title>Covid19 Homepage</title>
  </head>
  <body class="bg-success">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-75">
        <div class="container-fluid">
            
        <img src="https://www.wormsandgermsblog.com/files/2021/11/virusmask-5086544_960_720.png" width="55rem" height="55rem" class="img-circle" alt="Corona" id="logoimage">
              
            
          <a class="navbar-brand m-lg-2" href="#" id="covid">Covid19</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active mx-3" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active mx-3" href="#">Contact</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              <li class="nav-item">
                <a class="nav-link active mx-3">Know More About Covid19</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="container text-center  my-2">
        <h3>Cor<span><img src="https://cdn.pixabay.com/photo/2020/04/29/07/54/coronavirus-5107715_1280.png" class="rounded" width="55rem" height="55rem" alt="corona" id="namecorona"></span>na  Live Updates In the W<span><img src="https://cdn.pixabay.com/photo/2020/04/29/07/54/coronavirus-5107715_1280.png" class="rounded" width="55rem" height="55rem" alt="corona" id="namecorona"></span>rld</h3>
    </div>
    <table class="table table-resposive my-5">
        <thead>
          <tr id="headtag">
            <th scope="col">SL_NO</th>
            <th scope="col">State</th>
            <th scope="col">LastUpdatedTime</th>
            <th scope="col">Active</th>
            <th scope="col">confirmed</th>
            <th scope="col">recovered</th>
            <th scope="col">Deaths</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $data = file_get_contents('https://data.covid19india.org/data.json');
        $coronalive = json_decode($data,true);
       $statecount = count($coronalive['statewise']);
        $i = 1;
        while($i < $statecount){
          ?>
             <tr>
            <th scope="row"><?php echo $i; ?></th>
          
            <td><?php echo $coronalive['statewise'][$i]['state'];?></td>
            <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'];?></td>
            <td><?php echo $coronalive['statewise'][$i]['active']; ?></td>
            <td><?php echo $coronalive['statewise'][$i]['confirmed']; ?></td>
            <td><?php echo $coronalive['statewise'][$i]['recovered']; ?></td>
            <td><?php echo $coronalive['statewise'][$i]['deaths']; ?></td>
          </tr> 

         <?php
         $i++;
        }
        ?>

       
        </tbody>
      </table>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
 
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
     -->
  </body>
</html>