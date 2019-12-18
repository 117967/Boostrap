const card = $(".card");

if (location.hash == "#advanced")
	$("#advanced-search-collapse").collapse("show");

const createCard = (article) =>
{
	return $.parseHTML(`
		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="card">
				<img class="card-img-top" src="${article.urlToImage}" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">${article.title}</h5>
					<p class="card-text">${article.author}</p>
					<a href="${article.url}" class="btn btn-primary">Go to the site</a>
				</div>
			</div>
		<div>
	`);
}

const query = location.search.substr(1, location.search.length);
console.log(query);
const searchUrl = `https://newsapi.org/v2/everything?${query}apiKey=7929b81634a84750ab08554a61c7a393`

fetch(searchUrl).then(r => r.json()).then(r => 
{
	const sc = $(".search-cards");
	if (r.status === "error" || r.totalResults === 0)
	{
		sc.append($.parseHTML(`<h2>Oops nothing found...</h2>`))
	}
	else
	{
		r.articles.forEach(a =>
		{
			sc.append(createCard(a))
		});
		$(".card .card-title").click(e => 
		{
			location.href = "/article.html?title=" + encodeURI(e.target.innerHTML);
		});
	}
	$("#found-count").text(`Found ${r.articles && r.articles.length || 0} articles`);

});

$("#search-form").on("submit", e => 
{
	const vals = {
		q: $("#search-query").val(),
		from: $(".date-from").val(),
		to: $(".date-to").val(),
		language: $("#country-select").val(),
		sortBy: $("#sort-by-select").val(),
		pageSize: $("#articles-count-input").val()
	}
	e.preventDefault();
	let url = "/search.html?";
	for (let val in vals)
	{
		// console.log(vals[val]);
		if (!!vals[val])
			url += `${val}=${vals[val]}&`;
	}
	location.href = url + location.hash;
});