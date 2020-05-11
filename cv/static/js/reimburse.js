/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    var StartDate = new Date();
    var Sd = ("0" + StartDate.getDate()).slice(-2);
    var Sm = ("0" + (StartDate.getMonth() + 1)).slice(-2);
    var startmin = StartDate.getFullYear() + "-" + Sm + "-" + Sd;
    document.getElementById("startdate").max = startmin;
});
var date_input = document.getElementById('startdate');
date_input.onchange = function () {
    $("#enddate").prop("disabled", false);
    updateDate();
};
function updateDate() {
    var split = $("#startdate").val().split('-');
    var EndDateMin = new Date(new Date(split[0], split[1] - 1, split[2]).getTime() + 1 * 24 * 60 * 60 * 1000);
    var Ed = ("0" + EndDateMin.getDate()).slice(-2);
    var Em = ("0" + (EndDateMin.getMonth() + 1)).slice(-2);
    var endmin = EndDateMin.getFullYear() + "-" + Em + "-" + Ed;

    var EndDateMax = new Date();
    var Ed2 = ("0" + EndDateMax.getDate()).slice(-2);
    var Em2 = ("0" + (EndDateMax.getMonth() + 1)).slice(-2);
    var endmax = EndDateMax.getFullYear() + "-" + Em2 + "-" + Ed2;
    document.getElementById("enddate").min = endmin;
    document.getElementById("enddate").max = endmax;
}

var temp = "";
//parse image to base64
function encodeImageFileAsURL(element) {
    var file = element.files[0];
    var reader = new FileReader();
    reader.onloadend = function () {
        temp = reader.result;
    };
    reader.readAsDataURL(file);
}
$(".saving").click(function () {
    document.getElementById('category').value = "";
    document.getElementById("description").value = "";
    document.getElementById("file").value = "";
});
$(document).ready(function () {
    var t = $('#example').DataTable({
        rowReorder: {
            selector: 'tr td:not(:last-child)'
        },
        dom: '<"top"f>rt<"bottom right"p><"clear">',
        "columns": [
            null,
            null,
            null,
            null,
            {
                "data": null,
                "defaultContent": "<abbr class='tooltipdelete' data-title='Delete Data'>\n\
                                        <a id='deleteItem' type='button' class='btn confirm deleteItem' style='color: red;'>\n\
                                        <i class='fa fa-trash'></i></a></abbr>"
            }
        ]}
    );
    $('#addRow').on('click', function () {
        var tabelmaxindex = t.page.info().recordsDisplay;
        var counter = tabelmaxindex + 1;
        var rowNode = t.row.add([
            counter,
            "<input type='Text' hidden " + "name='cat" + counter + "' value='" + document.getElementById('category').value + "' >" + document.getElementById('category').value,
            "<input type='Text' hidden " + "name='desc" + counter + "' value='" + document.getElementById('description').value + "' >" + document.getElementById('description').value,
            "<input type='Text' hidden " + "name='file" + counter + "' value='" + temp + "' ><img src='" + temp + "' style='width:100%;max-width:150px' />"
        ]).draw(false).node();

        document.getElementById("jumlah").value = tabelmaxindex;
        counter++;
        $(".modal-header button").click();
        $(".modal-header button").click();
    });
    //untuk select tabel yang mau didelete
    $('#example tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            t.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
    $(document).on("click", ".deleteItem", function () {
        t.row($(this).parents('tr'))
                .remove()
                .draw(false);
        $.each($('#example tbody tr td:first-child'), function (index, val) {
            $(this).html(index + 1);
        });
        $.each($('#example tbody tr td:nth-child(2)'), function (index, val) {
            $('input[name^="cat"]').attr("name", "cat" + (index + 1));
        });
        $.each($('#example tbody tr td:nth-child(3)'), function (index, val) {
           $('input[name^="desc"]').attr("name", "desc" + (index + 1));
        });
        $.each($('#example tbody tr td:nth-child(4)'), function (index, val) {
            $('input[name^="file"]').attr("name", "file" + (index + 1));
        });
//            t.rows().invalidate();
    });

});

$('#file').on('change', function () {
    var numb = $(this)[0].files[0].size / 1024;
    numb = numb.toFixed(3);
    if (numb > 60) {
        document.getElementById('warningsize').hidden = false;
        document.getElementById('warningsize').textContent = "File Maximum size is 60 KB,Your file size is " + numb + " KB";
        document.getElementById('addRow').disabled = true;
    } else {
        document.getElementById('warningsize').hidden = true;
        document.getElementById('addRow').disabled = false;
    }
});
