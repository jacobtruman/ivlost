<style>
	body {
		background: #383838;
		color: black;
	}

	.wrapper {
		height: 100%;
		display: table;
		width: 100%;
		text-align: center;
	}

	.header {
		display: table-row;
		height: 1px;
		background: #383838;
	}

	.navigation {
		display: table-row;
		height: 1px;
		background: #68161C;
	}

	.main {
		height: 100%;
		display: table;
		width: 100%;
	}

	.box {
		display: table-cell;
	}

	.sidebar {
		width: 20%;
		background: #383838;
	}

	.copy {
		display: table-row;
		height: 1px;
		background: #603910;
		color: #FFFAD5;
		text-align: center;
	}

	.footer {
		display: table-row;
		height:1px;
		background: #383838;
		color: #FFFAD5;
	}

	/*====== Ignore section below ======*/

	/* Basic Style*/
	* { margin:0; padding:0;}
	html, body { height: 100%; }
	button { padding: 5px 10px;position:fixed;bottom: 50px;right:0px;left:0px;margin:auto; width: 200px; display: block; -webkit-appearance: none;background: #BD4932; outline: none;  border: 2px solid #DB9E36; color: #FFD34E; border-radius: 10px; box-shadow: 0 2px 3px rgba(0,0,0,0.5);cursor: pointer;}
	button:active {border-color: #FFFAD5; color: #FFFAD5;}
</style>

<div class="wrapper">
	<div class="header">HEADER</div>
	<div class="navigation">Navigation</div>
	<div class="main">
		<div class="box sidebar">Left-sidebar</div>
		<div class="box content">Main Content</div>
		<div class="box sidebar">Right-sidebar</div>
	</div>
	<div class="copy">Copyright</div>
	<div class="footer">FOOTER</div>
</div>