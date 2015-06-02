$(function(){

	// var TopMeiship  = $('#topMeiship'),
	// mh = TopMeiship.height(),
	// mw = TopMeiship.width(),
	// mleft = -TopMeiship.width();

	// TopMeiship.css('left', (mleft / 10 ) + 'rem');

	// var x = mleft;
	// var v = 0;
	// var goal = ($(window).width() / 2) - (mw / 2);

	// function MeishipSlideT() {
	// 	x+= ++v;
	// 	console.log(x);
	// 	if(x >= goal){
	// 		x = goal;
	// 		clearInterval(topMeishipInterval);
	// 	}
	// 	$('#topMeiship').css('left', (x / 10) + 'rem');
	// }
	// var topMeishipInterval = setInterval(MeishipSlideT,10);



	setTimeout("$('#topMeiship').fadeIn(500)",500);


	var TopDesc  = $('#desc'),
	dh = TopDesc.height(),
	dw = TopDesc.width(),
	dleft = -TopDesc.width();

	TopDesc.css('left', (dleft / 10 ) + 'rem');

	var dx = dleft;
	var dv = 0;
	var dgoal = ($(window).width() / 2) - (dw / 2);


	setTimeout(wrap(),1000);

	function wrap(){
		console.log("wrap");
	function MeishipSlideD() {
		dx+= ++dv;
		if(dx >= dgoal){
			dx = dgoal;
			clearInterval(TopDescInterval);
		}
		$('#desc').css('left', (dx / 10) + 'rem');
	}

	var TopDescInterval = setInterval(MeishipSlideD,15);

}

	setTimeout(motionDownA(),500);

	function motionDownA(){
		console.log("わいわい");
	}



});