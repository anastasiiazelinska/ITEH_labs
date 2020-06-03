function getRes1(e){
	var currentForm = $(e).parents('form');

	$.ajax({
	  type: "GET",
	  url: "league.php",
	  data: currentForm.serialize(),
	  success: function(result){
	  	var output = "";
	  	for (var i = 0; i < result.length; i++) {
	  		output +='<tr>'+
	  		'<td>'+result[i]['league']+'</td>'+
	  		'<td>'+result[i]['date']+'</td>'+
	  		'<td>'+result[i]['place']+'</td>'+
	  		'<td>'+result[i]['score']+'</td>'+
	  		'<td>'+result[i]['teams']+'</td>'+
	  		'<td>'+result[i]['winner']+'</td>'+
	  		'</tr>';
	  	}
	  	$('#res1').html(output);

	  	localStorage.setItem('form1Result', JSON.stringify(result));
	  	localStorage.setItem('form1Data', currentForm.serialize());
	  }
	});
}

function getRes2(e){
	var currentForm = $(e).parents('form');

	$.ajax({
	  type: "GET",
	  url: "players.php",
	  data: currentForm.serialize(),
	  dataType: "json",
	  success: function(result){
	  	var output = "";
	  	for (var i = 0; i < result.length; i++) {
	  		output += '<li>' + result[i] + '</li>';
	  	}
  		$('#res2').html(output);

  		localStorage.setItem('form2Result', JSON.stringify(result));
	  	localStorage.setItem('form2Data', currentForm.serialize());
	  }
	});
}

function getRes3(e){
	var currentForm = $(e).parents('form');

	$.ajax({
	  type: "GET",
	  url: "games.php",
	  data: currentForm.serialize(),
	  dataType: "json",
	  success: function(result){
	  	var output = "";
	  	for (var i = 0; i < result.length; i++) {
	  		output +='<tr>'+
	  		'<td>'+result[i]['league']+'</td>'+
	  		'<td>'+result[i]['date']+'</td>'+
	  		'<td>'+result[i]['place']+'</td>'+
	  		'<td>'+result[i]['score']+'</td>'+
	  		'<td>'+result[i]['teams']+'</td>'+
	  		'<td>'+result[i]['winner']+'</td>'+
	  		'</tr>';
	  	}
	  	$('#res3').html(output);

	  	localStorage.setItem('form3Result', JSON.stringify(result));
	  	localStorage.setItem('form3Data', currentForm.serialize());
	  }
	});
}





// LOCAL STORAGE



function getLocal1(e) {
	$('#res1').html('');
	var currentForm = $(e).parents('form');
	var result = JSON.parse(localStorage.getItem('form1Result'));
	var data = localStorage.getItem('form1Data');
	if (currentForm.serialize() === data) {
	  	var output = "";
	  	for (var i = 0; i < result.length; i++) {
	  		output +='<tr>'+
	  		'<td>'+result[i]['league']+'</td>'+
	  		'<td>'+result[i]['date']+'</td>'+
	  		'<td>'+result[i]['place']+'</td>'+
	  		'<td>'+result[i]['score']+'</td>'+
	  		'<td>'+result[i]['teams']+'</td>'+
	  		'<td>'+result[i]['winner']+'</td>'+
	  		'</tr>';
	  	}
	  	$('#res1').html(output);
	} else {
		alert("Данные с такими параметрами отсутствуют!");
	}
}

function getLocal2(e) {
	$('#res2').html('');
	var currentForm = $(e).parents('form');
	var result = JSON.parse(localStorage.getItem('form2Result'));
	var data = localStorage.getItem('form2Data');
	if (currentForm.serialize() === data) {
	  	var output = "";
	  	for (var i = 0; i < result.length; i++) {
	  		output += '<li>' + result[i] + '</li>';
	  	}
  		$('#res2').html(output);
	} else {
		alert("Данные с такими параметрами отсутствуют!");
	}
}

function getLocal3(e) {
	$('#res3').html('');
	var currentForm = $(e).parents('form');
	var result = JSON.parse(localStorage.getItem('form3Result'));
	var data = localStorage.getItem('form3Data');
	if (currentForm.serialize() === data) {
	  	var output = "";
	  	for (var i = 0; i < result.length; i++) {
	  		output +='<tr>'+
	  		'<td>'+result[i]['league']+'</td>'+
	  		'<td>'+result[i]['date']+'</td>'+
	  		'<td>'+result[i]['place']+'</td>'+
	  		'<td>'+result[i]['score']+'</td>'+
	  		'<td>'+result[i]['teams']+'</td>'+
	  		'<td>'+result[i]['winner']+'</td>'+
	  		'</tr>';
	  	}
	  	$('#res3').html(output);
	} else {
		alert("Данные с такими параметрами отсутствуют!");
	}
}