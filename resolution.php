<form method="POST" name="t">
	<table align="center">
	<tr>
	<td><strong>Screen resolution:</strong></td>
	<td><input type="text" size="3" name="t1" value="not supported"> X <input type="text" size="3" name="t2" value="not supported"></td>
	<td><input type="text" size="3" name="t3" value="not supported">color</td>
	<td><input type="text" size="3" name="t4" value="not supported">pixel</td>
	</tr>
	</table>
</form>
<p align="left">
<script>
<!--

/*
Surfer's Screen Type Detection Script- © Dynamic Drive (www.dynamicdrive.com)
For full source code, installation instructions,
100's more DHTML scripts, and TOS, visit dynamicdrive.com
*/

function show(){
if (document.all||document.getElementById||document.layers){
document.t.t1.value=screen.width
document.t.t2.value=screen.height
document.t.t3.value=screen.colorDepth
document.t.t4.value=screen.pixelDepth
}
}
show()
//-->
</script>