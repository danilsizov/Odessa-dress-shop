$(document).ready(function(){
	var slider = document.getElementById('slider');

	noUiSlider.create(slider, {
		start: [20, 80],
		connect: true,
		range: {
			'min': 0,
			'max': 100
		}
	});
});

function chooseThisSize(resevedDress)
{
	var otherDress=0;
	var myDress=0;
	for(var i = 1;i<=6; i++)
	{
		if(i!=resevedDress)
		{
			otherDress=document.getElementById('dress'+i+'');
			otherDress.style.display='none';
		}
		else
		{
			myDress=document.getElementById('dress'+i+ '')
			myDress.style.display='block';
		}

	}
}