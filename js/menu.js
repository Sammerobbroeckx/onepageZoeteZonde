//init
$("#divBrood").addClass("hide");
$("#divHap").addClass("hide");
$("#divMakelij").addClass("hide");
$("#divSoep").addClass("hide");
$("#divSalade").addClass("hide");
$("#divDessert").addClass("hide");

//function to remove class active
function clearActive()
{
	$("#btnOntbijt").removeClass("menuActive");
	$("#btnBrood").removeClass("menuActive");
	$("#btnHap").removeClass("menuActive");
	$("#btnMakelij").removeClass("menuActive");
	$("#btnSoep").removeClass("menuActive");
	$("#btnSalade").removeClass("menuActive");
	$("#btnDessert").removeClass("menuActive");
}

//function to hide all divs
function hideAll()
{
	$("#divOntbijt").addClass("hide");
	$("#divBrood").addClass("hide");
	$("#divHap").addClass("hide");
	$("#divMakelij").addClass("hide");
	$("#divSoep").addClass("hide");
	$("#divSalade").addClass("hide");
	$("#divDessert").addClass("hide");
}

$("#btnOntbijt").click(function() 
{
  clearActive();
  hideAll();
  $("#btnOntbijt").addClass("menuActive");
  $("#divOntbijt").removeClass("hide");
});

$("#btnBrood").click(function() 
{
  clearActive();
  hideAll();
  $("#btnBrood").addClass("menuActive");
  $("#divBrood").removeClass("hide");
});

$("#btnHap").click(function() 
{
  clearActive();
  hideAll();
  $("#btnHap").addClass("menuActive");
  $("#divHap").removeClass("hide");
});

$("#btnMakelij").click(function() 
{
  clearActive();
  hideAll();
  $("#btnMakelij").addClass("menuActive");
  $("#divMakelij").removeClass("hide");
});

$("#btnSoep").click(function() 
{
  clearActive();
  hideAll();
  $("#btnSoep").addClass("menuActive");
  $("#divSoep").removeClass("hide");
});

$("#btnSalade").click(function() 
{
  clearActive();
  hideAll();
  $("#btnSalade").addClass("menuActive");
  $("#divSalade").removeClass("hide");
});

$("#btnDessert").click(function() 
{
  clearActive();
  hideAll();
  $("#btnDessert").addClass("menuActive");
  $("#divDessert").removeClass("hide");
});