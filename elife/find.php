<?php 
include("connect.php");

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>
</head>
<style>
  table {
  overflow: scroll;
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover :not(th){
  color: white;
  background-color: gray;
}
p span {
    display: inline;
    font-weight: 600;
}
  ul li {
    display: inline;
  }
  #contact {
    margin-top: -20px;
  }
  #hours {
    margin-top: -20px;
  }

  input.search {
    margin-top: -100px;
    border: none;
    outline: 0;
    font-family: FontAwesome, Arial, Helvetica, sans-serif;
    border-bottom: 1px solid lightslategray;
    margin-bottom: 20px;
  }
  input.search:focus {
    border-bottom: 1px solid gray;
  }
  #card-ul {
    margin-top: -20px;
   
    font-size: 16px;
  }
  ul span {
    font-weight: 600;
  }
  .card {
    font-size: 20px;
  }
#home1 {
  padding-top: 5px;
}
#home1 img {
  height: 100%;
}
.card img {
  height: 100%;
}
th, td {
  font-size: 3vw;
}
@media screen and (min-width: 550px){
  th, td {
  font-size: 1.2vw;
  }
 
}

}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<body>
<?php include "includes/navigation.php" ?>
    <div class="container py-5" style="margin-top: 80px;">
<div class="p-5 bg-white rounded shadow mb-5 " >
    <!-- Bordered tabs-->
    <ul id="myTab1" role="tablist" class="nav nav-tabs nav-pills with-arrow flex-column flex-sm-row text-center">
      <li class="nav-item flex-sm-fill">
        <a id="home1-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 border active">Hospitals</a>
      </li>
      <li class="nav-item flex-sm-fill">
        <a id="profile1-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 border">Drugstore</a>
      </li>
      <li class="nav-item flex-sm-fill">
        <a id="contact1-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 border">Medicine</a>
      </li>
      <li class="nav-item flex-sm-fill">
        <a id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 border">Fruits/Vegetables</a>
      </li>
    </ul>
    <div id="myTab1Content" class="tab-content">
      <div id="home1" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active tabs">
        <span><input type="search" class="search" placeholder="&#xF002;   Search Here"></span>
        <!-- Hospitals-->


      <?php 
      
     $result=$cn->query("SELECT * FROM tbl_hospitals");
      while($row = mysqli_fetch_array($result)){
        $hospital_name = $row['hospital_name'];
        $hospital_location = $row['hospital_location'];
        $hospital_contact = $row['hospital_contact'];
        $hospital_service = $row['hospital_service'];
        $hospital_gmail = $row['hospital_gmail'];
        $hospital_image = $row['hospital_image'];
        $hospital_hours = $row['hospital_hours'];    
      
      ?>

        <div class="card mb-3" style="max-width: 100%; margin-bottom: 10px; overflow:hidden;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/<?php echo $hospital_image;  ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
              <div class="row">
              <div class="col-md-6">
                <h5 class="card-title"><?php echo $hospital_name; ?></h5>
                <p class="card-text"><span>Location:</span> <?php echo $hospital_location ?></p>
                <p id="contact" class="card-text "><span>Contact Number:</span> <?php echo $hospital_contact; ?></p>
                <p id="hours" class="card-text"><span>Hours:</span> <?php echo $hospital_hours; ?></p>
              </div>
              <div class="col-md-6 mt-5">
                  <a href="#" class="btn btn btn-secondary">Locate Now</a>
                  <a href="#" class="btn btn btn-outline-info">More Info</a>
              </div>
              </div>
               
              </div>    
            </div>
          </div>
        </div>
        <?php 
        }
        ?>
    
<!-- End-->
      </div>
      <div id="profile1" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
        <span><input type="search" class="search" placeholder="&#xF002;   Search Here"></span>
        <!-- Drugstore-->


        <?php 
          $result=$cn->query("SELECT * FROM tbl_drugstores");
          while($row = mysqli_fetch_array($result)){
            $drugstore_name = $row['drugstore_name'];
            $drugstore_location = $row['drugstore_location'];
            $drugstore_contact = $row['drugstore_contact'];
            $drugstore_gmail = $row['drugstore_gmail'];
            $drugstore_image = $row['drugstore_image'];
          
        
        ?>

        <div class="card mb-3" style="max-width: 100%; margin-bottom: 10px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/<?=$drugstore_image; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?=$drugstore_name; ?></h5>
                <p class="card-text"><span>Location:</span><?=$drugstore_location; ?> </p>
                <p id="contact" class="card-text "><span>Contact Number:</span><?=$drugstore_contact; ?> </p>
                <a href="#" class="btn btn btn-secondary">Locate Now</a>
                  <a href="#" class="btn btn btn-outline-info">More Info</a>
              </div>
            </div>
                  
          </div>
        </div>

            <?php 
            
          }
            ?>


      </div>
      <div id="contact1" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">
        <span><input type="search" class="search" placeholder="&#xF002;   Search Here"></span>
        <table>
          <tr>
            <th>Name of Drug</th>
            <th>Brand</th>
            <th>Available Drugstore</th>
            <th>Price</th>
          </tr>
          <?php 
              $result=$cn->query("SELECT * FROM tbl_medicines");
            while($row = mysqli_fetch_array($result)){
              $medicine_name = $row['medicine_name'];
              $medicine_brand = $row['medicine_brand'];
              $medicine_price = $row['medicine_price'];
              $drugstore_id = $row['drugstore_id'];

              $result_name=$cn->query("SELECT * FROM tbl_drugstores WHERE drugstore_id= $drugstore_id");
              while($row = mysqli_fetch_array($result_name)){
                $drugstore_name = $row['drugstore_name'];
              }
              
        ?>
          <tr>
          <td><?=$medicine_name; ?></td>
          <td><?=$medicine_brand; ?></td>
          <td><?=$drugstore_name; ?></td>
          <td><?=$medicine_price; ?>php</td>
          </tr>
          
          <?php 
          }
            ?>
        </table>
      </div>
      <div id="profile2" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
        <span><input type="search" class="search" placeholder="&#xF002;   Search Here"></span>
        <?php 
            $result=$cn->query("SELECT * FROM tbl_seller_products");
            while($row = mysqli_fetch_array($result)){
              $product_name = $row['product_name'];
              $product_price = $row['product_price'];
              $product_image = $row['product_image'];
              $seller_id = $row['seller_id'];

              $result_seller=$cn->query("SELECT * FROM tbl_sellers WHERE seller_id= $seller_id");
              while($row = mysqli_fetch_array($result_seller)){
                $seller_store = $row['seller_store'];
                $seller_contact = $row['seller_contact'];
              }
              
        ?>
        <div class="card mb-3" style="max-width: 100%; margin-bottom: 10px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/<?=$product_image; ?>" class="card-img" alt="...">
            </div>
            
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?=$product_name; ?></h5>
                <p class="card-text"><span>Location:</span><?=$product_price; ?></p>
                <p id="contact" class="card-text "><span>Store:</span><?= $seller_store; ?></p>
                <p id="contact" class="card-text "><span>Contact Number:</span> <?=$seller_contact; ?></p>
                <a href="#" class="btn btn btn-secondary">Locate Now</a>
                <a href="#" class="btn btn btn-outline-info">More Info</a>
              </div>
            </div>
          </div>
           
          <?php 
            }
          ?> 
        </div>   
        
        
    </div>
    <!-- End bordered tabs -->
  </div>

</div>

    <?php include "includes/footer.php" ?>        
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>