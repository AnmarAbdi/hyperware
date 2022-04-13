<?php
  include 'header.php';
  ?>

    <h1 class="large-h3">About Us</h1>
    <br>
    <br>

    <!--- Welcome Section -->
    <div class="container-md padding">
        <div class="row welcome text-center">
            <br>
            <div class="col-12">
                <p class="lead"> Hyperware is a software development company that provides cutting-edge engineering
                    solutions to clients looking to <em>ENHANCE</em> their digital experience.
                    HyperWare was founded because we were tired of having to go to BestBuy or Walmart and pay high
                    prices for the computer upgrades we needed. We incorporate tangible computer technology into <em>VISUALLY APPEALING
                    </em> software for <em>OPTIMIZED</em> convenience. When you buy a product from us, we discretely slip past your computers security features,
                    and install our very own enhanced PC upgrades ;).
                    After the installation process, your computer will be faster and smoother than ever. Say goodbye to
                    slow loading times.</p>
                    <br>
            </div>
        </div>
    </div>
    
    <!--- Three Column Section -->
    <!--- Meet the team -->
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="about-h1">Meet the Team</h1>
            </div>
            <br>
        </div>
    </div>

    <!--- Cards -->
    <div class="container-sm padding team-cards">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card border-dark rounded-0 border-3" style="max-width: 40rem;">
                    <img src="https://drive.google.com/uc?export=view&id=1lNpJCCM8EB_pW4NrrOLRtuyTZzmidrdj" class="card-img-top rounded-0">
                    <div class="card-body">
                        <p class="card-title"><b>John Choi</b></p>
                        <p class="card-text">Hello, I’m John. Coming from the heart of South Korea, I’ve been inspired to take my
                            interest in technology and hardware to this company. I’m excited to share this experience
                            with you!</p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-dark rounded-0 border-3" style="max-width: 40rem;">
                    <img src="https://drive.google.com/uc?export=view&id=1bk-xwEiy_EQPJzj3mdn2zljLoAQMjPvD" class="card-img-top rounded-0">
                    <div class="card-body">
                        <p class="card-title"><b>Anmar Abdi</b></p>
                        <p class="card-text">I’m Anmar! I tried to build a PC during the chip shortage and had trouble
                            finding parts. This caused me to research an alternative to upgrading your PC from home!</p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-dark rounded-0 border-3" style="max-width: 40rem;">
                    <img  src="https://drive.google.com/uc?export=view&id=1VSPK6pR3rs6FsgMFK3aqzRKzaFkxl7tt" class="card-img-top rounded-0" src="https://drive.google.com/uc?export=view&id=1u_f0aHIN_lh8YWZe7MicEHbXA7XTa42T">
                    <div class="card-body">
                        <p class="card-title"><b>Steven Pj</b></p>
                        <p class="card-text">Hi, i’m Steven Pjontek, I was born in the wilderness of the amazon
                            rainforest. I fought my way out and am now devoted to creating cheap and easy computer parts
                            for anyone to buy.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--- Footer -->
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="footer-text">
                        <h1>Our Socials</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="font-awesome">
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-yelp"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-text">
                        <a href="contact.html">
                            <h1>Contact</h1>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <p>EggplantEmoji🍆</p>
                </div>
            </div>
        </div>
    </footer>
    <!---End of Footer-->

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        function openCart() {
            document.getElementById("myCart").style.width = "250px";
        }

        function closeCart() {
            document.getElementById("myCart").style.width = "0";
        }

        function openLogin() {
            document.getElementById("myLogin").style.width = "250px";
        }

        function closeLogin() {
            document.getElementById("myLogin").style.width = "0";
        }

        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>