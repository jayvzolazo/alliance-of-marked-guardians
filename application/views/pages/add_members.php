<div class="box">
	<?php echo form_open('', array('role' => 'form')); ?>
    <div class="box-body">
        <?php $this->load->view('partials/pages/member_information'); ?>
        
        <?php $this->load->view('partials/pages/member_children_information'); ?>
        
        <?php $this->load->view('partials/pages/member_educational_info'); ?>
        
        <?php $this->load->view('partials/pages/member_emergency_info'); ?>
        
        <?php $this->load->view('partials/pages/member_other_info'); ?>
    </div>
    
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <?php echo form_close(); ?>
</div>

<script type="text/javascript">
$(function(){
	$("#birthdate").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
});
</script>