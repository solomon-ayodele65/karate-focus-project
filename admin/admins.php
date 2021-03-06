<?php
 include('../components/admin/head/mainhead.php')
?>




<div class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- Navbar -->
  <!-- Main Sidebar Container -->
 <?php
 include('../components/admin/loader/loader.php');


 include('../components/admin/navbar/navbar.php');

 include('../components/admin/navbar/sidebar.php');
 ?>

  

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admins and Instructors Page</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content my-5 border">

    <div class="card card-outline card-primary">
      <div class="card-header">
        <div class="float-start my-2 my-md-0">
          <a class="btn btn-primary" href="addAdmin.php">Add New Admin</a>
        </div>
        <div class="w-50 float-end d-none d-md-flex">
          <input class="form-control w-50" placeholder="search an admin" />
          <button class="btn btn-primary mx-2">Search</button>
        </div>
        <div class="w-100 float-end d-flex d-md-none">
          <input class="form-control w-100" placeholder="search an admin" />
          <button class="btn btn-primary mx-2">Search</button>
        </div>
      </div>
      <div class="card-body">
        <div class="container-fluid table-responsive">
        <table class="table table-hover">
          <thead class="bg-primary">
            <tr>
              <th scope="col">#</th>
              <th scope="col" style="width: 10%">Img</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Club</th>
              <th scope="col" class="d-none">Appointed At</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><img src="../images/user.jpg" alt="..." height="60px" /></td>
              <td>Dev</td>
              <td>Olawale</td>
              <td>Tiger</td>
              <td class="d-none">24-08-2020</td>
              <td><a class="btn btn-sm btn-primary" href="./singleAdmin.php">view</a> <a class="btn btn-sm btn-danger">disable</a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><img src="../images/user.jpg" alt="..." height="60px" /></td>
              <td>Dev</td>
              <td>Olawale</td>
              <td>Tiger</td>
              <td class="d-none">24-08-2020</td>
              <td><a class="btn btn-sm btn-primary" href="./singleAdmin.php">view</a> <a class="btn btn-sm btn-danger">disable</a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><img src="../images/user.jpg" alt="..." height="60px" /></td>
              <td>Dev</td>
              <td>Olawale</td>
              <td>Tiger</td>
              <td class="d-none">24-08-2020</td>
              <td><a class="btn btn-sm btn-primary" href="./singleAdmin.php">view</a> <a class="btn btn-sm btn-danger">disable</a></td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td><img src="../images/user.jpg" alt="..." height="60px" /></td>
              <td>Dev</td>
              <td>Olawale</td>
              <td>Tiger</td>
              <td class="d-none">24-08-2020</td>
              <td><a class="btn btn-sm btn-primary" href="./singleAdmin.php">view</a> <a class="btn btn-sm btn-danger">disable</a></td>
            </tr>
          </tbody>
          </table>
        </div>

      </div>
      <div class="card-footer">
          <p class="float-start d-none d-md-block">Karate Focus Admins</p>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
        </div>
      </div>
    </div>
    </section>
    <!-- /.content -->



    <!-- another content -->
  </div>
  
  <!-- footer  -->
  <?php
  include('../components/admin/footer/mainfooter.php')
  ?>

</div>
<!-- ./wrapper -->


  <!-- footer  -->
  <?php
  include('../components/admin/footer/script.php')
  ?>

    
    
</div>
