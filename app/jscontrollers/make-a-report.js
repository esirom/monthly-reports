$(window).load(function() {
  $.ajax({
    type: 'GET',
    url: '/app/php/apiv1/check-for-report.php?brandId='+brandId+'&month='+month+'&year='+year+'',
    success: function(data) {
      var object = data;
      $('#thisMnthFb').val(data.no_of_likes);
      // TODO: enter data into input fields automatically
    }
  });
});

var brandId = $('#brandSelect');
var facebookLikes = $('#thisMnthFb').val();
var instagramFollowers = $('#thisMnthIg').val();
var selectedMonth = $('#monthSelector').val();

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
  var selectedYear = year;
  var data = {
    "brandId": 1,
    "month": selectedMonth,
    "year": selectedYear,
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


$('#monthSelector option:eq('+month+')').prop('selected', true);
