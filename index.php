<!-- HTML start -->
<!DOCTYPE html>
<html>
   <head>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
         integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <!-- CSS link -->
      <link rel="stylesheet" href="/index/style.css">
      <!-- Titel -->
      <title>Akash Training</title>
      <link rel="icon" href="/index/icon.JPG">
     
   </head>
   <body>
      <!-- NavBar -->
      <nav class="navbar navbar-dark bg-dark">
         <a class="navbar-brand">
            <h4>Hello SM - Tech Family</h4>
         </a>
         <form class="form-inline">
            <h5 class="name-class">@AKJ</h5>
         </form>
      </nav>
      <!-- Div created for giving some sytles  -->
      <div class="text-class mt-5">
         <h4 class="practice-class"> # WAP to read an Excel file upload by the user. </h4> 
         
         <!-- Upload excel file -->
         <form action="" method="POST" enctype="multipart/form-data" class="mt-4 ml-4">
            Upload An Excel File :   <br>
            <input type="file" name="fileToUpload" class="mt-1">
            <br> <br>
            <input type="submit" value="Upload" name="uploadBtn">
         </form>
         <?php include 'checkExcel.php'; ?> 
      </div>
   </body>
</html>
