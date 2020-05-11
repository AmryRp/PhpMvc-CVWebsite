<!DOCTYPE html>
<html>
   <?php include('header.php'); ?>
    <div  class="page-holder w-100 d-flex flex-wrap">
        
        <div class="kontainer">
            <section class="py-custom">
                <div class="row">
                    <!-- Basic Form-->
                    <div class="col-nopad2">
                        <div  class="profile">
                            <img src="https://arp-cv.website/cv/static/img/12.jpg" alt="Avatar" style="max-width: 30rem;max-height: 422px" class="img-profile img-fluid col-nopad2 shadow">
                            <p><h4 class="centered-bottom text-success">Amry Ramadhan Prasetya</h4></p>
                        </div>
                    </div>
                    <div class="col-lg-6 no-padding">
                        <div >
                            <div id="FixedHeightContainer" class="card-body FixedHeightContainer">
                                <div class="header">
                                    <div class="progress-container">
                                        <div id="progressbar"></div>
                                        <div id="scrollpath"></div>
                                    </div>  
                                </div>
                                <div id="profile" class="tab-content">
                                    <div id="content" class="Content d" onscroll="progressSetter">
                                        <div class="justify-c">
                                            <h5 class="text-success">Biography :</h5>
                                        <p style="color: graytext; padding-right: 25px"> Fullname Amry Ramadhan Prasetya my friend called me Amry, I love make a design on Illustrator, editing photos on Photoshop, make a video in After effect and Premiere, 3D ilustration at Blender, and coding and design a game at Unity. my latest project using java with spring boot framework, i can handle php too of course with MVC framework  </p>
                                        </div>
                                        <h5 class="text-success">Where you can contact me ? :</h5>
                                        <div class="rows">
                                        <?php
        foreach ($Contact as $task)
        {
            echo "<form class='col-nopad2 ' value='' >" ;
            echo "<div class='form-group text-left text-uppercase'>";
            echo "<a href='https://www." . $task['link'] . "' >";
            echo "<i class='icon-pad fab fa-".$task['nama']." fa-w-16 fa-2x' value='".$task['nama']."' ></i>";
            echo "</a>";
            echo "</div></form>";
        }
        ?>
    </div>
                                    </div>
                                </div>
                                <div id="education" class="tab-content">
                                    <div id="content" class="Content" onscroll="progressSetter">

                                         <?php
        foreach ( array_reverse($Education) as $edu )
        {
            echo "<form class='col-nopad2' value=''>";
            echo "<div class='form-group text-left text-uppercase'>";
            echo "<div class='rows'>";
            echo "<p><h5 class='form-control-label text-success bold'>" . $edu['nama'] . "</h5>";
            echo "<h6 class='form-control-label '>" . $edu['mulai'] ."-". $edu['selesai'] . "</h6></p>";
            echo "</div>";
            echo " <div class='justify-c'>
            <p class='form-control-label text-uppercase'>".$edu['jurusan'] ."(" . $edu['gpa'] . ")</p>";
            echo "</div>";
            echo "</div></form>";
        }
        ?>
                                    </div>
                                </div>
                                <div id="plan" class="tab-content">
                                    <div id="content" class="Content" onscroll="progressSetter">
                                        <?php
        foreach ($Jasa as $task)
        {
            echo "<form class='col-nopad2' value='' >" . $task['id'] ;
            echo "<div class='form-group text-left text-uppercase'>";
            echo "<h4 class='form-control-label text-success bold'>" . $task['nama'] . "</h4>";
            echo "<h4 class='form-control-label text-uppercase'>" . $task['link'] . "</h4>";
            echo "</div> </form>";
        }
        ?>
                                    </div>
                                </div>
                                <div id="experience" class="tab-content">
                                    <div id="content" class="Content" onscroll="progressSetter">
                                         <?php
        foreach ($Experience as $task)
        {
            echo "<form class='col-nopad2' value='' >" . $task['id'] ;
            echo "<div class='form-group text-left text-uppercase'>";
            echo "<h4 class='form-control-label text-success bold'>" . $task['nama'] . "</h4>";
            echo "<h4 class='form-control-label text-uppercase'>" . $task['link'] . "</h4>";
            echo "</div> </form>";
        }
        ?>
                                    </div>
                                </div>
                                <div id="skill" class="tab-content">
                                    <div id="content" class="Content" onscroll="progressSetter">
                                        <?php
        foreach ($Skill as $task)
        {
            echo "<form class='col-nopad2' value='' >" . $task['id'] ;
            echo "<div class='form-group text-left text-uppercase'>";
            echo "<h4 class='form-control-label text-success bold'>" . $task['nama'] . "</h4>";
            echo "<h4 class='form-control-label text-uppercase'>" . $task['link'] . "</h4>";
            echo "</div> </form>";
        }
        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-nopad2 blankpage">
                        
                    </div>
                </div>
            </section>
        </div>
         
</body>

<script type="text/javascript">
    let progress = document.getElementById('progressbar');
    var contentscroll = document.getElementById('content');
    contentscroll.onscroll = function () {
        myFunction();
    };
    var maxcontentscroll = document.getElementById('FixedHeightContainer');
    function myFunction() {
        var winScroll = contentscroll.scrollTop || contentscroll.scrollTop;
        var height = contentscroll.scrollHeight - contentscroll.clientHeight;
        let progressHeight = (winScroll / height) * 97;
        progress.style.height = progressHeight + "%";

    }
    ;
    var $container = $('.FixedHeightContainer'),
            $scroller = $container.find('.Content'),
            $bar = $('#progressbar'),
            progressSetter = function () {
                var height = $scroller[0].scrollHeight - $scroller.outerHeight();

                $bar.css({
                    height: $scroller.scrollTop() / height * 100 + '%'
                });
                $scroller.on('scroll', progressSetter);
            };
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
<script src="https://arp-cv.website/cv/static/js/login.js"></script>
 <?php include('footer.php'); ?>
</html>
