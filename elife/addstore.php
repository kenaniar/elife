    <?php
include("connect.php");
?>
    <?php
if(isset($_POST['addstore'])){

  $imgFile = $_FILES['img']['name'];
  $tmp_dir = $_FILES['img']['tmp_name'];
  $imgSize = $_FILES['img']['size'];

  if(empty($imgFile))
  {
    $err = "Please Select Image File";

  }

  else
  {
    $upload_dir = 'storepic/'; //upload diredctory image
    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get img extension\
    $valid_extensions = array('jpeg','jpg','png','gif',);// valid extension
    $pic = rand(1000,1000000).".". $imgExt; // rename uploading imgae 
    $err = $pic;

    if(in_array($imgExt,$valid_extensions))
    {

      if ($imgSize<5000000)
      { // 5MB

        move_uploaded_file($tmp_dir,$upload_dir.$pic);
      }
         
   else
       { 
        $err = "Sorry, your file is too large";
       }

    }

   else
     {
        $err = "Sorry, only jpg,jpeg,png, and GIF are allowed";
      }
   
   }
          
      
$nm = $_POST['nm'];
$loc = $_POST['loc'];
$con = $_POST['con'];
$serv = $_POST['serv'];
$mail = $_POST['mail'];
$qry = $cn -> query("INSERT INTO drugstore (id,name,location,contact,service,gmail,acname,acimg) values (null,'$nm','$loc','$con','$serv','$mail','$imgFile','$pic')") or die (mysqli_error());

header("location:find.php");
    }
  ?>
                                     <form method="post" enctype="multipart/form-data">
                                        
                                            <label>Name</label>
                                            <input type="text" name="nm"  placeholder="Enter Name"required>
                                            <br>
                                             <label>location</label>
                                            <input type="text" name="loc"  placeholder="Enter location"required>
                                            <br>
                                             <label>Number</label>
                                            <input type="text" name="con"  placeholder="Enter Number"required>
                                            <br>
                                             <label>service</label>
                                            <input type="text" name="serv"  placeholder="Enter service "required>
                                            <br>
                                             <label>mail</label>
                                            <input type="text" name="mail"  placeholder="Enter mail"required>                                                                   
                                                  <div class="col col-md-3">
                                                    <label class=" form-control-label">Upload Image</label>
                                                  </div>
                                                
                                                    <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input"  name="img"  required>
                                                </div> </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            <button type="button" >Cancel</button>
                            <button type="submit"  name="addhos">Confirm</button>
                        