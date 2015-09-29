<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Admin</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

                <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fullcalendar.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-leaf"></i>
							Admin
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									4 Tasks to complete
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Software Update</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Hardware Upgrade</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini progress-danger">
											<div style="width:35%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Unit Testing</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini progress-warning">
											<div style="width:15%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Bug Fixes</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-success progress-striped active">
											<div style="width:90%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See tasks with details
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-warning-sign"></i>
									8 Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-pink icon-comment"></i>
												Tes
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-mini btn-primary icon-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-envelope-alt"></i>
									5 Messages
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="<?php echo base_url();?>assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url();?>assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $this->session->userdata('username');?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url();?>admin/home/logout">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cog"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					<li <?php if($this->uri->segment(2)=='')echo 'class="active"'; ?> >
						<a href="<?php echo base_url()?>admin">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> BERANDA </span>
						</a>
					</li>
				<?php if($this->session->userdata('tipe_user')==1){?>				
				<li <?php if($this->uri->segment(2)=='pengguna') echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/pengguna">
						<i class="icon-user"></i>
						<span class="menu-text">PENGGUNA</span>
						</a>
					</li>
					<li <?php if($this->uri->segment(2)=='berita')echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/berita">
						<i class="icon-archive"></i>
						<span class="menu-text">BERITA</span>
						</a>
					</li>
					<li <?php if($this->uri->segment(2)=='berita_kelas')echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/berita_kelas">
						<i class="icon-archive"></i>
						<span class="menu-text">BERITA KELAS</span>
						</a>
					</li>
					<li <?php if($this->uri->segment(2)=='guru')echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/guru">
						<i class="icon-archive"></i>
						<span class="menu-text">DATA GURU</span>
						</a>
					</li>
					<li <?php if($this->uri->segment(2)=='kalender')echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/kalender">
						<i class="icon-archive"></i>
						<span class="menu-text">KALENDER AKADEMIK</span>
						</a>
					</li>
					<li <?php if($this->uri->segment(2)=='prestasi')echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/prestasi">
						<i class="icon-trophy"></i>
						<span class="menu-text">PRESTASI</span>
						</a>
					</li>
					<li <?php if($this->uri->segment(2)=='ekskul')echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/ekskul">
						<i class="icon-file"></i>
						<span class="menu-text">EKSKUL</span>
						</a>
					</li>
					<li <?php if($this->uri->segment(2)=='kelas')echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/kelas">
						<i class="icon-file"></i>
						<span class="menu-text">KELAS</span>
						</a>
					</li>
					<li <?php if($this->uri->segment(2)=='humas')echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/humas">
						<i class="icon-file"></i>
						<span class="menu-text">HUMAS</span>
						</a>
					</li>
				<?php }else if($this->session->userdata('tipe_user')==2){?>
				<li <?php if($this->uri->segment(2)=='struktur_kelas')echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/struktur_kelas">
						<i class="icon-archive"></i>
						<span class="menu-text">STRUKTUR KELAS</span>
						</a>
				</li>
					<li <?php if($this->uri->segment(2)=='berita_kelas')echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/berita_kelas">
						<i class="icon-archive"></i>
						<span class="menu-text">BERITA KELAS</span>
						</a>
					</li>   
				<?php }else if($this->session->userdata('tipe_user')==3){?>					
					<li <?php if($this->uri->segment(2)=='struktur_osis')echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/struktur_osis">
						<i class="icon-archive"></i>
						<span class="menu-text">STRUKTUR OSIS</span>
						</a>
					</li>
					<li <?php if($this->uri->segment(2)=='agenda_osis')echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/agenda_osis">
						<i class="icon-archive"></i>
						<span class="menu-text">AGENDA OSIS</span>
						</a>
					</li>
					<li <?php if($this->uri->segment(2)=='berita_osis')echo 'class="active"'; ?>>
						<a href="<?php echo base_url()?>admin/berita_osis">
						<i class="icon-archive"></i>
						<span class="menu-text">BERITA OSIS</span>
						</a>
					</li>   
				<?php }?>
				
				</ul><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
						</li>
					</ul><!--.breadcrumb-->

					<div class="nav-search" id="nav-search">
						<form class="form-search" />
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

				<div class="page-content">
                                    					<div class="row-fluid">
					<?php
					echo $contents;
					?>
                                                                        </div>
				</div><!--/.page-content-->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-class="default" value="#438EB9" />#438EB9
									<option data-class="skin-1" value="#222A2D" />#222A2D
									<option data-class="skin-2" value="#C6487E" />#C6487E
									<option data-class="skin-3" value="#D0D0D0" />#D0D0D0
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
							<label class="lbl" for="ace-settings-header"> Fixed Header</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>
					</div>
				</div><!--/#ace-settings-container-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!--[if !IE]>-->

		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		
		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/fullcalendar.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>
		<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
		<script src="<?php echo base_url();?>assets/js/date-time/bootstrap-datepicker.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->
<script type="text/javascript">
//NIP Validation 
		function isNumberKey(evt){
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && ((charCode < 48 || charCode > 57) && charCode !=46))
		{	alert("Masukan salah, silahkan masukan digit atau titik");
			return false;
		}
		return true;
		}
	//Year Validation
		function isNumberKeyYear(evt){
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
		{	alert("Masukan salah, silahkan masukan digit tahun");
			return false;
		}
		return true;
		}
	$(document).ready(function(e) {
		
		$("#form_kelas").hide();
		$("#form_pengguna").hide();
		$("#form_berita").hide();
		$("#form_berita_kelas").hide();
		$("#form_pengumuman").hide();
		$("#form_guru").hide();
		$("#form_prestasi").hide();
		$("#form_ekskul").hide();
		
		//JS Pengguna
		$("#tambah_user").click(function(){
			$("#form_pengguna").show();
			$("#tabel_pengguna").hide();
			$("#update").hide();
			$("#save").show();
			$("#form_pengguna").attr("action","<?php echo base_url();?>admin/pengguna/add_pengguna");
		});
		$("#batal_pengguna").click(function(){
			$("#form_pengguna").hide();
			$("#tabel_pengguna").show();
			$("#nama").val('');
			$("#email").val('');
			$("#username").val('');
			$("#telp").val('');
			$("#tipe_user").val('');
			$("#kelas").val('');
		
		});
		$("#tipe_pengguna").change(function(){
			if($("#tipe_pengguna").val()=="2"){
			$("#kelas_group").show();
			$("#kelas").attr("disabled",false);
			}else{
			$("#kelas_group").hide();	
			$("#kelas").attr("disabled",true);
			}
		});
		$(".edit_pengguna").click(function(){
			var id = this.id.substr(5);
			$("#form_pengguna").show();
			$("#tabel_pengguna").hide();
			$("#save").hide();
			$("#update").show();
			$("#id_pengguna").val(id);
			$("#nama").val($("#nama_"+id).val());
			$("#email").val($("#email_"+id).val());
			$("#username").val($("#username_"+id).val());
			$("#telp").val($("#telp_"+id).val());
			$("#tipe_user").val($("#tipe_"+id).val());
			$("#kelas").val($("#kelas_"+id).val());
			
			$("#form_pengguna").attr("action","<?php echo base_url();?>admin/pengguna/edit_pengguna");
		});
		
		//JS Berita
		$("#tambah_berita").click(function(){
			$("#form_berita").show();
			$("#tabel_berita").hide();
			$("#update").hide();
			$("#save").show();
			$("#form_berita").attr("action","<?php echo base_url();?>admin/berita/add_berita");
		});
		$("#batal_berita").click(function(){
			$("#form_berita").hide();
			$("#tabel_berita").show();
			$("#judul").val('');
			CKEDITOR.instances.isi.setData("");
			$("#tanggal").val('');
		});
		$( "#tanggal" ).datepicker({
		dateFormat: "Y-m-d",
		changeMonth: true,
		changeYear: true
		});
		
		$(".edit_berita").click(function(){
			var id = this.id.substr(5);
			$("#form_berita").show();
			$("#tabel_berita").hide();
			$("#save").hide();
			$("#update").show();
			$("#id_berita").val(id);
			$("#judul").val($("#judul_"+id).val());
			CKEDITOR.instances.isi.setData($("#isi_" + id).val());
			$("#tanggal").val($("#tanggal_"+id).val());
			
			$("#form_berita").attr("action","<?php echo base_url();?>admin/berita/edit_berita");
		})
		//JS Berita Kelas
		$("#tambah_berita_kelas").click(function(){
			$("#form_berita_kelas").show();
			$("#tabel_berita_kelas").hide();
			$("#update").hide();
			$("#save").show();
			$("#form_berita_kelas").attr("action","<?php echo base_url();?>admin/berita_kelas/add_berita_kelas");
		});
		$("#batal_berita_kelas").click(function(){
			$("#form_berita_kelas").hide();
			$("#tabel_berita_kelas").show();
			$("#judul").val('');
			$("#kelas").val('0');
			CKEDITOR.instances.isi.setData("");
			$("#tanggal").val('');
		});
		$( "#tanggal" ).datepicker({
		dateFormat: "Y-m-d",
		changeMonth: true,
		changeYear: true
		});
		
		$(".edit_berita_kelas").click(function(){
			var id = this.id.substr(5);
			$("#form_berita_kelas").show();
			$("#tabel_berita_kelas").hide();
			$("#save").hide();
			$("#update").show();
			$("#id_berita_kelas").val(id);
			$("#judul").val($("#judul_"+id).val());
			CKEDITOR.instances.isi.setData($("#isi_" + id).val());
			$("#tanggal").val($("#tanggal_"+id).val());
			$("#kelas").val($("#kelas_"+id).val());
			
			$("#form_berita_kelas").attr("action","<?php echo base_url();?>admin/berita_kelas/edit_berita_kelas");
		})
		
		//JS Humas
		$("#tambah_pengumuman").click(function(){
			$("#form_pengumuman").show();
			$("#tabel_pengumuman").hide();
			$("#update").hide();
			$("#save").show();
			$("#form_pengumuman").attr("action","<?php echo base_url();?>admin/humas/add_pengumuman");
		});
		$("#batal_pengumuman").click(function(){
			$("#form_pengumuman").hide();
			$("#tabel_pengumuman").show();
			$("#judul").val('');
			CKEDITOR.instances.isi.setData("");
			$("#tanggal").val('');
		});
		$( "#tanggal" ).datepicker({
		dateFormat: "Y-m-d",
		changeMonth: true,
		changeYear: true
		});
		
		$(".edit_pengumuman").click(function(){
			var id = this.id.substr(5);
			$("#form_pengumuman").show();
			$("#tabel_pengumuman").hide();
			$("#save").hide();
			$("#update").show();
			$("#id_pengumuman").val(id);
			$("#judul").val($("#judul_"+id).val());
			CKEDITOR.instances.isi.setData($("#isi_" + id).val());
			$("#tanggal").val($("#tanggal_"+id).val());

			$("#form_pengumuman").attr("action","<?php echo base_url();?>admin/humas/edit_pengumuman");
		})
		
		//JS Guru
		$("#tambah_guru").click(function(){
			$("#form_guru").show();
			$("#tabel_guru").hide();
			$("#update").hide();
			$("#save").show();
			$("#form_guru").attr("action","<?php echo base_url();?>admin/guru/add_guru");
		});
		$("#batal_guru").click(function(){
			$("#form_guru").hide();
			$("#tabel_guru").show();
			$("#nama").val('');
			$("#ket_guru").val('');
			$("#nip").val('');
			$("#email").val('');
			$("#tl").val('');
			$("#tgl").val('');
		});
		$( "#tgl" ).datepicker({
		dateFormat : "yy/mm/dd",
		changeMonth : true,
		changeYear : true
		});
		$(".edit_guru").click(function(){
			var id = this.id.substr(5);
			$("#form_guru").show();
			$("#tabel_guru").hide();
			$("#save").hide();
			$("#update").show();
			$("#id_guru").val(id);
			$("#nama").val($("#nama_"+id).val());
			CKEDITOR.instances.ket_guru.setData($("#ket_guru_" + id).val());
			$("#nip").val($("#nip_"+id).val());
			$("#email").val($("#email_"+id).val());
			$("#tl").val($("#tl_"+id).val());
			$("#tgl").val($("#tgl_"+id).val());
			
			$("#form_guru").attr("action","<?php echo base_url();?>admin/guru/edit_guru");
		})
		
		//JS Prestasi
		$("#tambah_prestasi").click(function(){
			$("#form_prestasi").show();
			$("#tabel_prestasi").hide();
			$("#update").hide();
			CKEDITOR.instances.ket_prestasi.setData("");
			$("#save").show();
			$("#form_prestasi").attr("action","<?php echo base_url();?>admin/prestasi/add_prestasi");
		});
		$("#batal_prestasi").click(function(){
			$("#form_prestasi").hide();
			$("#tabel_prestasi").show();
			$("#nama").val('');
			$("#keterangan").val('');
			$("#tahun").val('');
		});
		$(".edit_prestasi").click(function(){
			var id = this.id.substr(5);
			$("#form_prestasi").show();
			$("#tabel_prestasi").hide();
			$("#save").hide();
			$("#update").show();
			$("#id_prestasi").val(id);
			$("#nama").val($("#nama_"+id).val());
			CKEDITOR.instances.ket_prestasi.setData($("#ket_prestasi_" + id).val());
			$("#tahun").val($("#tahun_"+id).val());
			$("#form_prestasi").attr("action","<?php echo base_url();?>admin/prestasi/edit_prestasi");
		})

		//JS Ekskul
		$("#tambah_ekskul").click(function(){
			$("#form_ekskul").show();
			$("#tabel_ekskul").hide();
			CKEDITOR.instances.ket_ekskul.setData("");
			$("#update").hide();
			$("#save").show();
			$("#form_ekskul").attr("action","<?php echo base_url();?>admin/ekskul/add_ekskul");
		});
		$(".edit_ekskul").click(function(){
			var id = this.id.substr(5);
			$("#form_ekskul").show();
			$("#tabel_ekskul").hide();
			$("#save").hide();
			$("#update").show();
			$("#id_ekskul").val(id);
			CKEDITOR.instances.ket_ekskul.setData($("#ket_ekskul_"+id).val());
			$("#nama").val($("#nama_"+id).val());
			$("#form_ekskul").attr("action","<?php echo base_url();?>admin/ekskul/edit_ekskul");
		})
		$("#batal_ekskul").click(function(){
			$("#form_ekskul").hide();
			$("#tabel_ekskul").show();
			$("#nama").val('');
			$("#keterangan").val('');
		});

		//JS Kelas
		$("#tambah_kelas").click(function(){
			$("#form_kelas").show();
			$("#tabel_kelas").hide();
			$("#update").hide();
			$("#save").show();
			$("#form_kelas").attr("action","<?php echo base_url();?>admin/kelas/add_kelas");
		});
		$(".edit_kelas").click(function(){
			var id = this.id.substr(5);
			$("#form_kelas").show();
			$("#tabel_kelas").hide();
			$("#save").hide();
			$("#update").show();
			$("#id_kelas").val(id);
			$("#tingkat").val($("#tingkat_"+id).val());
			$("#jurusan").val($("#jurusan_"+id).val());
			$("#kelas").val($("#kelas_"+id).val());
			$("#form_kelas").attr("action","<?php echo base_url();?>admin/kelas/edit_kelas");
		})
		$("#batal_kelas").click(function(){
			$("#form_kelas").hide();
			$("#tabel_kelas").show();
			$("#tingkat").val('');
			$("#jurusan").val('');
			$("#kelas").val('');
		});
		
	});
	
	//KALENDER
	<?php if ($this->uri->segment(2)=='kalender'){?>
						$(function() {

/* initialize the external events
	-----------------------------------------------------------------*/

	$('#external-events div.external-event').each(function() {

		// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
		// it doesn't need to have a start or end
		var eventObject = {
			title: $.trim($(this).text()) // use the element's text as the event title
		};

		// store the Event Object in the DOM element so we can get to it later
		$(this).data('eventObject', eventObject);

		// make the event draggable using jQuery UI
		$(this).draggable({
			zIndex: 999,
			revert: true,      // will cause the event to go back to its
			revertDuration: 0  //  original position after the drag
		});
		
	});




	/* initialize the calendar
	-----------------------------------------------------------------*/

	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

	
	var calendar = $('#calendar').fullCalendar({
		 buttonText: {
			prev: '<i class="icon-chevron-left"></i>',
			next: '<i class="icon-chevron-right"></i>'
		},
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		events: [
		{
			title: 'All Day Event',
			start: new Date(y, m, 1),
			className: 'label-important'
		},
		{
			title: 'Long Event',
			start: new Date(y, m, d-5),
			end: new Date(y, m, d-2),
			className: 'label-success'
		},
		{
			title: 'Some Event',
			start: new Date(y, m, d-3, 16, 0),
			allDay: false
		}]
		,
		editable: true,
		droppable: true, // this allows things to be dropped onto the calendar !!!
		drop: function(date, allDay) { // this function is called when something is dropped
		
			// retrieve the dropped element's stored Event Object
			var originalEventObject = $(this).data('eventObject');
			var $extraEventClass = $(this).attr('data-class');
			
			
			// we need to copy it, so that multiple events don't have a reference to the same object
			var copiedEventObject = $.extend({}, originalEventObject);
			
			// assign it the date that was reported
			copiedEventObject.start = date;
			copiedEventObject.allDay = allDay;
			if($extraEventClass) copiedEventObject['className'] = [$extraEventClass];
			
			// render the event on the calendar
			// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
			$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
			
			// is the "remove after drop" checkbox checked?
			if ($('#drop-remove').is(':checked')) {
				// if so, remove the element from the "Draggable Events" list
				$(this).remove();
			}
			
		}
		,
		selectable: true,
		selectHelper: true,
		select: function(start, end, allDay) {
			
			bootbox.prompt("New Event Title:", function(title) {
				if (title !== null) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
			});
			

			calendar.fullCalendar('unselect');
			
		}
		,
		eventClick: function(calEvent, jsEvent, view) {

			var form = $("<form class='form-inline'><label>Change event name &nbsp;</label></form>");
			form.append("<input autocomplete=off type=text value='" + calEvent.title + "' /> ");
			form.append("<button type='submit' class='btn btn-small btn-success'><i class='icon-ok'></i> Save</button>");
			
			var div = bootbox.dialog(form,
				[
				{
					"label" : "<i class='icon-trash'></i> Delete Event",
					"class" : "btn-small btn-danger",
					"callback": function() {
						calendar.fullCalendar('removeEvents' , function(ev){
							return (ev._id == calEvent._id);
						})
					}
				}
				,
				{
					"label" : "<i class='icon-remove'></i> Close",
					"class" : "btn-small"
				}
				]
				,
				{
					// prompts need a few extra options
					"onEscape": function(){div.modal("hide");}
				}
			);
			
			form.on('submit', function(){
				calEvent.title = form.find("input[type=text]").val();
				calendar.fullCalendar('updateEvent', calEvent);
				div.modal("hide");
				return false;
			});
			
		
			//console.log(calEvent.id);
			//console.log(jsEvent);
			//console.log(view);

			// change the border color just for fun
			//$(this).css('border-color', 'red');

		}
		
	});
						

});
	<?php } ?>	
	</script>
		<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				} );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>
	</body>
</html>