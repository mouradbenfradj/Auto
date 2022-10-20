<?php
/**
 * @author William Sergio Minossi
 * @copyright 2020
 */
if (!defined('ABSPATH'))
  exit; // Exit if accessed directly
global $wpdb;
$antihacker_table = $wpdb->prefix . "ah_visitorslog";
$query = "SELECT * from " . $antihacker_table . "  limit 1";
$result = $wpdb->get_results($query);
if ($wpdb->num_rows < 1) {
  echo '<br>';
  echo '<br><h3>'; 
  echo __("Empty Table. Please, try again later.", "antihacker");
  sleep(5);
  echo '<br></h3>'; 
  return;
} 
?>
<style>
div.dataTables_wrapper div.dataTables_processing {
   top: 0;
}
</style>
<div id="antihacker-logo">
  <img alt="logo" src="<?php echo ANTIHACKERIMAGES; ?>/logo.png" width="250px" />
</div>
<div id="antihacker_help_title">
  <?php _e('Blocked Visits Log', 'antihacker'); ?>
</div>
<div class="table-responsive" style="margin-top: 0px; margin-right:20px; width: 99%; max-width:99%;">
  <table style="margin-right:20px; cellpadding=" 0" cellspacing="0" border="1px" class="dataTable" id="dataTableVisitors">
    <thead>
      <tr>
        <th></th>
        <th>date</th>
        <th>access</th>
        <th>ip</th>
        <th>block reason</th>
        <th>response</th>
        <th>method</th>
        <th>user agent</th>
        <th>url</th>
        <th>referer</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th></th>
        <th>date</th>
        <th>access</th>
        <th>ip</th>
        <th>block reason</th>
        <th>response</th>
        <th>method</th>
        <th>user agent</th>
        <th>url</th>
        <th>referer</th>
      </tr>
    </tfoot>
    <tbody>
    </tbody>
  </table>
  <div id="dialog-confirm" title="Confirm">
    <div id="modal-body">
    </div>
  </div>