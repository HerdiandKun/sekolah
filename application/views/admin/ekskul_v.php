<div class="page-header position-relative">
						<h1>
							Ekstrakulikuler
							<small>
								<i class="icon-double-angle-right"></i>
								Manipulasi Ekstrakulikuler
							</small>
						</h1>
							<div class="hr hr-18 dotted hr-double"></div>

							<div class="row-fluid" id="tabel_ekskul">
								<h3 class="header smaller lighter blue">Data Ekstrakulikuler</h3>
								<div class="table-header">
									Tabel Data Ekstrakulikuler
									<div class="right"><button class="btn btn-success" id="tambah_ekskul">Tambah Ekskul</button>
									</div>									
								</div>

								<table id="sample-table-2" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th class="center">
											No
											</th>
											<th>Nama Ekskul</th>
											<th>Keterangan</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i =1;
										foreach ($ekskul->result() as $row){
											?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $row->nama_ekskul;?></td>
												<td><?php echo $row->keterangan;?></td>
												<input type="hidden" id="nama_<?php echo $row->id_ekskul;?>" value="<?php echo $row->nama_ekskul;?>">
												<input type="hidden" id="ket_ekskul_<?php echo $row->id_ekskul;?>" value="<?php echo $row->keterangan;?>">
												<td class="td-actions">
													<a class="green edit_ekskul" href="#" id="edit_<?php echo $row->id_ekskul;?>">
														<i class="icon-pencil bigger-130"></i>
													</a>

													<a class="red" href="<?php echo base_url();?>admin/ekskul/delete_ekskul/<?php echo $row->id_ekskul;?>">
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
							<form class="form-horizontal" role="form" method="post" id="form_ekskul"  enctype="multipart/form-data">
							<h6 class="modal-title text-left"><b><text style="color:red">*</text>) Kolom harus diisi</b></h6>
								
								<div class="control-group">
								<input type="hidden" id="id_ekskul" name="id_ekskul">
											<label class="control-label">Nama Ekskul</label>
											<div class="controls">
											<input class="span6" type="text"  name="nama" id="nama" placeholder="Nama Ekskul" required>
											</div>
								</div>
								<div class="control-group">
											<label class="control-label">Keterangan</label>
											<div class="controls">
											 <textarea class="ckeditor" name="keterangan" id="ket_ekskul" placeholder="Keterangan"></textarea>
											 </div>
								</div>
								<div class="panel-footer panel-right">
								<button type="submit" class="btn btn-primary" id="save" form="form_ekskul">Simpan</button>
								<button type="submit" class="btn btn-primary" id="update" form="form_ekskul">Perbaharui</button>
								<button type="button" class="btn btn-default batal" id="batal_ekskul">Batal</button>
							</div>
							</form>
						</div><!--/.span-->