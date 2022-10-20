jQuery(document).ready(function () {
    var table99 = jQuery('#dataTableVisitors').DataTable({
        processing:true, 
        "language": {processing: '<strong style="margin-top:-40px;">Please, wait ...</strong>'},
        "serverSide": true,
        "order": [[0, "desc"]],
        "columnDefs": [
            {
                "targets": 0, // -1
                "data": null,
                "defaultContent": "<button>Whitelist IP</button>"
            },
            {
                "targets": 2,
                "createdCell": function (td, cellData, rowData, row, col) {
                    if (cellData == 'OK') {
                        jQuery(td).css("background-color", "#A9DFBF");
                    }
                    if (cellData == 'Denied') {
                        jQuery(td).css("background-color", "#F5B7B1 ");
                    }
                },
            }],
        "ajax": {
            "url": datatablesajax.url + '?action=antihacker_get_ajax_data',
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Unexpected error. Please, try again later.");
            }
        },
        dataType: "json",
        contentType: "application/json",
    });
    jQuery("#dataTableVisitors tbody").on('click', 'tr', function () {
        var $row = table99.row(jQuery(this).closest('tr')); // .data();
        var rowIdx = table99.row(jQuery(this).closest('tr')).index();
        $ip = $row.cell(rowIdx, 3).data();
        jQuery("#dialog-confirm").dialog({
            resizable: false,
            height: "auto",
            width: 400,
            modal: true,
            buttons: {
                "Add to Whitelist": function () {
                    // console.log($ip);
                    jQuery.ajax({
                        url: ajaxurl,
                        /*   type: "POST", */
                        data: {
                            'action': 'antihacker_add_whitelist',
                            'ip': $ip
                        },
                        success: function (data) {
                            // var jsonData = JSON.parse(data);
                            alert('IP included on Whitelist Table');
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            // console.log(errorThrown);
                            alert('IP inclusion fail');
                           // alert('error'+errorThrown+' '+textStatus);
                        }
                    });
                    jQuery(this).dialog("close");
                },
                Cancel: function () {
                    jQuery(this).dialog("close");
                }
            }
        });
        jQuery("#modal-body").html('Add IP: ' + $ip + ' to Whitelist?');
    });
});