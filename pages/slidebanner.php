<?php
include 'database/config.php';

function slide($koneksi)
{
    $query ="SELECT * FROM tblbanner ORDER BY id ASC";
    $result = mysqli_query($koneksi,$query);
    return $result;
}

function slide_indikator($koneksi)
{
    $output = ' ';
    $count = 0;
    $result = slide($koneksi);
    while($row = mysqli_fetch_array($result))
    {
        if ($count) {
            $output .='
            <li data-target="#dynamic_slide_show" data-slide-to"'.$count.'" class="active"></li>';
            # code...
        }
        else
        {
            $output .='
            <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>';
        }

        $count = $count + 1;
    }
    return $output;
}

function slideshow($koneksi)
{
    $output = '';
    $count = 0;
    $result = slide($koneksi);
    while($row = mysqli_fetch_array($result))
    {
        if ($count == 0) {
            $output .='<div class = "item active">';
            # code...
        }
        else
        {
            $output .='<div class="item">';
        }
        $output .= '
        <img src="pages/img/slide/'.$row["foto"].'" alt="'.$row["nama"].'" />
        <div class="carousel-caption">
         <h3>'.$row["nama"].'</h3>
        </div>
       </div>
       ';
       $count = $count + 1;
    }
    return $output;
}
?>
<!--
<!DOCTYPE html>
<html>
 <head>
    <title>How to Make Dynamic Bootstrap Carousel with PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
-->
    
    <div class="container-fluid">
        <h2 align="center"></h2>
        <br />
        <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php echo slide_indikator($koneksi); ?>
            </ol>
            <div class="carousel-inner">
                <?php echo slideshow($koneksi); ?>
            </div>
                <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>

         </div>

         
    </div>
    <!--
 </body>
</html>
-->


