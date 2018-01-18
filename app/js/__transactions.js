$(document).ready(function() {
//DATATABLE
//To display datatable without search and page length select, and to still have pagination work, instantiate like so
    var oTable = $('#dynamic-table').dataTable({

        bAutoWidth: false,
        ajax: {
            url: 'ajax/getItem.php',
            type: 'GET',
            dataType: 'json',
            data: {section: section}
        },
        "columns": [
            {"data": "id"},
            {"data": "fulltimestamp"},
            {"data": "msisdn"},
            {"data": "account"},
            {"data": "service"},
            {"data": "reference"},
            {"data": "amount"},
            {"data": "tstatus"},
            {"data": "lang"},
            {"data": "name"}

        ],
        "dom": '<"toolbar">frtip'


    });
//DATE RANGE
//set global vars that are set by daterange picker, to be used by datatable
    var startdate;
    var enddate;
//instantiate datepicker and choose your format of the dates
    $('#reportrange').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
            ,
            "opens": "right",
            format: 'DD-MM-YYYY'

        },
        function (start, end, label) {
// Parse it to a moment
            var s = moment(start.toISOString());
            var e = moment(end.toISOString());
            startdate = s.format("YYYY-MM-DD");
            enddate = e.format("YYYY-MM-DD");
        });
//Filter the datatable on the datepicker apply event
    $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
        startdate = picker.startDate.format('YYYY-MM-DD');
        enddate = picker.endDate.format('YYYY-MM-DD');
        //myTable.draw();
    });

    $.fn.dataTableExt.afnFiltering.push(
        function (oSettings, aData, iDataIndex) {
            if (startdate != undefined) {
// 0 here is the column where my dates are.
//Convert to YYYY-MM-DD format from DD/MM/YYYY
                var coldate = aData[1].split("-");
                var d = new Date(coldate[2], coldate[1] - 1, coldate[0]);
                var date = moment(d.toISOString());
                date = date.format("YYYY-MM-DD");

//Remove hyphens from dates
                dateMin = startdate.replace(/-/g, "");
                dateMax = enddate.replace(/-/g, "");
                date = date.replace(/-/g, "");

//console.log(dateMin, dateMax, date);

// run through cases to filter results
                if (dateMin == "" && date <= dateMax) {
                    return true;
                }
                else if (dateMin == "" && date <= dateMax) {
                    return true;
                }
                else if (dateMin <= date && "" == dateMax) {
                    return true;
                }
                else if (dateMin <= date && date <= dateMax) {
                    return true;
                }

// all failed
                return false;
            }
        }
    );
});