					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
						<?php if ($_SESSION['level']== 3){ ?>
								<ul class="gn-menu">
								<!-- <li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li> -->
								<li>
									<a class="gn-icon gn-icon-cog">Mahasiswa</a>
									<ul class="gn-submenu">
										<li><a href="?show=Krs" class="gn-icon gn-icon-cog">KRS</a></li>
										<li><a href="?show=Khs" class="gn-icon gn-icon-cog">KHS</a></li>
										<li><a href="?show=Jadwal" class="gn-icon gn-icon-cog">Jadwal</a></li>
									</ul>
								</li>
								<li><a href="?show=Help" class="gn-icon gn-icon-help">Help</a></li>
								<li><a href="?show=Archives" class="gn-icon gn-icon-archive">Archives</a></li>
							</ul>
						<?php 
							}elseif ($_SESSION['level']== 2){
							

						 ?>
								<ul class="gn-menu">
								<!-- <li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li> -->
								<li>
									<a class="gn-icon gn-icon-cog">Dosen</a>
									<ul class="gn-submenu">
										<li><a href="?show=Matakuliah" class="gn-icon gn-icon-cog">Mata Kuliah</a></li>
										<li><a href="?show=Nilai" class="gn-icon gn-icon-cog">Nilai</a></li>
									</ul>
								</li>
								<li><a href="?show=Help" class="gn-icon gn-icon-help">Help</a></li>
								<li><a href="?show=Archives" class="gn-icon gn-icon-archive">Archives</a></li>
							</ul>
						<?php }elseif ($_SESSION['level']== 1){
							

						 ?>
								<ul class="gn-menu">
								<!-- <li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li> -->
								<li>
									<a class="gn-icon gn-icon-cog">Admin</a>
									<ul class="gn-submenu">
										<li><a href="?show=Mahasiswa" class="gn-icon gn-icon-cog">Mahasiswa</a></li>
										<li><a href="?show=Dosen" class="gn-icon gn-icon-cog">Dosen</a></li>
										<li><a href="?show=Matakuliah" class="gn-icon gn-icon-cog">Mata Kuliah</a></li>
										<li><a href="?show=Nilai" class="gn-icon gn-icon-cog">Nilai</a></li>
										<li><a href="?show=User" class="gn-icon gn-icon-cog">User</a></li>
									</ul>
								</li>
								<li><a href="?show=Help" class="gn-icon gn-icon-help">Help</a></li>
								<li><a href="?show=Archives" class="gn-icon gn-icon-archive">Archives</a></li>
							</ul>
						<?php } ?>
						</div><!-- /gn-scroller -->
					</nav>