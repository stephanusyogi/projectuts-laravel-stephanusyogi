
@extends("layout")

@section("content")

<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Do-Camp || Your Solution Event</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello Admin! <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="#">Profile</a></li>
	                          <li><a href="#">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Master Gudang</a></li>
                    <li><a href="{{ route('pelanggan.index')}}"><i class="glyphicon glyphicon-calendar"></i> Data Pelanggan</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-stats"></i> Transaksi Pembelian
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="#">Peralatan Indoor</a></li>
                            <li><a href="#">Peralatan Outdoor</a></li>
                            <li><a href="#">Laporan Transaksi</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		
		  	<div class="row">



		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title text-center">DATA MASTER GUDANG DO-CAMP</div>
						
						
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			
		  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Update Data Gudang</div>
				</div>
  				<div class="panel-body">

  					<form action="{{ route('camping.update', ['id' => $data->id]) }}" method="POST" class="form-horizontal">

							@csrf
							
							<div class="form-group">
								<label class="control-label">Id Barang</label>
								<input type="text" class="form-control" name="id" value="{{ $data->id }}">
							</div>
							<div class="form-group">
								<label class="control-label">Nama Barang</label>
								<input type="text" class="form-control" name="nama_barang" value="{{ $data->nama_barang }}">
							</div>
							<div class="form-group">
								<label class="control-label">Merk Barang</label>
								<input type="text" class="form-control" name="merk_barang" value="{{ $data->merk_barang }}">
							</div>
							<div class="form-group">
								<label class="control-label">Harga Barang</label>
								<input type="text" class="form-control" name="harga_barang" value="{{ $data->harga_barang }}">
							</div>
							<div class="form-group">
								<button class="btn btn-primary" type="submit">Simpan</button>
								<a href="{{ route('camping.index') }}" class="btn btn-danger">Batal</a>
							</div>
						</form>
  				</div>
  			</div>
					</div>
		  		</div>




				</div>

					</div>
		  		</div>
		  	</div>

		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2020 <a href='#'>Website Sistem Informasi DO-CAMP || TOKO ALAT CAMPING OUTDOOR INDOOR || @stephanusyogi045</a>
            </div>
            
         </div>
      </footer>
@endsection