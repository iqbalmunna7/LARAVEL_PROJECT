<?php include 'pages/includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <img src="assets/img/xxx.jpg" <?php  echo $ProductDetails['image'];  ?> alt="" class="img-fluid" style="min-height: 400px">
                </div>

            </div>
            <div class="col-md-6">
                <div class="card card-body" style="min-height: 400px">
                    <h2 <?php  echo $ProductDetails['name'];  ?>class="font-weight-bold">Product name </h2>
                    <p>Price: BDT <?php  echo $ProductDetails['price'];  ?></p>
                    <p>Description</p>
                    <a href="" class="btn btn-outline-success">Order Now</a>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php'; ?>
