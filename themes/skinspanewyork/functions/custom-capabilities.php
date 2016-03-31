<?php
add_filter( 'wpsc_purchase_logs_cap', 'wpec_front_desk_access' );

function wpec_front_desk_access(){
    return 'store_sales';
}
?>