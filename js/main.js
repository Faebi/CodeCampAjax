
$('#level_0-button').click(function(){
  console.log("YES .click works")
    $.ajax({
      url: 'ajax/level1.html',
      dataType: 'html',
      method: 'GET',
      data: '',
      success: function(retdata){
        $("#ajax").html(retdata);
      }

    })
  });

/*

    get('level1.html', function(data, status){
      $('#ajax').append($( '#level_1' ).html( data ));
  alert( 'Load was performed.' );
    });


$('#level_0-button').click(function(){
  console.log('succes');
  $('#ajax').load( 'level1.html' );
});

$('#level_1 > button').click(function(){
  $.get('', function(data,status){
  });
});
*/
