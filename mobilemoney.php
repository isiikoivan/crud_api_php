<?php
JSON
{
  //tx_ref,amount,email,phone_number
  "tx_ref":"MC-1585230950508",
  "amount":"1500",
  "email":"user@gmail.com",
  "phone_number":"054709929220",
  "currency":"UGX",
  "redirect_url":"barcode.php",
  "network":"MTN"
}
//wen successful
json_decode{
  {
    "status": "success",
    "message": "Charge initiated",
    "meta": {
        "authorization": {
            "redirect": "https://ravemodal-dev.herokuapp.com/captcha/verify/141:f609a38ea3914ef9e5ca32d3cdd5758e",
            "mode": "redirect"
        }
    }
}
}
//sample ecryption

function getKey($seckey){
  $hashedkey = md5($seckey);
  $hashedkeylast12 = substr($hashedkey, -12);

  $seckeyadjusted = str_replace("FLWSECK-", "", $seckey);
  $seckeyadjustedfirst12 = substr($seckeyadjusted, 0, 12);

  $encryptionkey = $seckeyadjustedfirst12.$hashedkeylast12;
  return $encryptionkey;

}



function encrypt3Des($data, $key)
 {
  $encData = openssl_encrypt($data, 'DES-EDE3', $key, OPENSSL_RAW_DATA);
        return base64_encode($encData);
 }




function payviamobilemoneygh(){ // set up a function to test card payment.
    
    error_reporting(E_ALL);
    ini_set('display_errors',1);
    
    $data = array('PBFPubKey' => 'FLWPUBK-e634d14d9ded04eaf05d5b63a0a06d2f-X',
    'currency' => 'UGX',
    'country' => 'NG',
    'payment_type' => 'mobilemoneyuganda',
    'amount' => '30',
    'phonenumber' => '054709929300',
    'firstname' => 'Edward',
    'lastname' => 'Kisane',
    'network' => 'UGX',
    'email' => 'tester@flutter.co',
    'IP' => '103.238.105.185',
    'txRef' => 'MXX-ASC-4578',
    'orderRef' => 'MXX-ASC-90929',
    'is_mobile_money_ug' => 1,
    'device_fingerprint' => '69e6b7f0sb72037aa8428b70fbe03986c');
    
    $SecKey = 'FLWSECK-bb971402072265fb156e90a3578fe5e6-X';
    
    $key = getKey($SecKey); 
    
    $dataReq = json_encode($data);
    
    $post_enc = encrypt3Des( $dataReq, $key );

    var_dump($dataReq);
    
    $postdata = array(
     'PBFPubKey' => 'FLWPUBK-e634d14d9ded04eaf05d5b63a0a06d2f-X',
     'client' => $post_enc,
     'alg' => '3DES-24');
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, "https://api.ravepay.co/flwv3-pug/getpaidx/api/charge");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata)); //Post Fields
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
    curl_setopt($ch, CURLOPT_TIMEOUT, 200);
    
    
    $headers = array('Content-Type: application/json');
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $request = curl_exec($ch);
    
    if ($request) {
        $result = json_decode($request, true);
        echo "<pre>";
        print_r($result);
    }else{
        if(curl_error($ch))
        {
            echo 'error:' . curl_error($ch);
        }
    }
    
    curl_close($ch);
}

payviamobilemoneygh();






?>
<?php


$postdata = array(
     'PBFPubKey' => 'FLWPUBK-e634d14d9ded04eaf05d5b63a0a06d2f-X',
     'client' => $post_enc,
     'alg' => '3DES-24');
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, "https://api.ravepay.co/flwv3-pug/getpaidx/api/charge");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata)); //Post Fields
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
    curl_setopt($ch, CURLOPT_TIMEOUT, 200);
    
    
    $headers = array('Content-Type: application/json');
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $request = curl_exec($ch);
    
    if ($request) {
        $result = json_decode($request, true);
        echo "<pre>";
        print_r($result);
    }else{
        if(curl_error($ch))
        {
            echo 'error:' . curl_error($ch);
        }
    }
    
    curl_close($ch);
}

payviamobilemoneygh();

?>
<?php 

//verify payment


$result = array();

$postdata =  array( 
  'txref' => 'rave-checkout-1523183226335',
  'SECKEY' => 'FLWSECK-e6db11d1f8a6208de8cb2f94e293450e-X'
  );

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/verify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($postdata));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
  'Content-Type: application/json',
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$request = curl_exec ($ch);
$err = curl_error($ch);

if($err){
    // there was an error contacting rave
  die('Curl returned error: ' . $err);
}


curl_close ($ch);

$result = json_decode($request, true);

if('error' == $result->status){
  // there was an error from the API
  die('API returned error: ' . $result->message);
}

if('successful' == $result->data->status && '00' == $result->data->chargecode){
  // transaction was successful...
  // please check other things like whether you already gave value for this ref
  // If the amount and currency matches the expected amount and currency etc.
  // if the email matches the customer who owns the product etc
  // Give value
}
?>


<?php
//jason output after verifijcation
//sample
{
    "status": "success",
    "message": "Tx Fetched",
    "data": 
      {
        "txid": 126088,
        "txref": "rave-checkout-1523183226335",
        "flwref": "flwm3s4m0c1523183281767",
        "devicefingerprint": "9f04df238ec44e48babdd6f02bf3dfec",
        "cycle": "one-time",
        "amount": 2000,
        "currency": "UGX",
        "chargedamount": 2000,
        "appfee": 0,
        "merchantfee": 0,
        "merchantbearsfee": 1,
        "chargecode": "00",
        "chargemessage": "Pending Payment Validation",
        "authmodel": "MOBILEMONEY",
        "ip": "197.149.95.62",
        "narration": "Synergy Group",
        "status": "successful",
        "vbvcode": "N/A",
        "vbvmessage": "N/A",
        "authurl": "NO-URL",
        "acctcode": "00",
        "acctmessage": "Approved",
        "paymenttype": "mobilemoneyuganda",
        "paymentid": "N/A",
        "fraudstatus": "ok",
        "chargetype": "normal",
        "createdday": 0,
        "createddayname": "SUNDAY",
        "createdweek": 14,
        "createdmonth": 3,
        "createdmonthname": "APRIL",
        "createdquarter": 2,
        "createdyear": 2018,
        "createdyearisleap": false,
        "createddayispublicholiday": 0,
        "createdhour": 10,
        "createdminute": 28,
        "createdpmam": "am",
        "created": "2018-04-08T10:28:01.000Z",
        "customerid": 22823,
        "custphone": "0578922930",
        "custnetworkprovider": "UNKNOWN PROVIDER",
        "custname": "Anonymous Customer",
        "custemail": "user@example.com",
        "custemailprovider": "COMPANY EMAIL",
        "custcreated": "2018-04-08T10:28:01.000Z",
        "accountid": 134,
        "acctbusinessname": "Synergy Group",
        "acctcontactperson": "Desola Ade",
        "acctcountry": "NG",
        "acctbearsfeeattransactiontime": 1,
        "acctparent": 1,
        "acctvpcmerchant": "N/A",
        "acctalias": "temi",
        "acctisliveapproved": 0,
        "orderref": null,
        "paymentplan": null,
        "paymentpage": null,
        "raveref": null,
        "amountsettledforthistransaction": 2000
      }
  }
?>

//jumbtron
<div class="jumbotron">
<h1 class="display-4">Hello, world!</h1>
<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
<hr class="my-4">
<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
<p class="lead">
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</p>
</div>

//badges
<button type="button" class="btn btn-primary">
  Profile <span class="badge badge-light">9</span>
  <span class="sr-only">unread messages</span>
</button>

<button type="button" class="btn btn-primary">
  Notifications <span class="badge badge-light">4</span>
</button>

//modal
<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>

<!-- Small modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
//collapses
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>

//pagnation
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

//