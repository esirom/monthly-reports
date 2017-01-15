$(window).load(function() {
  var brandId = $('#brandSelect').val();
  var selectedMonth = $('#monthSelector').val();
  $.ajax({
    type: 'GET',
    url: '/app/php/apiv1/check-for-report.php?brandId='+brandId+'&month='+selectedMonth+'&year='+year+'',
    success: function(data) {
      $('#thisMnthFb').val(data.stats.no_of_likes);
      $('#thisMnthIg').val(data.stats.no_of_followers);
      $('#lastMnthFb').val(data.last_month_stats.no_of_likes);
      $('#lastMnthIg').val(data.last_month_stats.no_of_followers);
      $('#lastbMnthFb').val(data.lastb_month_stats.no_of_likes);
      $('#lastbMnthIg').val(data.lastb_month_stats.no_of_followers);
    }
  });
});

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
  var brandId = $('#brandSelect').val();
  var facebookLikes = $('#thisMnthFb').val();
  var instagramFollowers = $('#thisMnthIg').val();
  var selectedMonth = $('#monthSelector').val();

  var data = {
    "brandId": brandId,
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
