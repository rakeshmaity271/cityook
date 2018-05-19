$(document).ready(function() {


    console.log( "ready!" );
    $('#form').validator().on('submit', function (e) {
        if (e.isDefaultPrevented()) {
          // handle the invalid form...
          console.log('handle the invalid form...');
        } else {
          // everything looks good!
          console.log('everything looks good!');
        }
      })
});
