<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
<link rel="stylesheet" href="normalize.css">

<style>
    body{

        margin-top: 50px;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
            <h1>Profit Calculator</h1>
            <p>Give your product's Selling Price below and input the Wholesale price also. And Get your profit.</p>
            </div>
        </div>
        <div class="row">
        <div class="column column-60 column-offset-20">
            <form method = "GET">
            <label for="pName">Product Name</label>
            <input type="text" placeholder="Product Name" name="pName"  id="pName">
            <label for="Sprice">Product Selling Price</label>
            <input type="text" placeholder="Product Selling Price" name="Sprice" id="Sprice">
            <label for="wprice">Wholesale Price</label>
            <input type="text" placeholder="Wholesale Price" name="wprice"  id="wprice">
            <input class="button-primary" type="submit" value="Profit Calculation">
            </form>
        </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
            <p>
                        Your Profit: <?php 
                        
                        if(isset($_GET['Sprice']) && isset($_GET['wprice']) && isset($_GET['pName'])){
                            if(isset($_GET['Sprice']) && !empty($_GET['Sprice']) && isset($_GET['wprice']) && !empty($_GET['wprice']) && isset($_GET['pName']) &&!empty($_GET['pName']) ){

                                $sellingPrice = htmlspecialchars($_GET['Sprice']);
                                $wholsalePrice = htmlspecialchars($_GET['wprice']);
                                $productName = htmlspecialchars($_GET['pName']);
                                $totalProfit =  $sellingPrice - $wholsalePrice; 
                                echo "$totalProfit Tk Profit in $productName "; 


                            }else{
                                echo "Please Write something";
                            }
                        }else{
                            echo 0 ." tk Calculated" ;
                        }
                  
                        ?>
                    </p>
            </div>
        </div>
    </div>

</body>
</html>



                            <!-- $sellingPrice = $_GET['Sprice'];
                            $wholsalePrice = $_GET['wprice'];
                            $productName = $_GET['pName'];
                            $totalProfit =  $sellingPrice - $wholsalePrice; 
                            echo "$totalProfit Tk Profit in $productName ";  -->