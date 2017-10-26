<div class="row">
    <div id="sidebar" class="span3">
        <ul class="nav nav-list bs-docs-sidenav" style="display: block;">
            <li class="subMenu"><a> ELECTRONICS [230]</a>
                <ul>
                    <li><a class="active" href="products.html">Cameras (100)</a></li>
                    <li><a href="products.html">Computers, Tablets & laptop (30)</a></li>
                    <li><a href="products.html">Mobile Phone (80)</a></li>
                    <li><a href="products.html">Sound & Vision (15)</a></li>
                </ul>
            </li>
            <li class="subMenu"><a> CLOTHES [840] </a>
                <ul>
                    <li><a href="products.html">Women's Clothing (45)</a></li>
                    <li><a href="products.html">Women's Shoes (8)</a></li>
                    <li><a href="products.html">Women's Hand Bags (5)</a></li>
                    <li><a href="products.html">Men's Clothings  (45)</a></li>
                    <li><a href="products.html">Men's Shoes (6)</a></li>
                    <li><a href="products.html">Kids Clothing (5)</a></li>
                    <li><a href="products.html">Kids Shoes (3)</a></li>
                </ul>
            </li>
            <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
                <ul>
                    <li><a href="products.html">Angoves  (35)</a></li>
                    <li><a href="products.html">Bouchard Aine & Fils (8)</a></li>
                    <li><a href="products.html">French Rabbit (5)</a></li>
                    <li><a href="products.html">Louis Bernard  (45)</a></li>
                    <li><a href="products.html">BIB Wine (Bag in Box) (8)</a></li>
                    <li><a href="products.html">Other Liquors & Wine (5)</a></li>
                    <li><a href="products.html">Garden (3)</a></li>
                    <li><a href="products.html">Khao Shong (11)</a></li>
                </ul>
            </li>
            <li><a href="products.html">HEALTH & BEAUTY [18]</a></li>
            <li><a href="products.html">SPORTS & LEISURE [58]</a></li>
            <li><a href="products.html">BOOKS & ENTERTAINMENTS [14]</a></li>
            <li style="border:0"> &nbsp;</li>
            <li> <a href="product_summary.html"><strong>3 Items in your cart  <span class="badge badge-warning pull-right" style="line-height:18px;">$155.00</span></strong></a></li>
            <li style="border:0"> &nbsp;</li>
            <li>
                <div class="thumbnail">
                    <img src="assets/products/1.jpg" alt="">
                    <div class="caption">
                        <h5>Product name</h5>
                        <p>
                            Lorem Ipsum is simply dummy text.
                        </p>
                        <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                </div>
            </li>
            <li style="border:0"> &nbsp;</li>
            <li class="last">
                <div class="thumbnail">
                    <img src="assets/products/2.jpg" alt="">
                    <div class="caption">
                        <h5>Product name</h5>
                        <p>
                            Lorem Ipsum is simply dummy text.
                        </p>
                        <h4><a class="btn" href="product_details.html">VIEW</a> <span class="pull-right">$222.00</span></h4>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="span9">
       
        </ul>
        <h3> Registration Form</h3>
        <hr class="soft" />
        <div class="well">
            
              <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if ($error) {
                        ?>
                                          <div class="alert alert-danger alert-dismissable">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                          <?php echo $error; ?>
                                      </div>
                                  <?php }
                    $success = $this->session->flashdata('success');
                    if ($success) {
                        ?>
                                        <div class="alert alert-success alert-dismissable">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                          <?php echo $success; ?>
                                      </div>
                                        <?php }?>
            <form class="form-horizontal" action="<?php echo base_url(); ?>Client/registerUser" method="POST"  >
                <h3>Your personal information</h3>
                <div class="control-group">
                    
                    <div class="controls">
                       
                    </div>

                </div>
                 <div class="control-group">
                    <label class="control-label" for="inputLname">Username <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" id="inputLname" placeholder="Username" name="UserName" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputFname">First name <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" id="inputFname" placeholder="First Name" name="UFirstName" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputLname" >Last name <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" id="inputLname" placeholder="Last Name" name="ULastName" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Email <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" id="inputEmail" placeholder="Email" name="UEmail" required>
                    </div>
                </div>
               
                <div class="control-group">
                    <label class="control-label" for="dob">Date of Birth <sup>*</sup></label>
                    <div class="controls">
                        <select class="span1" name="days">
        <option value="">-</option>
            <option value="1">1&nbsp;&nbsp;</option>
            <option value="2">2&nbsp;&nbsp;</option>
            <option value="3">3&nbsp;&nbsp;</option>
            <option value="4">4&nbsp;&nbsp;</option>
            <option value="5">5&nbsp;&nbsp;</option>
            <option value="6">6&nbsp;&nbsp;</option>
            <option value="7">7&nbsp;&nbsp;</option>
    </select>
                        <select class="span1" name="months">
        <option value="">-</option>
            <option value="1">1&nbsp;&nbsp;</option>
            <option value="2">2&nbsp;&nbsp;</option>
            <option value="3">3&nbsp;&nbsp;</option>
            <option value="4">4&nbsp;&nbsp;</option>
            <option value="5">5&nbsp;&nbsp;</option>
            <option value="6">6&nbsp;&nbsp;</option>
            <option value="7">7&nbsp;&nbsp;</option>
    </select>
                        <select class="span1" name="years">
        <option value="">-</option>
            <option value="1">2020&nbsp;&nbsp;</option>
            <option value="2">2019&nbsp;&nbsp;</option>
            <option value="3">2018&nbsp;&nbsp;</option>
            <option value="4">2017&nbsp;&nbsp;</option>
            <option value="5">2016&nbsp;&nbsp;</option>
            <option value="6">2014&nbsp;&nbsp;</option>
            <option value="7">2013&nbsp;&nbsp;</option>
            <option value="8">2012&nbsp;&nbsp;</option>
            <option value="9">2011&nbsp;&nbsp;</option>
            <option value="10">2010&nbsp;&nbsp;</option>
            <option value="11">2009&nbsp;&nbsp;</option>
            <option value="12">2008&nbsp;&nbsp;</option>
            <option value="13">2007&nbsp;&nbsp;</option>
            <option value="14">2006&nbsp;&nbsp;</option>
            <option value="15">2005&nbsp;&nbsp;</option>
            <option value="16">2004&nbsp;&nbsp;</option>
            <option value="17">2003&nbsp;&nbsp;</option>
            <option value="18">2002&nbsp;&nbsp;</option>
            <option value="19">2001&nbsp;&nbsp;</option>
            <option value="20">2000&nbsp;&nbsp;</option>
            <option value="21">1999&nbsp;&nbsp;</option>
    </select>
                    </div>
                </div>




               

                <div class="control-group">
                    <label class="control-label" for="adress">Address<sup>*</sup></label>
                    <div class="controls">
                        <input type="text" id="address" placeholder="Adress" name="UAdress"/ required> 
                    </div>
                </div>

             
                <div class="control-group">
                    <label class="control-label" for="city">City<sup>*</sup></label>
                    <div class="controls">
                        <input type="text" id="city" placeholder="city" name="UCity"/ required>
                    </div>
                </div>
               
                <div class="control-group">
                    <label class="control-label" for="postcode">Zip / Postal Code</sup></label>
                    <div class="controls">
                        <input type="text" id="postcode" placeholder="Zip / Postal Code" name="UPostalcode"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="country">Country<sup>*</sup></label>
                    <div class="controls">

                        <select type="text" id="country" name="UCountry" required>

                       
        <option value="">Country</option>
        <option value="1">Sri Lanka</option>
    </select>
                    </div>
                </div>
              
                <div class="control-group">
                    <label class="control-label" for="mobile">Phone number</label>
                    <div class="controls">
                        <input type="text" id="mobile" placeholder="Mobile Phone" name="UPhoneNo" />
                    </div>
                </div>

                 <div class="control-group">
                    <label class="control-label" for="inputPassword">Password <sup>*</sup></label>
                    <div class="controls">
                        <input type="password" id="inputPassword" placeholder="Password" name="UPassword" required>
                    </div>
                </div>

                 <div class="control-group">
                    <label class="control-label" for="inputPassword">Confirm Password <sup>*</sup></label>
                    <div class="controls">
                        <input type="password" id="inputPassword" placeholder="Password" name="UConfirmPassword" required>
                    </div>
                </div>

                
                <div class="control-group">
                    <div class="controls">
                        <input type="hidden" name="email_create" value="1">
                        <input type="hidden" name="is_new_customer" value="1">
                        <input class="btn btn-large" type="submit" value="Register" />
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
