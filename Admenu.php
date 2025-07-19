<section class="vbox">
	<header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
		<div class="navbar-header aside-md dk"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen"
				data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="<?php echo scs_url ?>" class="navbar-brand">
				<img src="<?php echo scs_url ?>images/logo.png" class="m-r-sm"> <a class="btn btn-link visible-xs"
					data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a> </div>

		<ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
			<li> <a href="#" class="btn btn-danger"><i class="fa fa-user"></i>&nbsp;
					<?php echo $_SESSION['UEmail'] ?>
				</a> </li>
			<li> <a href="<?php echo scs_url ?>/index.php/login/logout"><i class="fa fa-sign-out"></i>
					&nbsp;Logout</a> </li>
		</ul>
	</header>
	<section>
		<section class="stretch">
			<div class="panel panel-info">

				<?php
				$sql = "select * from Menu where act=1 and isnull(isirm,0)=1 order by ord";
				$query = $this->db->query($sql);
				foreach ($query->result_array() as $row) {
					?>
					<div class="btn-group">
						<?php
						if ($row['Menu_Id'] == 21) {
							?>
							<a href="<?php echo scs_url ?>index.php/home" type="button" class="btn btn-info">
								<?php echo $row['Menu']; ?>
							</a>
						<?php
						} else 
						{
							?>
							<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
								aria-expanded="false">
								<?php echo $row['Menu']; ?> <span class="caret"></span>
							</button>

							<ul class="dropdown-menu" role="menu">
								<?php
								$sql1 = "select * from SubMenu where act=1 and Menu_Id=" . $row['Menu_Id'] . " order by ord";
								$que = $this->db->query($sql1);
								foreach ($que->result_array() as $Rw) {
									echo ' <li class="' . $Rw['Des'] . '" ><a href="' . scs_url . 'index.php/' . $row['Menu'] . '?lk=' . base64_encode(trim($Rw['Des'])) . '"><i class="fa fa-angle-double-right"></i> ' . $Rw['Smenu'] . '</a></li>';
								}
								?>
						    </ul>

			          <?php } ?>

				    </div>
					<?php } ?>
				<section id="content">
					<section class="vbox">
						<section class="scrollable wrapper" style="">