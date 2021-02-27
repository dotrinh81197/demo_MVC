
<table class="table">
  <thead class="thead">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Product</th>
      <th scope="col" class="text-right pr-5">Cost Price (USD)</th>
      <th scope="col" class="text-right pr-5">Sell Price (USD)</th>
      <th scope="col">Category</th>
      <th scope="col" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>

    <?php
  
     function makeProductRow($product)
    {
      $num = 0;
      return
        '<tr class="">
    <th class="align-middle" scope="row">'.++$num. '</th>
    <td class="align-middle">' .  $product->name . '</td>
    <td class="align-middle text-right pr-5">' . $product->cost_price . '</td>
    <td class="align-middle text-right pr-5">' . $product->sell_price . '</td>
    <td class="align-middle">' . $product->category_id . '</td>
    <td class="align-middle text-center">
      <a type="submit" class="btn btn-link" href="?controller=products&amp;action=edit&amp;id=1">Change</a>
      <form class="d-inline" onsubmit="return confirm("Do you want to remove ' . $product->name . '.")" action="?controller=products&amp;action=delete&amp;id=' . $product->id . '" method="POST">
        <button type="submit" class="btn btn-link">Remove</button>
      </form>
    </td>
  </tr>';
    }
    foreach ($products as $product) {
    
      makeProductRow($product);
    }

  
    ?>
  </tbody>
</table>

<!-- FAB CREATE PRODUCT LINK -->
<a class="fab-button-mid-bot btn btn-primary btn-lg" type="button" href="?controller=products&action=create">+ Add new Product</a>
<!-- END FAB CREATE PRODUCT LINK -->