@extends('entities.instruktur.layouts.panel')

@section('hstyles')

@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tampil Kursus</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ site_url('instruktur') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Tampil Kursus</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title"><b>Tampil Kursus</b></h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
							<i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-user-information">
								<tbody>
									<tr>
										<td>Nama Kursus</td>
										<td>{{ $info->nama }}</td>
									</tr>
									<tr>
										<td>Tingkat Edukasi</td>
										<td>{{ $info->tingkat_edukasi }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title"><b>Materi</b></h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
							<i class="fa fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-6">
									<div class="row">
										<a href="{{ site_url('instruktur/kursus/materi/create/'.@$info->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Tambah Materi</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<table class="table table-user-information">
								<thead>
									<tr>
										<th>Judul</th>
										<th>Deskripsi</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($info2 as $info_data)
									<tr>
										<td>{{ $info_data->judul }}</td>
										<td>{{ $info_data->deskripsi }}</td>
										<td>
											<a href="{{ site_url('instruktur/kursus/materi/show/'.@$info->id.'/'.$info_data->id) }}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Lihat</a>
											<a href="{{ site_url('instruktur/kursus/materi/edit/'.@$info->id.'/'.$info_data->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Ubah</a>
											<a href="{{ site_url('instruktur/kursus/materi/destroy/'.@$info->id.'/'.$info_data->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
@endsection

@section('fscripts')

@endsection
