<style>
#svg{
/* position: fixed; */
  /* top: 15%; */
  /* width: 400px; */
  /* height: 210px; */
  /* margin-left:-50px; */
}

</style>
<section style="background:blue;">
<div>
<svg height="100vh" width="100vw" id="svg">
  <line x1="1200" y1="0" x2="0" y2="900" style="stroke:rgb(255,0,0);stroke-width:2"  id="line1"/>
  <line x1="1100" y1="0" x2="0" y2="1800" style="stroke:rgb(255,255,0);stroke-width:2" id="line2"/>
</svg>
</div>
</section>

<script>

// var triangle = document.getElementById("svg");
var line1 = document.getElementById( 'line1' );
var line2 = document.getElementById( 'line2' );

var length_one = line1.getTotalLength();
var length_two = line2.getTotalLength();

alert("length one is" + length_one);
alert("length 2 is" +length_two);


// line1.style.strokeDasharray = length_1;

// line1.style.strokeDashoffset = length_1;


// window.addEventListener("scroll", myFunction);

// function myFunction() {
// var scrollpercent = (document.body.scrollTop + document.documentElement.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

//   var draw = length_1 * scrollpercent;
//   triangle.style.strokeDashoffset = length_1 - draw;
// }
</script>
