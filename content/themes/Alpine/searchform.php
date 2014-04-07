<div class="search-field widget">
	<span data-icon="&#xe009" class="search-button"></span>
	<form action="<?php echo home_url(); ?>/" id="searchform" method="get">
		<input type="text" name="s" value="<?php _e('Search...','alpine') ?>" onfocus="if(this.value=='' || this.value == '<?php _e('Search...','alpine') ?>') this.value=''" onblur="if(this.value == '') {this.value=this.defaultValue}" onkeyup="keyUp();" />
		<input type="submit" value="" />
	</form>
</div>