<?php
/**
 * The template for displaying search forms in Udacity
 *
 * @package Udacity
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" class="<?php echo bootstrap_searchform_class( debug_backtrace() ); ?>">
		<div class="col-sm-3">
			<div class="right-inner-addon">
				<i class="glyphicon glyphicon-search"></i>
				<input type="text"
				       class="form-control"
				       name="s"
				       value="<?php echo esc_attr( get_search_query() ); ?>"
				       id="s"
				       placeholder="<?php esc_attr_e( 'Search &hellip;', 'udacity_wp' ); ?>" />
			</div>
		</div>
	</form>

