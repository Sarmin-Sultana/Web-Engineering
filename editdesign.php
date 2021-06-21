<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="col-lg-6 m-auto">
     <form  action="edit.php" method="post">
       <br><br> <div class="card">
           <div class="card-header bg-dark">
               <h1 class="text-white text-center">Edit Operation</h1>
           </div><br>
            <label >School Name:</label>
            <input type="text" name="schoolname" class="form-control"><br>
            
            <label >Circular No:</label>
            <input type="text" name="circularno" class="form-control"><br>
            
            <label >Designation:</label>
            <input type="text" name="designation" class="form-control"><br>
            <button class="btn btn-success" type="submit" name="done">Submit</button><br>
             
            
        </div> 
     </form>
      
  </div>
    
      
          
</body>
</html>