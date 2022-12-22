<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-23T11:27:04+07:00
# @Email:  ido.alit@gmail.com
# @Filename: _home.php
# @Last modified by:   user
# @Last modified time: 2018-01-26T18:43:45+07:00

?>

<section id="section1 libms-home container-fluid">
    <header class="c-header">
       
      <?php
      // ------------------------------------------------------------------------
      // include navbar
      // ------------------------------------------------------------------------
      include '_navbar.php'; ?>
	 
    </header>
	  <?php
      // ------------------------------------------------------------------------
      // include logo
      // ------------------------------------------------------------------------
      include '_logo.php'; ?>


  <?php
  // --------------------------------------------------------------------------
  // include search form part
  // --------------------------------------------------------------------------
  
  include '_search-form.php'; ?>
 
</section>

<div id="slims-home">
<?php if ($sysconf['template']['classic_popular_collection']) : ?>
<section class="m-3">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 mx-auto">
<div class="card border-0 shadow">
<div class="card-body card-search">
<p class="mb-3"><?php echo __('Popular among our collections: '); ?></p>
<slims-group-subject url="index.php?p=api/subject/popular"></slims-group-subject>
</div>
</div>
</div>
</div>
</div>
</section>
<?php endif; ?>
<section class="mt-5 container">
    <h4 class="text-white text-center text-thin mt-5 mb-4"><?php echo __('Select the topic you are interested in'); ?></h4>
    <ul class="topic d-flex flex-wrap justify-content-center px-0">
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=8&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/8-books.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Literature'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=3&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/3-diploma.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Social Sciences'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=6&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/6-blackboard.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Applied Sciences'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=7&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/7-quill.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Art & Recreation'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="javascript:void(0)" class="d-flex flex-column" data-toggle="modal" data-target="#exampleModal">
                <img src="<?php echo assets('images/icon/grid_icon.png'); ?>" width="80"
                     class="mb-3 mx-auto"/>
                <?php echo __('see more..'); ?>
            </a>
        </li>
    </ul>
</section>

</div>
