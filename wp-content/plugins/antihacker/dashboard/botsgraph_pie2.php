<?php
include("calcula_stats_pie2.php");
  echo '<script type="text/javascript">';
  echo 'var antihacker_pie2 = [';

  $label = "Bots "; // . (round($antihacker_results10[0]['Bots'],2)) * 100;
  echo '{label: "'.$label.'", data: '.$antihacker_results10[0]['Bots'].', color: "#FF0000" },';
  $label = "Humans "; // . (round($antihacker_results10[0]['Humans'],2)) * 100;
 echo '{label: "'.$label.'", data: '.$antihacker_results10[0]['Humans'].', color: "#00A36A" }';

echo '];';


?>


function labelFormatter(label, series) {
  return "<div style='font-size:15px;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
};

var antihacker_pie2_options = {
    series: {
        pie: {
            show: true,
            innerRadius: 0.4,
            label: {
                show: true,
                formatter: labelFormatter,
                
            }
        }
    },

    legend: {
    show: false,

  }

};
jQuery(document).ready(function () {
  jQuery.plot(jQuery("#antihacker_flot-placeholder_pie2"), antihacker_pie2, antihacker_pie2_options);
});
</script>
<div id="antihacker_flot-placeholder_pie2" style="width:400px;height:200px;margin:-20px 0 auto"></div>
