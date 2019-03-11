
	var vv = "";
	var gg = 5;
	var aa = "";
	var ark;
	for (var i = 0; i < gg; i++) {
		if (i != 2) {
			aa = "00:09:00";
			ark = 100;
		} else {
			aa = "01:10:00";
			ark = 200;
		}
		//เก็บค่าไว้ใน vv
		vv = '<div class="chat-data">' +
			'<img class="user-img img-circle" src="dist/img/user.png" alt="user">' +
			'<div class="user-data">' +
			'<span class="name block capitalize-font">Clay Masse</span>' +
			'<span class="time block truncate txt-grey">No one saves us but ourselves.</span>' +
			'</div>' +
			'<div class="status away"></div>' +
			'<div class="clearfix"></div>' +
			'</div>' ;
				$('#chat').append(vv);
	}
