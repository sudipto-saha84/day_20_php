<?php include 'includes/header.php'; ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="assests/img/<?php echo $product['image'];?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3><?php echo $product ['name'];?></h3>
                        <h4>Tk. <?php echo $product['price'];?></h4>
                        <hr/>
                        <a href="" class="btn btn-outline-success">Detail</a>
                    </div>
                </div>
            </div>
            
            <?php }?>
        </div>
    </div>

</section>
<?php include 'includes/footer.php'; ?>
