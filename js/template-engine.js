const templates = [];

class Template
{
	constructor(name, html)
	{
		this.name = name;
		this.html = html;
	}

	format = (data) =>
	{
		for (let prop in data)
			this.html = this.html.replace(`{${prop}}`, data[prop]);
		this.html = this.html.replace(/\\r|\\n/gm, "");
		return $.parseHTML(this.html).filter(node => !(node.nodeValue && (node.nodeValue.charCodeAt(0) === 10)));
	}

	render(selector, data, replace = true)
	{
		const $el = $(selector);
		const nodes = this.format(data);

		for (let i = nodes.length - 1; i >= 0; i--)
			$(nodes[i]).insertAfter($el);
		$el.remove();
	}
}

async function createTemplate(templateName)
{
	return new Promise((resolve) => 
	{
		let template = templates.find(t => t.name === templateName);
		if (!template)
		{
			$.get(`${location.origin}/templates/${templateName}.html`, function (res)
			{
				template = new Template(templateName, res);
				templates.push(template);
				resolve(template);
			});
		}
		else
		{
			resolve(template);
		}
	});
}