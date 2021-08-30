<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    .breadcrumb-item >    a{
    text-decoration: none;
    color: white;
        }

        h2{
            font-size: 3vw;
        }

        @media screen and (max-width:992px){
   h2{
font-size: 5vw;
   }
}
    </style>

</head>
<body>
    <div class="text-white text-center mb-4 alert" style="background-color: #E43C5C;">
        <h2  class=" fw-bold">

        <?php echo $variable; ?>
        </h2>
        <ol class="breadcrumb justify-content-center">
    <li class="breadcrumb-item"><a href="#"><span class="fa fa-home"></span> Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"> <?php echo $variable; ?></li>
  </ol>
    </div>
</body>
</html>