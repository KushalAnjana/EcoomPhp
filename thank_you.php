<?php 
require('top.php')
?>
<style>
    .cf:before,
.cf:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}
.cf:after {
    clear: both;
}
/* For IE 6/7 only Include this rule to trigger hasLayout and contain floats. */
.cf {
    *zoom: 1;
}

.crReciept {
  border: solid 1px rgba(0, 0, 0, 0.15);
  max-width: 500px;

  margin: 0 auto;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  background: #f2f2f2;
  margin-bottom: 25px;
}
.crReciept h2 {
  color: #2E8B57;
}
.crReciept h3 span{
  color: #2E8B57;
}

.crTitle {
  max-width: 400px; 
  margin: 0 auto;
  
}
.crTitle img {
  /* float: left; */
  width: 150px
  
}
.crItem {
  margin: 0 20px;
  border-top: solid 1px #ccc;
  border-bottom: solid 1px #ccc;
  display: block;
  clear: both;
}
.crItem p:first-child {
  float: left;
  max-width: 70%;
  text-align: left;
}
.crAmount {
  font-size: 32px;
  font-weight: bold;
  line-height: 10px;
  float: right;
  margin: 22px 0;
}
.crAmount sup {
  font-size: 18px;
}

.paymentInfo {
  text-align: left;
  padding-left: 25px;
  padding-bottom: 10px;
}

.crReciept a {
  text-decoration: none;
  color: #000;
  font-weight: bold;
}
.crReciept a:hover {
  color: #FF0034;
}
  
</style>
<div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-9 col-md-offset-3 col-md-9">
<br><br><br><br><br><br><br><br><br><br>
<div class="crReciept">
    <h2>Thank You</h2>
    
    <p>Questions about your order?<br>Contact us at: <a href="contactspotify.html" target="_blank">Karigar/Contact</a></p>
  </div>
  
                </div>