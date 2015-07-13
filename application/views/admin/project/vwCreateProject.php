<?php
$this->load->view('admin/vwHeader');
?>


      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Projects <small>Create project</small></h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo site_url('admin')?>"><i class="icon-dashboard"></i> Main</a></li>
              <li class="active"><a href="<?php echo site_url('admin/projects')?>"><i class="icon-file-alt"></i> Projects</a></li>
              <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->

        
            
            <?php     
            $attributes = array('class' => 'form-horizontal', 'id' => '');
            echo form_open_multipart(site_url('admin/project/create'), $attributes); ?>

            <div class="control-group row">
              <label for="title" class="col-lg-1 control-label">Title <span class="required">*</span></label>
              <div class="col-lg-11">
                   <input id="title" type="text" class="form-control" name="title" maxlength="255" value="<?php echo set_value('title'); ?>"  />
                 <?php echo form_error('title'); ?>
              </div>
            </div>

            <div class="control-group row">
              <label for="title" class="col-lg-1 control-label">Author <span class="required">*</span></label>
              <div class="col-lg-11">
                   <input id="author" type="text" class="form-control" name="author" maxlength="100" value="<?php echo set_value('author') ?>"  />
                 <?php echo form_error('author'); ?>
              </div>
            </div>

            <div class="clear"></div>

            <div class="control-group row">
                <label for="url" class="col-lg-1 control-label">URL<span class="required">*</span></label>
                <div class="col-lg-11">
                   <input id="url" type="text" name="url" class="form-control" maxlength="255" value="<?php echo set_value('url'); ?>"  />
                   <?php echo form_error('url'); ?>
                </div>
            </div>

            <div class="control-group row">
                <label for="description" class="col-lg-1 control-label">Description* </label>
                <div class="col-lg-11">
                  <?php echo form_textarea( array( 'name' => 'description', 'rows' => '5', 'cols' => '80', 'value' => set_value('description') ) )?>
                  <?php echo form_error('description'); ?>
                </div>
            </div>

            <div class="control-group row">
                <label for="thumbnail" class="col-lg-1 control-label">Thumbnail</label>
                <div class="col-lg-11">
                      <input id="thumbnail" type="file" class="form-control" name="thumbnail" />
                  <?php echo form_error('thumbnail'); ?>
                </div>
            </div>

            <div class="control-group row">
              <div class="col-lg-11">
                    <?php echo form_submit( 'submit', 'Save', 'class="btn btn-primary"'); ?>
              </div>
            </div>
            <?php echo form_close(); ?>
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>