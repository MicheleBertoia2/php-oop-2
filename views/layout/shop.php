

<div class="container my-5">
  <h1 class="mb-3">Pet Shop</h1>

  <h3 class="mb-3">I nostri prodotti</h3>

  <div class="row">
    <?php foreach($products as $product) :?>
    <div class="col-3">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $product->getTitle() ?></h5>
          <p><?php echo $product->getCategory()?></p>
          <p class="card-text"><?php echo $product->getDescription()?></p>
          <p><?php echo $product->getPrice() . " €"?></p>
          <p><?php if(property_exists($product, 'ingredients'))  echo $product->getIngredients() ?></p>
          <p><?php if(property_exists($product, 'material'))  echo $product->getMaterial() ?></p>
          <p><?php if(property_exists($product, 'weight'))  echo $product->getWeight()  ?></p>
        </div>
      </div>
    </div>
    <?php endforeach ?>
    
  </div>
</div>