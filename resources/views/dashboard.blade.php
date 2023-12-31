@extends('template_user')
@section('konten')
<div class="container col-md-12 col-12">
    <div class="card shadow p-2 my-5">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="tables">
                    <thead>
                        <tr>
                            <th>Disposisi</th>
                            <th>No Surat</th>
                            <th>Perihal</th>
                            <th>Aasal Surat</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php foreach ($surat as $key => $value): ?>
                        <tr>
                            <td>
                                <?php if($value['posisi_surat']=="tercatat"): ?>
                                    Tercatat
                                <?php else: ?>
                                    Disposisi
                                <?php endif ?>
                            </td>
                            <td><?php echo $value['no_surat']; ?></td>
                            <td><?php echo $value["perihal"]; ?></td>
                            <td><?php echo $value['asal_surat']; ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection