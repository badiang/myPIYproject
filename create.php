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
    include 'createcon.php';
?>


<body>
<div class="container">
     
     <div class="span10 offset1">
         <div class="row">
             <h3>Create a Customer</h3>
         </div>
  
         <form class="form-horizontal" action="create.php" method="post">
           <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
             <label class="control-label">Name</label>
             <div class="controls">
                 <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                 <?php if (!empty($nameError)): ?>
                     <span class="help-inline"><?php echo $nameError;?></span>
                 <?php endif; ?>
             </div>
           </div>
           <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
             <label class="control-label">Email Address</label>
             <div class="controls">
                 <input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
                 <?php if (!empty($emailError)): ?>
                     <span class="help-inline"><?php echo $emailError;?></span>
                 <?php endif;?>
             </div>
           </div>
           <div class="control-group <?php echo !empty($mobileError)?'error':'';?>">
             <label class="control-label">Mobile Number</label>
             <div class="controls">
                 <input name="mobile" type="text"  placeholder="Mobile Number" value="<?php echo !empty($mobile)?$mobile:'';?>">
                 <?php if (!empty($mobileError)): ?>
                     <span class="help-inline"><?php echo $mobileError;?></span>
                 <?php endif;?>
             </div>
           </div>
           <div class="form-actions">
               <button type="submit" class="btn btn-success">Create</button>
               <a class="btn" href="index.php">Back</a>
             </div>
         </form>
     </div>
      
</div> <!-- /container -->




  <script src="vendor/js/jquery.js"></script>
  <script src="vendor/js/popper.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
</body>
</html>
