<?php $this->load->view('vwHeader'); ?>

<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">
 

<?php if(isset($page)) {?> 
	<div class="page-header container">
	  <h1><small><?php echo $page[0]->label?></small></h1>
	</div>
	<?php echo $page[0]->content?>
	
<?php } else { ?>
    <p>The page you are looking for doesn't exist. </p>
<?php } ?>

<?php $this->load->view('vwFooter'); ?>