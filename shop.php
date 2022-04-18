<?php
  include 'header.php';
  ?>


<!-------------------Shop body--------------------->

<h2 class="shoptitle">Upgrades</h2>

<!-- img left -->
<div class="card mb-3" style="max-width: 75%;">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="https://drive.google.com/uc?export=view&id=1CFcFp9t6erhpLQwxQxWHf280NPIV42m0" class="card-img" alt="Ram Stick">
		</div>
		<div class="col-md-8">
			<div class="card-body">
			<div class="row">
					<div class="col-7">
				<h1 class="card-title">Ram</h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
					content. This content is a little bit longer.</p>
					</div>
					<div class="col-5">
						<p>Specs</p>
						<ul>
							<li>
								<p class="specslist">Faster loading times!</p>
							</li>
							<li>
								<p class="specslist">Get it now!</p>
							</li>
						</ul>
					</div>
				</div>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>

			<!--Start of Modal Testing-->


			<!-- Button trigger modal -->
			<div class="modalsec">
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalQuickView">
					Launch demo model
				</button>

				<!-- Modal -->
				<div class="modal fade" id="modalQuickView" tabindex="-1" aria-labelledby="myModalLabel"
					aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="myModalLabel">Modal title</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<h5>test</h5>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>

				<!--Modal Testing End-->

			</div>
		</div>
	</div>
</div>
<!-- img right -->
<div class="card mb-3" style="max-width: 75%;">
	<div class="row no-gutters">
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
					content. This content is a little bit longer.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
		<div class="col-md-4">
			<img src="./img/ram.PNG" class="card-img" alt="Ram Stick">
		</div>
	</div>
</div>

<!-- img left -->
<div class="card mb-3" style="max-width: 75%;">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="./img/ram.PNG" class="card-img" alt="Ram Stick">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
					content. This content is a little bit longer.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
	</div>
</div>

<!-- img right -->
<div class="card mb-3" style="max-width: 75%;">
	<div class="row no-gutters">
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
					content. This content is a little bit longer.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
		<div class="col-md-4">
			<img src="./img/ram.PNG" class="card-img" alt="Ram Stick">
		</div>
	</div>
</div>

<!-- img left -->
<div class="card mb-3" style="max-width: 75%;">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="./img/ram.PNG" class="card-img" alt="Ram Stick">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
					content. This content is a little bit longer.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
	</div>
</div>






<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "350px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}

	function openCart() {
		document.getElementById("myCart").style.width = "350px";
	}

	function closeCart() {
		document.getElementById("myCart").style.width = "0";
	}

	function openLogin() {
		document.getElementById("myLogin").style.width = "350px";
	}

	function closeLogin() {
		document.getElementById("myLogin").style.width = "0";
	}
</script>


<?php
        include "footer.php";
    ?>