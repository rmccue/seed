SeedAPI = {
	vote: function (e) {
		votes = $(e).text();
		$.ajax(
			{
				"url": "vote.php",
				"type": "POST",
				"data": {
					"id": $(e).parent().attr("id"),
					"votes": votes
				},
				"dataType": "json",
				"error":   function (xhr, status, error) { SeedAPI.callbacks.voteError(e, xhr, status, error); },
				"success": function (data, status) { SeedAPI.callbacks.voteSuccess(e, data, status); },
			}
		);
	},

	callbacks: {
		voteError: function (e) {
			alert('Error');
		},
		voteSuccess: function (e, data, status) {
			$(e).text(++votes);
			parent = $(e).parent();
			prev = parent.prev();
			if(!prev.length)
				return false;
			
			while(prev.children(".votes").text() < votes) {
				parent = parent.remove().insertBefore(prev);
				prev = parent.prev();
				
				if(!prev.length)
					break;
			}
			return false;
		},
	}
};


$(document).ready(function () {
	$(".votes").css("cursor", "pointer").live("click", function () { SeedAPI.vote(this); });
});