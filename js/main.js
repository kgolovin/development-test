
$(document).ready(function(){
  save_form();
  closepopup();
});

function save_form() {
    $(".submit").on('click', function(){
    	var valid = true;
          $('form input').each(function() {
            var $this = $(this);
             if(!$this.val()) {
                var inputName = $this.attr('name');
                valid = false;
            }
        });
      if(!valid) {
            $(".error").text('Please fill in all the fields');
        }else {
            var url = "saveform.php";
            $.ajax({
                url: url, // url where to submit the request
                type : "POST", // type of action POST || GET
                data        : $('#form').serialize(), // our data object
                  success: function(msg) {
                    $(".error").hide();
                    $(".popup").show();
                    $(".overlay").show();
                },
                error: function(msg) {
                   console.log(msg);
                    return false;
                }
            })
		}
     });
}
function closepopup() {
    $(".close").on('click', function(){
        $(".popup").hide();
        $(".overlay").hide();
        return false
    });
    $(".overlay").on('click', function(){
        $(".popup").hide();
        $(".overlay").hide();
        return false
    });
}