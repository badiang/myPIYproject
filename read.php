<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restobar</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
</head>
<?php
    include 'readcon.php';
?>


<body>
<div class="container">
     
     <div class="span10 offset1">
         <div class="row">
             <h3>Read a Customer</h3>
         </div>
          
         <div class="form-horizontal" >
           <div class="control-group">
             <label class="control-label">Name</label>
             <div class="controls">
                 <label class="checkbox">
                     <?php echo $data['name'];?>
                 </label>
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Email Address</label>
             <div class="controls">
                 <label class="checkbox">
                     <?php echo $data['email'];?>
                 </label>
             </div>
           </div>
           <div class="control-group">
             <label class="control-label">Mobile Number</label>
             <div class="controls">
                 <label class="checkbox">
                     <?php echo $data['mobile'];?>
                 </label>
             </div>
           </div>
             <div class="form-actions">
               <a class="btn" href="index.php">Back</a>
            </div>
          
           
         </div>
     </div>
      
</div> <!-- /container -->



  <script src="vendor/js/jquery.js"></script>
  <script src="vendor/js/popper.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
</body>
</html>
