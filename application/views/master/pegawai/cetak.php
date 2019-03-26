<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Print</title>
	<style>
		body {
			margin: 0;
		}

		.layout {
			margin-left: 50px;
		}


		.title-biodata {
			font-size: 20px;
			text-align: center;
			text-decoration: underline;
		}

		.data-pribadi {
			font-size: 1.3em;
		}

		h2 {
			font-size: 1.4em;
		}

		p {
			font-size: 0.9em;
		}

		/* table,td,th {
            border: 1px solid #000;
        } */

		td,
		th {
			padding: 5px 25px;
			font-size: 0.9em;
		}

		.header {
			text-align: center;
		}
	</style>
</head>

<body>
	<div class="layout">
		<div class="header">
			<h2>PT. NUR RAHAYU METAL</h2>
			<p>
				<span>( QUALITY WELDING TECHNIQUES & MECHANICAL WOOD )</span><br>
				<span>JL CINGISED Block c Kav 17 RT02 / RW04 CISARANTEN ENDAH KOTA BANDUNG </span><br>
				<span>022 - 63728141 / pt.nurrahayumetal07@gmail.com</span>
			</p>
			<p></p>
		</div>
		<p class="title-biodata">Biodata Karyawan</p>
		<p class="data-pribadi">I. Data Pribadi</p>
		<table>

			<tr>
				<td>1.</td>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?= $pegawai->nik ?>
				</td>
			</tr>

			<tr>
				<td>2.</td>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td>
					<?= ucwords($pegawai->nama) ?>
				</td>
			</tr>

			<tr>
				<td>3.</td>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?= $this->pegawai->jenisKelamin($pegawai->jk) ?>
				</td>
			</tr>

			<tr>
				<td>4.</td>
				<td>Tempat, Tanggal Lahir</td>
				<td>:</td>
				<td>
					<?= ucwords("$pegawai->tmp_lahir, $pegawai->tgl_lahir") ?>
				</td>
			</tr>

			<tr>
				<td>5.</td>
				<td>Umur</td>
				<td>:</td>
				<td>
					<?= $this->pegawai->hitungUmur($pegawai->tgl_lahir) ?>
				</td>
			</tr>

			<tr>
				<td>6.</td>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<?= ucwords($pegawai->alamat) ?>
				</td>
			</tr>

			<tr>
				<td>7.</td>
				<td>Status</td>
				<td>:</td>
				<td>
					<?= $this->pegawai->status($pegawai->status) ?>
				</td>
			</tr>

			<tr>
				<td>8.</td>
				<td>Email</td>
				<td>:</td>
				<td>
					<?= ucwords($this->pegawai->cekEmail($pegawai->email)); ?>
				</td>
			</tr>

			<tr>
				<td>9.</td>
				<td>Golongan Darah</td>
				<td>:</td>
				<td>
					<?= $this->pegawai->changeGoldar($pegawai->gol_darah) ?>
				</td>
			</tr>

			<tr>
				<td>10.</td>
				<td>Agama</td>
				<td>:</td>
				<td>
					<?= ucwords($pegawai->agama) ?>
				</td>
			</tr>

			<tr>
				<td>11.</td>
				<td>No Telepon</td>
				<td>:</td>
				<td>
					<?= $pegawai->no_telp ?>
				</td>
			</tr>

		</table>


		<p class="data-pribadi">II. Data Keluarga</p>
		<p style="font-weight: bold;">1. Orang Tua</p>
		<table>
					<tr>
						<th>Nama Ayah</th>
						<th>Tempat, Tanggal Lahir</th>
						<th>Pendidikan</th>
					</tr>

					<tr>
						<td><?= ucwords($pegawai->nama_ayah) ?></td>
						<td><?= ucwords("$pegawai->tmp_lahir_ayah, $pegawai->tgl_lahir_ayah") ?></td>
						<td><?= $pegawai->pend_ayah ?></td>
					</tr>
				
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>

				<tr>
						<th>Nama Ibu</th>
						<th>Tempat, Tanggal Lahir</th>
						<th>Pendidikan</th>
					</tr>

					<tr>
						<td><?= ucwords($pegawai->nama_ibu) ?></td>
						<td><?= ucwords("$pegawai->tmp_lahir_ibu, $pegawai->tgl_lahir_ibu") ?></td>
						<td><?= $pegawai->pend_ibu ?></td>
					</tr>

		</table>


		<p style="font-weight: bold;">2. Suami / Istri</p>
		<table>
					<tr>
						<th>Nama Suami / Istri</th>
						<th>Tempat, Tanggal Lahir</th>
						<th>Pendidikan</th>
						<th>Status</th>
					</tr>

					<tr>
						<td><?= ucwords($pegawai->nama_pasutri) ?></td>
						<td><?= ucwords("$pegawai->tmp_lahir, $pegawai->tgl_lahir_pasutri") ?></td>
						<td><?= $pegawai->pendidikan_pasutri ?></td>
						<td><?= $this->pegawai->cekSuami($pegawai->status_pasutri) ?></td>
					</tr>

		</table>


		<p style="font-weight: bold;">3. Anak</p>
		<table>
					<tr>
						<th>Nama Anak</th>
						<th>Tempat, Tanggal Lahir</th>
						<th>Pendidikan</th>
						<th>Jenis Kelamin</th>
						<th>Status</th>
					</tr>

					<?php foreach($anak as $a): ?>
					<tr>
						<td><?= ucwords($a->nama_anak) ?></td>
						<td><?= ucwords("$a->tmp_lahiranak, $a->tgl_lahiranak") ?></td>
						<td><?= $a->pendidikananak ?></td>
						<td><?= $this->pegawai->jenisKelamin($a->jk) ?></td>
						<td><?= $this->pegawai->status_anak($a->status) ?></td>
					</tr>
				<?php endforeach; ?>

		</table>
	</div>
</body>

</html>