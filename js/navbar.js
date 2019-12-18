$(".search-form").on("submit", (e) => 
{
	e.preventDefault();
	window.location.href = `/search.html?q=${encodeURI(e.target[0].value)}&sortBy=publishedAt&pageSize=50&`;
})

$(".btn-search").click(e => 
{
	window.location.href = `/search.html?q=${encodeURI($(".search-input").val())}&sortBy=publishedAt&pageSize=50&`;
});

$(".btn-advanced-search").click(e => 
{
	window.location.href = `/search.html?q=${encodeURI($(".search-input").val())}&sortBy=publishedAt&pageSize=50&#advanced`;
});