$(document).ready(function(){



	$('.gotoform').on('click', function (event) {
		event.preventDefault();
		$form = $('.mainform');
		$price = $(this).attr('data-price')
		$course = $(this).attr('data-id')
		$form.find('[name=price]').val($price)
		$form.find('[name=namecourse]').val($course)
		$form.trigger('submit');
	});


	$('.payform').submit(function(event) {
        var th = $(this);
        $.ajax({
            type: "POST",
            url: 'send.php',
            data: th.serialize(),
            success: function(data) {
                window.location = data;
                // console.log(data)
            }
        });
        event.preventDefault();
    });




})