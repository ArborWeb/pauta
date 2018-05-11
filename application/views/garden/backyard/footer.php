		</div>
	</body>
</html>
<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/bootstrap/bootstrap.min.css') ?>" />

<!-- libraries -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/libs/font-awesome.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/libs/nanoscroller.css') ?>" />

<!-- global styles -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/css/compiled/theme_styles.css') ?>" />

<!-- this page specific styles -->
<?php foreach ($css as $value): ?>
	<link rel="stylesheet" href="<?php echo base_url('assets/template/').$value ?>" type="text/css" />
<?php endforeach ?>

<!-- google font libraries -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>

<!-- global scripts -->
<script src="<?php echo base_url('assets/template/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/template/js/bootstrap.js') ?>"></script>
<script src="<?php echo base_url('assets/template/js/demo-skin-changer.js') ?>"></script>

<!-- this page specific styles -->
<?php foreach ($js as $value): ?>
<script src="<?php echo base_url('assets/template/'.$value) ?>"></script>
<?php endforeach ?>
	
<!-- theme scripts -->
<script src="<?php echo base_url('assets/template/js/scripts.js') ?>"></script>
<script src="<?php echo base_url('assets/template/js/pace.min.js') ?>"></script>


