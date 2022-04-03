<?php

use function PHPSTORM_META\type;

include('../includes/config.php')  ?>
<?php include('header.php')  ?>

<?php include('sidebar.php') ?>

<?php

if (isset($_POST['submit']))
{
    $title = $_POST['title'];
    $sections = implode(',',$_POST['section']);
    $added_date = date('Y-m-d');
    mysqli_query($db_conn,"INSERT INTO classes (title,section,added_date) VALUE ('$title','$sections','$added_date')") or die('DB Error');
}

?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Manage Courses</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Admin</a></li>
          <li class="breadcrumb-item active">Courses </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
      <?php 
      if (isset($_REQUEST['action'])) { ?>
       <!-- Info boxes -->
  <div class="card">
    <div class="card-header py-2">
      <h3 class="card-title">
        Add New Courses
      </h3>
    </div>
    <div class="card-body">
      <form action="" method="POST">
          <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" placeholder="Title" required class="form-control">
          </div>
          <div class="form-group">
              <label for="title">Section</label>
              <?php
              $query = mysqli_query($db_conn,'SELECT * FROM sections');
              $count=1;

             while ( $sections = mysqli_fetch_object($query)) { ?>
              <div>
              <label for="<?=$count?>">
              <input type="checkbox" id="<?=$count?>" value="<?=$sections->id?>" name="section[]" placeholder="Section"  >
              <?=$sections->title?>
              </div>
              </label>

              <?php
            $count++;
            } ?>
          </div>
          <button name="submit" class="btn btn-success">
            Submit
          </button>
      </form>
    </div>
  </div>
  <!-- /.row -->
    
        <?php }  else {?>

     <!-- Info boxes -->
     <div class="card">
        <div class="card-header py-2">
          <h3 class="card-title">
          Courses
          </h3>
          <div class="card-tools">
              <a href="?action=add-new" class="btn btn-success "><i class="fa fa-plus mr-2">Add New</i></a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <th>S.No.</th>
              <th>image</th>
              <th>Name</th>
              <th>Category</th>
              <th>Duration</th>
              <th>Date</th>
            </thead>
            <tbody>

                    <?php 
                    $count= 1;
                    $course_query = mysqli_query($db_conn,'SELECT * FROM courses');
                    while ($course = mysqli_fetch_object($course_query)) { ?>
                    <tr>
                        <td><?=$count++?></td>
                        <td> <img src="<?=$course->image?>" height="100" alt=""> </td>
                        <td><?=$course->name?></td>
                        <td><?=$course->category?></td>  
                        <td><?=$course->duration?></td>
                        <td><?=$course->date?></td>
                        
                    </tr>
                       
                  
                    <?php } ?>
                    </tbody>
          </table>
        </div>
      </div>
      <!-- /.row -->
    <?php }  ?>

  </div>
  <!--/. container-fluid -->
</section>
<!-- /.content -->

<?php include('footer.php') ?>
  