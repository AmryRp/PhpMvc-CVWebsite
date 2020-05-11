/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $(document).ready(function () {
        var table = $('table.display').DataTable({
            dom: '<"top"f>rt<"bottom right"p><"clear">'
        });

    });
    $(".confirm").click(function () {
        var row = $(this).closest("tr");
        var id = row.find(".id").text();
        var from = row.find(".from").text();
        var to = row.find(".to").text();
        var start = row.find(".startdate").text();
        var end = row.find(".enddate").text();
        var purpose = row.find(".purpose").text();
        var request = row.find(".requestdate").text();
        var response = row.find(".responsedate").text();
        var desc = row.find(".approvaldescription").text();
        var purpose = row.find(".status").text();
        var status = row.find(".employee").text();
        var employee = row.find(".role").text();
        var iddelete = row.find(".id").text();
        document.getElementById("id").value = id;
        document.getElementById("from").value = from;
        document.getElementById("to").value = to;
        document.getElementById("startdate").value = start;
        document.getElementById("enddate").value = end;
        document.getElementById("purpose").value = purpose;
        document.getElementById("requestdate").value = request;
        document.getElementById("responsedate").value = response;
        document.getElementById("approvaldescription").value = desc;
        $("#status option:contains(" + status + ")").attr("selected", true);
        $("#employee option:contains(" + employee + ")").attr("selected", true);
        document.getElementById("iddelete").value = iddelete;
    });
    
    $(document).ready(function () {
        var getColor = function (text) {
            if (text === "Approved") {
                return 'fa fa-2x fa-check-circle tooltipapprove';
            } else if (text === "Pending") {
                return 'fa fa-2x fa-clock-o tooltippending';
            } else if (text === "Rejected") {
                return 'fa fa-2x fa-times-circle tooltipreject';
            }
            return "";
        };
        $('.statusicon').each(function (i, td) {
            var color = getColor($(td).html());

            $(td).attr('class', color);
            $('.fa-check-circle').css({"color": 'green'});
            $('.fa-clock-o').css({"color": 'orange'});
            $('.fa-times-circle').css({"color": 'red'});
            $('.fa-check-circle').text("");
            $('.fa-clock-o').text("");
            $('.fa-times-circle').text("");
            $('.fa-check-circle').attr('data-title', 'Approved');
            $('.fa-times-circle').attr('data-title', 'Rejected');
            $('.fa-clock-o').attr('data-title', 'Pending');
        });

    });

