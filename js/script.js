$(function(){

	$('.banner').cycle({
		timeout: 10000,
		fx: 'fade',
		pager: $('.paginacao'),
		pagerAnchorBuilder: function(index, DOMelement) {
			return '<a></a>';
			},
		activePagerClass: 'bannerativado'
		});

});