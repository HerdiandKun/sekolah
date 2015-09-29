<div class="page-header position-relative">
						<h1>
							Pengguna
							<small>
								<i class="icon-double-angle-right"></i>
								Manipulasi Ketua Kelas 
							</small>
						</h1>
							<div class="hr hr-18 dotted hr-double"></div>

							<div class="row-fluid" id="tabel_pengguna">
								<h3 class="header smaller lighter blue">Data Ketua Kelas dan Pengguna</h3>
								<div class="table-header">
									Tabel Data Pengguna
									<div class="right"><button class="btn btn-success" id="tambah_user">Tambah User</button>
									</div>									
								</div>

								<table id="sample-table-2" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th class="center">
											No
											</th>
											<th>Nama</th>
											<th>Username</th>
											<th>No Telp.</th>
											<th>Alamat Email</th>
											<th>Tipe Pengguna</th>
											<th>Kelas</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i =1;
										foreach ($pengguna->result() as $row){
											?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $row->nama_user;?></td>
												<td><?php echo $row->username;?></td>
												<td><?php echo $row->telp_user;?></td>
												<td><?php echo $row->email_user;?></td>
												<td><?php echo $row->tipe_user;?></td>
												<td><?php echo $row->tingkat.$row->jurusan.$row->kelas;?></td>
												<input type="hidden" id="nama_<?php echo $row->id_user;?>" value="<?php echo $row->nama_user;?>">
												<input type="hidden" id="username_<?php echo $row->id_user;?>" value="<?php echo $row->username;?>">
												<input type="hidden" id="telp_<?php echo $row->id_user;?>" value="<?php echo $row->telp_user;?>">
												<input type="hidden" id="email_<?php echo $row->id_user;?>" value="<?php echo $row->email_user;?>">
												<input type="hidden" id="kelas_<?php echo $row->id_user;?>" value="<?php echo $row->id_kelas;?>">
												<input type="hidden" id="tipe_<?php echo $row->id_user;?>" value="<?php echo $row->tipe_user;?>">
												<td class="td-actions">
													<a class="green edit_pengguna" href="#" id="edit_<?php echo $row->id_user;?>">
														<i class="icon-pencil bigger-130"></i>
													</a>

													<a class="red" href="<?php echo base_url();?>admin/pengguna/delete_user/<?php echo $row->id_user;?>" id="del_<?php echo $row->id_user;?>">
														<i class="icon-trash bigger-130"></i>
													</a>
												</td>
											</tr>
										<?php	
										$i++;
										}?>
									</tbody>
								</table>
							</div>
							<form class="form-horizontal" role="form" method="post" id="form_pengguna"  enctype="multipart/form-data" action="<?PHP echo site_url(); ?>pengguna/save">
							<h6 class="modal-title text-left"><b><text style="color:red">*</text>) Kolom harus diisi</b></h6>
								<div class="form-group">
									<label for="judul" class="col-md-2">Nama <text style="color:red"><b>*</b></text></label>
										<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required />
										<input type="hidden" class="form-control" name="id_pengguna" id="id_pengguna" />
								</div>
								<div class="form-group">
									<label for="tanggal_berita" class="col-md-2">Username <text style="color:red"><b>*</b></text></label>
									<div class="col-md-10">
										<input type="text" class="form-control" name="username" id="username" placeholder="Username" required />
									</div>
								</div>
								<div class="form-group">
									<label for="naskah" class="col-md-2">Email <text style="color:red"><b>*</b></text></label>
									<div class="col-md-10">
										<input type="email" class="form-control" name="email" id="email" placeholder="xxx@mail.com" required />
									</div>
								</div>
								<div class="form-group">
									<label for="telp" class="col-md-2">No Telp. <text style="color:red"><b>*</b></text></label>
									<div class="col-md-10">
										<input type="text" class="form-control" name="telp" id="telp" placeholder="081xxxxxxxxx" required />
									</div>
								</div>
								<div class="form-group">
									<label for="tipe" class="col-md-2">Tipe User <text style="color:red"><b>*</b></text></label>
									<select name="tipe_pengguna" id="tipe_pengguna" required>
									<option value="1">Admin</option>
									<option value="2">Ketua Kelas</option>
									<option value="3">Admin Osis</option>
									</select>
								</div>
								<div class="form-group" hidden id="kelas_group">
									<label for="kelas" class="col-md-2">Kelas <text style="color:red"><b>*</b></text></label>
									<select name="kelas" id="kelas" required disabled>
									<?php foreach($kelas->result() as $k){?>
									<option value="<?php echo $k->id_kelas;?>"><?php echo $k->tingkat.$k->jurusan.$k->kelas;?></option>	
									<?php
									}?>
									</select>
								</div>
								<div class="panel-footer panel-right">
								<button type="submit" class="btn btn-primary" id="save" form="form_pengguna">Simpan</button>
								<button type="submit" class="btn btn-primary" id="update" form="form_pengguna">Perbaharui</button>
								<button type="button" class="btn btn-default batal" id="batal_pengguna">Batal</button>
							</div>
							</form>
						</div><!--/.span-->