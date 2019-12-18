const title = location.search.substr(7, location.search.length);
let url = `https://newsapi.org/v2/everything?qInTitle=${title}&apiKey=7929b81634a84750ab08554a61c7a393`;
fetch(url).then(r => r.json()).then(r => 
{
	const article = r.articles[0];
	if(article)
	{
		$(".img-fluid").attr("src", article.urlToImage);
		$(".article-title").text(article.title);
		$(".description").text(article.description);
		$(".content").text(article.content);
		$(".btn-to-site").attr("href", article.url)
	}
});