<?php
/**
 * displaying right sidebar for portfolio category
 *
 * @package Brando
 */
?>
<?php
$brando_layout_left_sidebar = $output = $brando_layout_right_sidebar = $brando_layout_settings = '';
$brando_layout_settings_inner = brando_option('brando_portfolio_cat_settings');

$brando_layout_settings = $brando_layout_settings_inner;
$brando_layout_left_sidebar = brando_option('brando_portfolio_cat_left_sidebar');
$brando_layout_right_sidebar = brando_option('brando_portfolio_cat_right_sidebar');

switch ($brando_layout_settings) {
	case 'brando_portfolio_cat_left_sidebar':
		echo '</div>';
        echo '<div class="col-md-3 col-sm-4 col-xs-12 sidebar pull-left">';
			dynamic_sidebar($brando_layout_left_sidebar);
		echo '</div>';
		break;

	case 'brando_portfolio_cat_right_sidebar':
		echo '</div>';
   		echo '<div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-1 sidebar pull-right">';
    		dynamic_sidebar($brando_layout_right_sidebar);
		echo '</div>';
		break;
		
	case 'brando_portfolio_cat_both_sidebar':
		echo '</div>';
		echo '<div class="col-sm-6 sidebar both-sidebar-left xs-margin-ten-bottom">';
			dynamic_sidebar($brando_layout_left_sidebar);
		echo '</div>';
        echo '<div class="col-sm-6 sidebar both-sidebar-right">';
			dynamic_sidebar($brando_layout_right_sidebar);
		echo '</div>';
		break;
        
    case 'brando_portfolio_cat_full_screen':
        break;
}
?>