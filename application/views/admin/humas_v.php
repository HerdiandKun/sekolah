<div class="page-header position-relative">
						<h1>
							pengumuman
							<small>
								<i class="icon-double-angle-right"></i>
								Manipulasi pengumuman
							</small>
						</h1>
							<div class="hr hr-18 dotted hr-double"></div>

							<div class="row-fluid" id="tabel_pengumuman">
								<h3 class="header smaller lighter blue">Data Pengumuman</h3>
								<div class="table-header">
									Tabel Data Pengumuman 
									<div class="right"><button class="btn btn-success" id="tambah_pengumuman">Tambah Pengumuman</button>
									</div>									
								</div>

								<table id="sample-table-2" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th class="center">
											No
											</th>
											<th>Judul</th>
											<th>Isi Pengumuman</th>
											<th>Tanggal</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i =1;
										foreach ($humas->result() as $row){
											?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $row->judul_pengumuman;?></td>
												<td><?php echo $row->desc_pengumuman;?></td>
												<td><?php echo $row->tanggal_pengumuman;?></td>
												<input type="hidden" id="judul_<?php echo $row->id_pengumuman;?>" value="<?php echo $row->judul_pengumuman;?>">
												<input type="hidden" id="isi_<?php echo $row->id_pengumuman;?>" value="<?php echo $row->desc_pengumuman;?>">
												<input type="hidden" id="tanggal_<?php echo $row->id_pengumuman;?>" value="<?php echo date('m/d/Y',strtotime($row->tanggal_pengumuman));?>">
												<td class="td-actions">
													<a class="green edit_pengumuman" href="#" id="edit_<?php echo $row->id_pengumuman;?>">
														<i class="icon-pencil bigger-130"></i>
													</a>

													<a class="red" href="<?php echo base_url();?>admin/humas/delete_pengumuman/<?php echo $row->id_pengumuman;?>">
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
							<form class="form-horizontal" role="form" method="post" id="form_pengumuman"  enctype="multipart/form-data">
							<h6 class="modal-title text-left"><b><text style="color:red">*</text>) Kolom harus diisi</b></h6>
								
								<div class="control-group">
											<label class="control-label">Judul Pengumuman</label>
											<div class="controls">
											<input class="span6" type="text"  name="judul" id="judul" placeholder="Judul Pengumuman" required>
											<input type="hidden" class="form-control" name="id_pengumuman" id="id_pengumuman" />
											</div>
								</div>
								<div class="control-group">
											<label class="control-label">Tanggal pengumuman  </label>
											<div class="controls">
											<input type="text" class="form-control tanggal" data-format="YYYY-MM-DD"  name="tanggal" id="tanggal" placeholder="Tanggal pengumuman" required></input>
											</div>
								</div>
								<div class="control-group">
											<label class="control-label">Isi pengumuman</label>
											<div class="controls">
											 <textarea class="ckeditor" name="isi" id="isi" placeholder="Isi pengumuman"></textarea>
											 </div>
								</div>
								 
								<div class="panel-footer panel-right">
								<button type="submit" class="btn btn-primary" id="save" form="form_pengumuman">Simpan</button>
								<button type="submit" class="btn btn-primary" id="update" form="form_pengumuman">Perbaharui</button>
								<button type="button" class="btn btn-default batal" id="batal_pengumuman">Batal</button>
							</div>
							</form>
						</div><!--/.span-->