            <?php  
                // $url = "http://localhost:9000/api/v1/product/getAllProduct";
                $url = "https://ezcamp-api-list.herokuapp.com/api/v1/product/getAllProduct";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt( $ch, CURLOPT_USERPWD, ":yesthisismyrealapikeyanditworks");
                $response = curl_exec($ch);
                $data = json_decode($response, true);
   
                curl_close($ch);
                
            ?>
                <p class="text-center">WFH  RECORD</p>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Description </th>
                        <th>Create Date </th>
                        <th>Actions</th>

                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                     
                      
                    <?php foreach($data as $datamomo): ?>
                      <tr>
                        <td>
                            <?php echo ($datamomo['id']); ?>
                        </td>
                        <td><?php echo ($datamomo['title']); ?></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                           <li>
                            <p>
                            <?php echo ($datamomo['price']); ?>
                            </p>
                           </li>
                          </ul>
                        </td>
                   
                        <td>
                            <?php echo ($datamomo['description']); ?>
                        </td>
                        <td>
                            <?php echo ($datamomo['created_at']); ?>
                        </td>
                        
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>

                      <?php endforeach; ?>
                      
                     



                    </tbody>
                  </table>
                </div>
      