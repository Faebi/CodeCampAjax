$('#level_0-button').click(function() {
  console.log('YES.. Lets go');
  $.ajax({
    url: 'assets/ajax/level1.php',
    dataType: 'html',
    method: 'GET',
    data: '',
    success: function(retdata) {
      $('#ajax').html(retdata);
    }
  });
});
