<?php require_once 'header.php'; ?>
            <div class="dashboard-content">
                <div class="row">
                    <!-- Listings -->
                    <div class="col-lg-12 col-sm-12">
                        <div id="add-listing">

                            <!-- Section -->
                            <div class="add-listing-section">

                                <!-- Headline -->
                                <div class="add-listing-headline">
                                    <h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
                                </div>

                                <!-- Title -->
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <label>Listing Title <i class="tip" data-tip-content="Name of your business"></i></label>
                                        <input class="search-field" type="text" value=""/>
                                    </div>
                                </div>

                                <!-- Row -->
                                <div class="row with-forms">

                                    <!-- Status -->
                                    <div class="col-md-6">
                                        <label>Category</label>
                                        <select class="chosen-select-no-single" >
                                            <option label="blank">Select Category</option>  
                                            <option>Eat & Drink</option>
                                            <option>Shops</option>
                                            <option>Hotels</option>
                                            <option>Restaurants</option>
                                            <option>Fitness</option>
                                            <option>Events</option>
                                        </select>
                                    </div>

                                    <!-- Type -->
                                    <div class="col-md-6">
                                        <label>Keywords <i class="tip" data-tip-content="Maximum of 15 keywords related with your business"></i></label>
                                        <input type="text" placeholder="Keywords should be separated by commas">
                                    </div>

                                </div>
                                <!-- Row / End -->
                            </div>
                            <!-- Section / End -->

                            <!-- Section -->
                            <div class="add-listing-section">

                                <!-- Headline -->
                                <div class="add-listing-headline">
                                    <h3><i class="sl sl-icon-map"></i> Location</h3>
                                </div>

                                <div class="submit-section">

                                    <!-- Row -->
                                    <div class="row with-forms">

                                        <!-- City -->
                                        <div class="col-md-6">
                                            <label>City</label>
                                            <select class="chosen-select-no-single" >
                                                <option label="blank">Select City</option>  
                                                <option>New York</option>
                                                <option>Los Angeles</option>
                                                <option>Chicago</option>
                                                <option>Houston</option>
                                                <option>Phoenix</option>
                                                <option>San Diego</option>
                                                <option>Austin</option>
                                            </select>
                                        </div>

                                        <!-- Address -->
                                        <div class="col-md-6">
                                            <label>Address</label>
                                            <input type="text" placeholder="e.g. 964 School Street">
                                        </div>

                                        <!-- City -->
                                        <div class="col-md-6">
                                            <label>State</label>
                                            <input type="text">
                                        </div>

                                        <!-- Zip-Code -->
                                        <div class="col-md-6">
                                            <label>Zip-Code</label>
                                            <input type="text">
                                        </div>

                                    </div>
                                    <!-- Row / End -->

                                </div>
                            </div>
                            <!-- Section / End -->

                            <!-- Section -->
                            <div class="add-listing-section">

                                <!-- Headline -->
                                <div class="add-listing-headline">
                                    <h3><i class="sl sl-icon-picture"></i> Gallery</h3>
                                </div>

                                <!-- Dropzone -->
                                <div class="submit-section">
                                    <form action="https://cyclonethemes.com/file-upload" class="dropzone" ></form>
                                </div>
                            </div>
                            <!-- Section / End -->

                            <!-- Section -->
                            <div class="add-listing-section">

                                <!-- Headline -->
                                <div class="add-listing-headline">
                                    <h3><i class="sl sl-icon-docs"></i> Details</h3>
                                </div>

                                <!-- Description -->
                                <div class="form">
                                    <label>Description</label>
                                    <textarea class="WYSIWYG" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
                                </div>

                                <!-- Row -->
                                <div class="row with-forms">

                                    <!-- Phone -->
                                    <div class="col-md-4">
                                        <label>Phone <span>(optional)</span></label>
                                        <input type="text">
                                    </div>

                                    <!-- Website -->
                                    <div class="col-md-4">
                                        <label>Website <span>(optional)</span></label>
                                        <input type="text">
                                    </div>

                                    <!-- Email Address -->
                                    <div class="col-md-4">
                                        <label>E-mail <span>(optional)</span></label>
                                        <input type="text">
                                    </div>

                                </div>
                                <!-- Row / End -->


                                <!-- Row -->
                                <div class="row with-forms">

                                    <!-- Phone -->
                                    <div class="col-md-4">
                                        <label class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(optional)</span></label>
                                        <input type="text" placeholder="https://www.facebook.com/">
                                    </div>

                                    <!-- Website -->
                                    <div class="col-md-4">
                                        <label class="twitter-input"><i class="fa fa-twitter"></i> Twitter <span>(optional)</span></label>
                                        <input type="text" placeholder="https://www.twitter.com/">
                                    </div>

                                    <!-- Email Address -->
                                    <div class="col-md-4">
                                        <label class="gplus-input"><i class="fa fa-google-plus"></i> Google Plus <span>(optional)</span></label>
                                        <input type="text" placeholder="https://plus.google.com/">
                                    </div>

                                </div>
                                <!-- Row / End -->


                                <!-- Checkboxes -->
                                <label class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></label>
                                <div class="checkboxes in-row margin-bottom-20">

                                    <input id="check-a" type="checkbox" name="check">
                                    <label for="check-a">Elevator in building</label>

                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Friendly workspace</label>

                                    <input id="check-c" type="checkbox" name="check">
                                    <label for="check-c">Instant Book</label>

                                    <input id="check-d" type="checkbox" name="check">
                                    <label for="check-d">Wireless Internet</label>

                                    <input id="check-e" type="checkbox" name="check" >
                                    <label for="check-e">Free parking on premises</label>

                                    <input id="check-f" type="checkbox" name="check" >
                                    <label for="check-f">Free parking on street</label>

                                    <input id="check-g" type="checkbox" name="check">
                                    <label for="check-g">Smoking allowed</label>    

                                    <input id="check-h" type="checkbox" name="check">
                                    <label for="check-h">Events</label>

                                </div>
                                <!-- Checkboxes / End -->
                            </div>
                            <!-- Section / End -->

                            <!-- Section -->
                            <div class="add-listing-section">

                                <!-- Headline -->
                                <div class="add-listing-headline">
                                    <h3><i class="sl sl-icon-book-open"></i> Pricing</h3>
                                    <!-- Switcher -->
                                    <label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                                </div>

                                <!-- Switcher ON-OFF Content -->
                                <div class="switcher-content">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="pricing-list-container">
                                                <tr class="pricing-list-item pattern">
                                                    <td>
                                                        <div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
                                                        <div class="fm-input pricing-name"><input type="text" placeholder="Title" /></div>
                                                        <div class="fm-input pricing-ingredients"><input type="text" placeholder="Description" /></div>
                                                        <div class="fm-input pricing-price"><input type="text" placeholder="Price" data-unit="USD" /></div>
                                                        <div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <a href="#" class="button add-pricing-list-item">Add Item</a>
                                            <a href="#" class="button add-pricing-submenu">Add Category</a>
                                        </div>
                                    </div>

                                </div>
                                <!-- Switcher ON-OFF Content / End -->
                            </div>
                            <!-- Section / End -->


                            <a href="#" class="button preview">Preview <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>      
            </div>

            <!-- Content / End -->
 <?php require_once 'footer.php'; ?>