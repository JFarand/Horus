<style>
header.hel-header {
	display: block;
	position: relative;
	width: 100vw;
	padding-bottom: 12px;
	padding-left: 12px;
	padding-right: 12px;
	background-color: seagreen;
	color: #f2f2f2;
}

header.hel-header .flex {
	display: flex;
}

header.hel-header section {
	flex-wrap: wrap;
	width: 100%;
	position: relative;
	flex-direction: row;
}

header.hel-header section div.logo {
	      display: block;
        flex-grow: 0;
				flex-shrink: 0;
        flex-basis: 300px;

}

header.hel-header section div.OWLTalk {
	flex-grow: 0;
	flex-shrink: 0;
	flex-basis: 300px;
	line-height: 1.3;
	margin-bottom: 6px;
	margin-left: 6px;
}

header.hel-header section div.donateForm {
	flex-grow:1;
	flex-shrink: 0;
	flex-basis: 600px;
	margin: 0 auto;
	flex-direction: column;
	justify-content: center;
}

/*radio button specific code*/

.radio-wrap.half {
	width: 49.6%;
}

.radio-wrap.sixth {
	width: 16%;
}

.radio-wrap {
	position: relative;
  display: inline-block;
	cursor: pointer;
}

label {
	cursor: pointer;
}

.table-row {
	display: table-row;
	width: 100%;
}

:root input.custom-radio {
	position: absolute;
	clip: rect(0,0,0,0);
}

.donateForm__submitBank__paypal {
	display: block;
	position: relative;
	width: 221px;
  margin: 3px auto;
	cursor: pointer;
}

header.hel-header section div.donateForm__top {
	border: 3px solid #f2f2f2;
	border-radius: 9px 9px 9px 9px;

}

header.hel-header section div.donateForm div.donateForm__top {
	display: table;
	width: 600px;
	margin: 0 auto;
	text-align: center;
	margin-bottom: 6px;
}

header.hel-header section div.donateForm div.donateForm__top div.donateForm__topMonthly {

}

header.hel-header section div.donateForm div.donateForm__top div.donateForm__topOnce {

}


:root input.custom-radio:checked ~ label {
	color: #f2f2f2;
	background-color: seagreen;
}

:root input.custom-radio ~ label  {
	background-color: #f2f2f2;
	color: seagreen;
	width: 100%;
	position: relative;
	display: block;
	line-height: 30px;
}

/*radio button specific code done*/

.donateForm__Name {
	width: 600px;
	margin: 0 auto;
	display: block;

}

header.hel-header input[type="text"] {
	background-color: #f2f2f2;
	color: #2e8b57;
	border-radius: 9px 9px 9px 9px;
	appearance: none;
	-moz-appearance: none;
	-webkit-appearance: none;
	box-shadow: none;
  border-style: solid;
	height: 36px;
	width: 30%;
}

header.hel-header input[type="text"]:focus {
	outline: none;
}

header.hel-header section div.donateForm__amount {
	border: 3px solid #f2f2f2;
	border-radius: 9px 9px 9px 9px;
	background-color: #f2f2f2;
}


header.hel-header section div.donateForm div.donateForm__amount {
	display: table;
	width: 600px;
	margin: 0 auto;
	text-align: center;
	margin-bottom: 6px;
}

header.hel-header section div.donateForm div.donateForm__amount > div[class*='_amount'] {
	display: table-cell;

}

</style>
<header class="hel-header">
  <section class="flex">
    <div class="logo"><?php get_template_part('ghosthoruslogo'); ?></div>
    <div class="OWLTalk">
      <h3>Special Message From OWL:</h3>
      <p>If you can afford to donate $6, you can help OWL's Asylum to continue its growth. Help me and my Asylum continue this movement of critical thinking, Black Media Trust, and cultural analysis.</p>
      <p>Whatever proceeds you can contribute, OWL will be matching, so pitch in now!!!</p>
    </div>
    <div class="donateForm flex">
			<form class="" action="" method="post" name="helForm">
				<div class="donateForm__top">
					<fieldset class="table-row">
						<div class="donateForm__topMonthly radio-wrap half">
							<input type="radio" name="donationFrequency" value="Monthly" class="custom-radio" id="donateMonthly" checked="yes">
							<label for="donateMonthly">Monthly</label>
						</div>
		        <div class="donateForm__topOnce radio-wrap half">
							<input type="radio" name="donationFrequency" value="OneTime" class="custom-radio" id="donateOneTime">
							<label for="donateOneTime">One-time</label>
						</div>
					</fieldset>
	      </div><!--donateForm__top done-->

	      <div class="donateForm__amount table">
					<fieldset class="table-row">
						<div class="donateForm__amount6 radio-wrap sixth">
							<input type="radio" name="donationAmount" value="$6" id="amount6" class="custom-radio" checked="yes">
							<label for="amount6">$6</label>
						</div>
		        <div class="donateForm__amount12 radio-wrap sixth">
							<input type="radio" name="donationAmount" value="$12" id="amount12" class="custom-radio">
							<label for="amount12">$12</label>
						</div>
		        <div class="donateForm__amount18 radio-wrap sixth">
							<input type="radio" name="donationAmount" value="$18" id="amount18" class="custom-radio">
							<label for="amount18">$18</label>
						</div>
		        <div class="donateForm__amount36 radio-wrap sixth">
							<input type="radio" name="donationAmount" value="$36" id="amount36" class="custom-radio">
							<label for="amount36">$36</label>
						</div>
		        <div class="donateForm__amount300 radio-wrap sixth">
							<input type="radio" name="donationAmount" value="$300" id="amount300" class="custom-radio">
							<label for="amount300">$300</label>
						</div>
		        <div class="donateForm__amountOther radio-wrap sixth">
							<input type="radio" name="donationAmount" value="Other" id="amountOther" class="custom-radio">
							<label for="amountOther">Other</label>
						</div>
					</fieldset>
	      </div>
	      <div class="donateForm__Name">
	        <label for="donateFormFirstName">First Name</label>
	        <input type="text" name="donateFormFirstName">
					<label for="donateFormLastName">Last Name</label>
	        <input type="text" name="donateFormLastName">
	      </div>
	      <div class="donateForm__submitBank">
	        <div class="donateForm__submitBank__paypal">
						<?php require 'paypal.php'; ?>
	        </div>
	      </div>
		</form>
    </div><!--close DonateForm -->
  </section>
</header>
<script>
	var paypalBtn = document.querySelector('.donateForm__submitBank__paypal'),
			valueFromFrequencyForm = document.forms['helForm']['donationFrequency'].value,
			valueFromAmountForm =  document.forms['helForm']['donationAmount'].value,
			firstName = document.forms['helForm']['donationFormFirstName'].value,
			lastName = document.forms['helForm']['donationFormLastName'].value;

	if(valueFromFrequencyForm === "OneTime")var recurring = false;

	paypalBtn.onclick = ()=>{
		//console.log("How often: "+valueFromFrequencyForm + " How much: "+valueFromAmountForm+" Is Recurring: "+recurring);
	  // window.location.href = "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=K8WX2CXNLHJYG&no_note=1&amount="+valueFromAmountForm+"&a3="+valueFromAmountForm+"&p3=24&t3=M&src="+(recurring ? "1":"0");
		  window.location.href = "https://www.paypal.com/cgi-bin/webscr?cmd=_donations&no_note=1&amount="+valueFromAmountForm+"&a3="+valueFromAmountForm+"&p3=24&t3=M&src="+(recurring ? "1":"0")+"&sra=1&bn=OwlAsylum_Donate_WPS_US&business=jfarand@jfarand.com&return=https://www.owlasylum.net&item_name=donations&first_name="+firstName+"&last_name="+lastName;

	}
</script>
