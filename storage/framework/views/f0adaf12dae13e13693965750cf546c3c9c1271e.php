<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading"><center><h1>Daftar Gaji</h1></center></div>
        <div class="panel-body">
        
            
         <table class="table table-striped table-hover table-bordered">
                        
         <div class="col-md-12">
          <center>

                        <h3><?php echo e($penggajian->Tunjangan_pegawai->Pegawai->User->name); ?></h3>
                        <h4><?php echo e($penggajian->Tunjangan_pegawai->Pegawai->nip); ?></h4>
                        <b><?php if($penggajian->tanggal_pengambilan == ""&&$penggajian->status_pengambilan == "0"): ?>
                            Gaji Belum Diambil
                        <?php elseif($penggajian->tanggal_pengambilan == ""||$penggajian->status_pengambilan == "0"): ?>
                            Gaji Belum Diambil
                        <?php else: ?>
                            Gaji Sudah Diambil Pada <?php echo e($penggajian->tanggal_pengambilan); ?>

                        <?php endif; ?></b>
                        <h5>Gaji Lembur Sebesar Rp.<?php echo e($penggajian->jumlah_uang_lembur); ?><hr> Gaji Pokok Sebesar Rp.<?php echo e($penggajian->gaji_pokok); ?><hr>Mendapat Tunjangan Sebesar Rp.<?php echo e($penggajian->Tunjangan_pegawai->Tunjangan->besaran_uang); ?><hr>Jadi Total Gaji Rp.<?php echo e($penggajian->total_gaji); ?>

                        </h5>
                        
 <hr><a class="btn btn-success col-md-12" href="<?php echo e(url('penggajian')); ?>">Kembali</a>
                                
                        </center>
                        </div> 
                        
                    </table>
              
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>