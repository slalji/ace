$( document ).ready(function() {


});
jQuery(function($) {
    //initiate dataTables plugin
    var section = $('#section').html();
    console.log(section);
    var myTable =
        $('#dynamic-table').DataTable( {
            //serverSide: true,
            bAutoWidth: false,
            ajax: {
                url: 'ajax/getItem.php',
                type: 'GET',
                dataType: 'json',
                data: {section:section}
            },
            "columns": [
                { "data": "id" },
                { "data": "fulltimestamp" },
                { "data": "msisdn" },
                { "data": "account" },
                { "data": "service" },
                { "data": "reference" },
                { "data": "amount" },
                { "data": "tstatus" },
                { "data": "lang" },
                { "data": "name" }

            ],
            "dom": '<"toolbar">frtip'
        } );
    //$("div.toolbar").html('<input type="text" id="min-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="Date Ranage:"> ');
    $("div.toolbar").html('<div id="reportrange" class="pull-left" style="border-radus:5px ;background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 30%"> <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;<span></span> <b class="caret"></b></div>');
    $(function() {
        $('#reportrange').daterangepicker({
            "startDate": "01/11/2018",
            "endDate": "01/17/2018"
        }, function (start, end) {
            console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') +  ')');
            $.fn.dataTable.ext.search.push(
                function( settings, data, dataIndex ) {
                    var min = start.format('YYYY-MM-DD');
                    var max = end.format('YYYY-MM-DD');

                    var cal = /*parseFloat*/( data[1] ) || 0; // use data for the date range column


                    if ( ( ( min ) && ( max ) ) ||
                        ( ( min ) && cal <= max ) ||
                        ( min <= cal   && ( max ) ) ||
                        ( min <= cal   && cal <= max ) )
                    {


                        return true;
                    }
                    return false;
                }

            );


        });
        myTable.draw();
    });



// Re-draw the table when the a date range filter changes
    /*$('#reportrange span').change(function() {
        alert();
        myTable.draw();
    });*/
// Re-draw the table when the a date range filter changes
    $('#reportrange').change(function() {
        alert();
        myTable.draw();
    });



    //$('#my-table_filter').hide();

    $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

    new $.fn.dataTable.Buttons( myTable, {
        buttons: [
            {
                "extend": "colvis",
                "text": "<i class='fa fa-eye-slash bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                "className": "btn btn-white btn-primary btn-bold",
                //columns: ':not(:first):not(:last)'
                columns: ':not(:first)'
            },
            {
                "extend": "copy",
                "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                "className": "btn btn-white btn-primary btn-bold"
            },
            {
                "extend": "csv",
                "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to CSV</span>",
                "className": "btn btn-white btn-primary btn-bold"
            },
            {
                "extend": "excel",
                "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                "className": "btn btn-white btn-primary btn-bold"
            },
            {
                "extend": "pdf",
                "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                "className": "btn btn-white btn-primary btn-bold"
            },
            {
                "extend": "print",
                "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                "className": "btn btn-white btn-primary btn-bold",
                autoPrint: false,
                message: 'This print was produced using the Print button for DataTables'
            }
        ]
    } );
    myTable.buttons().container().appendTo( $('.tableTools-container') );

    //style the message box
    var defaultCopyAction = myTable.button(1).action();
    myTable.button(1).action(function (e, dt, button, config) {
        defaultCopyAction(e, dt, button, config);
        $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
    });


    var defaultColvisAction = myTable.button(0).action();
    myTable.button(0).action(function (e, dt, button, config) {

        defaultColvisAction(e, dt, button, config);


        if($('.dt-button-collection > .dropdown-menu').length == 0) {
            $('.dt-button-collection')
                .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                .find('a').attr('href', '#').wrap("<li />")
        }
        $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
    });

    ////

    setTimeout(function() {
        $($('.tableTools-container')).find('a.dt-button').each(function() {
            var div = $(this).find(' > div').first();
            if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
            else $(this).tooltip({container: 'body', title: $(this).text()});
        });
    }, 500);






    /********************************/
    //add tooltip for small view action buttons in dropdown menu
    $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

    //tooltip placement on right or left
    function tooltip_placement(context, source) {
        var $source = $(source);
        var $parent = $source.closest('table')
        var off1 = $parent.offset();
        var w1 = $parent.width();

        var off2 = $source.offset();
        //var w2 = $source.width();

        if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
        return 'left';
    }





});

