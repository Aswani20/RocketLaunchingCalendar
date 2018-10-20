<?
//error_reporting(0);
?>
<head><title>Team X</title></head>
<?
include("head.php");
ini_set("allow_url_fopen", 1);
if(isset($_GET['offset'])){
    $next = $_GET['offset'] + 5;


}
$json = file_get_contents('http://launchlibrary.net/1.4/launch/next/5?offset='.$_GET['offset']);
$obj = json_decode($json, true);

?>

    <center>
    <div class="calender_box container">
<?
$name = $obj['launches'][0]['name'];
foreach ($obj['launches'] as $value) {



?>


        <div class="listitemsoncat" style="    direction: rtl;    text-align: left!important;">
            <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 pictureofitem" style="background-image:url(<?echo$value['rocket']['imageURL'];?>)"></div>

            <a class="col-xs-8 col-sm-8 col-lg-8 col-md-8 detailsofitem" href="details.php?id=<?echo$value['id'];?>">
                <center>
                    <h2><?echo $value['name'];
                       // echo print_r($value['rocket'], true);

                        ?>


                    </h2>
                </center>
                <table style="width:100%;text-align: right;/* padding: 10px; */font-size: 28px; position: relative;top: 35px;">
                    <tr>
                    </tr>
                    <tr>

                        <td>
                            <?echo $value['windowstart'];?>
                        </td>
                        <td class="consttbl">
                                <?echo"Date";?>
                        </td>
                    </tr>
                    <tr style="background: #f7f7f7;    direction: rtl;">
                        <td>
                            <span>
                                <?echo $value['location']['pads'][0]['name'];?>
                            </span>

                        </td>
                        <td class="consttbl">
                            <?echo"Location";?>
                        </td>
                    </tr>

                    <tr >
                        <td>
                            <?echo
                             $value['missions'][0]['agencies'][0]['name'];?>
                        </td>
                        <td class="consttbl">
                            <?echo"Agancy";?>
                        </td>
                    </tr>

                </table>

                <div class="card-title" style="float: right;"><h4></h4></div><br>
                <div class="item-date" style="float: right;     font-size: 10px; color: #8e8c8c;">



                </div>

                <div class="item-Price" style="float: right;">


                </div>
            </a>

        </div>






<?

}
?>

        <br><br><br>
        <br><br><br>
        <div style="    border: 1px solid #e7e7e7;
    width: 100px;
    height: 40px;
    padding-top: 9px;
    text-align: center;"><A href="days.php?offset=<?if(empty($next)){echo"5";}else{echo$next;}?>">Next . . </A></div>

        <br><br><br>
    </div>


    </center>
