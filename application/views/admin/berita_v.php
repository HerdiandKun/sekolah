<div class="page-header position-relative">
						<h1>
							Berita Umum
							<small>
								<i class="icon-double-angle-right"></i>
								Manipulasi Berita Umum
							</small>
						</h1>
							<div class="hr hr-18 dotted hr-double"></div>

							<div class="row-fluid" id="tabel_berita">
								<h3 class="header smaller lighter blue">Data Berita Umum</h3>
								<div class="table-header">
									Tabel Data Berita 
									<div class="right"><button class="btn btn-success" id="tambah_berita">Tambah Berita</button>
									</div>									
								</div>

								<table id="sample-table-2" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th class="center">
											No
											</th>
											<th>Judul</th>
											<th>Isi</th>
											<th>Tanggal</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i =1;
										foreach ($berita->result() as $row){
											?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $row->judul;?></td>
												<td><?php echo $row->isi_berita;?></td>
												<td><?php echo $row->tanggal_berita;?></td>
												<input type="hidden" id="judul_<?php echo $row->id_berita;?>" value="<?php echo $row->judul;?>">
												<input type="hidden" id="isi_<?php echo $row->id_berita;?>" value="<?php echo $row->isi_berita;?>">
												<input type="hidden" id="tanggal_<?php echo $row->id_berita;?>" value="<?php echo date('m/d/Y',strtotime($row->tanggal_berita));?>">
												<td class="td-actions">
													<a class="green edit_berita" href="#" id="edit_<?php echo $row->id_berita;?>">
														<i class="icon-pencil bigger-130"></i>
													</a>

													<a class="red" href="<?php echo base_url();?>admin/berita/delete_berita/<?php echo $row->id_berita;?>">
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
							<form class="form-horizontal" role="form" method="post" id="form_berita"  enctype="multipart/form-data">
							<h6 class="modal-title text-left"><b><text style="color:red">*</text>) Kolom harus diisi</b></h6>
								
								<div class="control-group">
											<label class="control-label">Judul Berita</label>
											<div class="controls">
											<input class="span6" type="text"  name="judul" id="judul" placeholder="Judul Berita" required>
											<input type="hidden" class="form-control" name="id_berita" id="id_berita" />
											</div>
								</div>
								<div class="control-group">
											<label class="control-label">Tanggal Berita  </label>
											<div class="controls">
											<input type="text" class="form-control tanggal" data-format="YYYY-MM-DD"  name="tanggal" id="tanggal" placeholder="Tanggal Berita" required></input>
											</div>
								</div>
								<div class="control-group">
											<label class="control-label">Isi Berita</label>
											<div class="controls">
											 <textarea class="ckeditor" name="isi" id="isi" placeholder="Isi Berita"></textarea>
											 </div>
								</div>
								 
								<div class="panel-footer panel-right">
								<button type="submit" class="btn btn-primary" id="save" form="form_berita">Simpan</button>
								<button type="submit" class="btn btn-primary" id="update" form="form_berita">Perbaharui</button>
								<button type="button" class="btn btn-default batal" id="batal_berita">Batal</button>
							</div>
							</form>
						</div><!--/.span-->