/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Get the modal
    var modal = document.getElementById("myModal");
// Get the image and insert it inside the modal - use its "alt" text as a caption
    //var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    $(".myImg").on('click', function(event){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    });

// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    };

    function approve(event) {
        document.getElementById('aproveOrReject').value = "approve";
    }
    function reject(event) {
        document.getElementById('aproveOrReject').value = "reject";
    }

    $(document).ready(function () {
        var table = $('#example').DataTable({
            dom: '<"top">rt<"clear">'
        });
    });

