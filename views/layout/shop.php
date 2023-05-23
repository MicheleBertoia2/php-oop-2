

<div class="container my-5">
  <h1 class="mb-3">Pet Shop</h1>

  <h3 class="mb-3">I nostri prodotti</h3>

  <div class="row-cols-4">
    <?php foreach($products as $product) :?>
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $product->getTitle() ?></h5>
          <p><?php echo $product->getCategory()?></p>
          <p class="card-text"><?php echo $product->getDescription()?></p>
          <p><?php echo $product->getPrice()?></p>
        </div>
      </div>
    </div>
    <?php endforeach ?>
    
  </div>
</div>