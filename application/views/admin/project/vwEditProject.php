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
            echo form_open_multipart(site_url('admin/project/edit').'/'.$this->uri->segment(4), $attributes); ?>

            <div class="control-group row">
              <label for="title" class="col-lg-1 control-label">Title <span class="required">*</span></label>
              <div class="col-lg-11">
                   <input id="title" type="text" class="form-control" name="title" maxlength="100" value="<?php echo $currentProject[0]->projectTitle ?>"  />
                 <?php echo form_error('title'); ?>
              </div>
            </div>


            <div class="control-group row">
              <label for="title" class="col-lg-1 control-label">Author <span class="required">*</span></label>
              <div class="col-lg-11">
                   <input id="author" type="text" class="form-control" name="author" maxlength="100" value="<?php echo $currentProject[0]->projectAuthor ?>"  />
                 <?php echo form_error('author'); ?>
              </div>
            </div>
            

            <div class="control-group row">
                <label for="url" class="col-lg-1 control-label">URL<span class="required">*</span></label>
                <div class="col-lg-11">
                   <input id="url" type="text" name="url" class="form-control" maxlength="255" value="<?php echo $currentProject[0]->projectUrl ?>"  />
                   <?php echo form_error('url'); ?>
                </div>
            </div>

            <div class="control-group row">
                <label for="description" class="col-lg-1 control-label">Description* </label>
                <div class="col-lg-11">
                  <?php echo form_textarea( array( 'name' => 'description', 'rows' => '5', 'cols' => '80', 'value' => $currentProject[0]->projectDescription ) )?>
                  <?php echo form_error('description'); ?>
                </div>
            </div>

            <div class="control-group row">
                <label for="thumbnail" class="col-lg-1 control-label">Thumbnail</label>
                <div class="col-lg-11">
                      <input id="thumbnail" type="file" class="form-control" name="thumbnail" />
                  <?php echo form_error('thumbnail'); ?>
                </div>
                <div class="clear" style="clear:both;height:20px"></div>
                <?php if($currentProject[0]->projectThumbnail) { ?>
                <div class="col-lg-offset-1 col-xs-6 col-lg-3">
                  <div class="thumbnail">
                    <img src="<?php echo site_url('/').'uploads/'.$currentProject[0]->projectThumbnail ?>">
                  </div>
                </div>
                <?php } ?>
            </div>

            <div class="control-group row">
              <div class="col-lg-12">
                    <?php echo form_submit( 'submit', 'Save', 'class="btn btn-primary"'); ?>
              </div>
            </div>
            <?php echo form_close(); ?>
        <div class="clear" style="height:10px"></div>
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>