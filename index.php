<!DOCTYPE html>
<html lang="en-gb" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Checker</title>
  <link rel="shortcut icon" type="image/png" href="https://via.placeholder.com/16x16">
  <link href="./Checker -_files/css.css" rel="stylesheet">
  <link rel="stylesheet" href="./Checker -_files/main.css">
  <link rel="stylesheet" href="./Checker -_files/hyper.css">
  <link rel="stylesheet" href="./Checker -_files/animate.min.css">
  <script src="./Checker -_files/uikit.js"></script>
<style type="text/css">.tata {
  position: fixed;
  display: flex;
  justify-content: space-around;
  align-items: center;
  width: 300px;
  border-radius: 3px;
  color: #ffffff;
  font-size: 16px;
  z-index: 9999;
  pointer-events: auto;
  padding: 12px 14px 12px 20px;
  box-shadow: 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12), 0 11px 15px -7px rgba(0, 0, 0, 0.2);
}

.tata:hover {
  opacity: 1;
}

.tata * {
  box-sizing: border-box;
}

.tata .tata-icon {
  font-size: 2em;
  color: inherit;
}

.tata .tata-body {
  margin: 0;
  padding: 0 14px;
  min-height: 38px;
  min-width: 260px;
}

.tata .tata-title {
  margin: 0 0 2px 0;
  font-size: 1em;
}

.tata .tata-text {
  margin: 0;
  font-size: .9em;
}

.tata .tata-close {
  position: absolute;
  top: 6px;
  right: 6px;
  border: none;
  margin: 0;
  padding: 0;
  font-size: 1em;
  font-weight: bold;
  color: inherit;
  cursor: pointer;
  outline: none;
  background: transparent;
}

.tata-progress {
  position: absolute;
  bottom: -1px;
  left: 0;
  width: 100%;
  height: 5px;
  border-radius: 0 0 3px 3px;
  background: rgba(0, 0, 0, 0.2);
}

.tata .tata-close:hover {
  opacity: 0.4;
}

.tata.top-right {
  top: 12px;
  right: 12px;
}

.tata.top-mid {
  top: 12px;
  left: 50%;
  transform: translateX(-50%);
}

.tata.top-left {
  top: 12px;
  left: 12px;
}

.tata.bottom-right {
  right: 12px;
  bottom: 18px;
}

.tata.bottom-mid {
  left: 50%;
  bottom: 18px;
  transform: translateX(-50%);
}

.tata.bottom-left {
  bottom: 18px;
  left: 12px;
}

.tata.mid-right {
  top: 50%;
  right: 12px;
  transform: translateY(-50%);
}

.tata.mid-left {
  top: 50%;
  left: 12px;
  transform: translateY(-50%);
}

.tata.mid-mid {
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.tata.text {
  color: #fff;
  background: #323232;
}

.tata.log {
  color: #333333;
  background: #fffffc;
}

.tata.info {
  background: #2ca9e1;
}

.tata.warn {
  background: #f89406;
}

.tata.error {
  background: #e9546b;
}

.tata.success {
  background: #38b48b;
}

.tata.fade-in {
  animation: .4s ease-in fadeIn forwards;
}

.tata.fade-out {
  animation: .4s linear fadeOut forwards;
}

.tata.slide-right-in {
  animation: .4s ease slideRightIn forwards;
}

.tata.slide-right-out {
  animation: .4s ease slideRightOut forwards;
}

.tata.slide-left-in {
  animation: .4s ease slideLeftIn forwards;
}

.tata.slide-left-out {
  animation: .4s ease slideLeftOut forwards;
}

.tata.slide-top-in {
  animation: .4s ease slideTopIn forwards;
}

.tata.slide-top-out {
  animation: .4s ease slideTopOut forwards;
}

.tata.slide-bottom-in {
  animation: .4s ease slideBottomIn forwards;
}

.tata.slide-bottom-out {
  animation: .4s ease slideBottomOut forwards;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
  }
}

@keyframes slideRightIn {
  from {
    right: -310px;
  }

  to {
    right: 12px;
  }
}

@keyframes slideRightOut {
  from {
    right: 12px;
  }

  to {
    right: -310px;
  }
}

@keyframes slideLeftIn {
  from {
    left: -310px;
  }

  to {
    left: 12px;
  }
}

@keyframes slideLeftOut {
  from {
    left: 12px;
  }

  to {
    left: -310px;
  }
}

@keyframes slideTopIn {
  from {
    top: calc(-100% + -12px);
  }
  to {
    top: 12px;
  }
}

@keyframes slideTopOut {
  from {
    top: 12px;
  }
  to {
    top: calc(-100% + -12px);
  }
}

@keyframes slideBottomIn {
  from {
    bottom: calc(-100% + -18px);
  }
  to {
    bottom: 18px;
  }
}

@keyframes slideBottomOut {
  from {
    bottom: 18px;
  }
  to {
    bottom: calc(-100% + -18px);
  }
}

@keyframes reduceWidth {
  from {
    width: 100%;
  }

  to {
    width: 0%;
  }
}</style><link rel="stylesheet" href="./Checker -_files/icon"></head>

<body>

  
<header class="uk-background-primary uk-background-norepeat uk-background-cover uk-background-center-center uk-light">
	<nav class="uk-navbar-container">
	  <div class="uk-container">
	    <div data-uk-navbar="" class="uk-navbar">
	      <div class="uk-navbar-left">
	        <a class="uk-navbar-item uk-logo uk-visible@m" href="/"><span class="dr_logo"></span>
        </a>
	        <a class="uk-navbar-toggle uk-hidden@m" href="/" data-uk-toggle=""><span data-uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="navbar-toggle-icon"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg></span>
               <!-- <span class="uk-margin-small-left">Articles</span> -->
            </a>
	      </div>
	      <div class="uk-navbar-center uk-hidden@m">
	        <a class="uk-navbar-item uk-logo" href="/"><span class="dr_logo"></span></a>
	      </div>
	      <div class="uk-navbar-right">
	        <ul class="uk-navbar-nav uk-visible@m">
	          <li><a href="#">Home</a></li>
			  				<li><a href="#">Dashboard</a></li>

					          <li><a href="#">Usage</a></li>
	       
	          <li>
	            <div class="uk-navbar-item">
                	              <a class="uk-button uk-button-small uk-button-primary-outline logoutbtn" href="/logout?destroy=sesssion_destroy">Logout</a>
	                            </div>
	          </li>
	        </ul>
	        <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle=""><span data-uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="navbar-toggle-icon"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg></span> <span class="uk-margin-small-left">Menu</span></a>
	      </div>
	    </div>
	  </div>
	</nav>
	
	
</header>
<div id="hyper_progress"></div>
  <div class="uk-section uk-section-muted">
    <div class="uk-container">
      <div class="uk-background-default uk-border-rounded uk-box-shadow-small">
        <div class="uk-container uk-container-xsmall uk-padding-large">
          <article class="uk-article">
            <h1 class="uk-article-title">Non SK Beta

              <p href="" style="float:right;">
                <label class="switch">
                  <input type="checkbox" onclick="darkLight()" id="checkBox">
                  <span class="slider"></span>
                </label>
              </p>
            </h1>
            <div class="uk-article-content">
                            <!-- <p class="uk-text-lead uk-text-muted">Warning: don't use generated ccs don't be noob!</p> -->
              <div class="uk-form-stacked uk-margin-medium-top">

                <div class="uk-margin-bottom">
                  <!-- <span id="totalCount">430</span> -->
                  <label class="uk-form-label" for="message"><span>Drop Ccs
                      <span class="tag_required" id="lista_leb">Required</span></span>
                    <span class="tag_total">Total <span id="totalCount">0</span></span>

                    <span class="tag_info">Checked <span id="totalChecked">0</span></span>
                  </label>
                  <div class="uk-form-controls" id="lista_con">
                    <textarea id="message" class="hyper_ccs uk-textarea uk-border-rounded" placeholder="XXXXXXXXXXXXX|XX|XXXX|XXX" name="lista" rows="5" minlength="10" required=""></textarea>
                  </div>
                </div>

                <div class="uk-margin-bottom" id="amount_container">
                  <label class="uk-form-label" for="name">Amount <span class="tag_optional">optional</span></label>
                  <div class="uk-form-controls hyper_login">
                    <input id="amount" class="hyper_input uk-input uk-border-rounded" name="name" type="number" placeholder="Enter amount (leave blank)" required="">
                  </div>
                </div>

                <!-- <div class="uk-margin-bottom">
                <label class="uk-form-label" for="_subject">SK KEY</label>
                <div class="uk-form-controls hyper_login">
                  <input id="_subject" class="hyper_input uk-input uk-border-rounded" placeholder="sk_live_xxxxxxxx" name="_subject" type="text">
                </div>
              </div> -->

                <div class="uk-text-center">
                  <button class="uk-button uk-button-primary uk-border-rounded" id="startbtn" type="submit" >start check</button>
                  <button class="uk-button uk-button-primary uk-border-rounded" id="stopbtn" type="submit" style="display: none;"> Reload It</button>

                </div>
              </div>




              <div class="uk-card card_cvv uk-card-category hyper_mt3 uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded uk-width-1-1">
                <!-- <a class="uk-position-cover" href="article.html"></a> -->
                <h3 class="uk-card-title uk-margin-remove uk-text-primary green_title">CVV - <span id="cvvCount">0</span>

                  <span id="showCvv">Show</span>
                  <span id="saveCvv" style="display: none;">Save</span>
                </h3>
                <span id="cvvList" style="display: none;">
                  <!-- <p class="uk-margin-small-top">4562463863427327|12|22|223 - Insufficient Funds</p>
                <p class="uk-margin-small-top">5362463863427326|12|27|674 - Insufficient Funds</p> -->
                </span>

              </div>

              <!-- ccn  -->
              <div class="uk-card ccn_card uk-card-category hyper_mt3 uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded uk-width-1-1">

                <h3 class="uk-card-title uk-margin-remove uk-text-primary warn_title">CCN - <span id="ccnCount">0</span>
                  <span id="showCcn">Show</span>
                  <span id="saveCcn" style="display: none;">Save</span>
                </h3>
                <span id="ccnList" style="display: none;">
                  <!-- <p class="uk-margin-small-top">4562463863427327|12|22|223</p> -->
                </span>


              </div>

              <!-- dead  -->
              <div class="uk-card dead_card uk-card-category hyper_mt3 uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded uk-width-1-1">

                <h3 class="uk-card-title uk-margin-remove uk-text-primary dead_title">Ded - <span id="deadCount">0</span>
                  <span id="showDead">Show</span>
                </h3>
                <div id="deadList" style="display: none;">
                </div>

              </div>

            </div>
          </article>
        </div>
      </div>
    </div>
  </div>

  


<div id="offcanvas-docs" data-uk-offcanvas="overlay: true" class="uk-offcanvas">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close uk-icon uk-close" type="button" data-uk-close=""><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" data-svg="close-icon"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></button>
    <h5 class="uk-margin-top">Contact us</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li class="uk-active"><a href="https://t.me/hackerbdgroup">Join Group</a></li>
      <li><a href="https://t.me/hackerbd1">Join Channel</a></li>
    </ul>
  
  </div>
</div>

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true" class="uk-offcanvas">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="/"><span class="dr_logo"></span></a>
    <button class="uk-offcanvas-close uk-icon uk-close" type="button" data-uk-close=""><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" data-svg="close-icon"><line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-top uk-text-center">
      <li><a href="/">Home</a></li>
      <li><a href="?utm_source=drchcker">Create Token</a></li>
              <li>
        <div class="uk-navbar-item"><a class="uk-button uk-button-primary logoutbtn" href="logout?seession_destroy=true">Logout</a></div>
      </li>

            </ul>
    <div class="uk-margin-top uk-text-center">
      <div data-uk-grid="" class="uk-child-width-auto uk-grid-small uk-flex-center uk-grid uk-grid-stack">
        
        <div>
          <a href="https://t.me/hackerbd1" data-uk-icon="icon: telegram" class="uk-icon-link uk-icon" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="uk-section uk-text-center uk-text-muted">
	<div class="uk-container uk-container-small">
		<div>
			<ul class="uk-subnav uk-flex-center">
				<li><a href="/">Home</a></li>
				<li><a href="#">Support</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<div class="uk-margin-medium hyper_social">
			<div data-uk-grid="" class="uk-child-width-auto uk-grid-small uk-flex-center uk-grid">
				<div class="uk-first-column">
					<a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link uk-icon" target="_blank"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="twitter"><path d="M19,4.74 C18.339,5.029 17.626,5.229 16.881,5.32 C17.644,4.86 18.227,4.139 18.503,3.28 C17.79,3.7 17.001,4.009 16.159,4.17 C15.485,3.45 14.526,3 13.464,3 C11.423,3 9.771,4.66 9.771,6.7 C9.771,6.99 9.804,7.269 9.868,7.539 C6.795,7.38 4.076,5.919 2.254,3.679 C1.936,4.219 1.754,4.86 1.754,5.539 C1.754,6.82 2.405,7.95 3.397,8.61 C2.79,8.589 2.22,8.429 1.723,8.149 L1.723,8.189 C1.723,9.978 2.997,11.478 4.686,11.82 C4.376,11.899 4.049,11.939 3.713,11.939 C3.475,11.939 3.245,11.919 3.018,11.88 C3.49,13.349 4.852,14.419 6.469,14.449 C5.205,15.429 3.612,16.019 1.882,16.019 C1.583,16.019 1.29,16.009 1,15.969 C2.635,17.019 4.576,17.629 6.662,17.629 C13.454,17.629 17.17,12 17.17,7.129 C17.17,6.969 17.166,6.809 17.157,6.649 C17.879,6.129 18.504,5.478 19,4.74"></path></svg></a>
				</div>
				
				<div>
					<a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link uk-icon" target="_blank"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="instagram"><path d="M13.55,1H6.46C3.45,1,1,3.44,1,6.44v7.12c0,3,2.45,5.44,5.46,5.44h7.08c3.02,0,5.46-2.44,5.46-5.44V6.44 C19.01,3.44,16.56,1,13.55,1z M17.5,14c0,1.93-1.57,3.5-3.5,3.5H6c-1.93,0-3.5-1.57-3.5-3.5V6c0-1.93,1.57-3.5,3.5-3.5h8 c1.93,0,3.5,1.57,3.5,3.5V14z"></path><circle cx="14.87" cy="5.26" r="1.09"></circle><path d="M10.03,5.45c-2.55,0-4.63,2.06-4.63,4.6c0,2.55,2.07,4.61,4.63,4.61c2.56,0,4.63-2.061,4.63-4.61 C14.65,7.51,12.58,5.45,10.03,5.45L10.03,5.45L10.03,5.45z M10.08,13c-1.66,0-3-1.34-3-2.99c0-1.65,1.34-2.99,3-2.99s3,1.34,3,2.99 C13.08,11.66,11.74,13,10.08,13L10.08,13L10.08,13z"></path></svg></a>
				</div>
				<div>
					<a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link uk-icon" target="_blank"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="vimeo"><path d="M2.065,7.59C1.84,7.367,1.654,7.082,1.468,6.838c-0.332-0.42-0.137-0.411,0.274-0.772c1.026-0.91,2.004-1.896,3.127-2.688 c1.017-0.713,2.365-1.173,3.286-0.039c0.849,1.045,0.869,2.629,1.084,3.891c0.215,1.309,0.421,2.648,0.88,3.901 c0.127,0.352,0.37,1.018,0.81,1.074c0.567,0.078,1.145-0.917,1.408-1.289c0.684-0.987,1.611-2.317,1.494-3.587 c-0.115-1.349-1.572-1.095-2.482-0.773c0.146-1.514,1.555-3.216,2.912-3.792c1.439-0.597,3.579-0.587,4.302,1.036 c0.772,1.759,0.078,3.802-0.763,5.396c-0.918,1.731-2.1,3.333-3.363,4.829c-1.114,1.329-2.432,2.787-4.093,3.422 c-1.897,0.723-3.021-0.686-3.667-2.318c-0.705-1.777-1.056-3.771-1.565-5.621C4.898,8.726,4.644,7.836,4.136,7.191 C3.473,6.358,2.72,7.141,2.065,7.59C1.977,7.502,2.115,7.551,2.065,7.59L2.065,7.59z"></path></svg></a>
				</div>
			</div>
		</div>
		<div class="uk-margin-medium uk-text-small uk-link-muted">Crafted by <a href="https://anonbd.pro/">ANONBD</a></div>
	</div>
</footer>
  <script src="./Checker -_files/awesomplete.js"></script>
  <script src="./Checker -_files/jquery.js"></script>
  <script src="./Checker -_files/hyper.js"></script>
  <script src="./Checker -_files/hyper.notify.js"></script>
  <script src="./Checker -_files/hyper.checker.js"></script>
  <!-- <script src="js/session.js"></script> -->





</body></html>
