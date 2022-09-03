<?php
/**
Template name: Invoice Dashboard

*/


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Invoice Listings</title>

     <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
 

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>'/assets/bootstrap/dist/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>'/my-uber-custom.css'; ?>" rel="stylesheet">

 
     <!-- Custom styles for this template -->
    <link href="bootstrap/dashboard/dashboard.css" rel="stylesheet">

    <?php 
        
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image          = wp_get_attachment_image_src( $custom_logo_id , 'thumbnail' );
      
        $logo           =  $image[0];

    ?>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Ninth navbar example">
     
        <div class="container-xl">
        <a class="navbar-brand" href="#"> <img src= <?php echo $logo; ?> width="50" height="50" />  </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07XL">
          <ul class="navbar-nav me-auto mb-2 mb-lg-6">
           
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">Dashboard</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#">Coupons</a>
            </li>
       
            <li class="nav-item">
              <a class="active nav-link" href="#">Invoices</a>
            </li>

            <li class="nav-item">
              <a class=" nav-link" href="#">Restaurants</a>
            </li>

            <li class="nav-item">
              <a class=" nav-link" href="#">Users </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Orders </a>
            </li>

          </ul>
     
        </div>
      </div>

    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Wallace Huo</a>
      </div>
    </div>
  
  </nav>

  
 

<div class="container-fluid">
  <div class="row">
     <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
      </div>

 
      <h2>Invoices</h2>

      <div class="invoice-status">
         
         <nav class="nav nav-pills nav-justified">
          <a class="nav-link active" href="#">ALL</a>
          <a class="nav-link" href="#">ONGOING</a>
          <a class="nav-link" href="#">VERIFIED</a>
          <a class="nav-link" href="#">PENDING</a>
         </nav>

      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Restaurant</th>
              <th scope="col">Status</th>
              <th scope="col">Start Date</th>
              <th scope="col">End Date</teh>
              <th scope="col">Total</teh>
              <th scope="col">Fees</teh>
              <th scope="col">Transfer</teh>
              <th scope="col">Orders</teh>
              <th scope="col"></teh>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>text</td>
              <td>random</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>placeholder</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>placeholder</td>
              <td>tabular</td>
              <td>information</td>
              <td>irrelevant</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>text</td>
              <td>placeholder</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>visual</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>random</td>
              <td>tabular</td>
              <td>information</td>
              <td>text</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

  </head>
  <body>
      
  <main>


  </main>


    <script src="<?php echo get_template_directory_uri(); ?>../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>

      <script src="<?php echo get_template_directory_uri(); ?>../assets/dashboard/dashboard.js"></script>
 
  </body>

</html>
