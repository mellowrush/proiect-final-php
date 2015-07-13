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
            <h1>CMS <small>CMS Module</small></h1>
            <ol class="breadcrumb">
              <li><a href="CMS"><i class="icon-dashboard"></i> CMS</a></li>
              <li class="active"><i class="icon-file-alt"></i> CMS</li>        
            </ol>
          </div>
        </div><!-- /.row -->

        
            <div style="clear: both;"></div>
             <a href="<?php echo site_url('admin/cms/add_cms') ?>" class="btn btn-primary" style="float:right;">Add New Page</a>
            <div style="clear: both;" style="height:10px;"></div>

            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th class="header">Page <i class="fa fa-sort"></i></th>
                    <th class="header">Operation <i class="fa fa-sort"></i></th>
                    <th class="header">Page URL <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($cms as $key => $val){ ?>
                  <tr>
                    <td><?php echo $val['label']; ?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>admin/cms/edit_cms/<?php echo $val['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
                        <a href="<?php echo base_url(); ?>admin/cms/delete/<?php echo $val['id']; ?>" class="btn btn-danger btn-xs">Delete</a>
                    </td>
                    <td>
                      <a href="<?php echo site_url('page').'/'.$val['label']?>" target="_blank"><?php echo site_url('page').'/'.$val['label']?></a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
                   
        
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>