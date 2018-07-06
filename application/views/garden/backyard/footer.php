					<footer id="footer-bar" class="row" style="opacity: 1;">
						<p id="footer-copyright" class="col-xs-12">
							Powered by <a href="https://arborweb.com.br">Arbor Web</a>.
						</p>
					</footer>
				</div>
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

<script src="<?php echo base_url('html/js/interactions.js') ?>"></script>
<!-- this page specific styles -->
<?php foreach ($js as $value): ?>
<script src="<?php echo base_url('assets/template/'.$value) ?>"></script>
<?php endforeach ?>
<?php echo $js_write ?>
	
<!-- theme scripts -->
<script src="<?php echo base_url('assets/template/js/scripts.js') ?>"></script>
<script src="<?php echo base_url('assets/template/js/pace.min.js') ?>"></script>


