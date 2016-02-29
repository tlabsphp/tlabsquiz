<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").hide(1000);
    });
});
</script>

	<script type="text/javascript" src="function_js.js"></script>
	<script>
		function showonlyone(thechosenone) {
     $('.newboxes').each(function(index) {
          if ($(this).attr("id") == thechosenone) {
               $(this).show(200);
          }
          else {
               $(this).hide(600);
          }
     });
}
	</script>
</head>

<a href="javascript:void()" onclick="javascript:sendRequest('login.php', 'targetdiv')">Link Text</a>
<div id="targetdiv">This is the target</div>

<table>
   <tr>
      <td>
         <div style="border: 1px solid blue; background-color: #99CCFF; padding: 5px; width: 150px;">
            <a id="myHeader1" href="javascript:showonlyone('newboxes1');" >show this one only</a>
         </div>
         <div class="newboxes" id="newboxes1" style="border: 1px solid black; background-color: #CCCCCC; display: block;padding: 5px; width: 150px;">Div #1</div>
      </td>
      <td>
         <div style="border: 1px solid blue; background-color: #99CCFF; padding: 5px; width: 150px;">
            <a id="myHeader2" href="javascript:showonlyone('newboxes2');" >show this one only</a>
         </div>
         <div class="newboxes" id="newboxes2" style="border: 1px solid black; background-color: #CCCCCC; display: none;padding: 5px; width: 150px;">Div #2</div>
      </td>
      <td>
         <div style="border: 1px solid blue; background-color: #99CCFF; padding: 5px; width: 150px;">
            <a id="myHeader3" href="javascript:showonlyone('newboxes3');" >show this one only</a>
         </div>
         <div class="newboxes" id="newboxes3" style="border: 1px solid black; background-color: #CCCCCC; display: none;padding: 5px; width: 150px;">Div #3</div>
      </td>
   </tr>
</table>

<body>

<button>Hide</button>

<p>This is a paragraph with little content.</p>
<p>This is another small paragraph.</p>

</body>
</html>