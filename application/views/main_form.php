<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
 const BASE_URL= '<?php echo base_url();?>';
 </script>
 
 
 
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-offset-3">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                    <label for="email">Email ID</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-primary" id="btn_click">Submit</button>
                <br>
                <div id="myMessage"></div>
            </div>
          </div>  
    </div>
    <script src="./assets/js/my_script.js" type="text/javascript"></script>
   </body>
</html>