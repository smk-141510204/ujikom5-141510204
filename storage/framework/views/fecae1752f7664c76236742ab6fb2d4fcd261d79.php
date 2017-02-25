<?php $__env->startSection('content'); ?>
       <div class="container">
	<div class="panel panel-info">
		<div class="panel-heading"><center><h1>Pengajian</h1></center></div>
		<div class="panel-body">
		<a class="btn btn-primary" href="<?php echo e(url('penggajian/create')); ?>">Tambah Data</a><br><br>
			<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr class="bg-primary">
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>Nip Pegawai</th> 
                        <th>Status Pengambilan</th>
                        <th colspan="3"><center>Opsi</center></th>
                        </tr>

                        <?php 
                            $no=1 ;
                         ?>
                        <?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penggajians): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                <td><?php echo e($no++); ?></td>                        
                            
                        <td><?php echo e($penggajians->Tunjangan_pegawai->Pegawai->User->name); ?></td>
                        
                        <td><?php echo e($penggajians->Tunjangan_pegawai->Pegawai->nip); ?></td>
                        <td><b><?php if($penggajians->tanggal_pengambilan == ""&&$penggajians->status_pengambilan == "0"): ?>
                            Gaji Belum Diambil
                        <?php elseif($penggajians->tanggal_pengambilan == ""||$penggajians->status_pengambilan == "0"): ?>
                            Gaji Belum Diambil
                        <?php else: ?>
                            Gaji Sudah Diambil Pada <?php echo e($penggajians->tanggal_pengambilan); ?>

                        <?php endif; ?></b></td>


                        </h5>
                        
                                <td><a class="btn btn-primary form-control" href="<?php echo e(route('penggajian.show',$penggajians->id)); ?>">Lihat</a></td>
                                     <td><?php echo Form::open(['method'=>'DELETE','route'=>['penggajian.destroy',$penggajians->id]]); ?>

                                    <?php echo Form::submit('Delete',['class'=>'btn btn-danger col-md-12']); ?></td>
                                    <?php echo Form::close(); ?>

                                
                        </center>
                        </tr>
                        </div> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        
                    </table>
                </div>

           
        
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>