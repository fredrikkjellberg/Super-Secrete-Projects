<link href="c_css.css" rel="stylesheet">


<div class="box">
		<div class="top">
		<div class="logo">FAST SPEED MATH</div>
		<div class="time_left"><div class="display_time_left">235</div></div>
		<div class="points"><div class="display"></div></div>
		<div class="equation"><div class="display_time_left">235</div></div>
		<div ></div>
	</div>
<input class="screen" type="text" readonly size="18" id="d">
<div class="keys">
    <p>
    <input type="button" class="button black" value="7" onclick='v("7")'>
    <input type="button" class="button black" value="8" onclick='v("8")'>
    <input type="button" class="button black" value="9" onclick='v("9")'>
	</p>
    <p>
    <input type="button" class="button black"value="4" onclick='v("4")'>
    <input type="button" class="button black" value="5" onclick='v("5")'>
    <input type="button" class="button black" value="6" onclick='v("6")'>
	</p>
    <p>
    <input type="button" class="button black" value="1" onclick='v("1")'>
    <input type="button" class="button black" value="2" onclick='v("2")'>
    <input type="button" class="button black" value="3" onclick='v("3")'>
	</p>
    <p>
    <input type="button" class="button black" value="0" onclick='v("0")'>
    <input type="button" class="button black" value="C" onclick='c("")'>
    <input type="button" class="button orange" value="=" onclick='e()'>
    </p>
    <p>
    	<span class="eval">GUESS</span>
		<span class="eval">NEXT</span>
		<span class="eval">HINT</span>
    </p>
</div>
</div>

<!-- PrefixFree -->
<script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript" type="text/javascript"></script>
<script src="calculator.js" type="text/javascript" type="text/javascript"></script>