<?php

use function PHPSTORM_META\type;

include('../includes/config.php')  ?>
<?php include('header.php')  ?>

<?php include('sidebar.php') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Manage Accounts</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active"><?php echo ucfirst($_REQUEST['user'])  ?> </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="table-resonsive">
      <table class="table table-bordered">
        <thead>
          <th>S.No.</th>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
        </thead>
        <tbody>
          <?php
          $count = 1;
          $user_query = 'SELECT * FROM accounts WHERE `type`= "' . $_REQUEST['user'] . '"';
          $user_result = mysqli_query($db_conn, $user_query);
          while ($users = mysqli_fetch_object($user_result)) {

          ?>
            <tr>
              <td><?= $count++ ?> </td>
              <td><?= $users->name ?></td>
              <td><?= $users->email ?></td>
              <td></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <!--       
      // $user_query = 'SELECT * FROM accounts WHERE `type`= "' . $_REQUEST['user'] . '"';
      // $user_result = mysqli_query($db_conn, $user_query);
      // //  $users = mysqli_fetch_array($user_result);
      // //  while( $users = mysqli_fetch_array($user_result))
      // //  {
      // //   print_r($users);
      // //   // echo $users['email'];
      // //  }
      // // $users = mysqli_fetch_all($user_result, MYSQLI_ASSOC);
      // // print_r($users);
      // // while( $users = mysqli_fetch_assoc($user_result))
      // //  {
      // // //   print_r($users);
      // //   echo $users['email'];
      // //  }
      // while ($users = mysqli_fetch_object($user_result)) {
      //   //   print_r($users);
      //   echo $users->email . '<br>';
      // }

      //  -->
    </div>
    <!-- /.row -->

  </div>
  <!--/. container-fluid -->
</section>
<!-- /.content -->

<?php include('footer.php') ?>