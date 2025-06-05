<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Card Checker - Trojan</title>
<!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Use our premium tools for free to create your free premium accounts." />
<meta name="keywords" content="cc checker,ccgen,ros checker,credit card,cc,credit card checker,credit card generator">
<meta name="author" content="Trojan" />
<link rel="icon" href="png/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/waves.min.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/feather.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome-n.min.css">
<link rel="stylesheet" href="css/chartist.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/widget.css">
<link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
</head>
<body>
    <style type="text/css">
:root {
  --md-sys-color-primary: #6750A4;
  --md-sys-color-on-primary: #FFFFFF;
  --md-sys-color-secondary: #625B71;
  --md-sys-color-background: #FFFFFF;
  --md-sys-color-surface: #FFFFFF;
}
             body {
    background: var(--md-sys-color-background);
    transition: background 0.2s linear;
}   
        body.dark {
    background: #292C35;
}
.mdc-button--raised {
  background-color: var(--md-sys-color-primary);
  color: var(--md-sys-color-on-primary);
}
.mdc-button--outlined {
  border-color: var(--md-sys-color-primary);
  color: var(--md-sys-color-primary);
}

.checkbox {
    opacity: 0;
    position: absolute;
}

.label1 {
    background-color: #111;
    border-radius: 50px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2px;
    position: relative;
    height: 18px;
    width: 33px;
    transform: scale(1.5);
}

.label1 .ball {
    background-color: #fff;
    border-radius: 50%;
    position: absolute;
    top: 2px;
    left: 2px;
    height: 14px;
    width: 14px;
    transform: translateX(0px);
    transition: transform 0.2s linear;
}

.checkbox:checked + .label1 .ball {
    transform: translateX(15px);
}


.fa-moon {
    color: #f1c40f;
}

.fa-sun {
    color: #f39c12;
}


/* SOCIAL PANEL CSS */
.social-panel-container {
    position: fixed;
    right: 0;
    bottom: 80px;
    transform: translateX(100%);
    transition: transform 0.4s ease-in-out;
}

.social-panel-container.visible {
    transform: translateX(-10px);
}

.social-panel { 
    background-color: #fff;
    border-radius: 16px;
    box-shadow: 0 16px 31px -17px rgba(0,31,97,0.6);
    border: 5px solid #001F61;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: 'Muli';
    position: relative;
    height: 169px;  
    width: 370px;
    max-width: calc(100% - 10px);
}

.social-panel button.close-btn {
    border: 0;
    color: #97A5CE;
    cursor: pointer;
    font-size: 20px;
    position: absolute;
    top: 5px;
    right: 5px;
}

.social-panel button.close-btn:focus {
    outline: none;
}

.social-panel p {
    background-color: #001F61;
    border-radius: 0 0 10px 10px;
    color: #fff;
    font-size: 14px;
    line-height: 18px;
    padding: 2px 17px 6px;
    position: absolute;
    top: 0;
    left: 50%;
    margin: 0;
    transform: translateX(-50%);
    text-align: center;
    width: 235px;
}

.social-panel p i {
    margin: 0 5px;
}

.social-panel p a {
    color: #FF7500;
    text-decoration: none;
}

.social-panel h4 {
    margin: 20px 0;
    color: #97A5CE; 
    font-family: 'Muli';    
    font-size: 14px;    
    line-height: 18px;
    text-transform: uppercase;
}

.social-panel ul {
    display: flex;
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.social-panel ul li {
    margin: 0 10px;
}

.social-panel ul li a {
    border: 1px solid #DCE1F2;
    border-radius: 50%;
    color: #001F61;
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    width: 50px;
    text-decoration: none;
}

.social-panel ul li a:hover {
    border-color: #FF6A00;
    box-shadow: 0 9px 12px -9px #FF6A00;
}

.floating-btn {
    border-radius: 26.5px;
    background-color: #001F61;
    border: 1px solid #001F61;
    box-shadow: 0 16px 22px -17px #03153B;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    line-height: 20px;
    padding: 12px 20px;
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 999;
}

.floating-btn:hover {
    background-color: #ffffff;
    color: #001F61;
}

.floating-btn:focus {
    outline: none;
}

.floating-text {
    background-color: #001F61;
    border-radius: 10px 10px 0 0;
    color: #fff;
    font-family: 'Muli';
    padding: 7px 15px;
    position: fixed;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    z-index: 998;
}
.darkmode{
        float: right;
        padding-right: 16px;
}

.floating-text a {
    color: #FF7500;
    text-decoration: none;
}

@media screen and (max-width: 480px) {

    .social-panel-container.visible {
        transform: translateX(0px);
    }
    
    .floating-btn {
        right: 10px;
    }
}



    </style>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>


<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-body">
<div class="row">
<div class="col-md-12 col-xl-8">
<div class="card sale-card">
<div class="card-header">
<h5>CC Checker <label class="badge badge-info">#Trojan</label></h5>
<div class="darkmode">
    <input type="checkbox" class="checkbox" id="chk" />
    <label class="label1" for="chk">
        <i class="fas fa-moon" style=" font-size: 13px;"></i>
        <i class="fas fa-sun" style=" font-size: 14px;"></i>
        <div class="ball"></div>
    </label>
</div>
</div>
<div class="card-block">
<textarea id="lista" class="form-control" rows="16" cols="5"></textarea>
<br />
<center>
  <button class="mdc-button mdc-button--raised" id="testar" onclick="if (!window.__cfRLUnblockHandlers) return false; enviar()">
    <span class="mdc-button__label">Start</span>
  </button>
  <button class="mdc-button mdc-button--outlined" id="stop">
    <span class="mdc-button__label">Stop</span>
  </button>
</center>
</div>
</div>
</div>
<div class="col-md-12 col-xl-4">
<div class="card comp-card">
<div class="card-body">
<div class="row align-items-center">
<div class="col">
<h6 class="m-b-25">LIVE</h6>
<h3 class="f-w-700 text-c-green" id="cLive">0</h3>
</div>
<div class="col-auto">
<i class="fas fa-check bg-c-green"></i>
</div>
</div>
</div>
</div>
<div class="card comp-card">
<div class="card-body">
<div class="row align-items-center">
<div class="col">
<h6 class="m-b-25">DEAD</h6>
<h3 class="f-w-700 text-c-red" id="cDie">0</h3>
</div>
<div class="col-auto">
<i class="fas fa-times bg-c-red"></i>
</div>
</div>
</div>
</div>
<div class="card comp-card">
<div class="card-body">
<div class="row align-items-center">
<div class="col">
<h6 class="m-b-25">CHECKED</h6>
<h3 class="f-w-700 text-c-yellow" id="total">0</h3>
</div>
<div class="col-auto">
<i class="fas fa-hand-paper bg-c-yellow"></i>
</div>
</div>
</div>
</div>
<div class="card comp-card">
<div class="card-body">
<div class="row align-items-center">
<div class="col">
<h6 class="m-b-25">TOTAL</h6>
<h3 class="f-w-700 text-c-blue" id="carregadas">0</h3>
</div>
<div class="col-auto">
<i class="fas fa-credit-card bg-c-blue"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="card sale-card">
<div class="card-header">
<h5><label class="label label-success">Live</label> <label class="badge badge-success" id="cLive2">0</label></h5>
<button id="mostra" class="btn btn-primary waves-effect waves-light" style="display: none;">SHOW/HIDE</button>
</div>
<div class="card-block">
<div id="bode">
</div>
<span id=".aprovadas" class="aprovadas"></span>
</div>
</div>
<div class="card sale-card">
<div class="card-header">
<h5><label class="label label-danger">DEAD</label> <label class="badge badge-danger" id="cDie2">0</label></h5>
<button id="mostra2" class="btn btn-primary waves-effect waves-light" style="display: none;">SHOW/HIDE</button>
</div>
<div class="card-block">
<div id="bode2">
</div>
<span id=".reprovadas" class="reprovadas"></span>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
<center>&copy; 2020 - <a href="#" target="_blank">Trojan</a>
<br>
Powered By : <a href="#" target="_blank">Trojan</a>
</center>
<br>
</div>
</div>
</div>
</div>
<!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="../files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="../files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="../files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
<![endif]-->
<script type="text/javascript">
    const chk = document.getElementById('chk');

chk.addEventListener('change', () => {
    document.body.classList.toggle('dark');
});


</script>
<script title="ajax do checker" type="1f5a4002f24b6979f3d96e8f-text/javascript" src="js/js.js"></script>
<script data-cfasync="false" src="js/email-decode.min.js"></script>
<script type="1f5a4002f24b6979f3d96e8f-text/javascript" src="js/jquery.min.js"></script>
<script type="1f5a4002f24b6979f3d96e8f-text/javascript" src="js/jquery-ui.min.js"></script>
<script type="1f5a4002f24b6979f3d96e8f-text/javascript" src="js/popper.min.js"></script>
<script type="1f5a4002f24b6979f3d96e8f-text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/waves.min.js" type="1f5a4002f24b6979f3d96e8f-text/javascript"></script>
<script type="1f5a4002f24b6979f3d96e8f-text/javascript" src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.flot.js" type="1f5a4002f24b6979f3d96e8f-text/javascript"></script>
<script src="js/jquery.flot.categories.js" type="1f5a4002f24b6979f3d96e8f-text/javascript"></script>
<script src="js/jquery.flot.tooltip.min.js" type="1f5a4002f24b6979f3d96e8f-text/javascript"></script>
<script src="js/serial.js" type="1f5a4002f24b6979f3d96e8f-text/javascript"></script>
<script src="js/light.js" type="1f5a4002f24b6979f3d96e8f-text/javascript"></script>
<script src="js/pcoded.min.js" type="1f5a4002f24b6979f3d96e8f-text/javascript"></script>
<script src="js/vertical-layout.min.js" type="1f5a4002f24b6979f3d96e8f-text/javascript"></script>
<script type="1f5a4002f24b6979f3d96e8f-text/javascript" src="js/custom-dashboard.min.js"></script>
<script type="1f5a4002f24b6979f3d96e8f-text/javascript" src="js/script.min.js"></script>
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script>
  mdc.ripple.MDCRipple.attachTo(document.querySelector("#testar"));
  mdc.ripple.MDCRipple.attachTo(document.querySelector("#stop"));
</script>
<script type="1f5a4002f24b6979f3d96e8f-text/javascript" charset="utf-8">
</script><script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="1f5a4002f24b6979f3d96e8f-|49" defer=""></script></body>
</html>