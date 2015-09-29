<div class="page-header position-relative">
						<h1>
							Prestasi
							<small>
								<i class="icon-double-angle-right"></i>
								Manipulasi Prestasi
							</small>
						</h1>
							<div class="hr hr-18 dotted hr-double"></div>

							<div class="row-fluid" id="tabel_prestasi">
								<h3 class="header smaller lighter blue">Data Prestasi</h3>
								<div class="table-header">
									Tabel Data Prestasi
									<div class="right"><button class="btn btn-success" id="tambah_prestasi">Tambah Prestasi</button>
									</div>									
								</div>

								<table id="sample-table-2" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th class="center">
											No
											</th>
											<th>Nama Prestasi</th>
											<th>Keterangan</th>
											<th>Tahun</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i =1;
										foreach ($prestasi->result() as $row){
											?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $row->nama_prestasi;?></td>
												<td><?php echo $row->keterangan;?></td>
												<td><?php echo $row->tahun;?></td>
												<input type="hidden" id="nama_<?php echo $row->id_prestasi;?>" value="<?php echo $row->nama_prestasi;?>">
												<input type="hidden" id="ket_prestasi_<?php echo $row->id_prestasi;?>" value="<?php echo $row->keterangan;?>">
												<input type="hidden" id="tahun_<?php echo $row->id_prestasi;?>" value="<?php echo $row->tahun;?>">
												<td class="td-actions">
													<a class="green edit_prestasi" href="#" id="edit_<?php echo $row->id_prestasi;?>">
														<i class="icon-pencil bigger-130"></i>
													</a>

													<a class="red" href="<?php echo base_url();?>admin/prestasi/delete_prestasi/<?php echo $row->id_prestasi;?>">
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
							<form class="form-horizontal" role="form" method="post" id="form_prestasi"  enctype="multipart/form-data">
							<h6 class="modal-title text-left"><b><text style="color:red">*</text>) Kolom harus diisi</b></h6>
								
								<div class="control-group">
								<input type="hidden" id="id_prestasi" name="id_prestasi">
											<label class="control-label">Nama Prestasi</label>
											<div class="controls">
											<input class="span6" type="text"  name="nama" id="nama" placeholder="Nama Prestasi" required>
											</div>
								</div>
								<div class="control-group">
											<label class="control-label">Keterangan</label>
											<div class="controls">
											 <textarea class="ckeditor" name="keterangan" id="ket_prestasi" placeholder="Keterangan"></textarea>
											 </div>
								</div>
								 <div class="control-group">
											<label class="control-label">Tahun Prestasi</label>
											<div class="controls">
											<input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun Prestasi" maxlength="4" onkeypress="return isNumberKeyYear(event)" required></input>
											</div>
								</div>
								<div class="panel-footer panel-right">
								<button type="submit" class="btn btn-primary" id="save" form="form_prestasi">Simpan</button>
								<button type="submit" class="btn btn-primary" id="update" form="form_prestasi">Perbaharui</button>
								<button type="button" class="btn btn-default batal" id="batal_prestasi">Batal</button>
							</div>
							</form>
						</div><!--/.span-->