<?php
include("calcula_stats_pie.php");
  echo '<script type="text/javascript">';
  echo 'var antihacker_pie = [';
  echo '{label: "Brute Force Login", data: '.$antihacker_results10[0]['brute'].', color: "#005CDE" },';
  echo '{label: "Firewall", data: '.$antihacker_results10[0]['firewall'].', color: "#00A36A" },';
  echo '{label: "User Enumeration", data: '.$antihacker_results10[0]['enumeration'].', color: "#7D0096" },';



if(!empty($antihacker_checkversion))
{
  echo '{label: "Plugin Vulnerabilities", data: '.$antihacker_results10[0]['plugin'].', color: "#9EEFA9" },';
  echo '{label: "Theme Vulnerabilities", data: '.$antihacker_results10[0]['theme'].', color: "#DE000F" },';
  echo '{label: "False Search Engine", data: '.$antihacker_results10[0]['false_se'].', color: "#ED7B00" },';
  echo '{label: "From Tor", data: '.$antihacker_results10[0]['tor'].', color: "#000000" },';

  echo '{label: "Post Without Referrer", data: '.$antihacker_results10[0]['noref'].', color: "#CCCCCC" },';
  echo '{label: "Blank User Agent", data: '.$antihacker_results10[0]['blank'].', color: "#fcafaf" },';
  echo '{label: "HTTP Tools", data: '.$antihacker_results10[0]['tools'].', color: "#768ced" },';
  echo '{label: "Rate Limit Exceeded", data: '.$antihacker_results10[0]['rate'].', color: "#ede276" },';

}
else
{
  echo '{label: "Disabled - Plugin Vulnerabilities", data: '.$antihacker_results10[0]['plugin'].', color: "#9EEFA9" },';
  echo '{label: "Disabled - Theme Vulnerabilities", data: '.$antihacker_results10[0]['theme'].', color: "#DE000F" },';
  echo '{label: "Disabled - False Search Engine", data: '.$antihacker_results10[0]['false_se'].', color: "#ED7B00" },';
  echo '{label: "Disabled - From Tor", data: '.$antihacker_results10[0]['tor'].', color: "#000000" },';

  echo '{label: "Disabled - Post Without Referrer", data: '.$antihacker_results10[0]['noref'].', color: "#CCCCCC" },';
  echo '{label: "Disabled - Blank User Agent", data: '.$antihacker_results10[0]['blank'].', color: "#fcafaf" },';
  echo '{label: "Disabled - HTTP Tools", data: '.$antihacker_results10[0]['tools'].', color: "#768ced" },';
  echo '{label: "Disabled - Rate Limit Exceeded", data: '.$antihacker_results10[0]['rate'].', color: "#ede276" },';

}
  echo '];';
?>
var antihacker_pie_options = {
    series: {
        pie: {
            show: true,
            innerRadius: 0.5,
            label: {
                show: false,
            }
        }
    }
};
jQuery(document).ready(function () {
  jQuery.plot(jQuery("#antihacker_flot-placeholder_pie"), antihacker_pie, antihacker_pie_options);
});
</script>

<div id="antihacker_flot-placeholder_pie" style="width:400px;height:125px;margin:0 auto"></div>