<style>
    body, html {
    height:100%;
    width:100%;
}
.sb-prev:focus, .sb-next:focus, .sb-cancel:focus {
    outline: none;
    outline-offset: 0;
    text-decoration: none;
}
/* wrapper */
.smoothbox {
    position: fixed;
    top:0;
    left:0;
    background:rgba(0, 0, 0, 0.78); 
    height:100%;
    width:100%;
    z-index: 9999;
}
/* wrapper after loading */
.sb-load {
    background:url('images/load.gif') center no-repeat rgba(0,0,0,.9);
}
/* vertical centering */
.smoothbox-table {
    top:0;
    height:100%;
    width:100%;
    display:table;
}
.smoothbox-centering {
    display:table-cell;
    vertical-align:middle;
    top:0;
    height:100%;
    width:100%;
	overflow-y: scroll;
}
/* horizontal centering & sizing */
.smoothbox-sizing {
    display:none;
    position: relative;
    margin: 0 auto;
    padding: 0px;
    width: 80%;
}
/* item wrapper */
.sb-items {
    margin: 0 auto;
    width: auto;
    padding: 0;
    list-style: none;    
    border-radius: 2px;
    display: table;
}
.sb-items:after {
    content: "";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
}
/* items */
.sb-item {
    left: 0;
    top:0;
    width: 100%;
    max-height: 80%;
    float: left;
    margin-right: -100%;
    position: relative;
    zoom: 1;
    border-radius: 2px;
    box-shadow:0px 0px 0px 5px rgb(255, 255, 255), 0px 0px 0px 6px #292929;
    -webkit-backface-visibility: hidden;
    -webkit-transition: all .4s ease-out;
    -moz-transition:all .4s ease-out;
    transition: all .4s ease-out;
}

.no-trans {
    -webkit-transition:none;
    -moz-transition:none;
    transition:none;
}

.sb-item img {
    max-width: 100%;
    max-height: 100%;
    display: block;
    border-radius: 2px;
    position: relative;
}
/* forward animation */
.sb-item-ani {
    top: 400px;
    opacity:0;
    -webkit-transform:scale(.5)rotate(25deg);
    -moz-transform:scale(.5)rotate(25deg);
    transform:scale(.5)rotate(25deg);
	-o-transform:scale(.5)rotate(25deg);
	-ms-transform:scale(.5)rotate(25deg);
}
/* back animation */
.sb-item-ani2 {
    top:400px;
    -webkit-transform:scale(.5) rotate(25deg);
    -moz-transform:scale(.5) rotate(25deg);
    transform:scale(.5) rotate(25deg);
	-o-transform:scale(.5) rotate(25deg);
	-ms-transform:scale(.5) rotate(25deg);
    opacity:0;
}
.sb-caption {
    position: absolute;
    bottom: 0px;
    width: 100%; 
    background: rgba(0, 0, 0, 0.68);
    color: #CCC;
    text-transform: capitalize;
    padding: 2em;
    line-height: 1.8em;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    z-index: 1;
    text-align: center;
    font-size: 14px;
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
}
/* buttons */
.sb-nav {
    position:absolute;
    top: 10px;
    width: 100%;
    margin: 0 auto;
    display: none;
    z-index: 10;
    text-align: center;
    opacity: .5;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
    filter: alpha(opacity=50);
    font-size: 0;
    -webkit-transition:all .15s ease-out;
    -moz-transition:all .15s ease-out;
    transition:all .15s ease-out;
	-o-transition:all .15s ease-out;
	-ms-transition:all .15s ease-out;
    zoom:1;
}
.sb-nav:hover {
    opacity:1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
}

.sb-prev, .sb-next, .sb-cancel {
    display: inline-block;
    background:rgb(0,0,0);
    background: rgba(0, 0, 0, 0.9);
    position: relative;
    zoom:1;
    outline:none;
    margin-right:1px;
    color: #fff!important;
    width: 50px;
    height: 35px;
    text-align: center;
    text-decoration: none;
    font-size: 21px;
    font-weight: bold;
    line-height: 33px;
    -webkit-transition:all .15s ease-out;
    -moz-transition:all .15s ease-out;
    transition:all .15s ease-out;
	-o-transition:all .15s ease-out;
	-ms-transition:all .15s ease-out;
}
.sb-prev {border-radius: 15px 0 0 15px;}
.sb-next {border-radius: 0 15px 15px 0;}
.sb-nav a:hover {
    background: #fff;
    color: #000!important;
	text-decoration: none;
}
.sb-cancel:hover {
    background:#820001;
}
@media (max-width:480px){
	.sb-caption {
		bottom: -125px;
		padding: 1em;
	}
}
@media (max-width:414px){
	.sb-caption {
		bottom: -159px;
	}
}
@media (max-width:320px){
	.sb-caption {
		font-size: 12px;
	}
}
</style>