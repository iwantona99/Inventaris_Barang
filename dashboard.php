<?php
  //variabel yang berfungsi menyimpan detail dari sub judul website
  $nama = 'Dashboard'; 
  //variabel yang berfungsi mengatifkan sidebar
  $dashboard = "dashboard";

  // menghubungkan file header dengan file dashboard
  require_once "_template/_header.php";
?>

  	
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Elektronik dan Alat Listrik</li>
  </nav>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Barang</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total FROM kategori2"); echo $total[0]['total']; ?></div>
            </div>
           
			
          </div>
        </div>
      </div>
    </div>
	<div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kondisi Baik</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total FROM kategori2 WHERE  kondisi = 'Baik'"); echo $total[0]['total']; ?></div>
            </div>
            
			
          </div>
        </div>
      </div>
    </div>
	<div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kondisi Kurang Baik</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total FROM kategori2 WHERE kondisi = 'Kurang Baik'"); echo $total[0]['total']; ?></div>
            </div>
            
			
          </div>
        </div>
      </div>
    </div>
	<div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Rusak</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total FROM kategori2 WHERE kondisi = 'Rusak'"); echo $total[0]['total']; ?></div>
            </div>
            
			
          </div>
        </div>
      </div>
    </div>

	

    
            <div class="col-auto">
              <i class="#"></i>
            </div>
          </div>
      
   
		

   

	
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Barang Mebelair</li>
  </nav>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Barang</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total FROM kategori3"); echo $total[0]['total']; ?></div>
            </div>
           
			
          </div>
        </div>
      </div>
    </div>
	<div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kondisi Baik</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total FROM kategori3 WHERE  kondisi = 'Baik'"); echo $total[0]['total']; ?></div>
            </div>
            
			
          </div>
        </div>
      </div>
    </div>
	<div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kondisi Kurang Baik</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total FROM kategori3 WHERE kondisi = 'Kurang Baik'"); echo $total[0]['total']; ?></div>
            </div>
            
			
          </div>
        </div>
      </div>
    </div>
	<div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Rusak</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total FROM kategori3 WHERE kondisi = 'Rusak'"); echo $total[0]['total']; ?></div>
            </div>
            
			
          </div>
        </div>
      </div>
    </div>

	

    
            <div class="col-auto">
              <i class="#"></i>
            </div>
          </div>
        
     
		
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Mesin dan Kendaraan Bermotor</li>
  </nav>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Barang</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total FROM pegawai"); echo $total[0]['total']; ?></div>
            </div>
           
			
          </div>
        </div>
      </div>
    </div>
	<div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kondisi Baik</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total FROM pegawai WHERE  kondisi = 'Baik'"); echo $total[0]['total']; ?></div>
            </div>
            
			
          </div>
        </div>
      </div>
    </div>
	<div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kondisi Kurang Baik</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total FROM pegawai WHERE kondisi = 'Kurang Baik'"); echo $total[0]['total']; ?></div>
            </div>
            
			
          </div>
        </div>
      </div>
    </div>
	<div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Rusak</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $total = query("SELECT COUNT('nip') as total FROM pegawai WHERE kondisi = 'Rusak'"); echo $total[0]['total']; ?></div>
            </div>
            
			
          </div>
        </div>
      </div>
    </div>

	

    
            <div class="col-auto">
              <i class="#"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	

	
<?php
  // menghubungkan file footer dengan file dashboard
  require_once "_template/_footer.php";
?>