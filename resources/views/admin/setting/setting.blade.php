@extends('private')

@section('title', '- Settings')

@section('content')

    <div id="content-wrapper">
        <header>
            <a href="#menu-toggle" class="toggle-nav"><i class="fa fa-bars"></i></a>
            <div class="title">
                <h1>Setting</h1>
            </div>
            <div class="control hidden-xs">
                <div class="account clearfix">
                    <div class="avatar-wrapper">
                        <img src="images/contributors/cici.png" class="img-circle img-rounded">
                        <div class="notify"></div>
                    </div>
                    <p class="avatar-greeting pull-left hidden-sm">Hi, <strong>Imelda Agustine</strong></p>
                </div>
                <a href="admin_login.html" class="sign-out"><i class="fa fa-sign-out"></i> SIGN OUT</a>
            </div>
        </header>
        <div class="breadcrumb-wrapper">
            <ol class="breadcrumb mtn">
                <li><a href="index.html">INFOGUE.ID</a></li>
                <li class="hidden-xs"><a href="admin_dashboard.html">Dashboard</a></li>
                <li class="active">Setting</li>
            </ol>
        </div>
        <div class="content">
            <div class="title-section">
                <h1 class="title">Website Setting</h1>
                <p class="subtitle">Basic web configuration and contact <a href="#" class="pull-right hidden-xs reset-setting">RESET DEFAULT</a></p>
            </div>
            <div class="content-section">
                <form class="form-horizontal form-strip" id="form-setting">
                    <fieldset>
                        <legend>BASIC INFORMATION</legend>
                        <div class="form-group">
                            <label for="website" class="col-sm-3 control-label">Website Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="website" name="website" placeholder="Put the website name" required maxlength="30">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keywords" class="col-sm-3 control-label">Keywords</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Keywords separated by coma" data-role="tagsinput" required maxlength="100">
                                <input type="text" class="form-control-dummy" id="keywords-dummy" name="keywords-dummy" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="online" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <div class="radio radio-inline">
                                    <input type="radio" name="format" id="online" class="css-radio" checked required>
                                    <label for="online" class="css-label">Online</label>
                                </div>
                                <div class="radio radio-inline">
                                    <input type="radio" name="format" id="maintenance" class="css-radio">
                                    <label for="maintenance" class="css-label">Maintenance</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="address" id="address" cols="30"
                                          rows="2" placeholder="Company address" required maxlength="100"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact" class="col-sm-3 control-label">Contact</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" id="contact" name="contact" placeholder="Office phone or Fax" required maxlength="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Company email address" required maxlength="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" id="description" cols="30"
                                          rows="3" placeholder="Describe about this website" required maxlength="200"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="owner" class="col-sm-3 control-label">Owner</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="owner" name="owner" placeholder="Company email address" maxlength="30">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="latitude" class="col-sm-3 control-label">Location</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control mbs" id="latitude" name="latitude" placeholder="Latitude coordinate">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude coordinate">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>SOCIAL ACCOUNT</legend>
                        <div class="form-group">
                            <label for="facebook" class="col-sm-3 control-label">Facebook</label>
                            <div class="col-sm-9">
                                <input type="url" class="form-control" id="facebook" name="facebook" placeholder="Full url of Facebook account" maxlength="100">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="twitter" class="col-sm-3 control-label">Twitter</label>
                            <div class="col-sm-9">
                                <input type="url" class="form-control" id="twitter" name="twitter" placeholder="Full url of Twitter account" maxlength="100">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="googleplus" class="col-sm-3 control-label">Google+</label>
                            <div class="col-sm-9">
                                <input type="url" class="form-control" id="googleplus" name="google" placeholder="Full url of Google+ account" maxlength="100">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>APPEARANCE</legend>
                        <div class="form-group">
                            <label for="favicon" class="col-sm-3 control-label">Favicon</label>
                            <div class="col-sm-9">
                                <div class="css-file">
                                    <span class="file-info">No file selected</span>
                                    <button class="btn btn-primary" type="button">SELECT<span class="hidden-xs"> FAVICON</span></button>
                                    <input type="file" class="file-input" id="favicon" name="favicon" accept="image/*"/>
                                </div>
                                <span class="help-block"><i class="fa fa-info-circle mrs mts"></i>Small icon on browser tab</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="background" class="col-sm-3 control-label">Background</label>
                            <div class="col-sm-9">
                                <div class="css-file">
                                    <span class="file-info">No file selected</span>
                                    <button class="btn btn-primary" type="button">SELECT<span class="hidden-xs"> BACKGROUND</span></button>
                                    <input type="file" class="file-input" id="background" name="background" accept="image/*"/>
                                </div>
                                <span class="help-block"><i class="fa fa-info-circle mrs mts"></i>Optional background (not necessary)</span>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>ALERT & EMAIL</legend>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Notification</label>
                            <div class="col-sm-9">
                                <div class="checkbox">
                                    <input type="checkbox" name="article" id="article" class="css-checkbox" checked>
                                    <label for="article" class="css-label">Email me when a contributor creates new article</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="feedback" id="feedback" class="css-checkbox" checked>
                                    <label for="feedback" class="css-label">Email me when I got a feedback</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="member" id="member" class="css-checkbox">
                                    <label for="member" class="css-label">Email me when we got new member</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="yes" class="col-sm-3 control-label">Auto Approve</label>
                            <div class="col-sm-9">
                                <div class="radio radio-inline">
                                    <input type="radio" name="approve" id="yes" class="css-radio" checked required>
                                    <label for="yes" class="css-label">Yes</label>
                                </div>
                                <div class="radio radio-inline">
                                    <input type="radio" name="approve" id="no" class="css-radio">
                                    <label for="no" class="css-label">No</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>ADMIN ACCOUNT</legend>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                                <p class="form-control-static">imelda.agustine</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <p class="form-control-static">imelda@gmail.com</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Put your name here" value="Imelda Agustine" required maxlength="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-sm-3 control-label">Avatar</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="contributor-profile">
                                            <img src="images/contributors/cici.png" class="img-circle img-responsive avatar" width="120" height="120"/>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <p class="mts mbn">Select and Crop Your Avatar</p>
                                        <p class="small text-muted mbs">Format like .png .jpg .gif</p>
                                        <div class="css-file">
                                            <span class="file-info">No file selected</span>
                                            <button class="btn btn-primary" type="button">SELECT<span class="hidden-xs"> AVATAR</span></button>
                                            <input type="file" class="file-input" id="avatar" name="avatar" accept="image/*"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Current password" required pattern=".{8,20}">
                                <span class="help-block"><i class="fa fa-info-circle mrs mts"></i>Password is required for save</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="new-password" class="col-sm-3 control-label">New Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="new-password" name="new-password" placeholder="Create new password" pattern=".{8,20}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirm-password" class="col-sm-3 control-label">Confirm</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Retype new password" pattern=".{8,20}">
                            </div>
                        </div>
                        <div class="form-group no-line">
                            <div class="col-sm-offset-3 col-sm-9 pts pbm">
                                <button class="btn btn-primary">SAVE CHANGES</button>
                                <a href="admin_dashboard.html" class="btn btn-danger">DISCARD</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

@endsection