
$('#level_0-button').click(function(){
  //console.log("YES .click works")
    $.ajax({
      url: 'ajax/level1.php',
      dataType: 'html',
      method: 'GET',
      data: '',
      success: function(retdata){
        $("#ajax").html(retdata);
      }
    })
  });
