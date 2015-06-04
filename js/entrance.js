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

	function MeishipSlideD() {
		dx+= ++dv;
		console.log(dx);
		if(dx >= dgoal){
			dx = dgoal;
			clearInterval(TopDescInterval);
		}
		$('#desc').css('left', (dx / 10) + 'rem');
	}
	var TopDescInterval = setInterval(MeishipSlideD,15);

		function motionDown(){
			var stageHeightD = setBase.height(),
			contTopDown = parseInt(setWrap.css('top')),
			moveTopDown = contTopDown - stageHeightD;
			$('input,textarea').blur();

			var contHeight = setWrap.height(),
			maxHeightAdj = -(contHeight - stageHeightD);

				setWrap.stop().animate({top:moveTopDown},scrollSpeed,scrollEasing);
				setNav.find('li.activeStage').removeClass('activeStage').next().addClass('activeStage');

				var acvStageN = parseInt($('body').attr('data-page')),
				setNext = acvStageN+1;
				$('body').attr('data-page',setNext);
			}

		

});