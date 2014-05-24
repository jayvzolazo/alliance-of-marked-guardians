<div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Children Information</h3>
    </div>
    
    <div class="box-body clearfix">
    	<div class="col-md-6">
            <div class="row" id="children-container">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="childname[]" placeholder="Name" tabindex="22" />
                    </div>
                </div> <!-- child name -->
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" class="form-control" name="childage[]" placeholder="Age" tabindex="23" />
                    </div>
                </div> <!-- child age -->
            </div> <!-- #children-container -->
            
            <div class="clearfix" id="dynamic-form-container">
            </div>
            
            <div class="clearfix">
            	<button type="button" id="btn-add-child" class="btn btn-sm btn-social btn-success">
                    <i class="fa fa-user"></i> Add child
                </button>
            </div>
        </div> <!-- .col-md-6 -->
    </div> <!-- .box-body -->
</div> <!-- .box -->