<?php $this->load->view('vwHeader'); ?>

    <div id="h">
      <div class="logo">
        <h2></h2>
      </div><!--/logo-->
      <div class="container centered">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1>Hello, my name is <b>Bogdan</b>.<br/>I create for the web.</h1>
          </div>
        </div><!--/row-->

        <div class="row mt">
          <div class="col-sm-4">
            <i class="ion-ios7-monitor-outline"></i>
            <h3>Web Design</h3>
          </div><!--/col-md-4-->

          <div class="col-sm-4">
            <i class="ion-ios7-browsers-outline"></i>
            <h3>UI Development</h3>
          </div><!--/col-md-4-->

          <div class="col-sm-4">
            <i class="ion-ios7-copy-outline"></i>
            <h3>Brand Identity</h3>
          </div><!--/col-md-4-->
        
        </div><!--/row-->
      </div><!--/container-->
    </div><!--H-->

    <div class="container ptb">
      <div class="row">
        <h2 class="centered mb">I craft handsome websites <br/>that empower your vision.</h2>
        <div class="col-md-12 centered">
          <p>I have worked with Agencies, Small Businesses, Artists, Creatives, Non-Profits, and many others to help provide a Web Solution that is right for each individual client.</p>
        </div><!--/col-md-6-->
      </div><!--/row-->
    </div><!-- /.container -->
    

    <div id="g">
      <div class="container">
        <div class="row centered">
          <h2>Check some of my latest projects.</h2>
        </div><!--/row-->
      </div><!--/.container-->
    <div class="portfolio-centered mt">
      <div class="recentitems portfolio">

          <?php foreach($projects as $project) { ?>
            <div class="portfolio-item graphic-design">
              <div class="he-wrap tpl6">
              <img src="<?php echo base_url().'uploads/'.$project->projectThumbnail?>" class="img-responsive" alt="">
                <div class="he-view">
                  <div class="bg a0" data-animate="fadeIn">
                    <h3 class="a1" data-animate="fadeInDown"><?php echo $project->projectTitle?></h3>
                    <a data-rel="prettyPhoto" href="<?php echo base_url().'uploads/'.$project->projectThumbnail?>" class="dmbutton a2" data-animate="fadeInUp"><i class="ion-search"></i></a>
                    <a href="<?php echo site_url('project').'/'.$project->id?>" class="dmbutton a2" data-animate="fadeInUp"><i class="ion-link"></i></a>
                   </div><!-- he bg -->
                </div><!-- he view -->    
              </div><!-- he wrap -->
            </div><!-- end col-12 -->
          <?php } ?>
                            
       </div><!-- portfolio -->
    </div><!-- portfolio container -->

    </div><!--/.G-->


<?php $this->load->view('vwFooter'); ?>