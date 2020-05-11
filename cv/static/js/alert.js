/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  function exitalert(event) {
            event.preventDefault();
            $("#logout").submit(swal({
                title: "sure want to logout ?",
                text: "",
                type: "question",
                showCancelButton: true,
                confirmButtonColor: "#34E076",
                confirmButtonText: 'Yes, i am!',
                cancelButtonText: 'No '
            }
            ).then(function (result) {
                setTimeout(function () {
                    var formz = document.getElementById("logout");
                    formz.submit();
                }, 30);
            }));
        }
         function deletealert(event) {
            event.preventDefault();
            $('.confirmdelete').on('click', function() {
                var deleteit = $(this).attr('href');
                
                swal({
                title: "sure want to delete ?",
                text: "",
                type: "question",
                showCancelButton: true,
                confirmButtonColor: "#34E076",
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, keep it'
            }
            ).then(function (result) {
                setTimeout(function () {
                    alert(deleteit);
                    $(deleteit).submit();
                }, 30);
            });
        });};
        

        $(document).ready(function () {
            $('#id').on('change', function () {
                var table = $('#example').DataTable();
                table.column(0).search("^" + $('#id').val() + "$", true, false).draw();
                var totalRecords = table.page.info().recordsDisplay;

                if (totalRecords !== 0) { //ganti swal menuju ke update
                    swal({
                        title: "data exist, want to update ?",
                        text: "",
                        type: "question",
                        showCancelButton: true,
                        confirmButtonColor: "#34E076",
                        confirmButtonText: 'Yes, Update it',
                        cancelButtonText: 'No, keep it',
                        allowOutsideClick: false
                    }
                    ).then(function (result) {
                        setTimeout(function () {
                            $("#id").prop("readonly", true);
                            $(".saveOrUpdate").text("UPDATE DATA COUNTRY");//mengganti title modal
                            document.getElementById("SaveOrUpdate").value = "UPDATE";
                        }, 30);
                    });
                }
            });
           
        });

      
  
