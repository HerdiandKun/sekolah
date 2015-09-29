<div class="page-header position-relative">
						<h1>
							Berita Kelas
							<small>
								<i class="icon-double-angle-right"></i>
								Manipulasi Berita Kelas
							</small>
						</h1>
							<div class="hr hr-18 dotted hr-double"></div>

							<div class="row-fluid" id="tabel_berita_kelas">
								<h3 class="header smaller lighter blue">Data Berita Kelas</h3>
								<div class="table-header">
									Tabel Data Berita Kelas
									<div class="right"><button class="btn btn-success" id="tambah_berita_kelas">Tambah Berita Kelas</button>
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
												<td><?php echo $row->judul;?></td>
												<td><?php echo $row->isi_berita;?></td>
												<td><?php echo $row->tanggal_berita_kelas;?></td>
												<td><?php echo $row->tingkat.' '.strtoupper($row->jurusan).' '.$row->kelas;?></td>
												<input type="hidden" id="judul_<?php echo $row->id_berita_kelas;?>" value="<?php echo $row->judul;?>">
												<input type="hidden" id="isi_<?php echo $row->id_berita_kelas;?>" value="<?php echo $row->isi_berita;?>">
												<input type="hidden" id="tanggal_<?php echo $row->id_berita_kelas;?>" value="<?php echo date('m/d/Y',strtotime($row->tanggal_berita_kelas));?>">
												<input type="hidden" id="kelas_<?php echo $row->id_berita_kelas;?>" value="<?php echo $row->id_kelas;?>">
												<td class="td-actions">
												<?php if($this->session->userdata("id_kelas") == $row->id_kelas || $this->session->userdata("tipe_user")== 1){?>
													<a class="green edit_berita_kelas" href="#" id="edit_<?php echo $row->id_berita_kelas;?>">
														<i class="icon-pencil bigger-130"></i>
													</a>

													<a class="red" href="<?php echo base_url();?>admin/berita_kelas/delete/<?php echo $row->id_berita_kelas;?>" id="del_<?php echo $row->id_berita_kelas;?>">
														<i class="icon-trash bigger-130"></i>
													</a>
												<?php } ?>
											</td>
											</tr>
										<?php	
										$i++;
										}?>
									</tbody>
								</table>
							</div>
							<form class="form-horizontal" role="form" method="post" id="form_berita_kelas"  enctype="multipart/form-data">
							<h6 class="modal-title text-left"><b><text style="color:red">*</text>) Kolom harus diisi</b></h6>
								
								<div class="control-group">
											<label class="control-label">Judul Berita</label>
											<div class="controls">
											<input class="span6" type="text"  name="judul" id="judul" placeholder="Judul Berita" required>
											<input type="hidden" class="form-control" name="id_berita_kelas" id="id_berita_kelas" />
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
											 <textarea class="ckeditor" name="isi" id="isi" placeholder="Isi Berita" ></textarea>
											 </div>
								</div>
								<?php if ($this->session->userdata("tipe_user")==1){?>
								<div class="control-group">
											<label class="control-label">Kelas</label>
											<div class="controls">
											<select name="kelas" id="kelas" required>
												<option value="0" disabled selected >Pilih Kelas</option>
												<?php $kelas = $this->db->get("tbl_kelas")->result();
													foreach($kelas as $kl){ ?>
														<option value="<?php echo $kl->id_kelas;?>"><?php echo $kl->tingkat.$kl->jurusan.$kl->kelas;?></option>	
												<?php	}
												?>
											</select>
											</div>
								</div>
								<?php } else{?>
								<div class="control-group">
											<input class="span6" type="hidden"  name="kelas" id="kelas" value="<?php echo $this->session->userdata("id_kelas");?>" required>
								</div> 
								 <?php }?>
								<div class="panel-footer panel-right">
								<button type="submit" class="btn btn-primary" id="save" form="form_berita_kelas">Simpan</button>
								<button type="submit" class="btn btn-primary" id="update" form="form_berita_kelas">Perbaharui</button>
								<button type="button" class="btn btn-default batal" id="batal_berita_kelas">Batal</button>
							</div>
							</form>
						</div><!--/.span-->