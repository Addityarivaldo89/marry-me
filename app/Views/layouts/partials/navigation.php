 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     </li>
   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
     <!-- Notifications Dropdown Menu -->
     <li class="nav-item dropdown">
       <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="far fa-user-circle"></i>
       </a>
       <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         <div class="dropdown-divider"></div>
         <a href="<?= base_url('logout'); ?>" class="dropdown-item">
           <i class="fas fa-sign-out-alt"></i> Keluar
         </a>
       </div>
     </li>
   </ul>
 </nav>
 <!-- /.navbar -->

 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #F4F4F4;">
   <!-- Brand Logo -->
   <a href="<?= base_url('/beranda'); ?>" class="brand-link">
     <img src="<?= base_url(); ?>/image/marry.me.png" class="img-rounded logo" style="height:auto; width: 50%">
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="<?= base_url('/beranda'); ?>" class="nav-link">
             <i class="nav-icon fas fa-home"></i>
             <p>
               Beranda
             </p>
           </a>
         </li>

         <li class="nav-item">
           <a href="<?= base_url('pengaturan'); ?>" class="nav-link">
             <i class="nav-icon fas fa-cogs"></i>
             <p>
               Pengaturan
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url('tema'); ?>" class="nav-link">
             <i class="nav-icon fas fa-edit"></i>
             <p>
               Template
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url('profile'); ?>" class="nav-link">
             <i class="nav-icon fas fa-user-circle"></i>
             <p>
               Profile
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url('form'); ?>" class="nav-link">
             <i class="nav-icon fas fa-list"></i>
             <p>
               Form
             </p>
           </a>
         </li>

       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>