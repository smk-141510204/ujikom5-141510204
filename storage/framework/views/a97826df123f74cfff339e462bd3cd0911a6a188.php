<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading"><center><h1>Tunjangan</h1></center></div>
		<div class="panel-body">
		<a class="btn btn-primary" href="<?php echo e(url('tunjangan/create')); ?>">Tambah Data</a><br><br>
			<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr class="bg-primary">
				<th>No</th>
				<th>Kode Tunjangan</th>
				<th>Nama Golongan</th>
				<th>Nama Jabatan</th>
				<th>Besar Uang</th>
				<th>Status</th>
				<th>Jumlah Anak</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		<?php  $no=1;  ?>
		<tbody>
			<?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<td><?php echo e($no++); ?></td>
				<td><?php echo e($data->kode_t); ?></td>
				<td><?php echo e($data->golongan->nama_g); ?></td>
				<td><?php echo e($data->jabatan->nama_j); ?></td>
				<td><?php echo e($data->besar_uang); ?></td>
				<td><?php echo e($data->status); ?></td>
				<td><?php echo e($data->jumlah_anak); ?></td>
				<td>
					<a href="<?php echo e(route('tunjangan.edit',$data->id)); ?>" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					<?php echo Form::open(['method'=>'DELETE','route'=>['tunjangan.destroy',$data->id]]); ?>

					<?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>

					<?php echo Form::close(); ?>

				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</tbody>
	</table>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>