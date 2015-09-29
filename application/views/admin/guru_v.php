<div class="page-header position-relative">
						<h1>
							Data Guru
							<small>
								<i class="icon-double-angle-right"></i>
								Manipulasi Data Guru
							</small>
						</h1>
							<div class="hr hr-18 dotted hr-double"></div>

							<div class="row-fluid" id="tabel_guru">
								<h3 class="header smaller lighter blue">Data Guru</h3>
								<div class="table-header">
									Tabel Data Guru
									<div class="right"><button class="btn btn-success" id="tambah_guru">Tambah</button>
									</div>									
								</div>

								<table id="sample-table-2" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th class="center">
											No
											</th>
											<th>Nama Guru</th>
											<th>Keterangan</th>
											<th>Nip</th>
											<th>Email</th>
											<th>Tempat Lahir</th>
											<th>Tanggal Lahir</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i =1;
										foreach ($guru->result() as $row){
											?>
											<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $row->nama_guru;?></td>
												<td><?php echo $row->keterangan;?></td>
												<td><?php echo $row->nip;?></td>
												<td><?php echo $row->email_guru;?></td>
												<td><?php echo $row->tempat_lahir;?></td>
												<td><?php echo $row->tgl_lahir;?></td>
												<input type="hidden" id="nama_<?php echo $row->id_guru;?>" value="<?php echo $row->nama_guru;?>">
												<input type="hidden" id="nip_<?php echo $row->id_guru;?>" value="<?php echo $row->nip;?>">
												<input type="hidden" id="email_<?php echo $row->id_guru;?>" value="<?php echo $row->email_guru;?>">
												<input type="hidden" id="tl_<?php echo $row->id_guru;?>" value="<?php echo $row->tempat_lahir;?>">
												<input type="hidden" id="tgl_<?php echo $row->id_guru;?>" value="<?php echo $row->tgl_lahir;?>">
												<input type="hidden" id="ket_guru_<?php echo $row->id_guru;?>" value="<?php echo $row->keterangan;?>">
												<td class="td-actions">
													<a class="green edit_guru" href="#" id="edit_<?php echo $row->id_guru;?>">
														<i class="icon-pencil bigger-130"></i>
													</a>

													<a class="red" href="<?php echo base_url();?>admin/guru/delete_guru/<?php echo $row->id_guru;?>">
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
							<form class="form-horizontal" role="form" method="post" id="form_guru"  enctype="multipart/form-data">
							<h6 class="modal-title text-left"><b><text style="color:red">*</text>) Kolom harus diisi</b></h6>
								
								<div class="control-group">
								<input type="hidden" id="id_guru" name="id_guru">
											<label class="control-label">Nama Guru</label>
											<div class="controls">
											<input class="span6" type="text"  name="nama" id="nama" placeholder="Nama Guru" required>
											</div>
								</div>
								
								<div class="control-group">
											<label class="control-label">NIP</label>
											<div class="controls">
											<input class="span6" type="text"  name="nip" id="nip" placeholder="NIP" onkeypress="return isNumberKey(event)" required>
											</div>
								</div>
								 <div class="control-group">
											<label class="control-label">Tanggal Lahir  </label>
											<div class="controls">
											<input type="text" class="form-control" name="tgl" id="tgl" placeholder="Tanggal Lahir" required></input>
											</div>
								</div>
								<div class="control-group">
											<label class="control-label">Tempat Lahir</label>
											<div class="controls">
											<input class="span6" type="text"  name="tl" id="tl" placeholder="Tempat Lahir" required>
											</div>
								</div>
								<div class="control-group">
											<label class="control-label">Email Guru</label>
											<div class="controls">
											<input class="span6" type="email"  name="email" id="email" placeholder="Email" required>
											</div>
								</div>
								<div class="control-group">
											<label class="control-label">Keterangan</label>
											<div class="controls">
											 <textarea class="ckeditor" name="keterangan" id="ket_guru" placeholder="Keterangan"></textarea>
											 </div>
								</div>
								<div class="panel-footer panel-right">
								<button type="submit" class="btn btn-primary" id="save" form="form_guru">Simpan</button>
								<button type="submit" class="btn btn-primary" id="update" form="form_guru">Perbaharui</button>
								<button type="button" class="btn btn-default batal" id="batal_guru">Batal</button>
							</div>
							</form>
						</div><!--/.span-->