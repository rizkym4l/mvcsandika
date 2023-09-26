
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data['judul']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
  <nav class="navbar mb-5 navbar-expand-lg bg-body-tertiary bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MVCANYAR🐘</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=BASEURL?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=BASEURL?>/mahasiswa/">Mahasiswa</a>
        </li>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=BASEURL?>/about/">About Me</a>
        </li>
      </ul>
    
       
        <button class="btn btn-outline-success" type="submit">Logout</button>
  
    </div>
  </div>
</nav>