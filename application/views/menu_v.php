<?php

	$this->load->view('header_v');
	
?>
<div class="navbar navbar-fixed-top">
			 <div class="navbar-inner">
			 <div class="container-fluid">
				<nav id="menu">
				<span class="navbar-brand">SMAN 1 RANCABUNGUR</span>
			  <label for="tm" id="toggle-menu">Navigation <span class="drop-icon">▾</span></label>
			  <input type="checkbox" id="tm">
			  <ul class="main-menu clearfix">
				<li><a href="#">Galeri</a></li>
				<li><a href="#">Humas</a></li>
				<li><a href="#">Osis</a></li>
				
				<li><a href="#">Kelas 
					<span class="drop-icon">▾</span>
					<label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
				  </a>
				  <input type="checkbox" id="sm1">
				  <ul class="sub-menu">
					<li><a href="#">Kelas X</a></li>
					<li><a href="#">Kelas XI
						<span class="drop-icon">▾</span>
						<label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
					  </a>
					  <input type="checkbox" id="sm2">
					  <ul class="sub-menu">
						<li><a href="#">IPA</a></li>
						<li><a href="#">IPS</a></li>
					  </ul>
					</li>
					<li><a href="#">Kelas XII
						<span class="drop-icon">▾</span>
						<label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
					  </a>
					  <input type="checkbox" id="sm2">
					  <ul class="sub-menu">
						<li><a href="#">IPA</a></li>
						<li><a href="#">IPS</a></li>
					  </ul>
					</li>
				  </ul>
				</li>
				<li><a href="#">Kurikulum</a></li>
				<li><a href="#">Kesiswaan</a></li>
				<li><a href="#">Profil</a></li>
			  </ul>
			</nav>		
		</div>
	</div>
</div>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->