/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    var table = $('#example').DataTable({
        dom: '<"top"f>rt<"bottom right"p><"clear">'
    });
});
$(".confirm").click(function () {
    var row = $(this).closest("tr");
    var id = row.find(".id").text();
    var name = row.find(".name").text();
    document.getElementById("id").value = id;
    document.getElementById("name").value = name;
    document.getElementById("iddelete").value = id;
    document.getElementById("namedelete").value = name;
});
$(".updating").click(function () {
    document.getElementById("id").hidden = false;
    var row = $(this).closest("tr");
    var id = row.find(".id").text();
    document.getElementById("id").value = id;
    $("#id").prop("readonly", true);
    $(".saveOrUpdate").text("UPDATE DATA ");//mengganti title modal
    document.getElementById("SaveOrUpdate").value = "UPDATE";
});
$(".saving").click(function () {
     document.getElementById("id").hidden = true;
    $(".saveOrUpdate").text("ADD NEW DATA ");
    document.getElementById("SaveOrUpdate").value = "ADD";
    document.getElementById("id").value = "";
    document.getElementById("name").value = "";
    $("#id").prop("readonly", false);
});

