<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    
            <!-- Brand List  -->
            
                            <h5>Filter 
                                <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                            </h5>
                     
                        <div class="card-body">
                            <h6>Brand List</h6>
                            <hr>
                            <?php
                                $con = mysqli_connect("localhost","root","","rrf");

                                $brand_query = "SELECT * FROM restaurant";
                                $brand_query_run  = mysqli_query($con, $brand_query);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {
                                    foreach($brand_query_run as $brandlist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['cuisine']))
                                        {
                                            $checked = $_GET['cuisine'];
                                        }
                                        ?>
                                            <div>
                                                <input type="checkbox" name="cuisine[]" value="<?= $brandlist['restaurant']; ?>" 
                                                    <?php if(in_array($brandlist['restaurantid'], $checked)){ echo "checked"; } ?>
                                                 />
                                                <?= $brandlist['restaurantname']; ?>
                                            </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No Brands Found";
                                }
                            ?>
                        </div>
                    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>