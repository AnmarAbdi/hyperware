<?php
  include 'header.php';
  ?>
<head>
  <link rel="stylesheet" href="review.css">
</head>
<br>
<br>
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4 about-h1">Customer Feedback:</h1>
        </div>
        <br>
    </div>
</div>
<div class="reviews">
    <script>
    const reviews_page_id = 1;
    fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
        document.querySelector(".reviews").innerHTML = data;
        document.querySelector(".reviews .write_review_btn").onclick = event => {
            event.preventDefault();
            document.querySelector(".reviews .write_review").style.display = 'block';
            document.querySelector(".reviews .write_review input[name='name']").focus();
        };
        document.querySelector(".reviews .write_review form").onsubmit = event => {
            event.preventDefault();
            fetch("reviews.php?page_id=" + reviews_page_id, {
                method: 'POST',
                body: new FormData(document.querySelector(".reviews .write_review form"))
            }).then(response => response.text()).then(data => {
                document.querySelector(".reviews .write_review").innerHTML = data;
            });
        };
    });
    </script>
</div>



<?php
        include "footer.php"
    ?>


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