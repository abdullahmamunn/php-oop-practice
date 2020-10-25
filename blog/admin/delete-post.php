<?php
include_once "../vendor/autoload.php";
$delete_post = new App\classes\Post;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $delete_post->deletePost($id);
}