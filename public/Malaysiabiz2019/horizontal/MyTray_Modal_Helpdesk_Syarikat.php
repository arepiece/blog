<!-- modal helpdesk BlESS2.0-->
<?php
if ($agency_name == 0) {
    $agency_name = "BLESS1.0";
}
?>
<div class="modal fade bs-example-modal-lg" id="help-desk" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel"> <i class="btn btn-info btn-circle ti-headphone-alt"></i> Helpdesk  Business Entity <?php echo $agency_name; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body text-center">
                <p style="font-size: 14px;">Kindly contact <?php echo $agency_name; ?> Call Centre at <strong>1-300-88-1020</strong> or email us at <strong><?php echo $agency_name; ?>@icu.gov.my</strong> for any enquiries.</p>
            </div>
            <div class="modal-footer">                                
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->