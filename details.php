<?
error_reporting(0);
?>
    <head><title>Team X</title></head>
<?
include("head.php");
$id=$_GET['id'];
$json = file_get_contents('http://launchlibrary.net/1.4/launch/'.$id);
$obj = json_decode($json, true);
?>
<div class="row" style="height: 100%; margin: auto;    top: 30px;position: relative;width: 80%; ">
    <div id="imagephotorocket" class=" col-lg-4" style="width:400px; background: url('<?echo$obj['launches'][0]['rocket']['imageURL'];?>') center center ; background-size: contain; height: 300px; background-color: #e7e7e7; position:relative;  ">

    </div>
    <h2 class="resizedd" style="text-align: center;
    position: relative;" class="col-lg-7"><?echo$obj['launches'][0]['name'];?></h2>
    <div class="col-lg-12" style="
    zoom: 0.6;
">


        <table class="resizedd" style="width:100%;text-align: right;/* padding: 10px; */font-size: 28px; position: relative;top: 35px;    direction: rtl;">
            <tr>
            </tr>
            <tr>
                <td>
                    <?echo$obj['launches'][0]['windowend'];?>
                </td>
                <td class="consttbl">
                    <?echo"End Date";?>
                </td>
                <td>
                    <?echo$obj['launches'][0]['windowstart'];?>
                </td>
                <td class="consttbl">
                    <?echo"Start Date";?>
                </td>

            </tr>
            <tr style="background: #f7f7f7;    direction: rtl;">
                <td>
                            <span>
                                                    <?if($obj['launches'][0]['tbdtime']==1){
                                                        echo"Not 100% On time";
                                                    }else{
                                                        echo"100% On time";
                                                    }?>


                            </span>

                </td>
                <td class="consttbl">
                    <?echo"Date accuracy";?>
                </td>
                <td>
                            <span>
   <?if($obj['launches'][0]['holdreason']==null){
       echo"No Delay";
   }else{
       echo$obj['launches'][0]['holdreason'];
   }?>                            </span>

                </td>
                <td class="consttbl">


                    <?echo"Delay Causes";?>
                </td>
            </tr>
            <tr >
                <td>
<? echo$obj['launches'][0]['missions'][0]['description'];?>
                </td>
                <td class="consttbl">
                    <?echo"Mission ";?>
                </td>
                <td>
                    <? echo$obj['launches'][0]['missions'][0]['typeName'];?>
                </td>
                <td class="consttbl">
                    <?echo"Mission Type";?>
                </td>
            </tr>

            <tr >
                <td>
                    <? echo$obj['launches'][0]['changed']?>

                </td>
                <td class="consttbl">
                    <?echo"Changed Date";?>
                </td>
                <td>
                    <?echo$obj['launches'][0]['location']['name'];?>
                </td>
                <td class="consttbl">
                    <?echo"Location";?>
                </td>
            </tr>
            <tr style="background: #f7f7f7;">
                <td>
                    <?echo$obj['launches'][0]['location']['pads'][0]['name'];?>
                </td>
                <td class="consttbl">
                    <?echo"Space Port Name";?>
                </td>
                <td>
                    <?echo$obj['launches'][0]['location']['pads'][0]['latitude'];?>
,
                    <?echo$obj['launches'][0]['location']['pads'][0]['longitude'];?>
                </td>
                <td class="consttbl">
                    <?echo"Space Port Coordinates ";?>
                </td>
            </tr>
            <tr >
                <td>
                    <?echo$obj['launches'][0]['rocket']['agencies'][0]['name'];?>
                </td>
                <td class="consttbl">
                    <?echo"Agancies";?>
                </td>
                <td>
                    <?echo$obj['launches'][0]['location']['pads'][0]['name'];?>
                </td>
                <td class="consttbl">
                    <?echo"Country-City";?>
                </td>
            </tr>
            <tr style="background: #f7f7f7;">
                <td>
                    <a class="link" " href="<?echo$obj['launches'][0]['location']['pads'][0]['wikiURL'];?>">Wiki</a>
                </td>
                <td class="consttbl">
                    <?echo"Space Port Info";?>
                </td>
                <td>
                    <?echo$obj['launches'][0]['rocket']['name'];?>
                </td>
                <td class="consttbl">
                    <?echo"Rocket Name";?>
                </td>
            </tr>
            <tr >
                <td>
                    <?echo$obj['launches'][0]['rocket']['configuration'];?>
                </td>
                <td class="consttbl">
                    <?echo"Rocket Config";?>
                </td>
                <td>
                    <a class="link" href="<?echo$obj['launches'][0]['rocket']['wikiURL'];?>">Wiki</a>
                </td>
                <td class="consttbl">
                    <?echo"Rocket Wiki";?>
                </td>
            </tr>
            <tr style="background: #f7f7f7;">
                <td>
                    <a class="link" href="<?echo$obj['launches'][0]['missions'][0]['wikiURL'];?>">Wiki</a>
                </td>
                <td class="consttbl">
                    <?echo"Mission Wiki";?>
                </td>
                <td>

<a class="link" href="<?echo$obj['launches'][0]['rocket']['imageURL'];?>">here</a>
                </td>
                <td class="consttbl">
                    <?echo"Rocket Images";?>
                </td>
            </tr>
            <tr >
                <td>

                </td>
                <td class="consttbl">

                </td>
                <td>
                    <? if(!empty($obj['launches'][0]['vidURLs'][0])){
                        ?>
                        <a class="link" href="<?echo$obj['launches'][0]['vidURLs'][0];?>" target="_blank">Stream</a>

                        <?
                    }elseif(!empty($obj['launches'][0]['vidURL'])){
                        ?>
                        <a class="link" href="<?echo$obj['launches'][0]['vidURL'];?>" target="_blank">Stream</a>


                        <?
                    }else{
                        echo"No Streaming Video";
                    }?>

                </td>
                <td class="consttbl">
                    <?echo"Live Streaming";?>
                </td>

            </tr>
        </table>

<br><br><br><br><br><br><br><br>
    </div>
    <br><br><br><br><br><br>


</div>


