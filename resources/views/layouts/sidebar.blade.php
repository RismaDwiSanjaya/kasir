 <!-- Left side column. contains the logo and sidebar -->
 
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset ('AdminLTE-2/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
     
        <li>
            <a href="#">
             <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>

            <li class="treeview">
                <a href="#">
                  <i class="fa fa-users"></i> <span>Data</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('petugas.index') }}"><i class="fa fa-circle-o"></i> Data Petugas</a></li>
                    <a href="{{ route('jenis-pembayaran.index') }}"><i class="fa fa-circle-o"></i> Jenis Pembayaran</a>
                  {{-- <li><a href="#"><i class="fa fa-circle-o"></i> Sub Dashboard 3</a></li> --}}
                </ul>
              </li>
              

          </li>
          <li class="header">Master</li>
          
        <li>
            <a href="#">
             <i class="fa fa-cube"></i> <span>Kategori</span>
            </a>
          </li>
          
        <li>
            <a href="#">
             <i class="fa fa-id-card"></i> <span>Produk</span>
            </a>
          </li>
          
        <li>
            <a href="#">
             <i class="fa fa-truck"></i> <span>Supplier</span>
            </a>
          </li>
          
        {{-- <li>
            <a href="#">
             <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>  --}}

          
          <li class="header">Transaksi</li>

          <li>
            <a href="#">
             <i class="fa fa-download"></i> <span>Pembelian</span>
            </a>
          </li> 

            <li>
            <a href="#">
             <i class="fa fa-upload"></i> <span>Penjualan</span>
            </a>
          </li>  
          
          <li class="header">REPORT</li>

          <li>
            <a href="#">
                <i class="fa fa-file-pdf-o"></i> <span>Laporan</span>
               </a>
          </li>

          <li class="header">SYSTEM</li>

          <li>
            <a href="#">
                <i class="fa fa-users"></i> <span>User</span>
               </a>
          </li>


          
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
