SeedAPI = {
	vote: function (e) {
		e = this;
		votes = $(e).text();
		$.ajax(
			{
				"cache": false,
				"complete": function () { callbacks.voteSuccess(e); }
				"vote.php",
				"data": {
					"id": $(e).parent().attr("id"),
					"votes": votes
				},
				"dataType": "json",
			}
		);
	},

	callbacks = {
		voteSuccess: function (e) {
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