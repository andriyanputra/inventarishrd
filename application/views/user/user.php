	<div class="card">
        <div class="card-header">
            <strong class="card-title"><?=$pageHeader?></strong>
            <button class="btn btn-success" data-toggle="modal" data-target="#tambahBrg"><i class="fa fa-plus-circle"></i> Tambah User</button>
        </div>
		<?=$this->session->flashdata('fail')?>

        <div class="card-body">
			<table id="bootstrap-data-table" class="table table-striped table-bordered">
				<thead>
					<th>No</th>
					<th>ID</th>
					<th width="300">Nama</th>
					<th>Username</th>
					<th>Akses</th>
					<th width="100">Aksi</th>
				  </tr>
				</thead>
				<tbody>
				  	<?php $no=1;foreach ($user as $b): ?>
					  <tr>
					    <td><?=$no++?></td>
						<td><?=$b->id_user?></td>
						<td><?=$b->nama?></td>
						<td><?=$b->username?></td>
						<td><?=($b->level==1)?'Administrator':'Kepksek Sarpras'?></td>
						<td class="btn-group">
							<a href="#" title="Edit User" data-action="<?=base_url('user/user/edit')?>" data-kode="<?=$b->id_user?>" data-toggle="modal" data-target="#editu" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
							<a title="Hapus Supplier" href="<?=base_url("user/user/hapus/$b->id_user")?>" onclick="return confirm('Yakin akan menghapus supplier dipilih ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
						</td>
					  </tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>

	<form action="<?=base_url('user/user/tambah')?>" method="post" class="modal" id="tambahBrg">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Barang</h4>
				<span class="close" data-dismiss="modal">&times;</span>
			</div>
			<div class="modal-body">
				<div class="alert alert-warning">
					<i class="fa fa-warning"></i><small>&nbsp; Username tidak akan bisa diubah</small>
				</div>
				<div class="form-group input-group-sm">
					<input type="text" name="nama" class="form-control" placeholder="Nama User" maxlength="15" required autofocus>
				</div>
				<div class="form-group input-group-sm">
					<input type="text" name="uname" class="form-control" placeholder="Username" maxlength="15" required>
				</div>
				<div class="form-group input-group-sm">
					<input type="text" name="pass" class="form-control" placeholder="Password" maxlength="15" required>
				</div>
				<div class="form-group input-group-sm">
					<select name="akses" class="form-control">
						<option value="">-- PILIH HAK AKSES --</option>
						<option value="0">Kepsek Sarana Prasarana</option>
						<option value="1">Administrator</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Tambahkan</button>
			</div>
		</div>
	</div>
</form>

<form action="<?=base_url('user/user/update')?>" method="post" class="modal" id="editu">
</form>