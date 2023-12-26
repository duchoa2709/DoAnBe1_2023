<?php
    require "./models/config.php";
    require "./models/db.php";
    require "./models/protypes.php";
    require "./models/manufacture.php";
    require "./models/products.php";

    $protypes = new Protypes;
    // $getAllprotypes = $protypes->getAllprotypes();

    $manufacture= new Manufacture;
    $getAllManufacture = $manufacture->getAllManufacture();

    $product= new Product;

    // pagination
    // lấy giá trị limit từ cookies
    if (isset($_COOKIE['limitProtypes'])) {
        $_SESSION['limitProtypes'] = $_COOKIE['limitProtypes'];
    } else {
        $_SESSION['limitProtypes'] = 2;
    }
    // lấy giá trị limit từ form
    if (isset($_GET['limitProtypes'])) {
        $_SESSION['limitProtypes'] = $_GET['limitProtypes'];
    }
    // lưu giá trị limit vào cookies
    setcookie('limitProtypes', $_SESSION['limitProtypes'], time() + 3600);

    $limit = $_SESSION['limitProtypes'];

    $per_page = 1;
    $getProtypes = $protypes->getAllProtypesLimit($limit, $per_page);
    $total_page = ceil(count($protypes->getAllprotypes()) / $limit);
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    if ($page > 1) {
        $start = ($page * $limit) - $limit;
    } else {
        $start = 0;
    }
    $getProtypes = $protypes->getAllProtypesLimit($limit, $start);

    $countProtypes = $protypes->countProtypes();
    // end pagination

    //String cut
    function stringCut($text, $limit) {
        if (mb_strlen($text) <= $limit) {
            return $text;
        }
        
        $stringCut = mb_substr($text, 0, $limit);
        $lastSpacePos = mb_strrpos($stringCut, " "); // Tìm vị trí khoảng trắng gần nhất
        
        if ($lastSpacePos === false) {
            return $stringCut . "...";
        }
        
        return mb_substr($stringCut, 0, $lastSpacePos) . "...";
    }

    $param_prev = 'Protypes.php?page=' . ($page - 1);
    $param_next = 'Protypes.php?page=' . ($page + 1);
    $param      = 'Protypes.php?page=';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh Sách Protypes</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>

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
                
                if (isset($_SESSION['notification'])) :
                ?>
                <div id="alert-border-1"
                    class="flex items-center p-4 mb-4 text-blue-800 border-t-4 border-blue-300 bg-blue-50" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium whitespace-nowrap">
                        <?php
                         echo "<b>Thông Báo: </b>" . $_SESSION['notification'];
                        unset($_SESSION['notification']);
                        ?>
                    </div>
                </div>
                <?php
                endif;
                ?>
                <div class="button_add flex justify-between items-center mx-5">
                    <form action="./searchProtypes.php" method="get">
                        <div class="flex justify-center items-center md:w-[400px] w-[90%]  md:pl-8">
                            <div class="space-y-10  ">
                                <div class="flex items-center p-1 space-x-6 h-[40px] bg-white rounded-xl  ">
                                    <div
                                        class="flex bg-gray-100 flex items-center px-2 h-[35px] md:w-72 w-52 space-x-4 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-30" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                        <input class="bg-gray-100 outline-none placeholder:text-sm" type="text"
                                            name="keyWord" placeholder="Tìm Kiếm Tên Protypes" />
                                    </div>
                                    <div
                                        class="bg-[#0cb0d8] py-1.5 px-5 text-white font-semibold rounded-lg  transition duration-3000 ">
                                        <input class="text-sm" type="submit" value="Search">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <a href="add_protypes.php" class="flex justify-center items-center">
                        <button
                            class="flex  mx-auto  text-white bg-gradient-to-r from-cyan-500 to-blue-500 border-0 py-2 px-9 m-5  rounded text-xs">Add
                            Protypes</button>
                    </a>
                </div>
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php
                        foreach ($getProtypes as $protypes) :
                        ?>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                            <!-- sản phẩm -->
                            <td class="px-3 py-3 w-6/12">
                                <div class="flex items-center text-sm justify-center">
                                    <!-- Name -->
                                    <div>
                                        <p class="font-semibold text-center"><?php echo $protypes['type_name'] ?></p>
                                    </div>
                                </div>
                            </td>

                            <!-- button xóa sửa -->
                            <td class="px-4 py-3 6/12">
                                <div class="flex items-center space-x-4 text-sm justify-center">
                                    <a href="update_protypes.php?id=<?php echo $protypes['type_id'] ?>">
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Edit">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="#0fb1d8" viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </button>
                                    </a>

                                    <form action="./del_protypes.php" method="post">
                                        <!-- Add a hidden input field to store the product ID -->
                                        <input type="hidden" name="id" value="<?php echo $protypes['type_id'] ?>">

                                        <button type="submit"
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Delete">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="#0fb1d8" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
                <!-- pagination product -->
                <div class="flex justify-between items-center my-3 mr-3 ">
                    <!-- hiển thị số sản phẩm trên 1 trang -->
                    <form action="" method="get">
                        <div class="flex justify-start items-center md:w-[400px] w-[90%]  md:pl-8">
                            <div class="space-y-10  ">
                                <div class="flex items-center p-1 space-x-6 h-[40px] bg-white rounded-xl  ">
                                    <div
                                        class="flex bg-gray-100 flex items-center px-2 h-[35px] md:w-22 w-52 space-x-4 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-30" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                        <input class="bg-gray-100 outline-none placeholder:text-sm text-center"
                                            type="number" name="limitProtypes"
                                            placeholder="Nhập số hiển thị trên 1 trang" value="<?php echo $limit ?>" />
                                    </div>
                                    <div
                                        class="bg-[#0cb0d8] py-1.5 px-5 text-white font-semibold rounded-lg  transition duration-3000 ">
                                        <input class="text-sm" type="submit" value="Hiển thị">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="flex items-center">
                        <!-- text -->
                        <span class="text-sm text-gray-700 dark:text-gray-400 mr-5">
                            Hiển thị trang<span class="font-semibold text-gray-900 "> <?php echo $page ?>
                            </span> có <span class="font-semibold text-gray-900 "><?php echo count($getProtypes) ?>
                            </span> trên <span
                                class="font-semibold text-gray-900 "><?php echo $countProtypes[0]['number']; ?>
                            </span> sản phẩm
                        </span>

                        <nav aria-label="Page navigation example">
                            <ul class="flex items-center -space-x-px text-base h-10 mb-0">
                                <?php if ($page > 1) : ?>
                                <li>
                                    <a href="<?php echo $param_prev ?>"
                                        class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                </li>
                                <?php endif; ?>

                                <?php
                                    $pages_to_show = 2; // Số lượng trang bạn muốn hiển thị xung quanh trang hiện tại
                                    $start_page = max(1, $page - $pages_to_show);
                                    $end_page = min($total_page, $page + $pages_to_show);

                                    for ($i = $start_page; $i <= $end_page; $i++) :
                                        if ($i == $page) :
                                ?>
                                <li>
                                    <a href="<?php echo $param . $i ?>" aria-current="page"
                                        class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"><?php echo $i ?></a>
                                </li>
                                <?php else : ?>
                                <li>
                                    <a href="<?php echo $param . $i ?>"
                                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?php echo $i ?></a>
                                </li>
                                <?php
                                    endif;
                                endfor;
                                ?>

                                <?php if ($page < $total_page && $total_page > 1) { ?>
                                <li>
                                    <a href="<?php echo $param_next ?>"
                                        class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /pagination product -->
            </div>
        </div>
    </div>

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