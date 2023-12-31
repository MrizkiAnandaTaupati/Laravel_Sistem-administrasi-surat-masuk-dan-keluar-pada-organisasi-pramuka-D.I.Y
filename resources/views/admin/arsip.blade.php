@extends('admin/template_admin')
@section('konten')
<div class="container">
    <div class="card p-2 mt-5 shadow">
        <div class="card-body">
            <h3 class="fw-bold">Data Arsip</h3>
            <hr>
        </div>
    </div>
    <div class="card shadow p-2 my-5"> 
        <div class="card-body"> 
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Admin</th>
                        <td>
                            <a href="<?php echo url('admin/arsip_admin'); ?>" class="btn btn-primary btn-sm">Arsip Admin</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Sekretariat</th>
                        <td>
                            <a href="<?php echo url('admin/arsip_sekretariat'); ?>" class="btn btn-primary btn-sm">Arsip Sekretariat</a>                            
                        </td>
                    </tr>
                    <tr>
                        <th>Sekretaris</th>
                        <td>
                            <a href="<?php echo url('admin/arsip_sekretaris'); ?>" class="btn btn-primary btn-sm">Arsip Sekretaris</a>                            
                        </td>
                    </tr>
					<tr>
                        <th>Unit</th>
                        <td>
                            <a href="<?php echo url("admin/arsip_unit"); ?>" class="btn btn-primary btn-sm">Arsip Unit</a>
                        </td>
                    </tr>
					<tr>
                        <th>User Unit</th>
                        <td>
                            <a href="<?php echo url("admin/arsip_user_unit"); ?>" class="btn btn-primary btn-sm">Arsip User Unit</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Surat Masuk</th>
                        <td>
                            <a href="<?php echo url('admin/arsip_surat_masuk'); ?>" class="btn btn-primary btn-sm">Arsip Surat Masuk</a>                            
                        </td>
                    </tr>
                    <tr>
                        <th>Surat Keluar</th>
                        <td>
                            <a href="<?php echo url('admin/arsip_surat_keluar'); ?>" class="btn btn-primary btn-sm">Arsip Surat Keluar</a>                            
                        </td>
                    </tr>
                    <tr>
                        <th>Notulen</th>
                        <td>
                            <a href="<?php echo url('admin/arsip_notulen'); ?>" class="btn btn-primary btn-sm">Arsip Notulen</a>                            
                        </td>
                    </tr>
                    <tr>
                        <th>Ringkasan Kegiatan</th>
                        <td>
                            <a href="<?php echo url('admin/arsip_ringkasan_kegiatan'); ?>" class="btn btn-primary btn-sm">Arsip Ringkasan Kegiatan</a>                            
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection