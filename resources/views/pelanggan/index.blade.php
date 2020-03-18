
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
                    <li><a href="{{ route('camping.index')}}"><i class="glyphicon glyphicon-home"></i> Master Gudang</a></li>
                    <li class="current"><a href="/pelanggan/index"><i class="glyphicon glyphicon-calendar"></i> Data Pelanggan</a></li>
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
	  					<div class="panel-title text-center">DATA PELANGGAN GUDANG DO-CAMP</div>
						
						
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			
		  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Data Pelanggan</div>
				</div>
  				<div class="panel-body">

  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Id Pelanggan</th>
								<th>Nama Pelangan</th>
								<th>Agama Pelangan</th>
								<th>Alamat Pelangan</th>
								<th>No Telpon Pelangan</th>
							</tr>
						</thead>
						<tbody>
							<br>
								<a href="/docamp/pelanggan/create" class="btn btn-info"> + Tambah Data Pelanggan</a>
								<br><br>

								@forelse($pelanggan as $data) 
								<tr>
									<td>{{ $data->id}}</td>
									<td>{{ $data->nama}}</td>
									<td>{{ $data->agama}}</td>
									<td>{{ $data->alamat}}</td>
									<td>{{ $data->notelp}}</td>
									<td>
										<a href="{{ route('pelanggan.edit', ['id' => $data->id]) }}" 
											class="btn btn-warning">Edit</a>
										<a onclick="return confirm('Apakah Anda yakin?');" class="btn btn-danger" 

										type="button" href="{{ route('pelanggan.destroy', ['id' => $data->id]) }}">Delete</a>
									</td>
								</tr>
								@empty
									<tr>
										<td colspan="4">Data belum tersedia!</td>
									</tr>
								@endforelse
						</tbody>
					</table>
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