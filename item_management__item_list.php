<?php
                // $url = "http://localhost:9000/api/v1/product/getAllProduct";
                $url = "https://ezcamp-api-list.herokuapp.com/api/v1/product/getAllProduct";
                // $data_array = array(
                //     'token' =>     $_SESSION["key"] 
                // );
                // $data=http_build_query($data_array);
                
                $ch = curl_init();
                
                curl_setopt($ch, CURLOPT_URL, $url);
                // curl_setopt($ch, CURLOPT_POST, true);
                // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                // curl_setopt($ch, CURLOPT_TIMEOUT , 10);
                
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
                      </tr>

                      <?php endforeach; ?>
                      
                     



                    </tbody>
                  </table>
                </div>
      