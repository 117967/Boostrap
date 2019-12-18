const carouselItems = $("#welcome-carousel .carousel-item");

getHeadLines(null, 5).then((res) => 
{
	carouselItems.each((i, item) =>
	{
		const a = res.articles[i];
		if (a.title)
			$(item).find(".title").text(a.title);
		if (a.description)
			$(item).find(".description").text(a.description);
		if (a.author)
			$(item).find(".author").text(`${a.author}`);
	})
});