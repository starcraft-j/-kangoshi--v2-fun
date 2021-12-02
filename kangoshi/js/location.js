let cam = localStorage.getItem('cam');
let gr_no = localStorage.getItem('gr_no');
let ad_no = localStorage.getItem('ad_no');
let key = localStorage.getItem('key');


// URLを取得
let url = new URL(window.location.href);

if( !url.searchParams.get('cam') ) {

	url.searchParams.append('cam',cam);
	url.searchParams.append('gr_no',gr_no);
	url.searchParams.append('ad_no',ad_no);
	url.searchParams.append('key',key);

	location.href = url;

} else {
	console.log(url.searchParams.get('cam')); // view
}

