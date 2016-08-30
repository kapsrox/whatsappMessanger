<?php
require 'core/init.php';
$general->logged_out_protect();

$q = intval($_GET['q']);
$subcat = $users->subcat_all($q);
$k = 'display:none;'
?>
<div class="form-group">
                                                    <label class="control-label col-md-3">Sub Categories
                                                   
                                                    </label>
                                                    <div class="col-md-4">
                                                        
                                                        <select class="form-control" name="subcat">
                                                            
                                                            <?php
                                                            foreach($subcat as $result)
                                                            {
                                                            ?>
                                                            
                                                            <option value="<?php echo $result['subc_id'];?>" >
                                                            <?php echo ucfirst($result['subc_name']); ?>
                                                            </option>
                                                            <?php
                                                            }
                                                            ?>
                                                            <!--<option value="Category 1">Free</option>
                                                            <option value="Category 2">Silver</option>
                                                            <option value="Category 3">Gold</option>
                                                            <option value="Category 4">Platinum</option>-->
                                                        </select>
                                                    </div>
                                                </div>