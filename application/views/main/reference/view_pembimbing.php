		<!DOCTYPE html>
		<html>
			<head>
			<?php $this->load->view('t_head');?>
			</head>
			<body class="hold-transition skin-black-light sidebar-mini fixed">
			<div class="wrapper">
				<?php $this->load->view('t_navbar');?>
				<?php $this->load->view('t_menu_left');?>
				<div class="content-wrapper">
				<section class="content-header">
					<h1>
					<?php if(isset($page_title)) { echo $page_title; } ?>
					</h1>
				</section>
				<section class="content">
							<div class="panel box box-success">
								<div class="box-header with-border">
									<h4 class="box-title">
										<a data-toggle="collapse" href="#addData" class="" aria-expanded="true">
										<i class="fa fa-edit"></i>
										Tambah Data <? php if(isset($page_title)) { echo $page_title; } ?>
										</a>
									</h4>
								</div>
								<div id="addData" class="panel-collapse collapse in" aria-expanded="true" style="">
									<div class="form-horizontal">
										<div class="box-body">
											<div class="form-group">
												<label class="col-sm-2 control-label">Id Pembimbing</label>
												<div class="col-sm-10">
													<input type="text" maxlength="" class="form-control" name="A_id_pembimbing">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Nama Pembimbing</label>
												<div class="col-sm-10">
													<input type="text" maxlength="" class="form-control" name="A_nama_pembimbing">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Pass Pembimbing</label>
												<div class="col-sm-10">
													<input type="text" maxlength="" class="form-control" name="A_pass_pembimbing">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">User Pembimbing</label>
												<div class="col-sm-10">
													<input type="text" maxlength="" class="form-control" name="A_user_pembimbing">
												</div>
											</div>

										</div>
										<div class="box-footer">
											<button type="button" onclick="addData()" class="btn btn-xs btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Tambahkan</i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="panel box box-success">
								<div class="box-header with-border">
								<h4 class="box-title">
									<a data-toggle="collapse" href="#editData" class="" aria-expanded="true">
									<i class="fa fa-list"></i>
									Daftar <?php if(isset($page_title)) { echo $page_title; } ?>
									</a>
								</h4>
								<button type="button" onclick="reloadTable()" class="btn btn-xs btn-info pull-right"><i class="fa fa-refresh"></i> Reload</button>
								</div>
								<div id="editData" class="panel-collapse collapse in" aria-expanded="true" style="">
									<div class="box-body">
										<table id="listDataTable" class="table table-bordered">
										<thead>
											<tr>
												<th>id_pembimbing</th>
												<th>nama_pembimbing</th>
												<th>pass_pembimbing</th>
												<th>user_pembimbing</th>
												<th width="200">Aksi</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
										</table>
									</div>
								</div>
							</div>
				</section>
				</div>
				
				<div class="modal fade" id="viewModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="#" class="form-horizontal" method="POST">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span></button>
								<h4 class="modal-title">Detail </h4>
							</div>
							<div class="modal-body">
								<div class="box-body">
									<div class="form-group">
										<label class="col-sm-2 control-label">Id Pembimbing</label>
										<div class="col-sm-10">
											<input type="text" disabled="" maxlength="" class="form-control" name="V_id_pembimbing">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Nama Pembimbing</label>
										<div class="col-sm-10">
											<input type="text" disabled="" maxlength="" class="form-control" name="V_nama_pembimbing">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Pass Pembimbing</label>
										<div class="col-sm-10">
											<input type="text" disabled="" maxlength="" class="form-control" name="V_pass_pembimbing">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">User Pembimbing</label>
										<div class="col-sm-10">
											<input type="text" disabled="" maxlength="" class="form-control" name="V_user_pembimbing">
										</div>
									</div>

								</div>
							</div>
						</form>
					</div>
				</div>
				</div>

				<div class="modal fade" id="editModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="#" class="form-horizontal" method="POST">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span></button>
								<h4 class="modal-title">Detail </h4>
							</div>
							<div class="modal-body">
								<div class="box-body">
									<div class="form-group">
										<label class="col-sm-2 control-label">Id Pembimbing</label>
										<div class="col-sm-10">
											<input type="text" maxlength=""  class="form-control" name="E_id_pembimbing">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Nama Pembimbing</label>
										<div class="col-sm-10">
											<input type="text" maxlength=""  class="form-control" name="E_nama_pembimbing">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Pass Pembimbing</label>
										<div class="col-sm-10">
											<input type="text" maxlength=""  class="form-control" name="E_pass_pembimbing">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">User Pembimbing</label>
										<div class="col-sm-10">
											<input type="text" maxlength=""  class="form-control" name="E_user_pembimbing">
										</div>
									</div>

								</div>
							</div>
							<div class="modal-footer">
								<button type="button" onclick="saveEdit()" class="btn btn-sm btn-xs btn-success pull-right"><i class="fa fa-save"></i> Simpan</button>
							</div>
						</form>
					</div>
				</div>
				</div>
				
			<?php $this->load->view('t_footer'); ?>
			</div>
			<?php $this->load->view('t_foot'); ?>
			<script>
				$(function () {
				loadDataTable();
				})

				function reloadTable() {
					loadDataTable();
				}

				function loadDataTable(){
					$('#listDataTable').dataTable({
							"scrollX"     : false,
							"scrollY"     : 300,
							"bDestroy"      : true,
							"stateSave"     : false,
							"searching"       : true,
							"select"          : true,
							//"bLengthChange"   : true,
							"scrollCollapse"  : true,
							"bPaginate"       : true,
							"bInfo"           : true,
							"bSort"           : false,
							"aLengthMenu"   : [[30, 50, 75, -1], [30, 50, 75, "All"]],
							"pageLength"    : 30,
							"processing"      : true, //Feature control the processing indicator.
							"serverSide"    : true, //Feature control DataTables' server-side processing mode.
							"order"       : [], //Initial no order.
							//"dom"               : 'Bfrtip',
							//"buttons"     : ['copy', 'csv', 'excel', 'pdf', 'print'],
							"fixedColumns":   {
							leftColumns: 2,
							rightColumns: 0
							},
							"ajax": {
							"url" : "<?php echo base_url('main/reference/pembimbing/get_pembimbing'); ?>",
							"type"  : "POST",
							"dataSrc": function ( json ) {
								//$('#btn_add_project').prop("disabled", false);
								//alert("Done!");
								return json.data;
							}
							},
							"language": {
							"processing": "<center><p><img src='<?php echo base_url('assets/img/loader.gif');?>' /> Please Wait</p></center>"
							},
							"autoWidth": true,
							"columnDefs" : [
							{ 
								"targets" : [ 0 ], //first column / numbering column
								"orderable" : false, //set not orderable
							}
						]
					});
				}

				function viewModal(id){
				$.getJSON('<?php echo base_url('main/reference/pembimbing/get_pembimbing_single/');?>'+id, function(data)
				{
					if(data != null){
						$("input[name=V_id_pembimbing]").val(data.id_pembimbing);
						$("input[name=V_nama_pembimbing]").val(data.nama_pembimbing);
						$("input[name=V_pass_pembimbing]").val(data.pass_pembimbing);
						$("input[name=V_user_pembimbing]").val(data.user_pembimbing);
						$('#viewModal').modal('show');
					}else{
						console.log('no data');
					}
				});
				}

				function editModal(id){
				$.getJSON('<?php echo base_url('main/reference/pembimbing/get_pembimbing_single/');?>'+id, function(data)
				{
					if(data != null){

						$("input[name=E_id_pembimbing]").val(data.id_pembimbing);
						$("input[name=E_nama_pembimbing]").val(data.nama_pembimbing);
						$("input[name=E_pass_pembimbing]").val(data.pass_pembimbing);
						$("input[name=E_user_pembimbing]").val(data.user_pembimbing);
						$('#editModal').modal('show');
					}
					else{
						console.log('no data');
					}
				});
				}
			
				function addData(){
					$.post('<?php echo base_url('main/reference/pembimbing/add_pembimbing/');?>',
					{
						id_pembimbing : $("input[name=A_id_pembimbing]").val(),
						nama_pembimbing : $("input[name=A_nama_pembimbing]").val(),
						pass_pembimbing : $("input[name=A_pass_pembimbing]").val(),
						user_pembimbing : $("input[name=A_user_pembimbing]").val(),
					},
					function(data,status){
						Swal.fire(
							'Berhasil',
							'Data berhasil ditambahkan',
							'success'
						);
						$("input[name=A_id_pembimbing]").val('');
						$("input[name=A_nama_pembimbing]").val('');
						$("input[name=A_pass_pembimbing]").val('');
						$("input[name=A_user_pembimbing]").val('');
						loadDataTable();
					});
				}

				function saveEdit(){
					$.post('<?php echo base_url('main/reference/pembimbing/update_pembimbing/');?>',
					{
						id_pembimbing : $("input[name=E_id_pembimbing]").val(),
						nama_pembimbing : $("input[name=E_nama_pembimbing]").val(),
						pass_pembimbing : $("input[name=E_pass_pembimbing]").val(),
						user_pembimbing : $("input[name=E_user_pembimbing]").val(),
					},
					function(data,status){
						//alert("Data: " + data + "\nStatus: " + status);
						Swal.fire(
							'Berhasil',
							'Perubahan berhasil disimpan',
							'success'
						)
						loadDataTable();
						$('#editModal').modal('hide');
					});
				}

				function deleteData(id){
					Swal.fire({
						title: 'Hapus data ini?',
						type: 'warning',
						showCancelButton: true,
						confirmButtonColor: '#00a65a',
						cancelButtonColor: '#dd4b39',
						confirmButtonText: 'Hapus Data',
						cancelButtonText: "Batal",
					}).then((result) => {
						if (result.value) {
						$.post('<?php echo base_url('main/reference/pembimbing/delete_pembimbing/');?>',
						{
							id_pembimbing : id
						},
						function(data,status){
							Swal.fire(
								'Berhasil',
								'Data berhasil dihapus',
								'success'
							)
							loadDataTable();
							$('#deleteModal').modal('hide');
						});
						}else{
							Swal.fire(
								'Batal',
								'',
								'error'
						)
						}
					})
				}

			</script>
			</body>
		</html>
		