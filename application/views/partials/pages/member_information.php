<div class="box box-warning">
    <div class="box-header">
        <h3 class="box-title">Member Information</h3>
    </div>
    <span class="label label-info"><i class="fa fa-asterisk"></i> - required</span>
    
    <div class="box-body clearfix">
        <div class="col-md-6">
            <div class="form-group">
                <label>Chapter *</label>
                <input type="text" class="form-control" placeholder="Chapter name" tabindex="1" autofocus />
            </div>
            
            <div class="row">
            	<div class="col-md-6">
                    <div class="form-group">
                        <label>Rank / Pseudonym *</label>
                        <input type="text" class="form-control" placeholder="Rank / Pseudonym" tabindex="2" />
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Position *</label>
                        <input type="text" class="form-control" placeholder="Position"  tabindex="3" />
                    </div>
                </div>
            </div> <!-- rank / pseudonym -->
            
            <div class="row">
            	<div class="col-md-4">
                    <div class="form-group">
                        <label>First Name *</label>
                        <input type="text" class="form-control" placeholder="First name"  tabindex="4" />
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Middle Name *</label>
                        <input type="text" class="form-control" placeholder="Middle name"  tabindex="5" />
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Last Name *</label>
                        <input type="text" class="form-control" placeholder="Last name"  tabindex="6" />
                    </div>
                </div>
            </div> <!-- name -->
            
            <div class="form-group">
                <label>Address *</label>
                <input type="text" class="form-control" placeholder="Address" tabindex="7" />
            </div><!-- address -->
            
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" class="form-control" placeholder="Contact number" tabindex="8" />
            </div><!-- contact number -->
            
            <div class="row">
            	<div class="col-md-6">
                	<div class="form-group">
                        <label>TIN</label>
                        <input type="text" class="form-control" placeholder="Contact number" tabindex="9" />
                    </div>
                </div><!-- tin -->
                
                <div class="col-md-6">
                	<div class="form-group">
                        <label>GSIS / SSS</label>
                        <input type="text" class="form-control" placeholder="GSIS / SSS" tabindex="10" />
                    </div>
                </div><!-- gsis / sss -->
            </div>
            
            <div class="row">
            	<div class="col-md-6">
                     <div class="form-group">
                        <label>Blood Type</label>
                        <input type="text" class="form-control" placeholder="Blood Type" tabindex="11" />
                    </div><!-- blood type -->
                </div>
                
                <div class="col-md-6">
                     <div class="form-group">
                        <label>Date of Birth *</label>
                        <input type="text" class="form-control" id="birthdate" data-inputmask="'alias': 'yyyy-mm-dd'" tabindex="12" />
                    </div><!-- birthdate -->
                </div>
            </div>
            
            <div class="row">
            	<div class="col-md-6">
                     <div class="form-group">
                        <label>Nationality *</label>
                        <input type="text" class="form-control" placeholder="Nationality" tabindex="13" />
                    </div><!-- nationality -->
                </div>
                
                <div class="col-md-6">
                     <div class="form-group">
                        <label>Place of birth</label>
                        <input type="text" class="form-control" placeholder="Place of birth" tabindex="14" />
                    </div><!-- place of birth -->
                </div>
            </div>
            
            <div class="row">
            	<div class="col-md-6">
                     <div class="form-group">
                        <label>Height</label>
                        <input type="text" class="form-control" placeholder="Height" tabindex="15" />
                    </div><!-- height -->
                </div>
                
                <div class="col-md-6">
                     <div class="form-group">
                        <label>Weight</label>
                        <input type="text" class="form-control" placeholder="Weight" tabindex="16" />
                    </div><!--weight -->
                </div>
            </div>
            
            <div class="row">
            	<div class="col-md-6">
                    <div class="form-group">
                        <label>Gender *</label>
                        <select class="form-control" tabindex="17">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div><!-- gender -->
                </div>
            </div>
            
            <div class="row">
            	<div class="col-md-6">
                    <div class="form-group">
                        <label>Occupation</label>
                        <input type="text" class="form-control" placeholder="Occupation" tabindex="18" />
                    </div>
                </div><!-- marital status -->
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name of Company / Address</label>
                        <input type="text" class="form-control" placeholder="Name of Company / Address" tabindex="19" />
                    </div><!-- spouse name -->
                </div>
            </div>
            
            <div class="row">
            	<div class="col-md-6">
                    <div class="form-group">
                        <label>Marital Status *</label>
                        <select class="form-control" tabindex="20">
                            <option value=""></option>
                            <option value="Male">Single</option>
                            <option value="Married">Married</option>
                            <option value="Separated">Separated</option>
                            <option value="Widow">Widow</option>
                        </select>
                    </div>
                </div><!-- marital status -->
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Spouse Name</label>
                        <input type="text" class="form-control" placeholder="Spouse Name" tabindex="21" />
                    </div><!-- spouse name -->
                </div>
            </div>
            
        </div> <!-- .col-md-6 -->
        
        <div class="col-md-6">
        	<div class="form-group">
                <label for="profile-picture">Profile Picture *</label>
                <div class="fileupload-container">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                            <img src="<?php echo base_url('assets/img/profile-image-placeholder.gif'); ?>" alt="..." />
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                        <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="profilepic" id="profilepic" /></span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div> <!-- fileinput-new thumbnail -->
                    </div> <!-- .fileinput -->
                </div> <!-- .fileupload-container -->
                <p class="help-block">Accepts jpg / jpeg / gif / png format and minimum size of 2kb maximum size of 1mb</p>
            </div>
        </div>
    </div><!-- .box-body -->
</div>
