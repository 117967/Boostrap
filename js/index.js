const categories = {
	business: "business",
	entertainment: "entertainment",
	general: "general",
	health: "health",
	science: "science",
	sports: "sports",
	technology: "technology",
};

const getHeadLines = async (category, pages = null) =>
{
	let url = `https://newsapi.org/v2/top-headlines?country=nl&apiKey=7929b81634a84750ab08554a61c7a393`;
	if (category)
		url += `&category=${category}`;
	if (pages)
		url += `&pageSize=${pages}`
	let res = await fetch(url);
	return res.json();
}

const getAll = async () => 
{
	let url = `https://newsapi.org/v2/everything?country=nl&apiKey=7929b81634a84750ab08554a61c7a393`;
	let res = await fetch(url);
	return res.json();
}

const search = async (query = "", pages = 100) =>
{
	let url = `https://newsapi.org/v2/everything?q=${query}&pageSize=${pages}&apiKey=7929b81634a84750ab08554a61c7a393`;
	let res = await fetch(url);
	return res.json();
}