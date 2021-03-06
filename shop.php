<?php
  include 'header.php';
  include_once 'includes/dbh.inc.php';
  ?>

<body>
    <h1 class="shoptitle">Available Upgrades</h3>
        <!-- img left -->
        <div class="card mb-3 blackcard whitefont" style="max-width: 70%;">
            <div class="row no-gutters">
                <div class="col-md-4 card-image">
                    <?php
						$sql = "SELECT * FROM product WHERE id = 1;";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

						if ($resultCheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo $row['image'];
							}
						}
					?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title pressstart">
                            <?php
								$sql = "SELECT * FROM product WHERE id = 1;";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);

								if ($resultCheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo $row['name'];
									}
								}
							?>
                        </h5>
                        <p class="card-text">
                            <?php
								$sql = "SELECT * FROM product WHERE id = 1;";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);

								if ($resultCheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo $row['desc'];
									}
								}
							?>
                        </p> 
                        <h6 class="pressstart">
                        <?php
							$sql = "SELECT * FROM product WHERE id = 1;";
							$result = mysqli_query($conn, $sql);
							$resultCheck = mysqli_num_rows($result);

							if ($resultCheck > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
									echo $row['price'];
								}
							}
						?>
                        </h6>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary pressstart" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            UPGRADE!
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">
                                            <?php
												$sql = "SELECT * FROM product WHERE id = 1;";
												$result = mysqli_query($conn, $sql);
												$resultCheck = mysqli_num_rows($result);

												if ($resultCheck > 0) {
													while ($row = mysqli_fetch_assoc($result)) {
														echo $row['name'];
													}
												}
											?> Upgrade
                                            <br>
                                            $<?php
												$sql = "SELECT * FROM product WHERE id = 1;";
												$result = mysqli_query($conn, $sql);
												$resultCheck = mysqli_num_rows($result);

												if ($resultCheck > 0) {
													while ($row = mysqli_fetch_assoc($result)) {
														echo $row['price'];
													}
												}
											?>
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="ordered.php" class="form-container">

                                            <label for="address"><b class="pressstart">IP Address</b></label>
                                            <input type="text" placeholder="Enter IP Address" name="address" required>

                                            <label for="psw"><b class="pressstart">Card Number</b></label>
                                            <input class="pressstart" type="password" placeholder="Enter Card Number"
                                                name="psw" required>

                                            <label for="address"><b class="pressstart">CVV</b></label>
                                            <input class="pressstart" type="password" placeholder="Enter CVV" name="psw"
                                                required>
                                            <hr>
                                            <button type="submit" class="btn pressstart ordersubmit">Complete
                                                Upgrade</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text"><small class="text-muted">Last updated 10 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <!-- right -->
        <div class="card mb-3 blackcard whitefont" style="max-width: 70%;">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title pressstart">
                            <?php
								$sql = "SELECT * FROM product WHERE id = 2;";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);

								if ($resultCheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo $row['name'];
									}
								}
							?>
                        </h5>
                        <p class="card-text">
                            <?php
								$sql = "SELECT * FROM product WHERE id = 2;";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);

								if ($resultCheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo $row['desc'];
									}
								}
							?>
                        </p>
						<!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary pressstart" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop1">
                            UPGRADE!
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">
                                            <?php
												$sql = "SELECT * FROM product WHERE id = 2;";
												$result = mysqli_query($conn, $sql);
												$resultCheck = mysqli_num_rows($result);

												if ($resultCheck > 0) {
													while ($row = mysqli_fetch_assoc($result)) {
														echo $row['name'];
													}
												}
											?> Upgrade
                                            <br>
                                            $<?php
												$sql = "SELECT * FROM product WHERE id = 2;";
												$result = mysqli_query($conn, $sql);
												$resultCheck = mysqli_num_rows($result);

												if ($resultCheck > 0) {
													while ($row = mysqli_fetch_assoc($result)) {
														echo $row['price'];
													}
												}
											?>
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="ordered.php" class="form-container">

                                            <label for="address"><b class="pressstart">IP Address</b></label>
                                            <input type="text" placeholder="Enter IP Address" name="address" required>

                                            <label for="psw"><b class="pressstart">Card Number</b></label>
                                            <input class="pressstart" type="password" placeholder="Enter Card Number"
                                                name="psw" required>

                                            <label for="address"><b class="pressstart">CVV</b></label>
                                            <input class="pressstart" type="password" placeholder="Enter CVV" name="psw"
                                                required>
                                            <hr>
                                            <button type="submit" class="btn pressstart ordersubmit">Complete
                                                Upgrade</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text"><small class="text-muted">Last updated 53 mins ago</small></p>
                    </div>
                </div>
                <div class="col-md-4 card-image">
                    <?php
						$sql = "SELECT * FROM product WHERE id = 2;";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

						if ($resultCheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo $row['image'];
							}
						}
					?>
                </div>
            </div>
        </div>

        <br>

        <!-- left -->
        <div class="card mb-3 blackcard whitefont" style="max-width: 70%;">
            <div class="row no-gutters">
                <div class="col-md-4 card-image">
                    <?php
						$sql = "SELECT * FROM product WHERE id = 3;";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

						if ($resultCheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo $row['image'];
							}
						}
					?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title pressstart">
                            <?php
								$sql = "SELECT * FROM product WHERE id = 3;";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);

								if ($resultCheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo $row['name'];
									}
								}
							?>
                        </h5>
                        <p class="card-text">
                            <?php
								$sql = "SELECT * FROM product WHERE id = 3;";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);

								if ($resultCheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo $row['desc'];
									}
								}
							?>
                        </p>
						<!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary pressstart" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop2">
                            UPGRADE!
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">
                                            <?php
												$sql = "SELECT * FROM product WHERE id = 3;";
												$result = mysqli_query($conn, $sql);
												$resultCheck = mysqli_num_rows($result);

												if ($resultCheck > 0) {
													while ($row = mysqli_fetch_assoc($result)) {
														echo $row['name'];
													}
												}
											?> Upgrade
                                            <br>
                                            $<?php
												$sql = "SELECT * FROM product WHERE id = 3;";
												$result = mysqli_query($conn, $sql);
												$resultCheck = mysqli_num_rows($result);

												if ($resultCheck > 0) {
													while ($row = mysqli_fetch_assoc($result)) {
														echo $row['price'];
													}
												}
											?>
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="ordered.php" class="form-container">

                                            <label for="address"><b class="pressstart">IP Address</b></label>
                                            <input type="text" placeholder="Enter IP Address" name="address" required>

                                            <label for="psw"><b class="pressstart">Card Number</b></label>
                                            <input class="pressstart" type="password" placeholder="Enter Card Number"
                                                name="psw" required>

                                            <label for="address"><b class="pressstart">CVV</b></label>
                                            <input class="pressstart" type="password" placeholder="Enter CVV" name="psw"
                                                required>
                                            <hr>
                                            <button type="submit" class="btn pressstart ordersubmit">Complete
                                                Upgrade</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text"><small class="text-muted">Last updated 10 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <!-- right -->
        <div class="card mb-3 blackcard whitefont" style="max-width: 70%;">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title pressstart">
                            <?php
								$sql = "SELECT * FROM product WHERE id = 4;";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);

								if ($resultCheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo $row['name'];
									}
								}
							?>
                        </h5>
                        <p class="card-text">
                            <?php
								$sql = "SELECT * FROM product WHERE id = 4;";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);

								if ($resultCheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo $row['desc'];
									}
								}
							?>
                        </p>
						<!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary pressstart" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop3">
                            UPGRADE!
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">
                                            <?php
												$sql = "SELECT * FROM product WHERE id = 4;";
												$result = mysqli_query($conn, $sql);
												$resultCheck = mysqli_num_rows($result);

												if ($resultCheck > 0) {
													while ($row = mysqli_fetch_assoc($result)) {
														echo $row['name'];
													}
												}
											?> Upgrade
                                            <br>
                                            $<?php
												$sql = "SELECT * FROM product WHERE id = 4;";
												$result = mysqli_query($conn, $sql);
												$resultCheck = mysqli_num_rows($result);

												if ($resultCheck > 0) {
													while ($row = mysqli_fetch_assoc($result)) {
														echo $row['price'];
													}
												}
											?>
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">



                                        <form method="post" action="ordered.php" class="form-container">

                                            <label for="address"><b class="pressstart">IP Address</b></label>
                                            <input type="text" placeholder="Enter IP Address" name="address" required>

                                            <label for="psw"><b class="pressstart">Card Number</b></label>
                                            <input class="pressstart" type="password" placeholder="Enter Card Number"
                                                name="psw" required>

                                            <label for="address"><b class="pressstart">CVV</b></label>
                                            <input class="pressstart" type="password" placeholder="Enter CVV" name="psw"
                                                required>
                                            <hr>
                                            <button type="submit" class="btn pressstart ordersubmit">Complete
                                                Upgrade</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text"><small class="text-muted">Last updated 53 mins ago</small></p>
                    </div>
                </div>
                <div class="col-md-4 card-image">
                    <?php
						$sql = "SELECT * FROM product WHERE id = 4;";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

						if ($resultCheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo $row['image'];
							}
						}
					?>
                </div>
            </div>
        </div>
        <br>

        <!-- left -->
        <div class="card mb-3 blackcard whitefont" style="max-width: 70%;">
            <div class="row no-gutters">
                <div class="col-md-4 card-image">
                    <?php
						$sql = "SELECT * FROM product WHERE id = 5;";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

						if ($resultCheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
							echo $row['image'];
							}
						}
					?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title pressstart">
                            <?php
								$sql = "SELECT * FROM product WHERE id = 5;";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);

								if ($resultCheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo $row['name'];
									}
								}
							?>
                        </h5>
                        <p class="card-text">
                            <?php
								$sql = "SELECT * FROM product WHERE id = 5;";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);

								if ($resultCheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo $row['desc'];
									}
								}
							?>
                        </p>
						<!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary pressstart" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop4">
                            UPGRADE!
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">
                                            <?php
												$sql = "SELECT * FROM product WHERE id = 5;";
												$result = mysqli_query($conn, $sql);
												$resultCheck = mysqli_num_rows($result);

												if ($resultCheck > 0) {
													while ($row = mysqli_fetch_assoc($result)) {
														echo $row['name'];
													}
												}
											?> Upgrade
                                            <br>
                                            $<?php
												$sql = "SELECT * FROM product WHERE id = 5;";
												$result = mysqli_query($conn, $sql);
												$resultCheck = mysqli_num_rows($result);

												if ($resultCheck > 0) {
													while ($row = mysqli_fetch_assoc($result)) {
														echo $row['price'];
													}
												}
											?>
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">



                                        <form method="post" action="ordered.php" class="form-container">

                                            <label for="address"><b class="pressstart">IP Address</b></label>
                                            <input type="text" placeholder="Enter IP Address" name="address" required>

                                            <label for="psw"><b class="pressstart">Card Number</b></label>
                                            <input class="pressstart" type="password" placeholder="Enter Card Number"
                                                name="psw" required>

                                            <label for="address"><b class="pressstart">CVV</b></label>
                                            <input class="pressstart" type="password" placeholder="Enter CVV" name="psw"
                                                required>
                                            <hr>
                                            <button type="submit" class="btn pressstart ordersubmit">Complete
                                                Upgrade</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text"><small class="text-muted">Last updated 10 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <!-- right -->
        <div class="card mb-3 blackcard whitefont" style="max-width: 70%;">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title pressstart">
                            <?php
								$sql = "SELECT * FROM product WHERE id = 6;";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);

								if ($resultCheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo $row['name'];
									}
								}
							?>
                        </h5>
                        <p class="card-text">
                            <?php
								$sql = "SELECT * FROM product WHERE id = 6;";
								$result = mysqli_query($conn, $sql);
								$resultCheck = mysqli_num_rows($result);

								if ($resultCheck > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo $row['desc'];
									}
								}
							?>
                        </p>
						<!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary pressstart" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop5">
                            UPGRADE!
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">
                                            <?php
												$sql = "SELECT * FROM product WHERE id = 6;";
												$result = mysqli_query($conn, $sql);
												$resultCheck = mysqli_num_rows($result);

												if ($resultCheck > 0) {
													while ($row = mysqli_fetch_assoc($result)) {
														echo $row['name'];
													}
												}
											?> Upgrade
                                            <br>
                                            $<?php
												$sql = "SELECT * FROM product WHERE id = 6;";
												$result = mysqli_query($conn, $sql);
												$resultCheck = mysqli_num_rows($result);

												if ($resultCheck > 0) {
													while ($row = mysqli_fetch_assoc($result)) {
														echo $row['price'];
													}
												}
											?>
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">



                                        <form method="post" action="ordered.php" class="form-container">

                                            <label for="address"><b class="pressstart">IP Address</b></label>
                                            <input type="text" placeholder="Enter IP Address" name="address" required>

                                            <label for="psw"><b class="pressstart">Card Number</b></label>
                                            <input class="pressstart" type="password" placeholder="Enter Card Number"
                                                name="psw" required>

                                            <label for="address"><b class="pressstart">CVV</b></label>
                                            <input class="pressstart" type="password" placeholder="Enter CVV" name="psw"
                                                required>
                                            <hr>
                                            <button type="submit" class="btn pressstart ordersubmit">Complete
                                                Upgrade</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-text"><small class="text-muted">Last updated 53 mins ago</small></p>
                    </div>
                </div>
                <div class="col-md-4 card-image">
                    <?php
						$sql = "SELECT * FROM product WHERE id = 6;";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

						if ($resultCheck > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo $row['image'];
							}
						}
					?>
                </div>
            </div>
        </div>
        <br>


        <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        function openLogin() {
            document.getElementById("myLogin").style.width = "350px";
        }

        function closeLogin() {
            document.getElementById("myLogin").style.width = "0";
        }

        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
        </script>


        <?php
        	include "footer.php";
    	?>