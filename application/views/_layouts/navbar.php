 <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
 	<!-- Navbar -->
 	<nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
 		<div class="container-fluid py-1">
 			<nav aria-label="breadcrumb">
 				<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
 					<li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;"></a></li>
 				</ol>
 				<h6 class="text-white font-weight-bolder ms-2"><span class="badge bg-gradient-info"><?= $title?></span>
 				</h6>
 			</nav>
 			<div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
 				<div class="ms-md-auto pe-md-3 d-flex align-items-center">
 					<div class="input-group">

 					</div>
 				</div>
 				<ul class="navbar-nav justify-content-end">
 					<li class="nav-item d-flex align-items-center">
 					</li>
 					<li class="nav-item d-flex align-items-center">

 					</li>
 					<li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
 						<a href="javascript:;" class="nav-link text-white p-0">
 						</a><a href="javascript:;" class="nav-link text-body pr-1" id="iconNavbarSidenav">
 							<div class="sidenav-toggler-inner ">
 								<i class="sidenav-toggler-line bg-white"></i>
 								<i class="sidenav-toggler-line bg-white"></i>
 								<i class="sidenav-toggler-line bg-white"></i>
 							</div>
 						</a>
 					</li>
 					<li class="nav-item dropdown pe-2 d-flex align-items-center">
 						<a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton1"
 							data-bs-toggle="dropdown" aria-expanded="false">
 							<span class="badge bg-gradient-warning"> <i class="fa fa-user cursor-pointer"></i> Didik Ariyanto
 							</span>
 						</a>
 						<ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4"
 							aria-labelledby="dropdownMenuButton1">
 						</ul>
 					</li>
 					<li class="nav-item dropdown pe-2 d-flex align-items-center">
 						<a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
 							data-bs-toggle="dropdown" aria-expanded="false">
 							<span class="badge bg-gradient-warning"><i class="fa fa-cogs cursor-pointer"></i></span>
 						</a>
 						<ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4"
 							aria-labelledby="dropdownMenuButton">
 							<li class="mb-2">
 								<a class="dropdown-item border-radius-md"
 									href="<?= base_url()?>">
 									<div class="d-flex py-1">
 										<div class="my-auto">

 											<img class="avatar avatar-sm me-3"
 												src="<?= base_url()?>assets/uploads/logo.png">
 										</div>
 										<div class="d-flex flex-column justify-content-center">
 											<h6 class="text-sm font-weight-normal mb-1">
 												<span class="font-weight-bold">Profile </span> User
 											</h6>
 											<p class="text-xs text-secondary mb-0">
 												<i class="fa fa-user me-1"></i>
 												Profil Pengguna
 											</p>
 										</div>
 									</div>
 								</a>
 							</li>
 							<li class="mb-2">
 								<a class="dropdown-item border-radius-md"
 									href="<?=base_url()?>changepass">
 									<div class="d-flex py-1">
 										<div class="my-auto">
 											<img class="avatar avatar-sm me-3"
 												src="<?= base_url()?>assets/uploads/logo.png">
 										</div>
 										<div class="d-flex flex-column justify-content-center">
 											<h6 class="text-sm font-weight-normal mb-1">
 												<span class="font-weight-bold">Change</span> Password
 											</h6>
 											<p class="text-xs text-secondary mb-0">
 												<i class="fa fa-key me-1"></i>
 												Ubah Kata Sandi
 											</p>
 										</div>
 									</div>
 								</a>
 							</li>
 							<li>
 								<a class="dropdown-item border-radius-md"
 									href="<?= base_url()?>logout">
 									<div class="d-flex py-1">
 										<div class="my-auto">
 											<img class="avatar avatar-sm me-3"
 												src="<?= base_url()?>assets/uploads/logo.png">
 										</div>
 										<div class="d-flex flex-column justify-content-center">
 											<h6 class="text-sm font-weight-normal mb-1">
 												Sign Out
 											</h6>
 											<p class="text-xs text-secondary mb-0">
 												<i class="fa fa-sign-out me-1"></i>
 												Keluar Aplikasi
 											</p>
 										</div>
 									</div>
 								</a>
 							</li>
 						</ul>
 					</li>
 				</ul>
 			</div>
 		</div>
 	</nav>
 	<!-- End Navbar -->
 	<div class="container-fluid">
 		<div class="page-header min-height-300 border-radius-xl mt-4"
 			style="background-image: url('<?= base_url()?>assets/softui/assets/img/curved-images/curved11-small.jpg'); background-position-y: 50%;">
 			<span class="mask bg-gradient-info opacity-6"></span>
 		</div>
 		<div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
 			<div class="row gx-4">
 				<div class="col-auto">
 					<div class="avatar avatar-xl position-relative">

 						<img alt="profile_image" class="w-100 border-radius-lg shadow-sm"
 							src="<?= base_url()?>/assets/uploads/logo.png">
 					</div>
 				</div>
 				<div class="col-auto my-auto">
 					<div class="h-100">
 						<h5 class="mb-1">
 							Didik Ariyanto </h5>
 						<p class="mb-0 font-weight-bold text-xs">
 							Tenaga Pelatihan Swasta | <br>BLKK YAYASAN 1001 ILMU
 						</p>
 					</div>
 				</div>
 				<div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
 					<div class="nav-wrapper position-relative end-0">

 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
