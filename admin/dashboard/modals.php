<!-- contactmodal -->
<form action="../admin/dashboard/save.php" method="post" class="modal fade" id="insertcontact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold saveOrUpdate">Save Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3 md-form mb-2">
                <input hidden type="text" name="SaveOrUpdate" >
                    <p class="warning" id="warning" style="color: red" ></p>
                    <label data-error="wrong" data-success="right" for="form1" readonly></label>
                    <input hidden="hidden" type="number" name="data1" class="data1 form-control validate" >

                    <label data-error="wrong" data-success="right" for="form2" readonly></label>
                    <input hidden type="text"  id="controller" name="controller" class="form-control validate "value="contact" >
                    
                    <label data-error="wrong" data-success="right" for="form3">Name</label>
                    <input type="text" name="data2" class="data2 form-control validate" required>
                    <label data-error="wrong" data-success="right" for="form4">Link</label>
                    <input type="text"  name="data3" class="data3 form-control validate" required>
                    <div style="text-align: right; padding-top: 10px;">
                        <input class="btn btn-success" type="submit" name="addData" value="Save">
                    </div>
            </div>
        </div>
    </div>
</form>
<!-- The Modal Delete -->
<form hidden action="../admin/dashboard/delete.php" method="post" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="deletecontact">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3 md-form mb-2">
                <label data-error="wrong" data-success="right" for="form1" readonly></label>
                <input hidden type="text"  id="controller" name="controller" class="form-control validate "value="contact" >
                <label data-error="wrong" data-success="right" for="form2" readonly></label>
                    <input type="number" name="data1" class="data1 form-control validate" >
                <label data-error="wrong" data-success="right" for="form3"> </label>
                <input type="text" readonly name="data2" class="data2 form-control validate">
                <div style="text-align: right; padding-top: 20px;">
                    <input class="btn btn-warning" name="deleteData" type="submit">
                </div>
            </div>
        </div>
    </div>
</form>
<!-- contactmodal -->
<!-- edumodal -->
<form action="../admin/dashboard/save.php" method="post" class="modal fade" id="insertedu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold saveOrUpdate">Save Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3 md-form mb-2">
                <input hidden type="text"  name="SaveOrUpdate" >
                    <p class="warning" id="warning" style="color: red" ></p>
                    <label data-error="wrong" data-success="right" for="form1" readonly></label>
                    <input hidden="hidden" type="number" name="data1" class="data1 form-control validate" >

                    <label data-error="wrong" data-success="right" for="form2" readonly></label>
                    <input hidden type="text"  id="controller" name="controller" class="form-control validate "value="education" >
             
                    <label data-error="wrong" data-success="right" for="form3">Name</label>
                    <input type="text" name="data2" class="data2 form-control validate " required>
                    <label data-error="wrong" data-success="right" for="form4">Jurusan</label>
                    <input type="text" name="data3" class="data3 form-control validate">
                    <label data-error="wrong" data-success="right" for="form5">GPA</label>
                    <input type="text" name="data4" class="data4 form-control validate" required>
                    <label data-error="wrong" data-success="right" for="form6">Mulai</label>
                    <input type="text" name="data5" class="data5 form-control validate" required>
                    <label data-error="wrong" data-success="right" for="form7">Selesai</label>
                    <input type="text" name="data6" class="data6 form-control validate" required>
                    <label data-error="wrong" data-success="right" for="form8">Logo</label>
                    <input type="file" name="data7" class="data7 validate" style="margin-top: 16px;" required>
                    <div style="text-align: right; padding-top: 10px;">
                        <input class="btn btn-success" type="submit" name="addData" value="Save">
                    </div>
            </div>
        </div>
    </div>
</form>
<!-- The Modal Delete -->
<form hidden action="@{delete/}" method="post"  id="deleteedu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3 md-form mb-2">
                <label data-error="wrong" data-success="right" for="form1"> </label>
                <input type="text" readonly id="iddelete" name="iddelete" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form2"> </label>
                <input type="text" readonly id="namedelete" name="namedelete" class="form-control validate">
                <input type="text"  id="jurusandelete" name="jurusandelete" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form3"> </label>
                    <input type="text"  id="gpadelete" name="gpadelete" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form4"> </label>
                    <input type="text"  id="mulaidelete" name="mulaidelete" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form5"> </label>
                    <input type="text"  id="selesaidelete" name="selesaidelete" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form6"> </label>
                    <input type="file"  id="logodelete" name="logodelete" class="form-control validate">
                <div style="text-align: right; padding-top: 20px;">
                    <button class="btn btn-warning" type="submit">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
 <script>
$(".confirm").click(function () {
    var row = $(this).closest("tr");
    var one = row.find(".one").text();
    var two = row.find(".two").text();
    var three = row.find(".three").text();
    var four = row.find(".four").text();
    var five = row.find(".five").text();
    var six = row.find(".six").text();
    var seven = row.find(".seven").text();
    var eight = row.find(".eight").text();
    $("input[type=number].data1").val(one);
    $("input[type=text].data2").val(two);
    $("input[type=text].data3").val(three);
    $("input[type=text].data4").val(four);
    $("input[type=text].data5").val(five);
    $("input[type=text].data6").val(six);
    $("input[type=text].data7").val(seven);
    $("input[type=text].data8").val(eight);
});
$(".updating").click(function () {
    $("input[type=number].data1").prop('hidden', false);
    var row = $(this).closest("tr");
    var one = row.find(".one").text();
    $("input[type=number].data1").val(one);
    $("input[type=number].data1").prop("readonly", true);
    $(".saveOrUpdate").text("UPDATE DATA ");//mengganti title modal
    $(".SaveOrUpdate").val("UPDATE");
});
$(".saving").click(function () {
    $("input[type=number].data1").prop('hidden', true);
    $(".saveOrUpdate").text("ADD NEW DATA ");
    $(".SaveOrUpdate").val("ADD");
    $("input[type=number].data1").val('');
    $("input[type=text].data2").val('');
    $("input[type=text].data3").val('');
    $("input[type=text].data4").val('');
    $("input[type=text].data5").val('');
    $("input[type=text].data6").val('');
    $("input[type=text].data7").val('');
    $("input[type=text].data8").val('');
    $("#id").prop("readonly", false);
});
 $('.modal .show .field input').keyup(function () {

                // #column3_search is a <input type="text"> element

                var empty = false;
                $('.field input').each(function () {
                    if ($(this).val().length == 0) {
                        empty = true;
                    }
                });
                if (empty) {
                    $('.actions input').attr('disabled', 'disabled');
                } else {
                    $('.actions input').attr('disabled', false);
                }
            });
    </script>