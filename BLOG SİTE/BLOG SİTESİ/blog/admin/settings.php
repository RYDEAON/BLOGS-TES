<?php require_once 'header.php'; ?>
            <div class="dashboard-content">
            <div class="dashboard-form">
                <div class="row">

                    <!-- Profile -->
                    <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                        <div class="dashboard-list-box">
                            <h4 class="gray">PROFİL DETAYLARI</h4>
                            <div class="dashboard-list-box-static">
                                
                                <!-- Avatar -->
                                <div class="edit-profile-photo">
                                    <img src="images/user-avatar.jpg" alt="">
                                    <div class="change-photo-btn">
                                        <div class="photoUpload">
                                            <span><i class="fa fa-upload"></i> FOTOĞRAF YÜKLEYİN</span>
                                            <input type="file" class="upload" />
                                        </div>
                                    </div>
                                </div>
                                <div class="edit-profile-photo">
                                    <img src="images/user-avatar.jpg" alt="">
                                    <div class="change-photo-btn">
                                        <div class="photoUpload">
                                            <span><i class="fa fa-upload"></i> LOGO YÜKLEYİN</span>
                                            <input type="file" class="upload" />
                                        </div>
                                    </div>
                                </div>
            
                                <!-- Details -->
                                <div class="my-profile">

                                    <label>SİTE ADI *</label>
                                    <input type="text">

                                    <label>Site Açıklama *</label>
                                    <input  type="text">

                                    <label>Site Kelimeler*</label>
                                    <input  type="text">



                                    <label>Site Bakım</label>
                                    <select name="" id="">
                                        <option value="">Bakımda</option>
                                        <option value="">Bakımda Değil</option>
                                    </select>

                                </div>
            
                                <button class="button">DEĞİŞİKLİKLERİ KAYDET</button>

                            </div>
                        </div>
                    </div>

                

                </div>
            </div>
            </div>

<?php require_once 'footer.php'; ?>