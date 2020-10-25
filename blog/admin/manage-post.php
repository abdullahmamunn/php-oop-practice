<?php
session_start();
include_once "../vendor/autoload.php";
$logout = new App\classes\AdminLogin;

$show_data = new App\classes\Post;
$result = $show_data->showPosts();




if ($_SESSION['id']==null OR $_SESSION['name']==null)
{
    header('Location:index.php');
}
if(isset($_GET['logout']))
{
    $logout->adminLogout();
}

?>
<?php
include_once "../include/header.php";
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>

            <div class="mb-4">


                    <h3 class="text-success">
                        <?php

                        if(isset($_GET['msg']) && $_GET['msg']==true)
                        {
                            echo "Data save successfully!";
                        }
                        ?>
                    </h3>

            </div>
            <div class="card mb-4">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Category Name</th>
                                <th>Post Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>SL</th>
                                <th>Category Name</th>
                                <th>Post Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            $i=1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['category_name']; ?></td>
                                    <td><?php echo $row['post_title']; ?></td>
                                    <td><?php
                                              if($row['status']==1)
                                              {
                                                  echo "published";
                                              }
                                              else{
                                                  echo "Not published";
                                              }
                                        ?></td>
                                    <td>
                                        <a href="edit-post.php?id=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
                                        <a href="view-post.php?id=<?php echo $row['id'];?>" class="btn btn-info">view</a>
                                        <a href="delete-post.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    include_once "../include/footer.php";
    ?>

