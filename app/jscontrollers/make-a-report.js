$('#oprComments').click(function() {
  $('#oprEditor').toggle(this.checked);
});

$('#lcsComments').click(function() {
  $('#lcsEditor').toggle(this.checked);
});

$('#topPerfFbComments').click(function() {
  $('#topPerfFbEditor').toggle(this.checked);
});

$('#lowPerfFbComments').click(function() {
  $('#lowPerfFbEditor').toggle(this.checked);
});

$('#IgEngComments').click(function() {
  $('#IgEngEditor').toggle(this.checked);
});

$.ajax({
  type: 'GET',
  url: '/app/php/apiv1/get-brands.php',
  success: function(data) {
    $.each(JSON.parse(data), function(i, brand) {
      $('#brandSelect').append('<option value="'+brand.id+'">'+brand.name+'</option>');
    });
  }
});

$('#genStatsSave').click(function() {
  var facebookLikes = $('#thisMnthFb').val();
  var instagramFollowers = $('#thisMnthIg').val();
  var data = {
    "brandId": 1,
    "facebookLikes": facebookLikes,
    "instagramFollowers": instagramFollowers
  };


  $.ajax({
    type: 'POST',
    url: '/app/php/apiv1/save-newnetfollowers.php',
    data: data,
    success: function(stuff) {
      alert('Saved');
    },
    error: function() {
      alert('Error Saving!');
    }
  });
});
