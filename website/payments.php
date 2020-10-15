<b>Balance:</b> <b><span id="balance" style="font-size:28px;">0</span></b> points<br/><br/>
<button id="rzp-button1">Make a Payment</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var PROFILE_BALANCE_POINTS=0;
var options = {
    "key": "rzp_test_smHMQSdt5KOYRk",
    "amount": "150000",
    "name": "KalyanaVeena.com",
    "description": "Purchase Description",
    "image": "http://localhost/KalynVna/website/images/logo-square.png",
    "handler": function (response){
      if(response.razorpay_payment_id.length>0){
	    PROFILE_BALANCE_POINTS=PROFILE_BALANCE_POINTS+10;
	    document.getElementById("balance").innerHTML=PROFILE_BALANCE_POINTS;
	  }
    },
    "prefill": {
        "name": "",
        "email": ""
    },
    "notes": {
        "address": ""
    },
    "theme": {
        "color": "#F37254"
    }
};
var rzp1 = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>