<?php
session_start();

if(!$_SESSION["validar"]){

    header("location:index.php");

    exit();


}
include "navAdmin.php";
 ?>
<div class="col-sm-12 col-md-6"><h4>Editar Mis Datos</h4></div>
<div class="dashboard-list">
    <h3 class="heading">Datos Personales</h3>
    <div class="dashboard-message contact-2 bdr clearfix">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <!-- Edit profile photo -->
                <div class="edit-profile-photo">
                    <img src="http://placehold.it/198x165" alt="profile-photo" class="img-fluid">
                    <div class="change-photo-btn">
                        <div class="photoUpload">
                            <span><i class="fa fa-upload"></i></span>
                            <input type="file" class="upload">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <form action="#" method="GET" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group name">
                                <label>Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="John Deo">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group email">
                                <label>Your Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Your Title">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group subject">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group number">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group message">
                                <label>Personal info</label>
                                <textarea class="form-control" name="message" placeholder="Personal info"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="dashboard-list">
            <h3 class="heading">Change Password</h3>
            <div class="dashboard-message contact-2">
                <form action="#" method="GET" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group name">
                                <label>Current Password</label>
                                <input type="password" name="current-password" class="form-control" placeholder="Current Password">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group email">
                                <label>New Password</label>
                                <input type="password" name="new-password" class="form-control" placeholder="New Password">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group subject">
                                <label>Confirm New Password</label>
                                <input type="password" name="confirm-new-password" class="form-control" placeholder="Confirm New Password">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="send-btn">
                                <button type="submit" class="btn btn-md button-theme">Change Password</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="dashboard-list">
            <h3 class="heading">Socials</h3>
            <div class="dashboard-message contact-2">
                <form action="#" method="GET" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group name">
                                <label>Facebook</label>
                                <input type="text" name="facebook" class="form-control" placeholder="https://www.facebook.com">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group email">
                                <label>Twitter</label>
                                <input type="text" name="twitter" class="form-control" placeholder="https://twitter.com">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group subject">
                                <label>Vkontakte</label>
                                <input type="text" name="vkontakte" class="form-control" placeholder="vk.com">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group number">
                                <label>Whatsapp</label>
                                <input type="email" name="whatsapp" class="form-control" placeholder="https://www.whatsapp.com">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="send-btn">
                                <button type="submit" class="btn btn-md button-theme">Send Changes</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
 ?>