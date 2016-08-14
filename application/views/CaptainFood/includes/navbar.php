<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>">
				<img src="<?php echo base_url()?>assets/img/logo final 01.png" style="max-height:60px; margin-top:-7px" />
				</a>
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a <?php if($this->uri->segment(2)=='menu'){?>href="<?php echo base_url()?>"<?php } else {?>href="#myCarousel" <?php  }?> class="page-scroll">Home</a></li>
											
											<?php if($this->uri->segment(2)=='menu'){?>
												<li><a href="<?php echo base_url().'Home/menu/'.$this->uri->segment(3).'/#menu';?>"
												class="page-scroll"> Menus</a></li>
												<?php } else{ ?>
											
											<li><a href="#HWW" class="page-scroll"> How it Works</a></li>
											<li><a href="#chefs" class="page-scroll"> Our Chefs</a></li>
											<?php } ?>
											
											<li><a <?php if($this->uri->segment(2)=='menu'){?>href="<?php echo base_url().'#about'?>"
											<?php } else {?>href="#about" <?php  }?> class="page-scroll"> About</a></li>
											
											<li><a <?php if($this->uri->segment(2)=='menu'){?>href="<?php echo base_url().'#contact'?>"
											<?php } else {?>href="#contact" <?php  }?> class="page-scroll"> Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>