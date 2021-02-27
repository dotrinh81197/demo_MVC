<form class="container" method="POST">
  <div class="row">
    <div id="left_form_col" class="col-md-7">
      <div class="form-group">
        <label for="exampleFormControlInput1">Product's name</label>
        <input type="text" class="form-control" name="p_name" id="exampleFormControlInput1" placeholder="Name is required" required="" />
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Belong to category</label>
        <select class="form-control" name="p_category_id" id="exampleFormControlSelect1">
          <option value="8">Autumn Valentine</option>
          <option value="7">Handwatch</option>
          <option value="3">Notebook</option>
          <option value="1">Phone</option>
          <option value="2">Tablet</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Cost Price</label>
        <input type="number" class="form-control" name="p_cost_price" id="exampleFormControlInput1" placeholder="USD" />
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Sell Price</label>
        <input type="number" class="form-control" name="p_sell_price" id="exampleFormControlInput1" placeholder="USD" />
      </div>
    </div>

    <div class="col-md-5">
      <div id="choose-avatar" style="height: 344px">
        <button type="button" onclick="input_avatar.click()" class="btn btn-sm btn-light">
          Choose image
        </button>
        <input id="input_avatar" type="file" name="p_file" hidden="" />
        <input type="image" hidden="" id="avatar_preview" src="" />

        <input id="avatar_url" name="p_image_url" type="text" hidden="" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>

    <textarea class="form-control" placeholder="Some information..." name="p_description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg btn-block">
      Store Product
    </button>
  </div>
</form>

<script src="../assets/scripts/script.js"></script>

<script>
  const leftFormCol = document.querySelector("#left_form_col");
  const avatarControl = document.querySelector("#choose-avatar");
  const avatarPreview = document.querySelector("#avatar_preview");
  const avatarUrl = document.querySelector("#avatar_url");

  const input_avatar = document.querySelector("#input_avatar");

  input_avatar.addEventListener("change", function() {
    readURL(this, avatarPreview, avatarUrl);
  });

  function refreshAvatarControlSize() {
    const height = leftFormCol.offsetHeight;
    // console.log(height);

    avatarControl.style.height = height + "px";
  }

  window.onload = () => {
    refreshAvatarControlSize();
  };

  window.onresize = () => {
    refreshAvatarControlSize();
  };
</script>