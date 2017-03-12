<?php
//The header grabs your basic head of your HTML Page.
require 'partials/header.php';
?>

<div>

  <h1>Contact</h1>

  <form>
    <div class="form-group">
      <label for="contact">Contact</label>
      <select class="form-control" id="country">
      <?php foreach ($contactOptions as $key => $reason): ?>
        <option value="<?=$reason['value'];?>"><?=$reason['name'];?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </form>

</div>

<?php
//Footer grabs the closing of HTML page.
require 'partials/footer.php';
?>
