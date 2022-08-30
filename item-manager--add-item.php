
        
        
                <p class="text-center">ADD ITEM</p>
            
            <!-- / Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
<div class="col-xl">
                  <!-- HTML5 Inputs -->
                  <!-- title, price,thumbnail,description,created_at,updated_at,category_id,brand,discount -->
                  <div class="mx-5 ">
                  <div class="mx-5 ">
                  <div class="mx-5 ">
                  <div class="mx-5 ">
                  <div class="card mb-4 mx-5">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Basic Layout</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <!-- -------------------- -->
                      <form id="formOtRequest" class="mb-3" action="item-manager--add-item-PROCESSING.php" method="POST">
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Name of product</label>
                            <input class="form-control" type="text" name = "title" id = "title" id="html5-date-input" />
                        </div>
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Price</label>
                            <input class="form-control" type="number" name = "price" id = "price" id="html5-date-input" />
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Thumbnail - img CDN</label>
                          <textarea
                            id="thumbnail"
                            class="form-control"
                            placeholder="Add CDN image here..."
                            name ="thumbnail"
                          ></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Mo ta san pham - description</label>
                            <input class="form-control" type="text" name = "description" id = "description" id="html5-date-input" />
                        </div>

                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">The loai -Category Id</label>
                            <input class="form-control" type="number" name = "category_id" id = "category_id" id="html5-date-input" />
                        </div>

                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Brand</label>
                            <input class="form-control" type="text" name = "brand" id = "brand" id="html5-date-input" />
                        </div>

                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Discount</label>
                            <input class="form-control" type="text" name = "discount" id = "discount" id="html5-date-input" />
                        </div>


                        <button type="submit" class="btn btn-primary">Send</button>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
                </div>
                </div>
                </div>
</div>