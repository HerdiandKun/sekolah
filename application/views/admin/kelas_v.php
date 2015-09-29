<div class="page-header position-relative">
						<h1>
							Pengguna
							<small>
								<i class="icon-double-angle-right"></i>
								Manipulasi Ketua Kelas 
							</small>
						</h1>
							<div class="hr hr-18 dotted hr-double"></div>

							<div class="row-fluid" id="tabel_kelas">
								<h3 class="header smaller lighter blue">Data Ketua Kelas dan Pengguna</h3>
								<div class="table-header">
									</br>
									<div class="right"><button class="btn btn-success" id="tambah_kelas">Tambah Kelas</button>
									</div>									
								</div>

								<table id="sample-table-2" class="table table-bordered table-hover" >
									<thead>
										<tr>
											<th class="center">
											No
											</th>
											<th>Tingkat</th>
											<th>Jurusan</th>
											<th>Kelas</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i =1;
										foreach ($view->result() as $row){
											?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $row->tingkat;?></td>
												<td><?php echo $row->jurusan;?></td>
												<td><?php echo $row->kelas;?></td>
												<input type="hidden" id="tingkat_<?php echo $row->id_kelas;?>" value="<?php echo $row->tingkat;?>">
												<input type="hidden" id="jurusan_<?php echo $row->id_kelas;?>" value="<?php echo $row->jurusan;?>">
												<input type="hidden" id="kelas_<?php echo $row->id_kelas;?>" value="<?php echo $row->kelas;?>">
												<td class="td-actions">
													<a class="green edit_kelas" href="#" id="edit_<?php echo $row->id_kelas;?>">
														<i class="icon-pencil bigger-150"></i>
													</a>

													<a class="red" href="<?php echo base_url();?>admin/kelas/delete_kelas/<?php echo $row->id_kelas;?>" id="del_<?php echo $row->id_kelas;?>">
														<i class="icon-trash bigger-150"></i>
													</a>
											</td>
											</tr>
										<?php	
										$i++;
										}?>
									</tbody>
								</table>
							</div>
							<form class="form-horizontal" role="form" method="post" id="form_kelas"  enctype="multipart/form-data">
							<h6 class="modal-title text-left"><b><text style="color:red">*</text>) Kolom harus diisi</b></h6>
								<div class="form-group">
								<input type="hidden" id="id_kelas" name="id_kelas">
									<label for="judul" class="col-md-2">Tingkat <text style="color:red"><b>*</b></text></label>
									<div class="col-md-12">
										<select name="tingkat" id="tingkat" required>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="tanggal_berita" class="col-md-2">Jurusan <text style="color:red"><b>*</b></text></label>
									<div class="col-md-4">
										<select name="jurusan" id="jurusan" required>
										<option value="ipa">IPA</option>
										<option value="ips">IPS</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="naskah" class="col-md-2">Kelas <text style="color:red"><b>*</b></text></label>
									<div class="col-md-10">
										<input type="text" name="kelas" id="kelas" required></input>
									</div>
								</div>
								<div class="panel-footer panel-right">
								<button type="submit" class="btn btn-primary" id="save" form="form_kelas">Simpan</button>
								<button type="submit" class="btn btn-primary" id="update" form="form_kelas">Perbaharui</button>
								<button type="button" class="btn btn-default batal" data-dismiss="modal">Batal</button>
							</div>
							</form>
						</div><!--/.span-->
	
	