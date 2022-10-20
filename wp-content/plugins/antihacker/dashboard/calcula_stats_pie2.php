<?php
/**
 * @author William Sergio Minossi
 */
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

global $wpdb;


$table_name = $wpdb->prefix . "ah_visitorslog";

$query = "SELECT COUNT(*) FROM ".$table_name. "
WHERE `human` = '0'";

$quantos_bots = $wpdb->get_var($query);

$query = "SELECT COUNT(*) FROM ".$table_name. "
WHERE `human` = '1'";


$quantos_humanos = $wpdb->get_var($query);

if($quantos_bots < 1 or $quantos_humanos < 1)
{
    /*
 echo $quantos_bots;
 echo '<br>';
 echo  $quantos_humanos;
 echo '<br>';
*/
    echo 'Sorry, no info available. Please, try again tomorrow.';
    return;

}



$total = $quantos_bots +  $quantos_humanos;


$antihacker_results10[0]['Bots'] = $quantos_bots/$total;
$antihacker_results10[0]['Humans'] = $quantos_humanos/$total; 



