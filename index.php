<!DOCTYPE html>
<html lang="en">

<head>

    <title>Basic Banking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <!-- BOOTSTRAP CSS FRAME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">     

       <!--ICON-->
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

       <!--BOOTSTRAP JAVASCIPT -->
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<style>
 
 .header {
    text-align: center;
    background-color:  #9dadc2;
    color: white;
    height: 100px;
    font-style: italic;
    animation-name: example1;
    animation-duration: 10s;
    animation-iteration-count: 5;
  }
  @keyframes example1{
    from { background-color:#9dadc2;}
    to {background-color: #5498f0;}
  }
  body{
    background-color: #bfc9d6;
    height: 200px;
    animation-name: example2;
    animation-duration: 10s;
    animation-iteration-count: 5;
  }
  @keyframes example2{
    from { background-color:#bfc9d6;}
    to {background-color: #97c1f7;}
  }
  h2{
   transform: translate(1%, 80%);
  }
 .footer {
    background-color:  #9dadc2;
    height: 70px;
    color: white;
    font-style: italic;
     animation-name: example3;
    animation-duration: 10s;
    animation-iteration-count: 5;
  }
  @keyframes example3{
    from { background-color:#9dadc2;}
    to {background-color: #5498f0;}
  } 
 .position {
    margin-top: 200px;
    margin-bottom:200px;
 }

</style>
</head>
<body>
  <?php
  include 'navbar.php';
  ?>
      <header class="header">
         <div class="col-12 align-self-center">
          
             <h2>WELCOME TO BANK OF SPARKS</h2>         
        </div>
      </header>
           <div class="container"> 
           <div class="text-center position">
           <h3>Click here for User Details</h3>
           <a href="transfermoney.php"><input type="button" class="btn btn-info" Value="View Customers"></a><br><br>
           <h3>Click here for Transaction Details</h3>
           <a href="transactionhistory.php"><input type="button" class="btn btn-success" Value="Transaction History"></a>
          </div>
      </div>
      
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4 align-self-center">
                        <div style="display: flex;justify-content: center;align-items: center;" class="text-center">
                            <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/nisha-a-a766601b4"><i class="fa fa-linkedin "></i></a>                      
                            <a class="btn btn-social-icon btn-Github" href="https://github.com/Nisha64"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                      <div class="col-auto">
                         <p> Designed by- <b>Nisha A</b></p>
                      </div>
                </div>
            </div>
        </footer>

</body>
</html>


        