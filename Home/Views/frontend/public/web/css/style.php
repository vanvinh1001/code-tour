<style>
	/*--Author: W3Layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
 --*/

body {
	margin: 0;
	font-family: 'Open Sans', sans-serif;
	background: #fff;
}

body a,
.newsright input[type="submit"],
button {
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
	text-decoration: none;
	outline: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	margin: 0;
	font-family: 'EB Garamond', serif;
}

p {
    margin: 0;
    color: #777;
    font-size: 15px;
    letter-spacing: .5px;
    line-height: 1.8;
    font-weight: 600;
}

ul {
	margin: 0;
	padding: 0;
}

ul {
	list-style-type: none;
}

body a:hover {
	text-decoration: none;
}

body a:focus {
	outline: none;
	text-decoration: none;
}
/*-- bottom-to-top --*/
#toTop {
	display: none;
	text-decoration: none;
	position: fixed;
	bottom: 24px;
	right: 3%;
	overflow: hidden;
	z-index: 999;
	width: 32px;
	height: 32px;
	border: none;
	text-indent: 100%;
	background: url(./Home/Views/frontend/public/web/images//arr.png) no-repeat 0px 0px;
}
#toTopHover {
	width: 32px;
	height: 32px;
	display: block;
	overflow: hidden;
	float: right;
	opacity: 0;
	-moz-opacity: 0;
	filter: alpha(opacity=0);
}
input.form-control.serv_bottom.text-white {
    cursor: pointer;
}
/*-- //bottom-to-top --*/
.top-head span {
    color: #ffff;
    letter-spacing: 2px;
    font-weight: 600;
}

.top-head a {
    color: #ffff;
    letter-spacing: 2px;
}

.top-content-info {
    position: relative;
    margin: 0 0 0.5em 0;
}

/* header */

header h1,
footer h2 {
	line-height: 0;
}
.callnumber li {
    display: inline-block;
    text-align: right;
	color:#fff;
	letter-spacing:2px;
}
.navbar-light {
    padding: 1em 2em;
    position: absolute;
    z-index: 999;
    width: 70%;
    left: 15em;
    background:#02114c57;
}
.navbar-light .navbar-brand {
    color: #fff;
}
a.navbar-brand {
	font-family: 'EB Garamond', serif;
	text-transform: uppercase;
	font-weight: 800;
	font-size: 0.7em;
	letter-spacing: 1px;
	color:#fff;
}

header h1 a span {
	color: #fff;
	display: block;
	font-size: 12px;
	letter-spacing: 5px;
	word-spacing: 5px;
}

.navbar-light .navbar-nav .nav-link {
	font-weight: 600;
	text-transform: capitalize;
	color: #fff;
	letter-spacing: 1px;
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus,
.navbar-light .navbar-nav .show>.nav-link,
.navbar-light .navbar-nav .active>.nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
	color: #b84373;
	background:transparent;
	border-radius: 5px;
}
.dropdown-item {
	color: #fff;
}

.dropdown-item {
	background-color: white;
	color: #000 !important;
}
.w3ls-btn {
    letter-spacing: 1px;
    font-weight: 600;
    background: #b84373;
}

/*-- //header --*/

/* banner */

.banner {
	background: url(./Home/Views/frontend/public/web/images//bg.jpg) no-repeat;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	-ms-background-size: cover;
	background-size: cover;
	height: 50vw;
	position: relative;
}

.inner-banner {
	background: url(./Home/Views/frontend/public/web/images//bg.jpg)no-repeat center;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	-ms-background-size: cover;
	background-size: cover;
	min-height: 280px;
	position: relative;
}

li.breadcrumb-item a {
	color: #000;
	font-weight: 600;
	font-size: 0.95em;
	letter-spacing: 0.5px;
}

.breadcrumb-item.active {
	color: #b84373;
	font-weight: bold;
	font-size: 0.9em;
	letter-spacing: 1px;
}

.banner-text {
    padding: 18vw 37vw 0vw 0vw;
    box-sizing: border-box;
}
/*-- text Slider --*/

#slider {
	box-shadow: none;
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
	margin: 0 auto;
}

.rslides_tabs {
	list-style: none;
	padding: 0;
	background: rgba(0, 0, 0, .25);
	box-shadow: 0 0 1px rgba(255, 255, 255, .3), inset 0 0 5px rgba(0, 0, 0, 1.0);
	-moz-box-shadow: 0 0 1px rgba(255, 255, 255, .3), inset 0 0 5px rgba(0, 0, 0, 1.0);
	-webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .3), inset 0 0 5px rgba(0, 0, 0, 1.0);
	font-size: 18px;
	list-style: none;
	margin: 0 auto 50px;
	max-width: 540px;
	padding: 10px 0;
	text-align: center;
	width: 100%;
}

.rslides_tabs li {
	display: inline;
	float: none;
	margin-right: 1px;
}

.rslides_tabs a {
	width: auto;
	line-height: 20px;
	padding: 9px 20px;
	height: auto;
	background: transparent;
	display: inline;
}

.rslides_tabs li:first-child {
	margin-left: 0;
}

.rslides_tabs .rslides_here a {
	background: rgba(255, 255, 255, .1);
	color: #fff;
	font-weight: bold;
}

.events {
	list-style: none;
}

.callbacks_container {
	position: relative;
}

.callbacks {
	position: relative;
	list-style: none;
	overflow: hidden;
	width: 100%;
	padding: 0;
	margin: 0;
}

.callbacks li {
	position: absolute;
	left: 0;
	top: 0;
}

.callbacks img {
	position: relative;
	z-index: 1;
	height: auto;
	border: 0;
}

.callbacks .caption {
	display: block;
	position: absolute;
	z-index: 2;
	font-size: 20px;
	text-shadow: none;
	color: #fff;
	left: 0;
	right: 0;
	padding: 10px 20px;
	margin: 0;
	max-width: none;
	top: 10%;
	text-align: center;
}

/*
.callbacks_nav {
	position: absolute;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	top: 78%;
	opacity: 0.7;
	z-index: 3;
	text-indent: -9999px;
	overflow: hidden;
	text-decoration: none;
	height: 34px;
	width: 34px;
	background: url("./Home/Views/frontend/public/web/images//left.png") no-repeat 0px 0px;
}
.callbacks_nav.prev {
	left: auto;
	background: url("./Home/Views/frontend/public/web/images//back.png") no-repeat 0px 0px;
	left: 18em;
}
.callbacks_nav.next {
	left: auto;
	background: url("./Home/Views/frontend/public/web/images//next.png") no-repeat 0px 0px;
	right: 18em;
}
.callbacks_nav:active {
	opacity: 1.0;
}
.callbacks2_nav:active {
	opacity: 1.0;
}*/

#slider-pager a {
	display: inline-block;
}

#slider-pager span {
	float: left;
}

#slider-pager span {
	width: 100px;
	height: 15px;
	background: #fff;
	display: inline-block;
	border-radius: 30em;
	opacity: 0.6;
}

#slider-pager .rslides_here a {
	background: #FFF;
	border-radius: 30em;
	opacity: 1;
}

#slider-pager a {
	padding: 0;
}

#slider-pager li {
	display: inline-block;
}

.rslides {
	position: relative;
	list-style: none;
	overflow: hidden;
	padding: 0;
	margin: 0;
	width: 100%;
}

.rslides li {
	-webkit-backface-visibility: hidden;
	position: absolute;
	display: none;
	left: 0%;
	top: 0;
	width: 100%;
}

.rslides li {
	position: relative;
	display: block;
	float: none;
}

.rslides img {
	height: auto;
	border: 0;
}

.callbacks_tabs li {
	display: inline-block;
}

.callbacks_tabs a {
	visibility: hidden;
	line-height: 23px;
	height: 20px;
	text-align: center;
	color: #000;
	font-weight: 600;
	display: block;
	margin-bottom: 10px;
	background: #fff;
	border-radius: 50%;
}

.callbacks_tabs a:after {
	content: "\f111";
	font-size: 0;
	font-family: FontAwesome;
	visibility: visible;
	display: block;
	height: 15px;
	width: 15px;
	display: inline-block;
	background: #b84373;
	border: 2px solid #ffffff;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-o-border-radius: 50%;
	-moz-border-radius: 50%;
	-ms-border-radius: 50%;
}

.callbacks_here a:after {
	background: #000;
	border: 2px solid #ffffff;
}

p.sub-para {
	font-size: 18px;
	color: #fff;
	letter-spacing: 2px;
	font-weight: 300;
}

.slider-info img {
	width: 100px;
	margin: 0 auto;
}

.callbacks_tabs {
	list-style: none;
	position: absolute;
	left: 0%;
	bottom: -100px;
	z-index: 2;
	border-radius: 5px;
}

.slider-top span {
	font-weight: 600;
}

.slider-info h3 {
	font-size: 51px;
	color: #fff;
	letter-spacing: 2px;
	line-height: 1.3em;
	text-transform: capitalize;
}

.slider-info p {
    font-size: 1.1em;
    font-weight: 600;
    margin-top: 1em;
    color: #fff;
    letter-spacing: 2px;
}

.slider-info a {
	color: #fff;
	font-size: 16px;
	font-weight: 600;
	letter-spacing: 1px;
	border-color:#b84373;
	background: #b84373;
}

.slider-info a:hover {
	color: #fff;
	background: #b34fa9;
	border-color: #b34fa9;
}

/* //text slider */

/* //banner */

/*-- services --*/
.agileits-services-grids h4 {
    font-size: 1.3em;
    color: #000;
    text-transform: uppercase;
    line-height: 1.5em;
    letter-spacing: 2px;
    font-weight: 600;
    margin: 10px 0 0;
}

.agileits-services-grids h6 {
    padding: 1px;
    background: #2954a2;
    width: 33%;
    margin: 2em auto 0;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
}

.agileits-services-grids:hover h6 {
    width: 55%;
    background: #2954a2;
}

/*-- Effect 1--*/

.agileits-services-grids i {
    font-size: 2em;
    color: #b84373;
    text-align: center;
}

.agileits-services-grids span {
    width: 40px;
    height: 2px;
    background: #d56e9b;
    display: inline-block;
}
a.service-btn {
    background: #b84373;
    color: #fff;
    font-size: 14px;
    text-transform: capitalize;
    padding: 6px 15px;
    display: inline-block;
    margin: 18px 0 0;
    border-radius: 5px;
    letter-spacing: 1px;
}
.w3ls-titles p {
    width: 76%;
}
/*-- //services --*/
/* blog */


.card-header:first-child {
    background: #d56e9b;
}

.card {
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125);
}

h5.card-title a {
    color: #000;
    font-weight: 600;
    font-size: 24px;
    letter-spacing: 1px;
}
.blog_w3icon span {
    color: #777;
    font-size: 13px;
    word-spacing: 3px;
}

/* //blog */

.team-block {
    margin-bottom: 20px;
}

.team-content {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.43);
    bottom: 0px;
    display: inline-block;
    width: 100%;
    color: #fff;
    padding: 50% 10%;
    top: 0;
}

.team-img {
    position: relative;
}

.team-img img {
    width: 100%;
}

.team-meta {
    color: #9da4aa;
    font-weight: 400;
    font-size: 16px;
}

.overlay {
    border-radius: 0px;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: 1s ease;
    background-color: #11181f;
}

.team-img:hover .overlay {
    opacity: .8;
}

.team-img:hover .team-content {
    opacity: 0;
}

.text {
    color: #fff;
    position: absolute;
    top: 35%;
    left: 30%;
    transform: translate(-26%, -26%);
    -ms-transform: translate(-26%, -26%);
    right: 0;
    font-weight: 400;
    font-size: 16px;
}

/* /footer */
h3.title {
    color: #000;
    font-size: 42px;
}
.w3ls-titles i {
    color: #b84373;
    font-size: 26px;
    margin-top: 5px;
}
span.btmspn {
    position: relative;
}
span.btmspn:before {
    content: " ";
    background: #b84373;
    width: 64px;
    height: 2px;
    position: absolute;
    top: 9px;
    left: -75px;
}
span.btmspn:after {
    content: " ";
    background: #b84373;
    width: 64px;
    height: 2px;
    position: absolute;
    top: 9px;
    right: -75px;
}
span.hdng {
    color: #b84373;
}
.banner-bottom {
   background: url(./Home/Views/frontend/public/web/images//bg2.jpg) no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-attachment: fixed;
}

.button {
    margin-top: 3em;
}

h6.text-white {
    font-size: 20px;
    font-weight: 100;
    letter-spacing: 2px;
}
.banner-left-bottom-w3ls h3 {
    font-weight: 600;
    letter-spacing: 1px;
    font-size: 51px;
}
.banner-left-bottom-w3ls p {
    color: #dadada;
    font-size: 14px;
}
a.w3ls-button-agile {
    color: #fff;
    padding: 14px 24px;
    letter-spacing: 1px;
    font-size: 14px;
    background: transparent;
    display: inline-block;
    border: 1px solid rgba(255, 255, 255, 0.56);
    box-shadow: 2px 0px 5px 0px rgba(255, 255, 255, 0.22);
}
a.w3ls-button-agile:hover {
    letter-spacing: 3px;
    background: #b84373;
    color: #fff !important;
}
/*-- stats --*/
section.stat_w3l{
	    background: url(./Home/Views/frontend/public/web/images//bg1.jpg) no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-attachment: fixed;
}
.stats_info p {
    font-size: 2.5em;
    letter-spacing: 1px;
    line-height: 2;
    color: #ffffff;
    font-weight: 800;
}
.stats_info h4 {
    color: #fff;
    font-size: .95em;
    text-transform: uppercase;
    font-weight: 600;
    margin-bottom: 1em;
    letter-spacing: 1px;
    font-style: italic;
}
.stats_info i {
    font-size: 2.3em;
    color: #b84373;
    margin: 0;
}
.stats_bottom_grid_left img {
	margin: 0 auto;
}
.stats_info {
	text-align: center;
	border-top: none;
	border-bottom: none;
}

.stats_info:nth-child(3) {
	border-right: 0px;
}
.stats_info1 {
    background: rgba(220, 220, 220, 0.31);
    padding: 32px 20px;
}
.stats_info:nth-child(2) {
	border-left: 0px;
	border-right: 0px;
}
/*--//stats--*/
/*--footer--*/

.footer_w3layouts_section_1its{
	background: #151515;
}

.footer_w3layouts_section_1its h3,.footer_w3layouts_section_1its h2{
	font-size: 1.6em;
	color: #ffffff;
    font-weight: 600;
	margin-bottom: 20px;
	letter-spacing: 1px;
}

.footer-text p, .contact-info p {
    color: #808080;
    font-size: 15px;
    line-height: 1.8em;
    letter-spacing: 1px;
}

.phone {
    margin-top: 20px;
}

.contact-info h4 {
    font-style: normal;
    font-weight: 300;
    font-size: 1.3em;
    line-height: 1.71;
    letter-spacing: 1px;
    text-transform: capitalize;
    color: #fff;
}
.copyright {
    border-top: 1px solid #808080;
    margin-left: 15px;
}
.copyright p {
    font-size: 15px;
    letter-spacing: .5px;
    text-transform: capitalize;
}
.copyright p a{
	color:#ea1d5d;
	text-decoration: underline;
}
.copyright p a:hover {
	color:#fff;
}
.footer p {
	color: #808080;
}

.footer-grid:nth-child(2) {
	border-left: 1px solid #1b1b1b;
	border-right: 1px solid #1b1b1b;
}

.footer ul li.hd {
	color: #34bf49;
}

.newsletter .email {
	background-color: #F4F4F4;
	border: none;
}

.flickr-grid {
	float: left;
	width: 32%;
	margin: 0 0.1em .2em;
}

.flickr-grid a img {
	width: 100%;
	padding: 0.3em;
	border: 1px solid #333333;
}

.footer-text input[type="email"] {
    outline: none;
    padding: 12px 15px;
    color: #fff;
    font-size: 13px;
    width: 85%;
    border: none;
    background: none;
    letter-spacing: 1px;
}

.newsletter {
	position: relative;
	margin-top: 2em;
}

button.btn1 {
    color:#b84373;
    border: none;
    padding: 10px 0;
    outline: none;
    text-align: center;
    text-decoration: none;
    background: none;
   cursor:pointer;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
    float: right;
    width: 15%;
}
.footer-grid_section_1its_w3 form {
    border: 1px solid #fff;
    width: 100%;
    margin-top: 20px;
}
ul.social_section_1info li {
    display: inline-block;
}

ul.social_section_1info {
    margin-top: 15px;
}

ul.social_section_1info a {
    color: #808080;
    margin-right: 10px;
    font-size: 15px;
}
ul.social_section_1info a:hover{
    color: #fff;
}

.phone p a {
    color: #808080;
}
.phone p a:hover {
    color: #fff;
}

ul.links li {
    list-style-type: none;
    margin: 10px 0;
}
ul.links li a{
    color: #808080;
    font-size: 15px;
    letter-spacing: .5px;
}
ul.links li a:hover{
    color: #fff;
}
.cpy-right{
	background:#212121;
}
h6.text-left a,.cpy-right p a{
    color: #b84373;
}
/*--//footer--*/
.typo-wthree h4 {
	color: #af4eaa;
	font-size: 1.5em;
	text-transform: capitalize;
}

.bg-flex {
    background-color: rgba(184, 67, 115, 0.67);
    border: 1px solid rgb(207, 129, 161);
}
.bg-flex-item {
	background-color: #fff;
	border: 1px solid #d7d8d8;
}

.typo-wthree h5 {
	color: #333;
}

/* //typography */
/* contact */

#success-message {
	opacity: 0;
}

.col-xs-12.col-sm-12.col-md-12.col-lg-12 {
	padding: 0 20% 0 20%;
}

.form-title {
	padding: 25px;
	font-size: 30px;
	font-weight: 300;
	font-family: 'EB Garamond', serif;
}

.form-group .form-control {
	-webkit-box-shadow: none;
	border-bottom: 1px;
	border-style: none none solid none;
	border-color:#b84373;
}

.form-group .form-control:focus {
	box-shadow: none;
	border-width: 0 0 2px 0;
	border-color: #000;
}

textarea {
	resize: none;
}

.btn-mod.btn-large {
	height: auto;
	padding: 13px 52px;
	font-size: 15px;
}

.btn-mod.btn-border {
	color: #000000;
	border: 1px solid #000000;
	background: transparent;
}

.btn-mod,
a.btn-mod {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding: 4px 13px;
	color: #fff;
	background: rgba(34, 34, 34, .9);
	border: 1px solid transparent;
	font-size: 11px;
	font-weight: 400;
	text-transform: uppercase;
	text-decoration: none;
	letter-spacing: 2px;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	-webkit-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
	-moz-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
	-o-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
	-ms-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
	transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
}

.btn-mod.btn-border:hover,
.btn-mod.btn-border:active,
.btn-mod.btn-border:focus,
.btn-mod.btn-border:active:focus {
	color: #fff;
	border-color: #000;
	background: #000;
	outline: none;
}

@media only screen and (max-width: 500px) {
	.btn-mod.btn-large {
		padding: 6px 16px;
		font-size: 11px;
	}
	.form-title {
		font-size: 20px;
	}
}

form#contact-form label {
	color: #ea4335;
}

label {
	color: #000 !important;
	font-weight: 600;
	letter-spacing: 0.5px;
}

/* //contact */

/* contact */

.form-control {
	background-color: #e2e2e2;
	border: none;
}

.map iframe {
	width: 100%;
	border: 7px solid #e4e4e4;
	min-height: 500px;
}

/* //contact */
.serv_bottom {
    background: #b84373;
	color:#fff;
}
.serv_bottom:hover {
	 background: #b84373;
	color:#fff;
}
h5.card-title {
    font-size: 22px;
    letter-spacing: 2px;
    margin-bottom: 1em;
    color:#b84373;
    font-weight: 600;
}
p.card-text {
    color: #777;
    font-size: 15px;
    line-height: 1.8em;
    letter-spacing: 1px;
}
.card-body.w3ls-card a {
    font-size: 14px;
    padding: 8px 18px;
    background: #b84373;
    outline: none;
    border: none;
    display: inline-block;
	letter-spacing: 2px;
}
/*-- welcome --*/
.welcome-left h3 {
    color:#b84373;
    font-size: 36px;
    letter-spacing: 1px;
}
.welcome-left h4 {
    color: #464646;
    font-size: 17px;
    line-height: 1.8;
    margin: 15px 0;
	    font-weight: 700;
    letter-spacing: 1px;
}
.welcome-left p {
    font-size: 15px;
    color: #777;
    line-height: 1.8em;
}
/*-- about-team --*/

.thumbnail.team-agileits {
    border: none;
    text-align: center;
    border-radius: 0;
    margin: 0;
    padding: 0;
}

.team .effectd-caption {
    padding: 20px;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
}
.team h4 {
    color: #b84373;
    font-size: 22px;
    letter-spacing: 2px;
    font-weight: 600;
}
.social-lsicon a {
    color: #000;
    padding: 0 7px;
    font-size: 16px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

.social-lsicon a:hover {
    color: #b84373;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}

/*-- //about-team --*/
.fax_w3l{
	text-align:center;
}
.ema-w3l{
	text-align:left;
}
.phn_w3l{
	text-align:right;
}
/* -- Responsive code -- */

@media screen and (max-width: 1440px) {
.navbar-light {
    width: 79%;
    left: 9em;
}
}

@media screen and (max-width: 1366px) {
	h3.stat-title {
		font-size: 1.4em;
	}
	.navbar-light {
    width: 83%;
    left: 7em;
	}
}

@media screen and (max-width: 1280px) {

	.serv_abs {
		width: 75px;
		height: 75px;
	}
	.about-w3sec i {
		font-size: 2em;
		line-height: 2.3;
	}
	.types-pos {
		left: 28%;
		width: 44%;
	}
	.navbar-light {
    width: 88%;
    left: 4.55em;
}
.banner-text {
    padding: 18vw 42vw 0vw 0vw;
}
}

@media screen and (max-width: 1080px) {
	.agileits-banner-info4 h3 {
		font-size: 28em;
	}
	h5.agile-title {
		font-size: 1.4em;
		letter-spacing: 1px;
	}

	h3.stat-title {
		font-size: 1.1em;
	}
	.col-lg-6.abbot-right {
		padding-left: 12em;
		padding-top: 2em;
	}
	.types-pos {
		padding: 2em;
	}
	.navbar-light {
    width: 89%;
    left: 3.55em;
}
.callnumber li {
    letter-spacing: 1px;
}
.banner-left-bottom-w3ls h3 {
    font-size: 39px;
}
.callbacks_tabs {
    bottom: -73px;
}
}

@media screen and (max-width: 1050px) {
	h3.stat-title {
		letter-spacing: 2px;
	}
	.col-lg-6.abbot-right {
		padding-top: 0em;
	}
	.types-pos {
		top: 30%;
	}
}

@media screen and (max-width: 1024px) {
	.agileits-services-grids span {
		font-size: 1.5em;
	}
}

@media screen and (max-width: 991px) {
	.navbar-collapse {
		background: #02114c00;
	}
	.navbar-nav .dropdown-menu {
		text-align: center;
	}
	.newsright input[type="email"] {
		margin: 28px 0;
	}
	h4.agile-ser_bot {
		font-size: 2.2em;
		letter-spacing: 2px;
		word-spacing: 2px;
	}
	.card-body a.btn {
		left: 44%;
	}

	.col-lg-6.abbot-right {
		padding-left: 3em;
	}

	.abt-block {
		padding: 3em 1em 2em;
	}
	.types-pos {
		left: 27%;
		width: 46%;
	}
	.agileits-banner-info4 h3 {
		font-size: 22em;
	}
	.footer-right-info h4 {
		font-size: 2.5em;
	}
	.about-w3sec p {
		font-size: 1em;
	}
	.navbar-light {
    padding: 1em 1em;
	}
	.navbar-light .navbar-toggler {
    background: #fff;
}
h6.text-btm {
    font-size: 17px;
    letter-spacing: 1px;
}
.banner-left-bottom-w3ls h3 {
    font-size: 32px;
    line-height: 1.5em;
}
.banner-text {
    padding: 10vw 27vw 0vw 0vw;
}
section.blog_w3ls {
    margin-top: 3em;
}
.blog-3 {
    padding-top: 2em;
}
.stats_info.counter_grid1,.stats_info.counter_grid2 {
    margin-top: 2em;
}
}

@media screen and (max-width: 900px) {
	.serv_bottom h5 {
		letter-spacing: 8px;
		word-spacing: 18px;
	}
	.types-pos {
		left: 22%;
		width: 56%;
		top: 28%;
	}
}

@media screen and (max-width: 800px) {
	.callbacks_tabs {
		bottom: 0px;
	}
	.footer-right-info h4 {
		font-size: 2.1em;
	}
	.about-w3sec i {
		font-size: 1.8em;
	}
	.serv_abs {
		width: 70px;
		height: 70px;
	}
	.about-w3sec p {
		margin-top: 0.8em;
	}
	h4.abt-right-text1.font-italic.text-white {
		font-size: 1.8em;
	}
	.types-pos {
		left: 20%;
		width: 60%;
		top: 20%;
	}
	.navbar-light {
    width: 96%;
    left: 1em;
}
.slider-info h3 {
    font-size: 40px;
}
.banner-text {
    padding: 17vw 27vw 0vw 0vw;
}
.callbacks_tabs {
    bottom: -60px;
}
.banner {
    height: 57vw;
}
}

@media screen and (max-width: 768px) {
	.footer-right-info h6 {
		font-size: 1.8em;
	}
	h4.agile-ser_bot {
		font-size: 2em;
	}
	.about-w3sec p {
		font-size: 1em;
	}
	.about-w3sec h3 {
		font-size: 1.3em;
	}
	.w3ls-titles p {
    width: 100%;
}
}

@media screen and (max-width: 736px) {
	.banner-text {
    padding: 15vw 25vw 0vw 0vw;
}
	.newsright {
		width: 100%;
	}
	.serv_bottom h5 {
		word-spacing: 14px;
	}
	.serv_bottom h5 {
		word-spacing: 8px;
		letter-spacing: 5px;
	}
	.card-body a.btn {
		left: 42%;
	}
	.inner-banner {
    min-height: 240px;
}
.phn_w3l {
    text-align: center;
}
.ema-w3l {
    text-align: center;
}
.fax_w3l {
    margin: 10px 0;
}
.card-deck .card {
    flex: auto;
}
.card:nth-child(2) {
	margin-top:1.5em;
	margin-bottom:1.5em;
}
.button {
    margin-top: 1em;
}
.blog-3 {
    padding-top: 0em;
}
.stats_info:nth-child(2) {
    margin-top: 2em;
}
}

@media screen and (max-width: 667px) {
	i.fas.fa-quote-left {
		font-size: 4em;
	}
}

@media screen and (max-width: 640px) {
	h4.agile-ser_bot {
		font-size: 1.8em;
	}
	.agileits-banner-info4 h3 {
		font-size: 18em;
	}
	.card-body a.btn {
		left: 40%;
	}
	.types-pos {
		left: 15%;
		width: 70%;
		top: 16%;
	}
	.navbar-light {
    width: 98%;
    left: 0.5em;
}
.banner {
    height: 62vw;
}
}

@media screen and (max-width: 600px) {
	.slider-info p {
		font-size: 1em;
	}
	i.fas.fa-quote-left {
		font-size: 3em;
	}
	.agileits-services-row {
		top: 80px;
	}
	.types-pos {
		left: 12%;
		width: 76%;
	}
}

@media screen and (max-width: 568px) {
	.inner-banner{
		background-position: left;
	}
	.newsright input[type="email"] {
		margin: 10px 0;
	}
	a.serv_link {
		margin-top: 1em;
		font-size: 0.85em;
	}
	.agileits-services-row {
		top: 65px;
	}
	h4.agile-ser_bot {
		font-size: 1.5em;
	}
	.serv_bottom h5 {
		word-spacing: 7px;
		font-size: 1.2em;
	}
	.serv_bottom h5 {
		word-spacing: 6px;
		font-size: 1.1em;
	}
.footer-grid_section_1its_w3 {
    margin-bottom: 1.5em;
}
.slider-info h3 {
    font-size: 36px;
}
}

@media screen and (max-width: 480px) {
	.banner-text {
    padding: 23vw 25vw 0vw 0vw;
}
	.card-body a.btn {
		left: 36%;
	}
	.navbar-light {
		padding: 1em 1em;
	}
	.navbar-light {
    width: 100%;
    left: 0;
}
	.banner {
		height: 82vw;
	}
	.logo h2 a {
		font-size: 1.1em;
	}
	.newsright input[type="submit"] {
		width: 33%;
	}
	.serv_bottom h5 {
		font-size: 1em;
	}
	.agileits-banner-info4 h3 {
		font-size: 15em;
	}
	.types-pos {
		left: 8%;
		width: 84%;
	}
	h5.agile-title {
		font-size: 1.3em;
	}
	h3.title {
    font-size: 34px;
}
.callnumber li {
    font-size: 15px;
}
.banner-left-bottom-w3ls h3 {
    font-size: 26px;
}
.slider-info h3 {
    font-size: 36px;
}
}
@media screen and (max-width: 440px) {
.slider-info h3 {
    font-size: 33px;
}
}
@media screen and (max-width: 414px) {
	.newsright input[type="submit"] {
		width: 40%;
	}
	h4.agile-ser_bot {
		font-size: 1.7em;
	}
	.serv_bottom h5 {
		letter-spacing: 3px;
	}
	.agileits-services-grids {
		padding: 0em;
	}
	.agileits-services-grids h4 {
		font-size: 1.1em;
	}
	h4.abt-right-text1.font-italic.text-white {
		font-size: 1.6em;
	}
	.col-lg-6.abbot-right {
		padding-left: 1em;
	}
	.footer-right-info h4 {
		font-size: 1.9em;
	}
	.callnumber li {
    font-size: 14px;
}
.map iframe {
    min-height: 260px;
}
.slider-info h3 {
    font-size: 30px;
}
.callbacks_tabs {
    bottom: -47px;
}
}

@media screen and (max-width: 384px) {
	.newsright input[type="submit"] {
		width: 100%;
	}
	form.d-flex {
		display: block !important;
	}
	.footer-right-info h4 {
		font-size: 2.1em;
	}
	h4.agile-ser_bot {
		font-size: 1.5em;
	}
	.serv_bottom h5 {
		font-size: 0.85em;
	}
	.callnumber li {
    margin: 0!important;
}
.footer_w3layouts_section_1its h3, .footer_w3layouts_section_1its h2 {
    font-size: 1.3em;
}
.banner {
    height: 94vw;
}
}

@media screen and (max-width: 375px) {
	.types-pos {
		padding: 1em;
	}
	.agileits-banner-info4 h3 {
		font-size: 12em;
	}
}

@media screen and (max-width: 320px) {
.banner-text {
    padding: 23vw 10vw 0vw 0vw;
}
.slider-info h3 {
    font-size: 26px;
}
.banner {
    height: 103vw;
}
	.slider-info a {
		font-size: 15px;
	}
	.slider-info h4,
	h4.abt-right-text {
		font-size: 1.1em;
	}
	.footer-right-info h4 {
		font-size: 1.8em;
	}
	h4.agile-ser_bot {
		font-size: 1.2em;
	}
	.serv_bottom h5 {
		letter-spacing: 1px;
		word-spacing: 5px
	}
	h3.agile-title {
		font-size: 1em;
	}
	.card-body a.btn {
		left: 35%;
	}
	.agileits-services-grids span {
		font-size: 1.3em;
	}
	.col-lg-6.abbot-right {
		padding-left: 1em;
		padding-top: 1em;
	}
	h4.abt-right-text1.font-italic.text-white {
		font-size: 1.4em;
	}
	.types-pos {
		left: 5%;
		width: 90%;
	}
	h3.stat-title {
		letter-spacing: 1px;
		font-size: 1em;
	}
	.inner-banner {
    min-height: 210px;
}
a.navbar-brand {
    font-size: 0.6em;
}
h3.title {
    font-size: 30px;
}
}
#success-alert{
		font-size: 14px;
		z-index: 99;
		width: fit-content;
		right: 20px;
		position: absolute;
		animation: fadeInDown 0.5s linear;
		box-shadow: rgba(0, 0, 0, 0.56) 0px 10px 70px 2px;
	}

/* -- //Responsive code -- */
</style>