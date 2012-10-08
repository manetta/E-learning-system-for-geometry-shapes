<?php

require_once('include.php');

dispHeader();
dispBody();

$x=1;
?>
	<table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
		<tr>
			<td width="524" align="left" valign="top">
				<table width="96%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" valign="top" class="text">

							<form name="pointform" action="draw_rect.php" method="post">						
				

				<?php
	if($x!=2)
	{
?>								
								<table width="100%" border="0" cellpadding="0" cellspacing="0">
									
									<tr>
										<td width="90%" align="center">
										<div id="pointer_div" onclick="point_it(event)">
										<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="400" height="400" viewbox="0,0,400,400">
										<rect x="0" y="0" width="400" height="400"  fill="white" stroke="black"/>
										<img src="point.gif" id="cross" style="position:relative;visibility:hidden;z-index:2;">
										</div>
										</svg>
										</td>
									<br/>
										
										<td>&nbsp;</td>
										<td >&nbsp;</td>
										<td>&nbsp;</td>
										<td >&nbsp;</td>
										<td>&nbsp;</td>
										<td >&nbsp;</td>
										<td >&nbsp;</td>
										
										<td width="10%" align="center" valign="middle" class="text">
										sdsaddsd
										X: <br/>
										<input name="form_x" type="text"  class="input3" size="4" style="width:40px; height:15px;" />
										
										<br/><br/><br/><br/>
										Y:<br/>
										<input name="form_y" type="text"  class="input3" size="4" style="width:40px; height:15px;" />
									
									<br/><br/><br/><br/>
	
										sfdsfs
										mikos: <br/><input name="length" type="text" id="length" class="input3" size="4" style="width:40px; height:15px;" />
								
									<br/><br/><br/><br/>
									




									
					
		
	<script type="text/javascript">
	<!--

	var myImg = document.getElementById("pointer_div");
	myImg.onmousedown = GetCoordinates; 
	//-->
	</script>

<?php
}
?>
	


										<input type="submit" value="??µ??????a">
										
									</tr>
								</table>
							</form>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

<?php
dispCloseBody();
?>