<template>
	<b-navbar toggleable="xl" variant="info" type="light" style="z-index: 1000;" class="navigator">
		<b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
		<router-link to="/">
			<b-navbar-brand class="logo">
			<img class="bimg" src="../assets/9-512.png"><br><h5>BlueRoof Society</h5>
			</b-navbar-brand>
		</router-link>
		<b-collapse is-nav id="nav_collapse">
			<b-navbar-nav cl class="main_nav">
				<b-nav-item href="#/complains">COMPLAINT BOX</b-nav-item>
				<div class="vl"></div>
					<b-nav-item href="/#/showEvents">NOTICE BOARD</b-nav-item>
			    <div class="vl"></div>
					<b-nav-item href="/#/report">MONTHLY AUDIT REPORT</b-nav-item>
		        <div class="vl"></div>
					<b-nav-item href="#/eventConsole">ANNOUNANCEMENT</b-nav-item>
				<div class="vl"></div>
				<b-nav-item href="#/showComplains">COMPLAINS LIST</b-nav-item>
				<div class="vl"></div>
			</b-navbar-nav>
		</b-collapse>
	</b-navbar>
</template>
<script>
   
export default {
		name: 'Navbar'
}
</script>


<style scoped>

.navbar-light .navbar-nav .nav-link {
	color: #000;
}

.navbar-light .navbar-nav .vl {
	border-left-color: #42acbf;
	margin-top: 12px;
	height: 16px;
}

.navbar-light .navbar-nav .btn.loginbtn.btn-secondary:focus {
	box-shadow: inherit !important;
	-moz-box-shadow: inherit !important;
	-webkit-box-shadow: inherit !important;

}

.navigator{
background-color: white !important;
margin-top: -10px;
}

.main_nav{
font-size: 15px;
}
.bimg{
	width: 30%;
	height: 30%;
}

.logo1{
margin-left: 30px;
font-size: 12px;
color: black;
padding-top: 25px;
}



.vl2{
border-left: 2px solid white;
/* height: 100px; */
margin-left: 15px;
}


@media only screen and (min-width: 768px) {
.main_nav {
margin-left: 55px;
padding-top: 69px;
}

.vl{
margin-top: 13px;
border-left: 2px solid skyblue;
height: 12px;
margin-right: 9px;
margin-left: 9px;
}
}

@media only screen and (max-width: 1350px) {
.navbar-light .navbar-nav .nav-link {
	font-size: 12px;
}

.navbar-nav.main_nav {
margin-left: 35px;
padding-top: 20px;
}

}

@media only screen and (max-width: 1199px) {

.navbar-collapse {
	margin-top: -20px;
}

.navbar-nav.main_nav {
  margin-left: 0px;
  padding-top: 0;
}

.navbar-light .navbar-nav .vl {
	display: none;
}

.navbar-nav .dropdown-menu {
	border: none;
	padding-top: 0;
	margin-top: 0;
}
.social-links .nav-item.log_sign {
	margin-top: 0;
}

}

</style>
