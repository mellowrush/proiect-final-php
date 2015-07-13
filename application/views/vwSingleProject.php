<?php $this->load->view('vwHeader');?>
<div class="embedded">
<p data-height="500" data-theme-id="0" data-slug-hash="<?php echo $currentProject[0]->projectUrl?>" data-default-tab="result" data-user="<?php echo $currentProject[0]->projectAuthor?>" class='codepen'></p>
</div><!--embedded-->


<div class="container ptb">
      <div class="row">
        <h2 class="centered mb"><?php echo $currentProject[0]->projectTitle?></h2>
        <div class="col-md-12">
          <h5><b>Description</b></h5>
          <p><?php echo $currentProject[0]->projectDescription?></p>
        </div><!--/col-md-4-->
      </div><!--/row-->
</div><!-- /.container -->


<script async src="//assets.codepen.io/assets/embed/ei.js"></script>
<?php $this->load->view('vwFooter');?>