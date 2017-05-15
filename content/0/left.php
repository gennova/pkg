<?php
	if($_SESSION['u23r']!=null)
	{
?>
			<div id="left">
				<img src="./img/unika.png" >
				<div class="urbangreymenu">
					<h3 class="headerbar">
						<a href=".">Home</a>
					</h3>
					<ul class="submenu">
						<li></li>
					</ul>
					<h3 class="headerbar">
						<a href="">Pengaturan</a>
					</h3>
					<ul class="submenu">
						<li>
							<a href=".?l=list">Lihat Daftar Dosen</a>
							<a href="#" class="view-mahasiswa">Lihat Daftar Mahasiswa</a>
							<a href="#" class="view-jadwal">Lihat Jadwal Dosen</a>		
							<a href="#" class="view-ujian">Lihat Jadwal Ujian</a>
							<a href="#" class="print-ujian">Cetak Jadwal Ujian</a>
						</li>
					</ul>
					<h3 class="headerbar">
						<a href="<?php echo $root?>/function/logout.php">Logout</a>
					</h3>
				</div>
			</div>

<?php
	}
?>
