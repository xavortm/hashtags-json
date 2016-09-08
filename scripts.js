$(document).ready(function(){
	var hashtagsList = [];

	$(".button-group span").click(function(){
		var content = "#" + $(this).text();
		var currentText = $('.shortcodes-output').val();

		$(this).toggleClass('disabled');

		var index = hashtagsList.indexOf(content);

		if (index >= 0) {
			hashtagsList.splice( index, 1 );
		} else {
			hashtagsList.push(content);
		}

		console.log(hashtagsList);

		$('.shortcodes-output').val(hashtagsList.join(' '));

		$('.amount').text(hashtagsList.length);
	});

	$('.copy').click(function() {
		copyToClipboard( $('.shortcodes-output') );
	});

	function copyToClipboard(element) {
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val($(element).val()).select();
		document.execCommand("copy");
		$temp.remove();
	}
});



