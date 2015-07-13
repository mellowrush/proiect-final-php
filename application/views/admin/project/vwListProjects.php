<?php
$this->load->view('admin/vwHeader');
?>
<!--  
Author : Abhishek R. Kaushik 
Downloaded from http://devzone.co.in
-->

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Projects <small>Manage Projects</small></h1>
            <?php if($this->session->flashdata('flash_message')){ ?>
              <h3><?php echo $this->session->flashdata('flash_message')?></h3>
            <?php } ?>
            <ol class="breadcrumb">
              <li><a href="<?php echo site_url('admin')?>"><i class="icon-dashboard"></i> Main</a></li>
              <li class="active"><i class="icon-file-alt"></i> Projects</li>
            </ol>
            <div style="clear: both;"></div>
             <a href="<?php echo site_url('admin/project/create') ?>" class="btn btn-primary" style="float:right;">Add New Project</a>
            <div style="clear: both;" style="height:10px;"></div>
            
          </div>
        </div><!-- /.row -->

        
            
            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th class="header">ID <i class="fa fa-sort"></i></th>
                    <th class="header">Title <i class="fa fa-sort"></i></th>
                    <th class="header">Project url<i class="fa fa-sort"></i></th>
                    <th class="header" width="250">Description<i class="fa fa-sort"></i></th>
                    <th class="header">Date added<i class="fa fa-sort"></i></th>
                     <th class="header">Actions<i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($projects as $project): ?>
                    <tr>
                      <td><?php echo $project->id;?></td>
                      <td><?php echo $project->projectTitle;?></td>
                      <td><?php echo $project->projectUrl;?></td>
                      <td><?php echo $project->projectDescription;?></td>
                      <td><?php echo $project->dateUpdated;?></td>
                      <td>
                        <a href="<?php echo site_url('admin/project/edit').'/'.$project->id?>" class="label label-success">Edit</a>
                        <a href="<?php echo site_url('admin/project/delete').'/'.$project->id?>" class="label label-danger">Delete</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
        
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>