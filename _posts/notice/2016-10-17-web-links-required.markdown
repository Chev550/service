---
layout: page
title:  "Web Links Required"
category: notice
---

<form class="contact" action="https://formspree.io/lucas.li@sdchina.org.cn" method="POST">
	Dear teams, if available, please kindly provide the organizing committee a link to your official communication media (website/facebook/twitter/weibo...). Thank you!
	<input type="text" name="Website" value="Link url..." onfocus="onFocus(this)" onblur="onBlur(this)">
	<input type="hidden" name="_next" value="{{ site.baseurl }}/pages/sent/" />
	<select name="Team">
		<option>Select team</option>
		{% for team in site.teams %}
		<option>{{ team.name }}</option>
		{% endfor %}
	</select>
	<button type="submit" class="btn btn-xs btn-primary">Submit</button>
</form>