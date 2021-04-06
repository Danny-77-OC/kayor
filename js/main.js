$("#btnStop").click(function() {
    $('.carousel').carousel('pause');
})

$("#btnPlay").click(function() {
    $('.carousel').carousel({interval: 1000 });
})

$("#gombo").click(function() {
  $("tr").css("display","none");
  $('#theGombo').css("display","block");
})


$("#piment").click(function() {
  $("tr").css("display","none");
  $('#lePiment').css("display","block");
})

$("#ananas").click(function() {
  $("tr").css("display","none");

  $('#pine').css("display","block");
})

$("#aubergine").click(function() {
  $("tr").css("display","none");

  $('#auber').css("display","block");
})


$("#mangue").click(function() {
  $("tr").css("display","none");

  $('#mangoe').css("display","block");
})


var mymap = L.map('myMap').setView([48.8566969, 2.3514616], 10);

var OpenStreetMap_Mapnik = L.tileLayer(
    "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
    {
      maxZoom: 19,
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }
  ).addTo(mymap);

  

  var myItems = [
    ["siège social de Kaylor Import", 48.8699334, 2.3828561],
    ["marché international de Rungis", 48.757122, 2.3578926],
    ["marché de la Courneuve", 48.9220613, 2.4126105],
  ];
  
  for (var i = 0; i < myItems.length; i++) {
    var item = myItems[i];
    marker = new L.marker([item[1], item[2], item[3]])
      .bindPopup(item[0])
      .addTo(mymap);
  }
  

  $("#myMap").css("border","5px solid orange");
  $("#myMap").css("background-color","blue");
  $("#myMap").css("filter","opacity(0.7");
  