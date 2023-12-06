<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Projects</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>



<?php
    require "./models/config.php";
    require "./models/db.php";
    require "./models/protypes.php";
    require "./models/manufacture.php";
    require "./models/products.php";

    $protypes = new Protypes;
    $getAllprotypes = $protypes->getAllprotypes();

    $manufacture= new Manufacture;
    $getAllManufacture = $manufacture->getAllManufacture();

    $product= new Product;
    $getAllProducts = $product->getAllProducts();

 
  
?>


<body>
    <div class="div flex">
        <div class="w-1/7">
            <?php
            include('./component/slideBar.php');
            ?>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs flex">
            <div class="w-full overflow-x-auto">
                <?php
                include('./component/navbarDoashBoard.php');
                ?>

                <h2 class="text-center"> Thống Kê Protypes </h2>
                <div class="container">
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th style="width:80%">Tên Protypes</th>


                                <th style="width:30%"> <a href="add_protypes.php">Thêm Protypes</a> </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                          
                            foreach($getAllprotypes as  $value) : 

                            ?>
                            <tr>

                                <td data-th="Product">
                                    <div class="row">




                                        <div class="col-sm-7">
                                            <h6 class="nomargin">
                                                <?php echo $value['type_name'] ?>
                                            </h6>
                                            <p>

                                                <?php echo "Type_id :" . $value['type_id'] . "<br>"  ?>

                                            </p>
                                            <p>

                                            </p>
                                        </div>
                                    </div>
                                </td>

                                </td>

                                <td class="actions" data-th="">

                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                    </svg>
                                    </a>
                                    <button class="btn btn-info btn-sm">
                                        <a href="update_protypes.php?type_id=<?php echo $value['type_id'] ?>"> <i
                                                class="fa fa-edit"></i></a>

                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        <a href="del_protypes.php?type_id=<?php echo $value['type_id'] ?>">X</a>

                                    </button>
                                    <a class="btn btn-primary btn-sm"
                                        href="./product.php?type_id=<?php echo $value['type_id'] ?>">
                                        <i class="fas fa-folder">
                                        </i> View
                                    </a>

                                </td>

                            </tr>

                            <?php  endforeach; ?>
                            <tr>




                            </tr>

                            </tfoot>
                    </table>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>
    </div>
 
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>