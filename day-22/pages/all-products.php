<?php include 'pages/includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach($products as $product) { ?>
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <img src="<?php echo $product['image'] ?>" alt="" class="card-img-top" style="height: 350px">
                        <div class="card-body">
                            <h3 class="card-tittle">Product Name</h3>
                            <p class="">Price : BDT 100</p>
                            <p class="text-justify">Product Description</p>
                            <a href="" class="btn btn-outline-warning float-right">View</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>






<?php include 'pages/includes/footer.php'; ?>









