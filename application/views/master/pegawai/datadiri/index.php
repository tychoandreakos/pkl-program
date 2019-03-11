<div class="card">
	<div class="card-header">
		<strong class="card-title">#Lengkapi Data Pegawai
        <a href="<?= site_url('pegawai/detail/'. $id); ?>" class="btn btn-outline-primary ml-1  btn-sm float-right">Kembali</a>
        </strong>
	</div>
	<div class="card-body">
	<div class="container p-5">
	<div class="row">
		<div class="col-lg-4 mb-2">
			<a href="<?= site_url('pegawai/data-ortu/'. $id); ?>" class="box-detail">
				<div class="data">
					<i class="ti-layout-media-overlay-alt-2"></i>
					<p>Data Orang Tua</p>
				</div>
			</a>
		</div>
		
		<div class="col-lg-4 mb-2">
			<a href="<?= site_url('pegawai/data-pasutri/'. $id); ?>" class="box-detail">
				<div class="data">
					<i class="ti-blackboard"></i>
					<p>Data Suami Istri</p>
				</div>
			</a>
		</div>

		<div class="col-lg-4 mb-2">
			<a href="<?= site_url('pegawai/data-anak/'. $id); ?>" class="box-detail">
				<div class="data">
					<i class="ti-user"></i>
					<p>Data Anak</p>
				</div>
			</a>
		</div>

</div>

	<div class="row mt-1">
	<div class="col-lg-4 mb-2">
			<a href="<?= site_url('pegawai/data-pendidikan/'. $id); ?>" class="box-detail">
				<div class="data">
					<i class="ti-book"></i>
					<p>Data Pendidikan</p>
				</div>
			</a>
		</div>
		
		<div class="col-lg-4 mb-2">
			<a href="<?= site_url('pegawai/data-pekerjaan/'. $id); ?>" class="box-detail">
				<div class="data">
					<i class="ti-write"></i>
					<p>Data Riwayat Pekerjaan</p>
				</div>
			</a>
		</div>

		<div class="col-lg-4 mb-2">
		<div class="box-detail"></div>
		</div>
	</div>
		
	</div>
</div>
</div>