<?php
$this->load->view('admin/vwHeader');
?>
<!--  
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->
 
<script src="<?php echo HTTP_ASSETS_PATH_ADMIN; ?>tinymce/tinymce.min.js"></script>
<script>

    tinymce.init({selector: 'textarea',
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste jbimages"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
        relative_urls: false,
         

    height: "500",
    width:900
    });
</script>

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1>CMS <small>Add Page</small></h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>admin/cms/"><i class="icon-dashboard"></i> CMS</a></li>
                <li class="active"><i class="icon-file-alt"></i> Add Page</li>        
            </ol>
        </div>
    </div><!-- /.row -->


    <div class="fld">
        <?php     
            $attributes = array('class' => 'form-horizontal', 'id' => '');
            echo form_open(site_url('admin/cms/add_cms'), $attributes); ?>

            <div class="control-group row">
              <label for="title" class="col-lg-1 control-label">Page label <span class="required">*</span></label>
              <div class="col-lg-11">
                   <input id="label" type="text" class="form-control" name="label" maxlength="255" value="<?php echo set_value('label'); ?>"  />
                 <?php echo form_error('label'); ?>
              </div>
            </div>

            <div class="control-group row">
                <label for="description" class="col-lg-1 control-label">Description* </label>
                <div class="col-lg-11">
                  <?php echo form_textarea( array( 'name' => 'content', 'rows' => '5', 'cols' => '80', 'value' => set_value('content') ) )?>
                  <?php echo form_error('content'); ?>
                </div>
            </div>

            <div class="control-group row">
              <div class="col-lg-11">
                    <?php echo form_submit( 'submit', 'Save', 'class="btn btn-primary"'); ?>
              </div>
            </div>
        <?php echo form_close(); ?>    

    </div>      

</div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>