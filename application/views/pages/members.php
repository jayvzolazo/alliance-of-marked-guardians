<?php if(!empty($members)): ?>
<div class="">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Rank / PSUEDONYM</th>
                <th>Name</th>
                <th>Position</th>
                <th>Contact No</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1234</th>
                <td>SRMG PSUEDONYM</td>
                <td>FirstName LastName</td>
                <td>Chapter Founder</td>
                <td>12345678</td>
            </tr>
        </tbody>
    </table>
</div>
<?php else: ?>
<p class="box-body">
    <div class="alert alert-info alert-dismissable">
        <i class="fa fa-info"></i>
        No members created.&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('members/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-user"></i> Add Member</a>
    </div>
<p>
<?php endif; ?>